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
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Mail\ActivateAccount;

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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:users|unique:invites',
            'email' => 'required|string|email|max:255|unique:users|unique:invites',
        ]);


        $invite = Invite::create([
            'name' => $request->name,
            'email' => $request->email,
            'token' => bin2hex(random_bytes(16)),
            'last_sent_at' => now(),
        ]);

        Mail::to($invite->email)->send(new ActivateAccount($invite->email));

        return view('welcome', [
            'invite' => $invite,
        ]);
    }

    public function resend(Request $request): RedirectResponse
    {
        $invite = Invite::where('email', $request->email)->first();

        if ($invite && $invite->claimed === false && $invite->last_sent_at < now()->subMinutes(5)) {
            Mail::to($invite->email)->send(new ActivateAccount($invite->email));
            $invite->last_sent_at = now();
        }

        return redirect()->back();
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
