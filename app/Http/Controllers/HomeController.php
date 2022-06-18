<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * ホームページ遷移
     */
    public function home()
    {
        return view('home.main');
    }

    /**
     * ブログページ遷移
     */
    public function blog()
    {
        return view('home.blog');
    }

    /**
     * 送信完了画面
     */
    public function thanks()
    {
        return view('contact.thanks');
    }
}
