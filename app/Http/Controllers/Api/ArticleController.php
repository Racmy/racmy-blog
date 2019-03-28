<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        \Log::info($request->all());

        return 'store ok';
    }
}