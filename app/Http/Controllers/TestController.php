<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\tabels;
class TestController extends Controller
{
    public function showhome(){

        return view('home');
    }

    public function showtest($test){

        return view('test',[
            'test' => $post = tabels::where('text', $test)->firstOrFail()
        ]);
    }
    public function showabout(){

        return view('about',[
            'articles' => \App\Article::take(4)->latest()->get()
        ]);
    }

}
