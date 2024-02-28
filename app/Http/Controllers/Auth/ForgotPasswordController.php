<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Mail\ResetPasswordEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm(Request $request)
    {
        return view('clients.auths.confirmPassword');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            $resetPasswordUrl = url("password/reset/{$request->token}");

            Mail::to($request->email)->send(new ResetPasswordEmail($resetPasswordUrl));

            return back()->with('msg', "Bạn đã có link để đặt lại mật khẩu. Vui lòng kiểm tra hộp thư email của bạn.");
        } else {
            return back()->withErrors(['email' => 'Email không hợp lệ.']);
        }
    }

    public function showResetForm($token)
    {
        return view('clients.auths.resetPassword', ['token' => $token, 'email' => request('email')]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'token' => 'required',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', trans($status));
        }

        return back()->withErrors(['email' => trans($status)]);
    }
}
