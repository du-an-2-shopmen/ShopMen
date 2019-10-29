<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table='images';
	
    protected $fillable = ['filename', 'product_id'];
    public function product(){
    	return $this->belongsto('App\Models\Product','product_id');
    }
    
}
