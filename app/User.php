<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'job_id', 'role_id', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function job(){
        return $this->belongsTo('App\Job');
    }

    public function repeat(){
        return $this->belongsTo('App\Repeat');
    }

    public function academic(){
        return $this->belongsTo('App\Academic');
    }

    public function hostel(){
        return $this->belongsTo('App\Hostel');
    }


    public function Admin(){

        if( $this->role->name == "Administrator"){
            return true;
        }

        return false;

    }

    public function userAdmin(){

        if( $this->job->name == "Administrator"){
            return true;
        }

        return false;

    }

    public function academicAdmin(){

        if( $this->job->name == "Head of the Dept." || $this->job->name == "Coordinator" || $this->job->name == "Dean"){
            return true;
        }

        return false;

    }

    public function boysHostelAdmin(){

        if( $this->job->name == "Boys hostel Warden"){
            return true;
        }

        return false;

    }

    public function girlsHostelAdmin(){

        if( $this->job->name == "Girls hostel Warden"){
            return true;
        }

        return false;

    }

    public function repeatAdmin(){

        if( $this->job->name == "Head of the Dept." || $this->job->name == "Coordinator" || $this->job->name == "Dean"){
            return true;
        }

        return false;

    }
}
