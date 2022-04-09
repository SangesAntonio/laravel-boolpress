<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMessageMail;

class ContactMessageController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'mail' => 'required |email',
            'message' => 'required'
        ], [
            'email.required' => 'Email obbligatoria',
            'mail.email' => 'L\'email non è valida',
            'message.required' => 'Il messaggio è obbligatorio'

        ]);

        if ($validator->fails()) {
            return response()->json(['errors', $validator->errors()]);
        }
        $mail = new ContactMessageMail($data);
        Mail::to(env('MAIL_ADMIN_ADDRESS'))->send($mail);
        return response('mail mandata', 204);
    }
}
