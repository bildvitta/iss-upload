<?php

namespace Bildvitta\IssUpload\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

/**
 * Class Controller.
 *
 * @package Bildvitta\IssUpload\Http\Controllers
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var JsonResponse
     */
    protected JsonResponse $jsonResponse;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->jsonResponse = app(JsonResponse::class);
    }
}