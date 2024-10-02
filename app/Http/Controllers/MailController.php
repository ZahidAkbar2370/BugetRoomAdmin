<?php

namespace App\Http\Controllers;

use App\Models\MailMessage;
use Illuminate\Http\Request;

class MailController extends Controller
{
    function create() {
        return view('admin.mail.create');
    }

    // function index() {

    // }

    function store(Request $request) {
        MailMessage::create([
            'to' => $request->to,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

    }
}
