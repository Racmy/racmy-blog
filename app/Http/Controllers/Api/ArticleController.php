<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        \Log::info(Auth::user()->name);
        // $article = Article::create([
        //     'user_id' => \Auth::user()->id,
        //     'category_id' => '1',
        //     'tag_id' => '1',
        //     'contents' => 'contents'
        // ]);

        // return $article;
        return 'hoge';
    }
}