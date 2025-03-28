<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();              
        return view('home', compact('images'));
    }

    public function create()
    {
        return view('imagem.create');
    }

    public function store(Request $request)
    {
        $request->validate(['url' => 'required|url']);
        Image::create($request->all());
        return redirect()->route('imagem.index');
    }

    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();
        return redirect()->route('imagem.index');
    }
}
