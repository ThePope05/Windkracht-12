<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Invite;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

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
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        $user = Invite::create([
            'name' => $request->name,
            'email' => $request->email,
            'token' => bin2hex(random_bytes(16)),
        ]);

        return redirect('welcome');
    }

    public function activate(Request $request): view
    {
        $invite = Invite::where('token', $request->token)->first();

        return view('auth.activate', [
            'invite' => $invite,
        ]);
    }

    public function activateAccount(Request $request)
    {
        $invite = Invite::where('email', $request->email)->first();

        if ($invite) {
            $user = User::create([
                'name' => $invite->name,
                'email' => $invite->email,
                'password' => Hash::make($request->password),
            ]);

            $invite->claimed = true;

            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
        }

        return redirect()->back();
    }
}
