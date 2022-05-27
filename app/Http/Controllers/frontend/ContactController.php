<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function addcontact(Request $request)
    {
        $data = new Contact;
        $data->name=$request->name;
        $data->mobile_no=$request->mobile_no;
        $data->email=$request->email;
        $data->message=$request->message;
        $data->save();
        return redirect('/thankyou');
    }
}
