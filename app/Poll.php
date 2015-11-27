<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model {
  
  protected $guarded = ['id'],
            $nullable = ['description'];
  
  public function words() {
    return $this->hasMany('App\Word');
  }
}
