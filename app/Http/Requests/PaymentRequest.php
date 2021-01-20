<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'price' => 'required',
            'card_number' => 'required',
            'card_name' => 'required',
            'cvc' => 'required|numeric',
            'expiration_month' => 'required|numeric|min:1|max:12',
            'expiration_year' => 'required|date_format:Y|check_year',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'price.required' => 'Please enter valid amount',
            'card_number.required' => 'Please enter the card number',
            'card_name.required' => 'Please enter the name given in the card',
            'cvc.required' => 'Please enter the CVC',
            'cvc.numeric' => 'Please enter a valid CVC',
            'expiration_month.required' => 'Please enter expiration month',
            'expiration_month.min' => 'Please enter a valid expiration month',
            'expiration_month.numeric' => 'Please enter a valid expiration month',
            'expiration_month.max' => 'Please enter  a valid expiration month',
            'expiration_year.required' => 'Please enter expiration year',
            'expiration_year.date_format' => 'Please enter a valid expiration year',
            'expiration_year.check_year' => 'Please enter a valid year greater than ' . now()->format('Y'),
        ];
    }
}
