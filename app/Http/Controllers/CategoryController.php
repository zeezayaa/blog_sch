<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // Untuk percobaan backend, return JSON atau view sementara (jangan commit view)
        return response()->json($categories); // Atau return view('categories.index', compact('categories'));
    }

    public function create()
    {
        // Untuk form create, return view sementara untuk test (jangan commit view)
        return view('categories.create'); // Generate dulu untuk test, misal dengan blade kosong
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil dibuat.');
    }
}