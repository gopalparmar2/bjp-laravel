<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Qualification;
use DataTables;
use Validator;
use Session;
use Auth;

class QualificationController extends Controller
{
    public function __construct() {
        $this->middleware('permission:qualification-list', ['only' => ['index']]);
        $this->middleware('permission:qualification-add', ['only' => ['create', 'store']]);
        $this->middleware('permission:qualification-edit', ['only' => ['edit', 'store', 'change_status']]);
        $this->middleware('permission:qualification-delete', ['only' => ['destroy']]);
    }

    public function index() {
        try {
            $data = [];
            $data['page_title'] = 'Qualification List';

            if (Auth::user()->can('qualification-add')) {
                $data['btnadd'][] = array(
                    'link' => route('admin.qualification.create'),
                    'title' => 'Add Qualification',
                );
            }

            $data['breadcrumb'][] = array(
                'link' => route('admin.index'),
                'title' => 'Dashboard'
            );

            $data['breadcrumb'][] = array(
                'title' => 'Qualification List'
            );

            return view('admin.qualification.index', $data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function datatable(Request $request) {
        $qualification = Qualification::query();

        if ($request->has('filter')) {
            if ($request->filter['fltStatus'] != '') {
                $qualification->where('status', $request->filter['fltStatus']);
            }

            if ($request->filter['date'] != '') {
                $date = explode(' - ', $request->filter['date']);
                $from_date = date('Y-m-d', strtotime($date[0]));
                $to_date = date('Y-m-d', strtotime($date[1]));

                if ($from_date == $to_date) {
                    $qualification->whereDate('created_at', $from_date);
                } else {
                    $qualification->whereBetween('created_at', [$from_date, $to_date]);
                }
            }
        }

        return DataTables::eloquent($qualification)
            ->addColumn('action', function ($qualification) {
                $action = '';
                if (Auth::user()->can('qualification-edit')) {
                    $action .= '<a href="'.route('admin.qualification.edit', $qualification->id).'" class="btn btn-outline-secondary btn-sm" title="Edit"><i class="fas fa-pencil-alt"></i></a>&nbsp;';
                }

                if (Auth::user()->can('qualification-delete')) {
                    $action .= '<a class="btn btn-outline-secondary btn-sm btnDelete" data-url="'.route('admin.qualification.destroy').'" data-id="'.$qualification->id.'" title="Delete"><i class="fas fa-trash-alt"></i></a>';
                }

                return $action;
            })
            ->editColumn('status', function ($qualification) {
                $status = '';

                if (Auth::user()->can('qualification-edit')) {
                    $checkedAttr = $qualification->status == 1 ? 'checked' : '';
                    $status = '<div class="form-check form-switch form-switch-md mb-3" dir="ltr"> <input class="form-check-input js-switch" type="checkbox" data-id="' . $qualification->id . '" data-url="' . route('admin.qualification.change.status') . '" ' . $checkedAttr . '> </div>';
                } else {
                    $status = ($qualification->status == 1) ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">InActive</span>';
                }

                return $status;
            })
            ->editColumn('created_at', function($qualification) {
                return date('d/m/Y h:i A', strtotime($qualification->created_at));
            })
            ->orderColumn('id', function ($query, $order) {
                $query->orderBy('id', $order);
            })
            ->orderColumn('name', function ($query, $order) {
                $query->orderBy('name', $order);
            })
            ->orderColumn('status', function ($query, $order) {
                $query->orderBy('status', $order);
            })
            ->orderColumn('created_at', function ($query, $order) {
                $query->orderBy('created_at', $order);
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }

    public function create() {
        try {
            $data['page_title'] = 'Add Qualification';

            $data['breadcrumb'][] = array(
                'link' => route('admin.index'),
                'title' => 'Dashboard'
            );

            if (Auth::user()->can('qualification-list')) {
                $data['breadcrumb'][] = array(
                    'link' => route('admin.qualification.index'),
                    'title' => 'Qualification List'
                );
            }

            $data['breadcrumb'][] = array(
                'title' => 'Add Qualification'
            );

            return view('admin.qualification.create', $data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function store(Request $request) {
        try {
            $rules = [
                'name' => 'required',
            ];

            $messages = [
                'name.required' => 'The name field is required.',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            if ($validator->fails()) {
                if ($request->qualification_id != '') {
                    return redirect()->route('admin.qualification.edit', $request->qualification_id)
                                ->withErrors($validator)
                                ->withInput();
                } else {
                    return redirect()->route('admin.qualification.create')
                                ->withErrors($validator)
                                ->withInput();
                }
            } else {
                if ($request->qualification_id != '') {
                    $qualification = Qualification::where('id', $request->qualification_id)->first();
                    $action = 'updated';
                } else {
                    $qualification = new Qualification();
                    $action = 'added';
                }

                $qualification->name = $request->name;
                $qualification->status = ($request->has('status') && $request->status == 'on') ? 1 : 0;

                if ($qualification->save()) {
                    Session::flash('alert-message', "Qualification ".$action." successfully.");
                    Session::flash('alert-class','success');

                    return redirect()->route('admin.qualification.index');
                } else {
                    Session::flash('alert-message', "Qualification not ".$action.".");
                    Session::flash('alert-class','error');

                    if ($request->qualification_id != '') {
                        return redirect()->route('admin.qualification.edit', $request->qualification_id);
                    } else {
                        return redirect()->route('admin.qualification.create');
                    }
                }
            }
        } catch (\Exception $e) {
            Session::flash('alert-message', $e->getMessage());
            Session::flash('alert-class','error');

            if ($request->has('qualification_id')) {
                return redirect()->route('admin.qualification.edit', $request->qualification_id);
            } else {
                return redirect()->route('admin.qualification.create');
            }
        }
    }

    public function edit($id) {
        try {
            $data['page_title'] = 'Edit Qualification';

            $data['breadcrumb'][] = array(
                'link' => route('admin.index'),
                'title' => 'Dashboard'
            );

            if (Auth::user()->can('qualification-list')) {
                $data['breadcrumb'][] = array(
                    'link' => route('admin.qualification.index'),
                    'title' => 'Qualification List'
                );
            }

            $data['breadcrumb'][] = array(
                'title' => 'Edit Qualification'
            );

            $qualification = Qualification::find($id);


            if ($qualification) {
                $data['qualification'] = $qualification;

                return view('admin.qualification.create', $data);
            } else {
                return abort(404);
            }
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function change_status(Request $request) {
        if ($request->ajax()) {
            try {
                $qualification = Qualification::find($request->id);
                $qualification->status = $request->status;

                if ($qualification->save()) {
                    $response['success'] = true;
                    $response['message'] = "Status has been changed successfully.";
                } else {
                    $response['success'] = false;
                    $response['message'] = "Status has been changed unsuccessfully.";
                }

                return response()->json($response);
            } catch (\Exception $e) {
                return abort(404);
            }
        } else {
            return abort(404);
        }
    }

    public function destroy(Request $request) {
        try {
            if ($request->ajax()) {
                $qualification = Qualification::where('id', $request->id)->first();

                if ($qualification->delete()) {
                    $return['success'] = true;
                    $return['message'] = "Qualification deleted successfully.";
                } else {
                    $return['success'] = false;
                    $return['message'] = "Qualification not found.";
                }

                return response()->json($return);
            }
        } catch (\Exception $e) {
            return abort(404);
        }
    }
}
