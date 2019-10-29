<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\ClassCategoryRequest;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function list(){
       
        $cates=Category::all();
     
        return view('admin.categories.list',compact('cates'));
    }
    public function add(){
        $cate=new Category();
        $cates=Category::all();
        return view('admin.categories.form',compact('cate','cates'));
    }
    public function getup($id){
        $cate=Category::find($id);
        $cates=Category::all();
        return view('admin.categories.form',compact('cate','cates'));
    }
    public function delete(Category $class){
        $class->delete();
        return redirect(route('list.cate'));
    }
    public function save(ClassCategoryRequest $request){
        if (isset($request->id)) {
            $model=Category::find($request->id);
        }else{
            $model=new Category();

        }
        $model->slug=str::slug($request->name.'-'.microtime());
        $model->fill($request->all());
        $model->save();
        return redirect(route('list.cate'));
    }
}
