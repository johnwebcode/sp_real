<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFloor extends Model
{
    protected $table = 'user_floors';

   
    protected $fillable = ['user_id', 'floor_id','status'];
}
