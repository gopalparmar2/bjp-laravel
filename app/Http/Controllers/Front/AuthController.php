<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use Session;
use Auth;

class AuthController extends Controller
{
    public function showVerifyOtpForm() {
        try {
            $data = [];
            $data['page_title'] = 'Verify Otp';

            $isOtpVerificationOn = \Config::get('app.isOtpVerificationOn');

            if ($isOtpVerificationOn) {
                return view('front.auth.verify_otp', $data);
            }

            return redirect()->route('front.store.user.details');
        } catch (\Exception $e) {
            Session::flash('alert-message', $e->getMessage());
            Session::flash('alert-class','error');

            return redirect()->back();
        }
    }

    public function verifyOtp(Request $request) {
        try {
            dd($request->all());

            if ($user->otp === $inputOtp && Carbon::now()->lt($user->otp_expires_at)) {
                // OTP is valid
            } else {
                // OTP is invalid or expired
            }
        } catch (\Exception $e) {
            Session::flash('alert-message', $e->getMessage());
            Session::flash('alert-class','error');

            return redirect()->back();
        }
    }

    public function showUserDetailsForm() {
        try {
            $data = [];
            $data['page_title'] = 'Provide Details';

            return view('front.user.details', $data);
        } catch (\Exception $e) {
            Session::flash('alert-message', $e->getMessage());
            Session::flash('alert-class','error');

            return redirect()->back();
        }
    }

    public function storeUserDetails(Request $request) {
        try {
            dd($request->all());

            if ($user->otp === $inputOtp && Carbon::now()->lt($user->otp_expires_at)) {
                // OTP is valid
            } else {
                // OTP is invalid or expired
            }
        } catch (\Exception $e) {
            Session::flash('alert-message', $e->getMessage());
            Session::flash('alert-class','error');

            return redirect()->back();
        }
    }

    public function showUpdateDetailsForm() {
        try {
            $data = [];
            $data['page_title'] = 'Update Details';

            return view('front.user.update_details', $data);
        } catch (\Exception $e) {
            Session::flash('alert-message', $e->getMessage());
            Session::flash('alert-class','error');

            return redirect()->back();
        }
    }

    public function referral() {
        try {
            $data = [];
            $data['page_title'] = 'Refferal';

            return view('front.user.referral', $data);
        } catch (\Exception $e) {
            Session::flash('alert-message', $e->getMessage());
            Session::flash('alert-class','error');

            return redirect()->back();
        }
    }
}
