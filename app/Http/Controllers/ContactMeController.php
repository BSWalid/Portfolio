<?php

namespace App\Http\Controllers;

use App\Mail\ContacMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMeController extends Controller
{
    //
    public function sendmail(){


            request()->validate([
                'name'=>'required',
                    'email'=>'required',
                    'message'=>'required',
                    'phone'=>'required',
            ]);
                $details=[
                    'name'=>request('name'),
                    'email'=>request('email'),
                    'message'=>request('message'),
                    'phone'=>request('phone'),
                ];


                Mail::to($details['email'])->send(new ContacMe($details));

                return redirect()->route('home');
    }



}
