<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceGalleryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'title' => 'nullable|string|max:255',
            'msg' => 'nullable',
//            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'service_id' => 'required|exists:services,id',
            'status' => 'required|in:1,0',
        ];
    }
}
