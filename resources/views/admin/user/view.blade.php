@extends('admin.layouts.app')
@if (isset($page_title) && $page_title != '')
    @section('title', $page_title . ' | ' . config('app.name'))
@else
    @section('title', config('app.name'))
@endif
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-striped">
                                    <th class="text-center" colspan="2" style="font-weight: bold;">User Details</th>
                                    <tr>
                                        <th class="th-width">User Name</th>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <th class="th-width">User Email</th>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <th class="th-width">User Mobile Number</th>
                                        <td>{{ $user->mobile_number }}</td>
                                    </tr>
                                    <tr>
                                        <th class="th-width">User Image</th>
                                        <td>
                                            @if ($user->image != '' && \File::exists(public_path('uploads/users/' . $user->image)))
                                                <img src="{{ asset('uploads/users/' . $user->image) }}" alt="User Image" style="height: 100px; width: 100px;">
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="table-responsive text-nowrap">
                                <table class="table table-striped">
                                    <th class="text-center" colspan="2" style="font-weight: bold;">Address Details</th>
                                    <tr>
                                        <th class="th-width">State Name</th>
                                        <td>{{ isset($user->state) ? $user->state->name : '-' }}</td>
                                    </tr>
                                    <tr>
                                        <th class="th-width">City Name</th>
                                        <td>{{ isset($user->city) ? $user->city->name : '-' }}</td>
                                    </tr>
                                    <tr>
                                        <th class="th-width">Address Line 1</th>
                                        <td>{{ $user->address_line_1 }}</td>
                                    </tr>
                                    <tr>
                                        <th class="th-width">Address Line 2</th>
                                        <td>{{ $user->address_line_2 }}</td>
                                    </tr>
                                    <tr>
                                        <th class="th-width">Pincode</th>
                                        <td>{{ $user->pincode }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
