<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
    	$message = request()->validate([

    		'nombre'=>'required',
    		'email'=>'required',
    		'subject'=>'required',
    		'content'=>'required',

    	]);


    	//Mail::to('lamalena11@gmail.com')->queue(new MessageReceived($message));

    	return new MessageReceived($message);

    	return 'mensaje enviado';
    }
}
