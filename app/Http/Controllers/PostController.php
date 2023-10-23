<?php

namespace App\Http\Controllers;
//↓は書き足すものじゃないから理解は後回し
use Illuminate\Http\Request;
//use宣言は外部にあるクラスをpostcontroller内にインポートできる
use App\Models\Post;

class PostController extends Controller
{
    //インポートしたpostをインスタンス化して＄postとして使用
    public function index(Post $post)
    {                   
        return $post->get();
    }
    
}
