<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model {
  public function words() {
    return $this->hasMany('App\Word');
  }
}
