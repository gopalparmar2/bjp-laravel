<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssemblyConstituency;
use App\Models\District;
use App\Models\Pincode;
use App\Models\State;
use App\Models\User;

class AjaxController extends Controller
{
    public function getStates(Request $request) {
        $query = State::whereStatus(1);

        if ($request->search) {
            $query = $query->where('name', 'like', '%' .$request->search. '%');
        }

        $query = $query->simplePaginate(50);

        $no = 0;
        $data = array();

        foreach($query as $item) {
            $data[$no]['id'] = $item->id;
            $data[$no]['text'] = $item->name;
            $no++;
        }

        $page = true;

        if (empty($query->nextPageUrl())) {
            $page = false;
        }

        return ['results' => $data, 'pagination' => ['more' => $page]];
    }

    public function getAllStates() {
        try {
            $states = State::whereStatus(1)->get();
            $resHtml = '';

            foreach ($states as $state) {
                $resHtml .= '<li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root stateLi" tabindex="0" role="option" aria-selected="false" data-id="'.$state->id.'" data-name="'.$state->name.'"> '.$state->name.' <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span> </li>';
            }

            $response['success'] = true;
            $response['html'] = $resHtml;

            return response()->json($response);
        } catch (\Exception $e) {
            $response['success'] = false;
            $response['message'] = $e->getMessage();

            return response()->json($response);
        }
    }

    public function getDistrictAndAssemblies(Request $request) {
        try {
            $districts = District::where('state_id', $request->stateId)->whereStatus(1)->get();
            $assemblies = AssemblyConstituency::where('state_id', $request->stateId)->whereStatus(1)->get();
            $districtHtml = '';
            $assemblyHtml = '';

            foreach ($districts as $district) {
                $districtHtml .= '<li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root districtLi" tabindex="0" role="option" aria-selected="false" data-id="'.$district->id.'" data-name="'.$district->name.'"> '.$district->name.' <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span> </li>';
            }

            foreach ($assemblies as $assembly) {
                $assemblyHtml .= '<li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root assemblyLi" tabindex="0" role="option" aria-selected="false" data-id="'.$assembly->id.'" data-name="'.$assembly->name.'"> '.$assembly->name.' <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span> </li>';
            }

            $response['success'] = true;
            $response['districtHtml'] = $districtHtml;
            $response['assemblyHtml'] = $assemblyHtml;

            return response()->json($response);
        } catch (\Exception $e) {
            $response['success'] = false;
            $response['message'] = $e->getMessage();

            return response()->json($response);
        }
    }

    public function getPincodeDetails(Request $request) {
        try {
            $pincode = Pincode::whereStatus(1)->where('pincode', $request->pincode)->first();
            $response['status'] = false;

            if (isset($pincode)) {
                $response['success'] = true;
                $response['stateId'] = null;
                $response['stateName'] = null;
                $response['districtId'] = null;
                $response['districtName'] = null;

                if ($pincode->state) {
                    $response['stateId'] = $pincode->state->id;
                    $response['stateName'] = $pincode->state->name;
                }

                if ($pincode->district) {
                    $response['districtId'] = $pincode->district->id;
                    $response['districtName'] = $pincode->district->name;
                }

                $districts = District::where('state_id', $pincode->state->id)->whereStatus(1)->get();
                $assemblies = AssemblyConstituency::where('state_id', $pincode->state->id)->whereStatus(1)->get();
                $districtHtml = '';
                $assemblyHtml = '';

                foreach ($districts as $district) {
                    $districtHtml .= '<li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root districtLi" tabindex="0" role="option" aria-selected="false" data-id="'.$district->id.'" data-name="'.$district->name.'"> '.$district->name.' <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span> </li>';
                }

                foreach ($assemblies as $assembly) {
                    $assemblyHtml .= '<li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root assemblyLi" tabindex="0" role="option" aria-selected="false" data-id="'.$assembly->id.'" data-name="'.$assembly->name.'"> '.$assembly->name.' <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span> </li>';
                }

                $response['districtHtml'] = ($districtHtml != '') ? $districtHtml : null;
                $response['assemblyHtml'] = ($assemblyHtml != '') ? $assemblyHtml : null;
            }

            return response()->json($response);
        } catch (\Exception $w) {
            $response['success'] = false;
            $response['message'] = $e->getMessage();

            return response()->json($response);
        }
    }

    public function checkReferralCode(Request $request) {
        try {
            $value = $request->input('value');
            $request->type = $request->input('type');

            if ($request->type == 'referral') {
                $user = User::whereStatus(1)->where('referral_code', $request->value)->first();
            } elseif ($request->type == 'mobile') {
                $user = User::whereStatus(1)->where('mobile_number', $request->value)->first();
            } else {
                $response['success'] = false;
            }

            if ($user) {
                $obfuscatedName = $this->obfuscateName($user->name);

                $response['success'] = true;
                $response['user_id'] = $user->id;
                $response['referred_name'] = $obfuscatedName;
            } else {
                $response['success'] = false;
            }

            return response()->json($response);
        } catch (\Exception $e) {
            $response['success'] = false;
            $response['message'] = $e->getMessage();

            return response()->json($response);
        }
    }

    private function obfuscateName($name) {
        $parts = explode(' ', $name);
        $obfuscated = [];

        foreach ($parts as $part) {
            $obfuscated[] = substr($part, 0, 1) . str_repeat('*', strlen($part) - 2) . substr($part, -1);
        }

        return implode(' ', $obfuscated);
    }
}
