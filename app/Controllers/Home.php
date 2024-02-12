<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return redirect()->route('login');
    }

    public function dashboard() {
        $user = \auth()->user();

        print_r($user->username);
        return view('dashboard');
    }

}
