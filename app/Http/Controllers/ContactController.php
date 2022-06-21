<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;//追記
use App\Mail\ContactMail; 

class ContactController extends Controller
{
    //メール送信
    public function send(Request $request)
    {
        $request->validate([ //バリデーション
            'name'     => 'required',
            'email'    => 'required|email',
            'title'    => 'required',
            'body'     => 'required',
        ]);
        $input = $request->all();
        unset($input['_token']); //CSRF非表示フィールド_token削除
        Mail::to('test@example.com')->send(new ContactMail('contact.mail', 'お問い合わせを受信しました', $input));
        return view('contact.thanks');
    }
}