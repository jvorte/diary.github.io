<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Post;

class ContactsController extends Controller
{
    public function contact(Request $form ,Post $contacts){
        if ($form->method()=='POST'){
        $contacts = new Contact();
        $contacts->name = $form->get('name'); 
        $contacts->email = $form->get('email');
        $contacts->phone = $form->get('phone');
        $contacts->body = $form->get('body');
    
        if ($contacts -> save()) { 
        
            return redirect('/home');  
            };

        };
        return view('contact');
    }
}
