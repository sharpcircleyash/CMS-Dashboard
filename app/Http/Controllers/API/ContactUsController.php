<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Models\Contact;
use App\Mail\ContactUsMail;

class ContactUsController extends Controller
{
    public function index(Request $request) {
        $validation = validator::make($request->all(),[
            'name' => ['required', 'string'],
            'email' => ['required','email'],
            'subject' => ['required','min:5','string'],
            'message' => ['required','min:10'],
        ],[]);
        if($validation->fails()) return response()->json(['success' => false,'message' => $validation->errors()->first(),'data' => []],400);

        try {
            Mail::to(env('MAIL_TO_ADMIN'))->send(new ContactUsMail($request->email,$request->name,$request->subject,$request->message));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return response()->json(['success' => true, 'message' => 'Contact form submitted.','data' => []]);
    }
}
