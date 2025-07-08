<?php

namespace App\Http\Controllers;

use App\Mail\CategoryNotification;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        $users = User::all();
        foreach ($users as $user) {
            Mail::to($user->email)->queue(new CategoryNotification('added', $category));
        }
        
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
        $categoryName = $data->name;
        $data->delete();
        $users = User::all();
        foreach ($users as $user) {
            Mail::to($user->email)->queue(new CategoryNotification('deleted', $categoryName));
        }
        return redirect()->route('category', '?page=1')->with('delete', 'Category berhasil di delete');
    }
}
