<?php

namespace App\Http\Controllers;

use App\Mail\ContactSendmail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * 確認
     */
    public function confirm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'title' => 'required',
            'body' => 'required'
        ]);

        $inputs = $request->all();


        return view('contact.confirm', compact('inputs'));
    }

    /**
     * 送信
     */
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'title' => 'required',
            'body' => 'required'
        ]);

        $inputs = $request->all();

        //入力されたメールアドレスにメールを送信
        \Mail::to($inputs['email'])->send(new ContactSendmail($inputs));

        //再送信を防ぐためにトークンを再発行
        $request->session()->regenerateToken();

        //送信完了ページのviewを表示
        return view('contact.thanks');
    }
}
