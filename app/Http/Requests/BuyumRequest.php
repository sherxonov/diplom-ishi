<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BuyumRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'buyum_nomi'=>['required'],
            'yangi_soni'=>['required'],
            'eski_soni'=>['required'],
            'birlik_id'=>['required', Rule::exists('birliklars', 'id')],
        ];
    }
}
