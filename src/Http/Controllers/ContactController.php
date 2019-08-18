<?php

namespace Amanatjuwel\Contact\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Amanatjuwel\Contact\Models\Contact;

use Amanatjuwel\Contact\Jobs\SendEmailJob;

class ContactController extends Controller
{
 

    public function index()
    {	
        return view('contact::index');
    }

    public function store(Request $request)
    {	

    	
        //queue
        dispatch(new SendEmailJob($request->name,$request->phone));

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->save(); 

        return redirect(route('contact'));
    }

    
}
