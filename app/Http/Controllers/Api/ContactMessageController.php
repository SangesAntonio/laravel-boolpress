<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();
        return response()->json($data);

        //Mail::to('adminantonio@blop.com')->send(new ContactMessageMail());
    }
}
