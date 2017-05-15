<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    //
  public function agency()
  {
    return $this->hasOne('App\Agency');
  }
}
