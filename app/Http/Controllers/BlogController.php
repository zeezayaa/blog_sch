<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Menampilkan semua blog
    public function index()
    {
        $blogs = Blog::all();
        return response()->json($blogs);
    }

    // Menyimpan blog baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'isi' => 'required',
            'tanggal' => 'required|date'
        ]);

        $blog = Blog::create($request->all());
        return response()->json($blog, 201);
    }

    // Menampilkan detail blog
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return response()->json($blog);
    }
}
