<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        /**
         * get all data from database
         */

        $categorys = Category::all();
        // dd($categorys);

        return view('admin.category.category', ['categorys' => $categorys]);
    }

    /**
     * function create data
     */

    public function createTemplate()
    {
        return view('admin.category.create');
    }

    /**
     * function store data
     */

    public function store(Request $request)
    {
        // dd($request -> all());

        /**
         * write logic for store the data
         */

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        /**
         * redirect to route category page
         */

        return redirect()->route('admin.category.index');
    }

    /**
     * edit data 
     */

    public function edit($id)
    {

        /**
         * select user or data by specifict id
         */

        $category = Category::findOrFail($id);

        //  dd($category);
        // dd("edit category", $id);
        return view('admin.category.edit', ['category' => $category]);
    }

    /**
     * update function
     */

    public function update(Request $request, $id)
    {
        // dd("update");

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('admin.category.index');
    }

    /**
     * function destroy data
     */

    public function destroy(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.category.index');
    }
}
