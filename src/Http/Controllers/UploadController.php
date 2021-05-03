<?php

namespace Bildvitta\IssUpload\Http\Controllers;

use Bildvitta\IssUpload\Http\Requests\UploadRequest;
use Bildvitta\IssUpload\IssUploadContract;
use Illuminate\Http\JsonResponse;

/**
 * Class UploadController.
 *
 * @package Bildvitta\IssUpload\Http\Controllers
 */
class UploadController extends Controller
{
    /**
     * @var IssUploadContract
     */
    private IssUploadContract $issUpload;

    /**
     * UploadController constructor.
     *
     * @param  IssUploadContract  $issUpload
     */
    public function __construct(IssUploadContract $issUpload)
    {
        parent::__construct();

        $this->issUpload = $issUpload;
    }

    /**
     * Create a presigned address to store files into AWS S3.
     *
     * @param  UploadRequest  $uploadRequest
     *
     * @return JsonResponse
     */
    public function __invoke(UploadRequest $uploadRequest): JsonResponse
    {
        return $this->jsonResponse->setData($this->issUpload->getUploadSource());
    }
}
