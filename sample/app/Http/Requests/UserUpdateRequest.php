<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /** フォーム属性の定義 */
    public function attributes()
    {
        return [
            'name' => '名前',
            'email' => 'メールアドレス',
            'password' => 'パスワード',
        ];
    }

    /** エラーメッセージの定義 */
    public function messages()
    {
        return [
            'name.required' => ':attributeは必須項目です',
            'name.max' => ':attributeは最大:max文字まで入力できます',
            'email.required' => ':attributeは必須項目です',
            'email.email' => ':attributeの形式で入力してください',
            'email.unique' => 'すでに登録されている:attributeです',
            'password.required' => ':attributeは必須項目です',
            'password.min' => ':attributeは:min文字以上入力してください',
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
                'email' => 'required|string|email|max:255|unique:users,email,' .Auth::user()->email. ',email',
                'password' => 'required|string|confirmed|min:8|max:16|alpha-num',
        ];
    }
}
