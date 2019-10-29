<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable = ['name','slug','parent_id'];
    public function Products(){
    	return $this->hasMany('App\Models\Product','category_id');
    }
    public function cateparents()
    {
        return $this->hasMany('App\Models\Category','parent_id');
    }
    public function cateparent()
    {
        return $this->belongsto('App\Models\Category','parent_id','id');
    }
}
