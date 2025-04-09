<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Permation;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {

        $employees = \App\Models\Employee::all();
        $permations = \App\Models\Permation::all();
        return view('auth.register', compact('employees', 'permations'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            // 'name' =>     ['required', 'string', 'max:255'],
            'username' => ['required', 'string',   'max:255', 'unique:' . User::class],
            'pr_id' => ['required', 'integer',   'max:15', 'exists:permations,id'],
            'manager_id' => 'required|integer|exists:employees,id|unique:users,manager_id',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // @dd(request()->all());
        $user = User::create([
            'username' => $request->username,
            'manager_id' => $request->manager_id,
            'pr_id' => $request->pr_id,
            // 'phone' => $request->phone,
            // 'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if ($user) {
            $employee = Employee::find($request->manager_id);
            return redirect(route('register', absolute: false))
                ->with('success', 'تم تسجيل المستخدم بنجاح');
        } else {
            return redirect()->back()->withErrors(['error' => 'Failed to create user.']);
        }

        // event(new Registered($user));
        // Auth::login($user);

    }
}
