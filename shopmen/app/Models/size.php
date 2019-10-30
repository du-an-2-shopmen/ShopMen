<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table='images';
	
    protected $fillable = ['name','product_id'];
}
