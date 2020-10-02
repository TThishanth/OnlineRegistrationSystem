<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcademicsCreateRequest extends FormRequest
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
            'regNo'=> 'required', 
            'address'=> 'required', 
            'hNumber'=> 'required',
            'presentAddress'=> 'required',
            'pNumber'=> 'required',
            'contactAddress'=> 'required', 
            'cNumber'=> 'required',
            'faculty'=> 'required',
            'year'=> 'required', 
            'department'=> 'required',
            'studyProgramme'=> 'required',
            'Fsemcourse'=> 'required',
            'Ssemcourse'=> 'required',
            'Exyear'=> 'required',
            'indexNo'=> 'required',
            'Examination'=> 'required',
            'medium'=> 'required',
            'Results'=> 'required',
            'pastExaminations'=> 'required',
            'amount'=> 'required',
            'amountPayDate'=> 'required',
            'receiptNo'=> 'required',
            'photo_id'=> 'required',
        ];
    }
}
