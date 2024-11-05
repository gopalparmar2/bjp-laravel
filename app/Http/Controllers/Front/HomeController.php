<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Spatie\Image\Enums\ImageDriver;
use Spatie\Image\Image;
use App\Models\User;
use App\Models\State;
use App\Models\District;
use App\Models\Pincode;
use Validator;
use File;
use Auth;

class HomeController extends Controller
{
    public function index() {
        try {
            $data = [];
            $data['page_title'] = 'Home';

            return view('front.index', $data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

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

    public function updateUserImage(Request $request) {
        try {
            if ($request->ajax()) {
                $rules = [
                    'image' => 'required|mimes:jpg,jpeg,png|max:10240'
                ];

                $messages = [
                    'image.required' => 'The image field is required.',
                    'image.mimes' => 'Please insert image only.',
                    'image.max' => 'Image should be less than 10 MB.',
                ];

                $validator = Validator::make($request->all(), $rules, $messages);

                if ($validator->fails()) {
                    return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
                }

                if ($image = $request->file('image')) {
                    $userFolderPath = public_path('uploads/users/');
                    if (!File::isDirectory($userFolderPath)) {
                        File::makeDirectory($userFolderPath, 0777, true, true);
                    }

                    $user = Auth::user();

                    if ($user->image != '') {
                        $userImage = public_path('uploads/users/'.$user->image);

                        if (File::exists($userImage)) {
                            unlink($userImage);
                        }
                    }

                    $userImage = date('YmdHis') . "." . $image->extension();
                    Image::useImageDriver(ImageDriver::Gd)->loadFile($image->path())->optimize()->save($userFolderPath.$userImage);
                    $user->image = $userImage;
                    $user->save();

                    $response['success'] = true;
                    $response['image'] = asset('uploads/users/'.$user->image);
                    $response['message'] = 'Image updated successfully.';

                    return response()->json($response);
                }

                $response['success'] = false;
                $response['message'] = 'Something went wrong.';

                return response()->json($response);
            }
        } catch (\Exception $e) {
            $response['success'] = false;
            $response['message'] = $e->getMessage();

            return response()->json($response);
        }
    }

    public function storeUserDetails(Request $request) {
        try {
            dd($request->all());
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

    public function thankYou() {
        try {
            $data = [];
            $data['page_title'] = 'Thank You';

            return view('front.user.thank_you', $data);
        } catch (\Exception $e) {
            Session::flash('alert-message', $e->getMessage());
            Session::flash('alert-class','error');

            return redirect()->back();
        }
    }
}
