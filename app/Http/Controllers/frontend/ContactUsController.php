<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function contactus(){
        return view('frontend.contactus');
    }
    public function createcontactus(Request $request){
        $record = new ContactUs();

        $validation = $this->validate($request,[
            'message'=>'required|string',
            'email'=>'required|string',

        ]);

        if($validation){

            $record->create([
                'message'=>$request->message,
                'email'=>$request->email,
            ]);

            return redirect()->back();
        }
    }
}
