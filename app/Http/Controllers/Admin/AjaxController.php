<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;

class AjaxController extends Controller
{
    public function getStates(Request $request) {
        $query = State::where('status', 1);

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
}
