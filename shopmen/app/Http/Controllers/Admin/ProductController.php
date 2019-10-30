<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ClassProductRequest;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    
    public function list(){
      
        $cates=Category::all();
        
    	$products=Product::all();
    	
    	return view('admin.product.list',compact('products','cates'));
    }
    public function add(){
    	$product=new Product();
    	$cates=Category::all();
    	return view('admin.product.form',compact('product','cates'));
    }
    public function getup($id){
    	$product=Product::find($id);
    	$cates=Category::all();
    	return view('admin.product.form',compact('product','cates'));
    }
    public function delete(Product $class){
        $class->delete();
        return redirect(route('list.product'));
    }
    public function save(ClassProductRequest $request){
    	if (isset($request->id)) {
    		$model=Product::find($request->id);
    	}else{
    		$model=new Product();

    	}
        
    	// if ($request->hasFile('image')>0) {
     //        // lay ra duoi anhs
     //        $ext = $request->image->extension();

     //        // lay ten anh go
     //        $filename = $request->image->getClientOriginalName();

     //        // sinh ra ten anh moi theo dang slug
     //        $filename = str_slug(str_replace("." . $ext, "", $filename));
            
     //        // ten anh + string random + duoi
     //        $filename = $filename . "-" . str_random(20) . "." . $ext;
     //        $file=$request->file('image');
     //        $model->images =$file->move("img/uploads/products",$filename);
     //    }else if(isset($request->anh)){
     //     $model->images=$request->anh;
     //    }else{
     //       return redirect(route('add.product'))->withErrors([
     //        'image' => 'Vui lòng chọn'
     //        ]); 
     //    }
        
        $model->slug=str_slug($request->name.'-'.microtime());
        $model->fill($request->all());
        $model->save();
        return redirect(route('list.product'));
    }
   
   

}
