<?php

namespace App\Http\Requests;

use App\Enums\Arrival;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Cpf;
use App\Rules\Arrive;
use App\Rules\Type;
use App\Rules\Telephone;
use Illuminate\Validation\Rules\Enum;

class PatientRequest extends FormRequest
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
            'name' => ['required', 'between:3,255'],
            'sus_card' => ['required', 'numeric','min_digits: 8', 'max_digits: 15'],
            'rg' => ['required', 'numeric','min_digits: 8', 'max_digits: 15'],
            'cpf' => ['required', new Cpf],
            'admission_date' => ['required', 'date_format:Y-m-d'],
            'type' => ['required'],
            'arrive' => ['required'],
            'telephone_1' => ['required', 'numeric', new Telephone],
            'telephone_2' => ['nullable', 'numeric', new Telephone],
            'cep' => ['required', 'numeric'],
            'pregnant' => ['required', 'boolean'],
            'birth_date' => ['required', 'date_format:Y-m-d'],
            'record_code' => ['required', 'size:10'],
            'mother_name' => ['required', 'between:3, 255'],
            'address' => ['required', 'between:0,255'],
            'district.id' => ['required', 'numeric'],
            'birthplace.id' => ['required', 'numeric'],
            'nationality.id' => ['required', 'numeric']
        ];
    }
}
