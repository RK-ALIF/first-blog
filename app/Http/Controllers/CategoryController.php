<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
// use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category()
    {

        $categories = Category::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required',
            // 'slug' => 'required',
        ]);

        $category = Category::create(
            [
                'name' => $request->name,
                'slug' => Str::slug($request->name, '-'),
                'description' => $request->description,

            ]

        );
        Session::flash('success', 'Category Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.category.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        // dd($request->all());
        // dd($category);

        // $validated = $request->validate([
        //     'name' => "required|unique:categories,name,$category->name",
        //     // 'slug' => 'required',
        // ]);


        // $category->name = $request->name;
        // $category->slug = Str::slug($request->name, '-');
        // $category->description = $request->description;
        // $category->save();

        $category = Category::find($req->id);
        $category->name = $req->name;
        // $category->slug = Str::slug($req->name, '-');
        $category->slug = $req->name;
        $category->description = $req->description;
        $category->save();

        Session::flash('success', 'Category Updated Successfully');
        return redirect()->route('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if ($category) {

        //     $category->delete();

        //     Session::flash('success', 'Category Deleted Successfully');
        //     return redirect()->route('category');
        // }
        $category = Category::find($id);
        $category->delete();
        Session::flash('success', 'Category Deleted Successfully');
        return redirect()->route('category');
    }
}
