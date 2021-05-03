<?php

namespace Bildvitta\IssUpload;

use Illuminate\Support\Facades\Storage;

/**
 * Class IssUpload.
 *
 * @package Bildvitta\IssUpload
 */
class IssUpload implements IssUploadContract
{
    use IssUploadTrait;

    /**
     * IssUpload constructor.
     *
     * @param  null|string  $entity
     * @param  null|string  $filename
     * @param  string|null  $mineType
     */
    public function __construct(?string $entity = null, ?string $filename = null, ?string $mineType = null)
    {
        $this->entity = $entity;
        $this->filename = $filename;
        $this->mineType = $mineType;
    }

    /**
     * @return array
     */
    public function getUploadSource(): array
    {
        $adapter = Storage::disk('s3')->getDriver()->getAdapter();
        $client = $adapter->getClient();
        $bucket = $adapter->getBucket();

        $key = sprintf('uploads/%s/%s', $this->entity, $this->filename);

        $cmd = $client->getCommand('PutObject', [
            'Bucket' => $bucket,
            'Key' => $key,
            'ContentType' => $this->mineType,
        ]);

        $response = (string)$client->createPresignedRequest($cmd, '+10 minutes')->getUri();

        $full_path = parse_url($response);
        $full_path = sprintf('%s://%s/%s/%s', $full_path['scheme'], $full_path['host'], env('AWS_BUCKET'), $key);

        return [
            'path' => $key,
            'full_path' => $full_path,
            'endpoint' => $response,
        ];
    }
}
