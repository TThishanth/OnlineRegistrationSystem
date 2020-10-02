<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $fillable = [
        'is_active',
        'fullName', 
        'name', 
        'regNo', 
        'address', 
        'hNumber', 
        'presentAddress', 
        'pNumber', 
        'contactAddress', 
        'cNumber', 
        'faculty', 
        'year', 
        'department', 
        'studyProgramme', 
        'Fsemcourse', 
        'Ssemcourse', 
        'Exyear', 
        'indexNo', 
        'Examination', 
        'medium', 
        'Results', 
        'pastExaminations', 
        'amount', 
        'amountPayDate', 
        'receiptNo', 
        'photo_id'  
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

}


