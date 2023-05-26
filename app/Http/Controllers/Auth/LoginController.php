<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class LoginController
{
    public function handle(Request $request)
    {
        if ($request->isMethod('post')) {
            return $this->postMethod($request);
        }

        return $this->getMethod($request);
    }

    protected function getMethod(Request $request)
    {
        return view('auth.login');
    }

    protected function postMethod(Request $request)
    {
        return route('dashboard');
    }
}
