<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnexePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'user_id' => [
                'required',
            ],
            'telephone' => [
                'required',
            ],
            'direction' => [
                'present',
            ],
            'document' => [
                'required',
            ],
            'photo' => [
                'required',
            ],
            'profile' => [
                'present',
            ],
            'certificate' => [
                'required',
            ],
            'diploma' => [
                'required',
            ],
            'qualification' => [
                'present',
            ],
        ];
    }
}
