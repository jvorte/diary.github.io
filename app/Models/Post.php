<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function user()
  {
    return $this->belongsTo('\App\User');
  }


  public function comment()
  {
    return $this->hasMany('App\Models\Comment');
  }

}
