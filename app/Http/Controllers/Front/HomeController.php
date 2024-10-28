<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\State;
use App\Models\District;
use App\Models\Pincode;
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
}
