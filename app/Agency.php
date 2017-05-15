<?php

namespace App;

use App\Notifications\AgencyResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agency extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AgencyResetPassword($token));
    }

    /**
    * Get profile of this agency
    *
    */
    public function profile(){
        return $this->hasOne('App\Profile', 'user_id');
    }

    public function dashboard()
    {
        return $this->hasMany('App\Dashboard');
    }
}
