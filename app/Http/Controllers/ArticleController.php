<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{

    public function articles() {
        $articles = DB::select('select * from articles');
        return view('articles.flavor',['articles'=>$articles]);
    }

    public function show($id) {
        $article = DB::table('articles')->where('id',$id)->first();
        return view('articles.show',['article'=>$article]);
    }

    // public function flavor() {
    //     $article = DB::table('select * from articles');
    //     return view('articles.flavor', ['article'=>$article]);
    // }
}
