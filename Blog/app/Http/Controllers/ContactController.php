<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function insertForm(Contact $contact, Request $request)
    {
        $mail = $request->input('mail');
        $name = $request->input('name');
        $topic = $request->input('topic');
        $message = $request->input('message');
        $data=array('mail'=>$mail, 'name'=>$name, 'topic'=>$topic, 'message'=>$message);
        DB::table('contacts')->insert($data);
//        return view('form.blade', ["contact" => $contact]);
        return route('contactInfo', ['data' => $data]);
    }
}
