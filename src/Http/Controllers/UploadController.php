<?php

namespace Bildvitta\IssImage\Http\Controllers;

use Bildvitta\IssImage\Http\Requests\UploadRequest;
use Bildvitta\IssImage\IssImage;
use Illuminate\Http\JsonResponse;

/**
 * Class UploadController.
 *
 * @package Bildvitta\IssImage\Http\Controllers
 */
class UploadController extends Controller
{
    /**
     * Create a presigned address to store files into AWS S3.
     *
     * @param  UploadRequest  $uploadRequest
     *
     * @return JsonResponse
     */
    public function __invoke(UploadRequest $uploadRequest): JsonResponse
    {
        return new JsonResponse(
            (new IssImage())
                ->setEntity($uploadRequest->entity)
                ->setFilename($uploadRequest->filename)
                ->setMineType($uploadRequest->mine_type)
                ->getUploadSource()
        );
    }
}