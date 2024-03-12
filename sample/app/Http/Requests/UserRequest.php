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

    /** フォーム属性の定義(後で共通化する) */
    public function attributes()
    {
        return [
            'name' => '名前',
            'email' => 'メールアドレス',
            'password' => 'パスワード',
        ];
    }

    /** エラーメッセージの定義(後で共通化する) */
    public function messages()
    {
        return [
            'name.required' => ':attributeは必須項目です',
            'name.max' => ':attributeは最大:max文字まで入力できます',
            'email.required' => ':attributeは必須項目です',
            'email.max' => ':attributeは最大:max文字まで入力できます',
            'email.email' => ':attributeの形式で入力してください',
            'email.unique' => 'すでに登録されている:attributeです',
            'password.required' => ':attributeは必須項目です',
            'password.min' => ':attributeは:min文字以上入力してください',
            'password.max' => ':attributeは:max文字以下で入力してください',
            'password.alpha-num' => ':attributeは英数字のみで入力してください',
            'password.confirmed' => ':attributeが一致しません。'
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
