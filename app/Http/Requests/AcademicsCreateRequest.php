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
            'regNo'=> 'required|max:9', 
            'address'=> 'required', 
            'hNumber'=> 'required|max:10',
            'presentAddress'=> 'required',
            'pNumber'=> 'required|max:10',
            'contactAddress'=> 'required', 
            'cNumber'=> 'required|max:10',
            'faculty'=> 'required',
            'year'=> 'required', 
            'department'=> 'required',
            'studyProgramme'=> 'required',
            'Fsemcourse'=> 'required',
            'Ssemcourse'=> 'required',
            'Exyear'=> 'required',
            'indexNo'=> 'required|max:9',
            'Examination'=> 'required',
            'medium'=> 'required',
            'Results'=> 'required',
            'pastExaminations'=> 'required',
            'amount'=> 'required',
            'amountPayDate'=> 'required',
            'receiptNo'=> 'required',
            'photo_id'=> 'required|image',
        ];
    }
}
