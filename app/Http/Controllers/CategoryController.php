<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view( 'admins.categories.index')->with('categories',$categories);
    }
    
    public function create()
    {
        return view( 'admins.categories.create');
    }
    
    public function store(Request $request)
    {
        $category = Category::create($request->all());
        return redirect(route( 'admin.category.index'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        if(empty($category)){
            return redirect(route( 'admin.category.index'));
        }
        return view( 'admins.categories.edit')->with('category', $category);
    }

    public function update($id, Request $request)
    {
        $category = Category::find($id);
        if(empty($category)){
            return redirect(route( 'admin.category.index'));
        }
        
        $category->fill($request->all());
        $category->save;
        return redirect(route( 'admin.category.index'));
    }

    public function delete($id)
    {
        return redirect(route( 'admin.category.index'));
    }
}
