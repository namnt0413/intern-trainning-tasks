<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SendEmailRequest;
use Illuminate\Support\Facades\Log;

class MailController extends Controller
{
    //
    public function sendMail(SendEmailRequest $request){

        try {
            $name= $request->name;
            $email = $request->email;
            $subject = $request->subject;
            $content = $request->content;
            // dd($name,$email,$subject,$message);

            Mail::send('email.sendContent', compact( 'name','email','subject','content'), function ($email) use ($request) {
                $email->from('namnt0413@gmail.com', 'Customer');
                $email->to('medicalbookingg@gmail.com', 'Medical Booking')->subject('Thu lien lac');
            });

            Mail::send('email.responseContent', ['name' =>  $request->name], function ($email) use ($request) {
                $email->to($request->email , $request->name)->subject('Phan hoi Email');
            });

            return redirect()->to('/');
        } catch (\Exception $exception) {
            Log::error('Message: ' . $exception->getMessage() . ' --- Line : ' . $exception->getLine());
        }


    }
}
