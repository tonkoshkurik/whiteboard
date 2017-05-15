<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['first_name', 'last_name', 'phone', 'company_name', 'business_url'];

    // Agency for this profile
    public function user()
    {
        # Agency has Agency...
        return $this->belongsTo('App\Agency', 'user_id');
    }

}
