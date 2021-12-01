<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        return view('home');
    }

    public function donate_now()
    {
        return view('donate_now');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contact_store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $phone = $request->phone;
        $message = $request->message;

        $msg = <<<EOT
            Name    : $name
            Email   : $email
            Subject : $subject
            Phone   : $phone
            Message : $message
        EOT;

        mail("surelastmail@gmail.com", $subject, $msg);
        mail($email, $subject, $msg);

        return back()
            ->with('success_message', 'Your message was sent successfully.');
    }

    public function donate_now_store()
    {
    }

    public function gallery()
    {

        $photos = [];
        foreach (range(1, 13) as $number) {
            $photos[] = asset("images/gallery/photo_$number.jpg");
        }

//        dd($photos);
        return view('gallery', compact('photos'));
    }

    public function project()
    {
        return view('project');
    }

    public function membership()
    {
        return view('membership');
    }
}
