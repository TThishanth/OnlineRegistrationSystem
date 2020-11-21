<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HostelsCreateRequest extends FormRequest
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
            'fullName'=> 'required',
            'name'=> 'required',
            'regNo'=> 'required|max:9',
            'sex'=> 'required',
            'address'=> 'required',
            'presentAddress'=> 'required', 
            'contactNo'=> 'required|max:10',
            'registered'=> 'required',
            'paymentDate'=> 'required',
            'faculty'=> 'required',
            'year'=> 'required',
            'department'=> 'required',
            'amount'=> 'required',
            'amountPayDate'=> 'required',
            'receiptNo'=> 'required',
            'photo_id'=> 'required|image',
        ];
    }
}
