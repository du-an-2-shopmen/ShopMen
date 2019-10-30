<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\ClassPostRequest;
use Illuminate\Support\Str;
class PostController extends Controller
{
    public function list(){
       
    	$News=Post::all();
    	
    	return view('admin.news.list',compact('News'));
    }
    public function add(){
    	$News=new Post();
    	return view('admin.news.form',compact('News'));
    }
    public function getup($id){
    	$News=Post::find($id);
    	
    	return view('admin.news.form',compact('News'));
    }
    public function delete(Post $class){
        $class->delete();
        return redirect(route('list.news'));
    }
    public function save(ClassPostRequest $request){
    	if (isset($request->id)) {
    		$model=Post::find($request->id);
    	}else{
    		$model=new Post();

    	}
        
    	if ($request->hasFile('images')>0) {

            $ext = $request->images->extension();

            // lay ten anh go
            $filename = $request->images->getClientOriginalName();
            
            // ten anh + string random + duoi
            $filename = $filename . "-" . str::random(20) . "." . $ext;
            $file=$request->file('images');
           
            $model->image =$file->move("img/uploads/users",$filename);

            // $model->image=$request->file('images')->store('img/uploads');
        }else if(isset($request->anh)){
         $model->image=$request->anh;
        }else{
           return redirect(route('add.news'))->withErrors([
            'images' => 'Vui lòng chọn'
            ]); 
        }
        
        $model->slug=str::slug($request->title.'-'.microtime());
        $model->fill($request->all());
        $model->save();
        return redirect(route('list.news'));
    }
}
