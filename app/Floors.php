<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floors extends Model
{
    
	protected $table = 'floor';
	
	protected $fillable = ['name', 'project_area', 'number', 'location', 'city', 'village', 'taluk', 'district', 'land_register_office', 'status'];
}
