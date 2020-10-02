<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    protected $fillable = [
        'is_active',
        'fullName', 
        'name', 
        'regNo', 
        'sex', 
        'address', 
        'presentAddress', 
        'contactNo', 
        'registered', 
        'paymentDate', 
        'faculty', 
        'year', 
        'department', 
        'amount', 
        'amountPayDate', 
        'receiptNo', 
        'photo_id'
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

}
