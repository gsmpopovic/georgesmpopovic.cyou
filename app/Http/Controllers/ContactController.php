<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Email as Email; 

class ContactController extends Controller
{
    
    public function __construct(){
        $this->middleware('XSS');
    }
    //
public function index(Request $request){

    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ]);

    // \Mail::send('email', [
    // 'name' => $request->get('name'),
    // 'email' => $request->get('email'),
    // 'comment' => $request->get('message') ],
    // function ($message) {
    //         $message->from('george');
    //         $message->to('george', 'George Popovic')
    //         ->subject('Your Website Contact Form');
    // });

    $data = [
        'message' => $request->input('message'),
        'name' => $request->input('name'),
        'phone' => $request->input('phone'),
        'email' => $request->input('email')
    ];

    \Mail::to('georgesmpopovic@gmail.com')->send(new Email($data));

    return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

}

}
