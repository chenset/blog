<?php namespace App\Http\Controllers;

use App\Models\Article;

class IndexController extends Controller
{
    public function getIndex(Article $articleM)
    {
        $articles = $articleM->where('display', 1)->limit(1)->orderBy('id', 'desc')->get();
        return view('index', compact('articles'));
    }
}
