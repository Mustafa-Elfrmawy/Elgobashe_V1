<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user_u = \App\Models\User::where('username', $request->username)->first();

        $department = \App\Models\Department::where('id', $user_u->manager_id)->first();

        $data = [ "name" =>$user_u->username , "department" => $department->name , "id" => $user_u->id , "manager_id" => $user_u->manager_id]; 

        if ($user_u) {
            $user_u->last_login = now();
            $user_u->save();

            session()->put('user', $data);
            return redirect()->intended(route('index', absolute: false));
        } else {
            return redirect()->back()->withErrors(['username' => 'The provided username does not exist.']);
        }
    }






    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
