<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendEmailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|min:3',
            'email' => 'required|email:rfc,dns',
            'subject' => 'required',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name' => 'Tên không được phép để trống',
            'email' => 'Email phải có dạng abc@xyz.com',
            'subject' => 'Tiêu đề không được để trống',
            'content' => 'Nội dung không được để trống'
        ];
    }
}
