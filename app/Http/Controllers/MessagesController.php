<?php

namespace App\Http\Controllers;


use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

//use App\Http\Controllers; use Mail;

class MessagesController extends Controller
{
    public function store(Request $request)
    {

        request()->request([

         'nombre'=>'required',   
         'email'=>'required',
         'subject'=>'required',
         'content'=>'required'
        ]);
    	



    	//Mail::to('chacota2012@gmail.com')->send(new MessageReceived);
        //Mail::to('chacota2012@gmail.com')->send(new MessageReceived($request));
    	
        return 'mensaje enviados';
    }
}
