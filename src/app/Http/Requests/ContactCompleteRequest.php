<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Completeページのバリデーション
 */
class ContactCompleteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * バリデーションルール
     * @return array
     */
    public function rules()
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
    public function attributes() {
        return [
            'department_name' => '部署名',
            'name' => 'お名前',
            'email' => 'メールアドレス',
            'content' => '内容'
        ];
    }
}
