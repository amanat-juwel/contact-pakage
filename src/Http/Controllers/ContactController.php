<?php

namespace Amanatjuwel\Contact\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Amanatjuwel\Contact\Models\Contact;

use Amanatjuwel\Contact\Mail\ContactMailable;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
 

    public function index()
    {	
        return view('contact::index');
    }

    public function store(Request $request)
    {	

    	
		Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->name,$request->phone));
    	
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->save(); 

        return redirect(route('contact'));
    }

    
}
