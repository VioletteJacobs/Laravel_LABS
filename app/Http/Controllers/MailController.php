<?php

namespace App\Http\Controllers;

use App\Mail\Mailsend;
use App\Models\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    
    public function store(Request $request){
        $mail = new Sendmail;
        $mail->name = $request->name;
        $mail->email = $request->email;
        $mail->message = $request->message;
        $mail->subject_id = $request->subject_id;
        $mail->save();

        Mail::to("vio@vio")->send(new Mailsend($request));
        return redirect()->back();
    }
}
