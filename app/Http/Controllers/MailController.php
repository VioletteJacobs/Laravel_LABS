<?php

namespace App\Http\Controllers;

use App\Mail\Mailsend;
use App\Models\Emailcontact;
use App\Models\Sendmail;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    
    public function store(Request $request){

        $validation = $request->validateWithBag("errorForm",[
            "email" => 'required|min:2|max:50',
            "name" => 'required|min:2|max:50',
            "message" => 'required|min:2|max:50',
            "subject_id" => 'required',

        ]);
        $subject = Subject::all();
        $emailcontact = Emailcontact::first()->get();

        $mail = new Sendmail;
        $mail->name = $request->name;
        $mail->email = $request->email;
        $mail->message = $request->message;
        $mail->subject_id = $request->subject_id;
        
        if ($subject->find($request->subject_id)) {
            $subject = Subject::find($request->subject_id);
            Mail::to($emailcontact)->send(new Mailsend($request));
            return redirect("/")->with("message","Merci pour votre message!" );
        } else {
            return redirect("/")->with('error', "PFFFFF touhces pas à ça! ");
        }
        
        $mail->save();

    }
}
