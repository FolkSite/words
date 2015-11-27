<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model {
  
  protected $guarded = ['id'];
  
  public function Poll() {
    return $this->belongsTo('App\Poll');
  }
}
