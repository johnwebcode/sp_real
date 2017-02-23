<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amount extends Model
{
	protected $table = 'base_amount';	
	protected $fillable = ['narmal_park', 'banker_park','day_park','monthly_park'];	
}
