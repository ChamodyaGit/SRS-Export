<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.pages.publicArea.index');
    }

    public function aboutUs()
    {
        return view('home.pages.publicArea.about');
    }

    public function contactUs()
    {
        return view('home.pages.publicArea.contact');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'phone' => 'required',
            'email_address' => 'required|email',
            'contact_subject' => 'required',
            'message' => 'required',
        ]);

        try {
            $mailData = [
                'name' => $request->first_name,
                'phone' => $request->phone,
                'email' => $request->email_address,
                'subject' => $request->contact_subject,
                'message' => $request->message,
            ];
            // dd($mailData);

            Mail::to('chamodya152@gmail.com')->send(new ContactMessage($mailData));

            return "Email sent successfully";
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error sending email'], 500);
        }
    }
}
