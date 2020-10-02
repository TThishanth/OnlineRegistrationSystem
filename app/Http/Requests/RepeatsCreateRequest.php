<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RepeatsCreateRequest extends FormRequest
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
            'year'=> 'required', 
            'semester'=> 'required', 
            'regNo'=> 'required', 
            'indexNo'=> 'required', 
            'medium'=> 'required', 
            'fullName'=> 'required', 
            'course'=> 'required', 
            'address'=> 'required', 
            'addressEx'=> 'required', 
            'contactNo'=> 'required', 
            'admissionDate'=> 'required', 
            'registered'=> 'required', 
            'paymentDate'=> 'required', 
            'reasons'=> 'required', 
            'amount'=> 'required', 
            'amountPayDate'=> 'required', 
            'receiptNo'=> 'required', 
            'photo_id'=> 'required', 
        ];
    }
}
