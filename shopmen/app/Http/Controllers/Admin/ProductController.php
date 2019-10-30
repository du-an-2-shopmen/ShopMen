<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Http\Requests\ClassProductRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    
    public function list(){
      
        $cates=Category::all();
        
    	$products=Product::all();
    	
    	return view('admin.products.list',compact('products','cates'));
    }
    public function add(){
    	$product=new Product();
    	$cates=Category::all();
    	return view('admin.products.form',compact('product','cates'));
    }
    public function getup($id){
    	$product=Product::find($id);
    	$cates=Category::all();
    	return view('admin.products.form',compact('product','cates'));
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
       
    	if($request->hasFile('image')) {
            $allowedfileExtension=['jpg','png'];
            $files = $request->file('image');
            // flag xem có thực hiện lưu DB không. Mặc định là có
            $exe_flg = true;
            // kiểm tra tất cả các files xem có đuôi mở rộng đúng không
            foreach($files as $file) {
                //lấy đuôi anh jpg,png..
                $extension = $file->getClientOriginalExtension();
                // kiem tra dinh dạng ảnh
                $check=in_array($extension,$allowedfileExtension);

                if(!$check) {
                    // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
                    $exe_flg = false;
                    break;
                }
            } 
            // nếu không có file nào vi phạm validate thì tiến hành lưu DB
            if($exe_flg) {
                
                
                // duyệt từng ảnh và thực hiện lưu
                foreach ($files as $image) {
                    // lay ten anh gốc gôm cả đuôi ảnh
                $filenameWithExt = $image->getClientOriginalName();
                // lấy tên anh;
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
               //lấy đuôi anh jpg,png..
                $extension = $image->getClientOriginalExtension();
                
                $fileNameToStore = str::slug($filename."-".str::random(10)).'.'.$extension;
                
                $img=$image->move('img/', $fileNameToStore);
                Image::create([
                      
                        'filename' => $img
                    ]);
                }
                echo "Upload successfully";
            } else {
                echo "Falied to upload. Only accept jpg, png image.";
            }
        }
        die();
        $model->slug=str_slug($request->name.'-'.microtime());
        $model->fill($request->all());
        $model->save();
        return redirect(route('list.product'));
    }
   
   

}
