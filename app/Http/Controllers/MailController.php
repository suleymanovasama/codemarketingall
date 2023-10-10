<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function programPost(Request $request){

        $validator = Validator::make($request->all(), [
            'program' => 'required',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }

        Subscribe::create([
            'program' => $request->program,
            'email' => $request->email,
        ]);

        return response()->json(['success' => 'İstək uğurlu oldu.Əməkdaşlarımız sizinlə əlaqə saxlayacaq.']);
    }
    public function subscribeFirst(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }

        Subscribe::create([
            'email' => $request->email
        ]);

        return response()->json(['success' => 'İstək uğurlu oldu.Əməkdaşlarımız sizinlə əlaqə saxlayacaq.']);
    }
    public function subscribeFooter(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }

        Subscribe::create([
            'email' => $request->email,
        ]);

        return response()->json(['success' => 'İstək uğurlu oldu.Əməkdaşlarımız sizinlə əlaqə saxlayacaq.']);
    }
    public function trialLessons(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }

        Subscribe::create([
            'email' => $request->email,
        ]);

        return response()->json(['success' => 'İstək uğurlu oldu.Əməkdaşlarımız sizinlə əlaqə saxlayacaq.']);
    }
    public function programMailPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        $contact = Subscribe::create([
            'email'=>$request->email,
            'phone' => $request->phone,
        ]);
        $email = $contact->email;
        $full = $request->full;
        $part = $request->part;
        Mail::send('front.parts.mail-tmp',['part'=>$part,'full'=>$full],function($message) use($email){
            $message->to($email)->subject("CodeMarketing Program");
        });
        $contact->save();
        return redirect()->back()->with('success','İstək uğurlu oldu.Proqramı sizin elektron poçtunuza göndərdik.');
    }
    public function contactMain(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ]);

        $contact->save();
        return redirect()->back()->with('success','İstək uğurlu oldu.Əməkdaşlarımız sizinlə əlaqə saxlayacaq.');
    }
    public function programMailSubscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        $contact = Subscribe::create([
            'email'=>$request->email,
        ]);
        $contact->save();
        return redirect()->back()->with('success','İstək uğurlu oldu');
    }
    public function customMailSubscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'program' => 'required'
        ]);
        $contact = Subscribe::create([
            'email' => $request->email,
            'program' => $request->program
        ]);
        $contact->save();
        return redirect()->back()->with('success','İstək uğurlu oldu');
    }
}
