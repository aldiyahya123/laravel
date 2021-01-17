<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\belajarLaravelEmail;
use App\User;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index() {

        $users = User::all();

        foreach ($users as $user) {

            Mail::to($user->email)->send(new belajarLaravelEmail($user));

        }

        return "Email Telah dikirim";

    }
}
