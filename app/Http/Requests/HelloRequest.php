<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function PHPSTORM_META\map;

class HelloRequest extends FormRequest
{
    public function authorize()
    {
        //リクエストのpathがhelloの時のみ利用
        if ($this->path() == 'hello'){
            return true;
        } else {
            return false;
        }
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0, 150',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください。',
            'mail.email' => 'メールアドレスが必要です。',
            'age.numeric' => '年齢を整数で記入してください。',
            'age.between' => '年れは0〜150の間で入力してください。',
        ];
    }
}
