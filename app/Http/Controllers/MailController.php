<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendMail(Request $request){

        $name= $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $content = $request->content;
        // dd($name,$email,$subject,$message);

        Mail::send('email.sendContent', compact( 'name','email','subject','content'), function ($email) use ($request) {
            $email->from('namnt0413@gmail.com', 'Namnt0413');
            $email->to('medicalbookingg@gmail.com', 'Medical Booking')->subject('Thu lien lac');
        });

        Mail::send('email.responseContent', ['name' =>  $request->name], function ($email) use ($request) {
            $email->to($request->email , $request->name)->subject('Phan hoi Email');
        });

        return redirect()->to('/');
    }
}
