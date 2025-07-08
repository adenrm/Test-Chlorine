<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::paginate(5);
        return view('category.index', ['category' => $category]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function edit(String $id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', ['category' => $category]);
    }

    public function store(Request $request)
    {
         $request->validate([
             'name' => 'required',
             'is_publish' => 'required',
        ]);
        
        $category = Category::create($request->all());
        
        return redirect()->route('category')
            ->with('success', 'Category berhasil dibuat dengan nama '.$category->name);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'is_publish' => 'required',
        ]);

        $category = Category::findOrFail($request->id);
        $category->name = $request->name;
        $category->is_publish = $request->is_publish;
        $category->update();
        
        return redirect()->route('category')
            ->with('success', 'Category berhasil diedit dengan nama ' . $category->name);
    }

    public function show(String $id)
    {
        $data = Category::find($id);
        return view('category.show', ['category'=>$data]);
    }
    public function destroy(string $id)
    {
        $data = Category::findOrFail($id);
        $data->delete();
        return redirect()->route('category', '?page=1')->with('delete', 'Category berhasil di delete');
    }
}
