<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail as Mail; 

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

\Mail::send('email', [
'name' => $request->get('name'),
'email' => $request->get('email'),
'comment' => $request->get('message') ],
function ($message) {
        $message->from('gsmpopovicdev@gmail.com');
        $message->to('gsmpopovicdev@gmail.com', 'George Popovic')
        ->subject('Your Website Contact Form');
});

return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

}
}
