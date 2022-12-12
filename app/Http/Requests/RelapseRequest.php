<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class RelapseRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'reason' => ['required'],
            'more_than_six_months' => ['required', 'boolean']
        ];
    }
}
