<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class EnquiryController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
            'enquiry_type' => 'required',
            'description' => 'required',
        ]);

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'enquiry_type' => $request->enquiry_type,
            'description' => $request->description,
        ];

        try {
            Mail::send('emails.enquiry', $data, function ($message) use ($data) {
                $message->from($data['email'], $data['first_name'].' '.$data['last_name'])
                        ->to(['hello@thegilroy.au', 'events@thegilroy.au'], 'The Gilroy Events')
                        ->replyTo($data['email'], $data['first_name'].' '.$data['last_name'])
                        ->subject('📩 New Event Enquiry from '.$data['first_name'].' '.$data['last_name']);
            });

            Log::info('Mail sent successfully', $data);

        } catch (\Exception $e) {
            Log::error('Mail failed', ['error' => $e->getMessage()]);
            return back()->with('error', 'Email failed: '.$e->getMessage());
        }

        return back()->with('success', 'Thank you for your enquiry! We will get back to you soon.');
    }
}
