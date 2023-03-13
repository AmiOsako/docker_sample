<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Confirmページのバリデーション
 */
class ContactConfirmRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * バリデーションルール
     * @return array
     */
    public function rules():array
    {
        return [
            'name' => 'required|max:10',
            'email' => 'required|email',
            'content' => 'required|max:1000'
        ];
    }

    /**
     * バリデーション項目名定義
     * @return array
     */
    public function attributes():array
    {
        return [
            'department_name' => '部署名',
            'name' => 'お名前',
            'email' => 'メールアドレス',
            'content' => '内容'
        ];
    }

    /**
     * バリデーションメッセージ
     * @return array
     */
    public function messages():array
    {
        return [
            'name.required' => ':attributeを入力してください。',
            'name.max' => ':attributeは10文字までです。',
            'email.required' => ':attributeを入力してください。',
            'content.required' => ':attributeを入力してください。',
            'content.max' => ':attributeは1000文字までです。'
        ];
    }
}
