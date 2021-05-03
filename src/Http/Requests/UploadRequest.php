<?php

namespace Bildvitta\IssUpload\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use League\MimeTypeDetection\ExtensionMimeTypeDetector;

use function config;

/**
 * Class UploadRequest
 *
 * @property-read string entity
 * @property-read string filename
 * @property-read string mine_type
 */
class UploadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    public function prepareForValidation(): void
    {
        $this->merge([
            'mine_ype' => (new ExtensionMimeTypeDetector)->detectMimeTypeFromPath((string)$this->filename),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'mine_ype' => 'in:' . config('iss-upload.validation.mine_type'),
            'filename' => 'required',
            'entity' => 'required',
        ];
    }
}