<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
            'remember' => 'nullable|boolean'
        ]);

        // Attempt to log the user in
        if (!auth()->attempt(request()->only('email', 'password'), request('remember'))) {
            return back()->withErrors([
                'message' => __('auth.failed')
            ]);
        }

        // Redirect
        $user = auth()->user();
        if ($user->can('admin.home')) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('home');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
