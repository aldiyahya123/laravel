<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index() {

        $articles = Article::all();

        foreach ($articles as $article) {
            $article['gambar'] = url('storage/'.$article->gambar);
        }

        return response()->json($articles);

    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        $article['gambar'] = url('storage/'.$article->gambar);

        return response()->json($article);
    }

    public function store(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);


        $article = $request->all();

        $article['gambar'] = $request->file('gambar')->store('images', 'public');

        Article::create($article);

        return response()->json($article);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required'
        ]);

        $article = $request->all();
        $oldGambar = Article::findOrFail($id);

        Storage::delete('public/'.$oldGambar["gambar"]);

        $article['gambar'] = $request->file('gambar')->store('images', 'public');

        Article::findOrFail($id)->update($article);

        return response()->json("berhasil di update");
    }

    public function destroy($id) {

        $article = Article::findOrFail($id);

        $article->delete();
        Storage::delete('public/'.$article->gambar);

        return response()->json("berhasil di hapus");

    }

}
