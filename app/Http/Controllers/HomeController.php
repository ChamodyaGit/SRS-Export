<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.pages.publicArea.index');
    }

    public function gallery()
    {
        return view('home.pages.publicArea.gallery');
    }

    public function aboutUs()
    {
        return view('home.pages.publicArea.about');
    }

    public function contactUs()
    {
        return view('home.pages.publicArea.contact');
    }

    public function albaPage()
    {
        return view('home.pages.publicArea.category.Alba.alba');
    }

    public function mexicanPage()
    {
        return view('home.pages.publicArea.category.Mexican.mexican');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        try {
            // Prepare email details
            $details = [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ];

            // Send the email
            Mail::to('sampathwkd@gmail.com')->send(new ContactMail($details));

            return response()->json(['success' => 'Your message has been sent successfully!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to send email. Please try again later.'], 500);
        }
    }
}
