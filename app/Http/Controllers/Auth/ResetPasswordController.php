<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ResetPasswordController extends Controller
{ use ResetsPasswords;

    // Show form to reset password
    public function showResetForm($token)
    {
        return view('auth.passwords.reset', ['token' => $token]);
    }

    // public function submitResetPasswordForm(Request $request)
    // {
    //     // Validation
    //     $request->validate([
    //         'token' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required|min:8',
    //     ]);

    //     // Token Validation
    //     $tokenData = DB::table('password_resets')
    //                    ->where('token', $request->token)
    //                    ->where('email', $request->email)
    //                    ->first();

    //     if (!$tokenData) {
    //         return back()->withErrors(['message' => 'The token is invalid.']);
    //     }

    //     // Find the user and update the password
    //     $user = User::where('email', $request->email)->first();
    //     if (!$user) {
    //         return back()->withErrors(['message' => 'We can\'t find a user with that email address.']);
    //     }

    //     $user->password = Hash::make($request->password);
    //     $user->save();

    //     // Delete the token
    //     DB::table('password_resets')->where('email', $request->email)->delete();

    //     // Redirect to the login page with success message
    //     return redirect()->route('auth.login')->with('status', 'Your password has been reset successfully.');
    // }



    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        try {
            // Find the user by email
            $user = User::where('email', $request->email)->first();

            if (!$user) {
                return back()->withErrors(['email' => 'We can\'t find a user with that email address.']);
            }

            // Update the user's password
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('auth.login')->with('status', 'Your password has been reset successfully.');

        } catch (\Exception $e) {
            Log::error('Failed to reset password: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to reset password. Please try again.']);
        }
    }

    }

    // public function showResetPasswordForm($token) {
    //     $tokenExists = DB::table('password_resets')->where('token', $token)->first();

    //     if (!$tokenExists) {
    //         return redirect()->route('forgot.password.get')->withErrors(['token' => 'Invalid or expired password reset token.']);
    //     }

    //     return view('auth.passwords.reset', ['token' => $token]);
    // }

    // public function submitResetPasswordForm(Request $request) {
    //     $request->validate([
    //         'token' => 'required',
    //         'email' => 'required|email|exists:users,email',
    //         'password' => 'required|confirmed|min:6',
    //     ]);

    //     $passwordReset = DB::table('password_resets')->where([
    //         ['token', $request->token],
    //         ['email', $request->email],
    //     ])->first();

    //     if (!$passwordReset) {
    //         return back()->withErrors(['email' => 'Invalid token or email.']);
    //     }

    //     $user = User::where('email', $passwordReset->email)->first();
    //     $user->password = Hash::make($request->password);
    //     $user->save();

    //     // Delete the password reset token
    //     DB::table('password_resets')->where('email', $user->email)->delete();

    //     // Optionally, log in the user
    //     Auth::login($user);

    //     return redirect()->route('home')->with('status', 'Your password has been reset!');
    // }

