<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeUserMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class EntrepriseController extends Controller
{
    public function register()
    {
        return view('auth.register_vrai');
    }

    public function create()
    {
        $user = new User();
        $user->name = request()->name;
        $user->email = request()->email;
        $user->password = Hash::make(request()->password);
        $user->token = sha1(date('H:m:s'));//.Hash::make(date('H:m:s'));
        //dd($user);
        $user->save();
        Mail::to($user->email)->send(new WelcomeUserMail());
        return view('mail')->with(compact('user'));
    }

    public function confirm($token)
    {
        $user = User::where('token',$token)->first();
        if ($user) {
            $user = User::find($user->id);
            $user->token_actif = 1;
            $user->save();
            return redirect('/login');
        }
        else {
            return redirect('/');
        }
        //dd('Le token => '.$token);
    }
}
