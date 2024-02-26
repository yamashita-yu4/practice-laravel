<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /** エラーメッセージの定義 */
    public function messages()
    {
        return [
            'name.required' => '名前は必須項目です',
            'email.required' => 'メールアドレスは必須項目です',
            'email.email' => 'メールアドレスの形式で入力してください',
            'password.required' => 'パスワードは必須項目です',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'name' => 'required|string|max:16',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|confirmed|min:8|max:16|alpha-num',
        ];
    }
}
