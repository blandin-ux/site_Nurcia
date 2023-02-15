<?php

namespace App\Http\Controllers;

use App\Jobs\SendWelcomUserJob;
use App\Mail\WelcomeUserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //SendWelcomUserJob::dispatch(Auth::user());
        return view('home');
    }
}
