<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;

class ContactController extends Controller
{
    public function index() {
        return view('index');
    }   //

    public function contact() {
        return view('contact');
    }   //

    public function portfolio() {
        return view('portfolio');
    }   //

    public function store(Request $request) {
       $content = new Content();
       $content->name = $request->name;
       $content->hurigana = $request->hurigana;
       $content->email = $request->email;
       $content->tel = $request->tel;
       $content->message = $request->message;
       $content->save();
       return redirect('/contact');
   }
   public function content_index() {
    $contents = Content::get();
    return view('content.index', compact('contents'));
}
public function edit(Content $content) {
    return view('content.edit', compact('content'));
}
public function update(Request $request, Content $content) {
        
    $content->name = $request->input('name');
    $content->hurigana = $request->input('hurigana');
    $content->email = $request->input('email');
    $content->tel = $request->input('tel');
    $content->message = $request->input('message');
    $content->save();
    return redirect('/content/index');
}
public function destroy(Request $request, Content $content) {
    $content->delete();
    return redirect('/content/index');
}
}
