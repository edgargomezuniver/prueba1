<?php

namespace App\Http\Controllers;



use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class MessagesController extends Controller
{
    public function store()
    {

        request ()->validate([

         'nombre'=>'required',   
         'email'=>'required',
         'subject'=>'required',
         'content'=>'required'
        ]);
    	
       

Mail::to('chacota2012@gmail.com')->send(new MessageReceived($mensaje));
    	return 'mensaje enviado';
    }
}
