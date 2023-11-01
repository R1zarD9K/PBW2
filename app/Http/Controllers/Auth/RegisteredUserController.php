<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     * Nama     : Davin Wahyu Wardana
     * NIM      : 6706223003
     * Kelas    : 4603
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string', 'max:100'],
            'fullname' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => ['required', 'string', 'max:100'],
            'birthdate' => ['required', 'date'],
            'phonenumber' => ['required', 'string', 'max:20'],
            'religion' => ['required', 'string', 'max:20'],
            'gender' => ['required', 'integer', 'min:0', 'max:1'],
            // 0 male, 1 female
        ]);

        $user = User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'phoneNumber' => $request->phonenumber,
            'religion' => $request->religion,
            'gender' => $request->gender,
        ]);

        event(new Registered($user));

        if (url()->current() == route('register')) {
            Auth::login($user);
            return redirect(RouteServiceProvider::HOME);
        } else {
            Session::flash('success', 'User berhasil ditambahkan!');
            return redirect()->route('user.registrasi');
        }
    }
}