<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReceiveInquiry;
use App\Mail\ConfirmationInquiry;

class InquiryController extends Controller
{
    public function sendInquiry(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $details = $request->only('name', 'email', 'subject', 'message');

        // Send email to admin
        Mail::to('halfaruqy@gmail.com')->queue(new ReceiveInquiry($details));
        Mail::to('contact@alfaruqy.me')->queue(new ReceiveInquiry($details));

        // Send confirmation email to user
        Mail::to($details['email'])->queue(new ConfirmationInquiry($details));

        return response()->json(['message' => 'Inquiry sent successfully!']);
    }
}
