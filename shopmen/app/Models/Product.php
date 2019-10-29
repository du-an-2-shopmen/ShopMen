<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
	
    protected $fillable = ['name', 'slug', 'category_id','price','sale_percent','stocks','is_active','description','promotion_price','short_desc'];
    public function cate(){
    	return $this->belongsto('App\Models\Category','category_id');
    }
    public function images(){
    	return $this->belongsto('App\Models\Image','product_id','id');
    }
    public function sizes(){
    	return $this->belongsto('App\Models\Size','product_id','id');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment','product_id','id');
    }
    public function nullcomments()
    {
        return $this->hasMany('App\Models\Comment')->whereNull('parent_id');
    }
}
