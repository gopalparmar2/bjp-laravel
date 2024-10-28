<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplySaveJob;
use App\Models\User;
use App\Models\Job;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index() {
        try {
            $data = [];
            $data['page_title'] = 'Dashboard';

            $data['breadcrumb'][] = array(
                'link' => route('admin.index'),
                'title' => 'Dashboard'
            );

            $data['breadcrumb'][] = array(
                'title' => 'Dashboard'
            );

            return view('admin.dashboard', $data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }
}
