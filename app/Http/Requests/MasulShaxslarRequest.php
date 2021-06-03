<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MasulShaxslarRequest extends FormRequest
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
            'shaxs_ismi'=>['required'],
            'shaxs_familya'=>['required'],
            'shaxs_sharif'=>['required'],
            'mansab_id'=>['required', Rule::exists('mansablars', 'id')]
        ];
    }
}
