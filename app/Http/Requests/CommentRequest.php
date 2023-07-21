<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    protected static $NEEDS_AUTHORIZATION = true;
    protected static $ERROR_MESSAGES      = [
        'required'  => ':attribute tidak boleh kosong',
        'string'    => ':attribute harus berupa string',
        'min'       => ':attribute harus minimal :min karakter',
    ];
    protected static $ATTRIBUTE_NAMES     = [
        'province_id'  => 'Provinsi',
        'user_name'  => 'Nama',
        'comment'  => 'Komentar',
    ];

    public function authorize()
    {
        return self::$NEEDS_AUTHORIZATION;
    }

    public function messages(): array
    {
        return static::$ERROR_MESSAGES;
    }

    public function attributes(): array
    {
        return static::$ATTRIBUTE_NAMES;
    }

    public function rules()
    {
        return [
            'province_id'   => ['required', 'numeric'],
            'user_name'     => ['required', 'string', 'min:3'],
            'comment'       => ['required', 'string'],
        ];
    }
}
