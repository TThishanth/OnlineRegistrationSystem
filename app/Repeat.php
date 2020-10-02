<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repeat extends Model
{
    protected $fillable = [
        'is_active',
        'year', 
        'semester', 
        'regNo', 
        'indexNo', 
        'medium', 
        'fullName', 
        'course', 
        'address', 
        'addressEx', 
        'contactNo', 
        'admissionDate', 
        'registered', 
        'paymentDate', 
        'reasons', 
        'amount', 
        'amountPayDate', 
        'receiptNo', 
        'photo_id'
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

}
