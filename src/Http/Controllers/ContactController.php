<?php

namespace Amanatjuwel\Contact\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Amanatjuwel\Contact\Models\Contact;

use Amanatjuwel\Contact\Jobs\SendEmailJob;

use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
 

    public function index()
    {	
        return view('contact::index');
    }

    public function store(Request $request)
    {	
        //log
    	Log::info('Email Queued!'); 

        //queue
        dispatch(new SendEmailJob($request->name,$request->phone));

        //store to database
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->save(); 

        return redirect(route('contact'));
    }

    
}
