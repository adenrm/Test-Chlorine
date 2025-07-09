<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category as ModelsCategory;
use Illuminate\Http\Request;

class Category extends Controller
{
    public function index()
    {
        $category = ModelsCategory::all();
         if (empty ($category)) {
            return response()->json([
                'status' => false,
                'message' => 'Category tidak ada!',
                'data' => 'null'
            ]);
        } else {
            return response()->json([
                'status' => true,
                'message' => 'Category di temukan!',
                'data' => $category
            ]);
        }
    }
    public function store(Request $request)
    {
         $request->validate([
             'name' => 'required',
             'is_publish' => 'required',
        ]);
        
        $category = ModelsCategory::create($request->all());
        
       return response()->json([
            'status' => true,
            'message' => 'Tugas berhasil di tambahkan!',
            'data' => $category,
        ], 201);
    }

    public function update(Request $request, String $id)
    {
        $request->validate([
            'name' => 'required',
            'is_publish' => 'required',
        ]);

        $category = ModelsCategory::findOrFail($request->id);
        $category->name = $request->name;
        $category->is_publish = $request->is_publish;
        $category->update();
        
         return response()->json([
            'status' => true,
            'message' => 'Tugas berhasil di update!',
            'data' => $category,
        ], 200);
    }

    public function show(String $id)
    {
        $data = ModelsCategory::find($id);
        if ($data['id'] == $id) {
        return response()->json([
            'status' => true,
            'message' => 'Category ditemukan!',
            'data' => $data
        ]);
    }

        return response()->json([
            'status' => false,
            'message' => 'Category tidak ada!'
        ], 404);
    }
    public function destroy(string $id)
    {
        $data = ModelsCategory::findOrFail($id);
        $data->delete();
        return response()->json([
            'status' => true,
            'message' => 'Category berhasil di hapus!',
        ], 204);
    }
}
