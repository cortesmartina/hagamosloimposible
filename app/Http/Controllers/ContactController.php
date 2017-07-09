<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
	public function send(ContactFormRequest $request){
	    \Mail::send('emails.contact',
	        array(
	            'name' => $request->get('name'),
	            'email' => $request->get('email'),
	            'phone' => $request->get('phone'),
	            'user_message' => $request->get('message')
	        ), function($message)
	    {
	        $message->from(env('MAIL_USERNAME'));
	        $message->to(env('MAIL_USERNAME'), env('MAIL_ALIAS'))->subject('Contacto Página Web HLI');
	    });

	  	return \Redirect::route('home')->with('message', '¡Gracias por contactarnos!');
	}
}
