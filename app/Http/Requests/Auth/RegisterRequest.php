<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
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
            'over_name' => 'required|string|max:10',
            'under_name' => 'required|string|max:10',
            'over_name_kana' => 'required|string|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u|max:30',
            'under_name_kana' => 'required|string|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u|max:30',
            'mail_address' => 'required|email|max:100|unique:users,mail_address',
            'sex' => 'required|'.Rule::in([1,2,3]),
            'birth_day' => 'required|date|after:1999-12-31|before:today',
            'role' => 'required|'.Rule::in([1,2,3,4]),
            'password' => 'required|min:8|max:30|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'over_name.required' => '名前は必ず入力してください。',
            'over_name.max' => '名前は10文字以下で入力してください。',
            'under_name.required' => '名前は必ず入力してください。',
            'under_name.max' => '名前は10文字以下で入力してください。',
            'over_name_kana.required' => '名前は必ず入力してください。',
            'over_name_kana.max' => '名前は10文字以下で入力してください。',
            'under_name_kana.required' => '名前は必ず入力してください。',
            'under_name_kana.max' => '名前は10文字以下で入力してください。',
            'mail_address.required' => 'メールアドレスは必ず入力してください。',
            'sex.required' => '性別は必ず選択してください。',
            'birth_day.required' => '生年月日は必ず選択してください。',
            'role.required' => '役職は必ず選択してください。',
            'password.required' => 'パスワードは必ず入力してください。',
            'password.max' => 'パスワードは30文字以下で入力してください。',
            'password.min' => 'パスワードは8文字以上で入力してください。',
            'password.confirmed' => 'パスワードと確認用パスワードが一致しません。',
        ];
    }
}
