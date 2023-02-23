<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreateRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{

    public function index()
    {
        $cats = Category::all();
        return view('category.index', compact('cats'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(CategoryCreateRequest $request)
    {
        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $file->move(public_path().'/uploads',$imageName);


        $cat = new Category();
        $cat->name = $request->input('name');
        $cat->image = $imageName;

        if($cat->save()){
            return redirect()->route('cats.index');
        }else{
            return redirect()->back('error','Catogery Insert Error');
        }
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
