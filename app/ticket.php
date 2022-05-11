<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
   protected $fillable=['id','title','gameid','category','status','user_id'];
}
