<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller {
    public function index() {
        $categories = Category::all();
        return view('category/categories_list',['categories'=>$categories]) ;
    }
    public function store(Request $request)
    {
        $category = new Category;
        $category->name=$request->name;
        $category->save();
        return redirect('/category');
    }
    public function create()
    {
    return view('category/category_add');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category/category_update',compact('category'));
    }
    public function update(Request $request)
    {
        $category = Category::find($request->id);
        $category->update($request->all());
        return redirect('/category');
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
    public function search(Request $request){
        $category = Category::where('name','like','%'.$request->name.'%')->get();
        return \View::make('category/categories_list',['categories'=>$category]);

    }
}