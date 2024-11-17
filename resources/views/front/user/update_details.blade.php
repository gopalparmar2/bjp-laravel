@extends('front.layouts.app')

@section('styles')
    @parent

    <style>
        .css-yf8vq0-MuiSelect-nativeInput {
            opacity:1 !important;
            border: 0px !important;
        }
    </style>
@endsection

@section('content')
    <div class="bg-white main-container">
        @include('front.layouts.header')

        <div class="margin-second d-flex  align-items-center pd-heading" style="padding: 0px 25px;">
            <a href="{{ route('front.index') }}">
                <div>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.57 5.92969L3.5 11.9997L9.57 18.0697" stroke="#3F3D51" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M20.4999 12H3.66992" stroke="#3F3D51" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
            </a>

            <p class="m-0 fill-details-text">Update details</p>

            <div></div>
        </div>

        <div class="update-details-container">
            <div class="tab-container">
                <div class="update-details-tab active-tab" data-tab="personal" id="tabPersonal">Personal Details</div>
                <div class="update-details-tab" data-tab="family" id="tabFamily">Family </div>
                <div class="update-details-tab" data-tab="contact" id="tabContact">Contact </div>
            </div>

            <div class="tab-containers" id="divPersonalInfo">
                <div class="position-relative bg-white"></div>

                <div class="pp-main-container">
                    <div class="pp-sub-contt">
                        <div class="profile-pic-container">
                            @if (isset($user->image) && $user->image != '' && \File::exists(public_path('uploads/users/' . $user->image)))
                                <div class="MuiAvatar-root MuiAvatar-circular css-11fq0lf-MuiAvatar-root">
                                    <img src="{{ asset('uploads/users/' . $user->image) }}" alt="Profile Image" class="MuiAvatar-img css-1pqm26d-MuiAvatar-img">
                                </div>
                            @else
                                <div class="css-mkijz0-MuiAvatar-root">
                                    <svg class="css-10mi8st-MuiSvgIcon-root-MuiAvatar-fallback" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PersonIcon">
                                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                                        </path>
                                    </svg>
                                </div>
                            @endif
                        </div>

                        <button class="pp-upload-btn">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.345 12.2439L11.7967 3.79222L10.6183 2.61388L2.16667 11.0656V12.2439H3.345ZM4.03583 13.9106H0.5V10.3747L10.0292 0.845551C10.1854 0.689325 10.3974 0.601562 10.6183 0.601562C10.8393 0.601562 11.0512 0.689325 11.2075 0.845551L13.565 3.20305C13.7212 3.35932 13.809 3.57125 13.809 3.79222C13.809 4.01319 13.7212 4.22511 13.565 4.38138L4.03583 13.9106ZM0.5 15.5772H15.5V17.2439H0.5V15.5772Z" fill="#F15600"></path>
                            </svg>
                        </button>
                    </div>

                    @if (isset($user->image) && $user->image != '' && \File::exists(public_path('uploads/users/' . $user->image)))
                        <div class="profile-photo-label" id="profilePhotoLabel">Profile Photo</div>
                    @else
                        <div class="profile-photo-label" id="profilePhotoLabel">Upload Photo</div>
                    @endif
                </div>

                <div class="form-container">
                    <div class="divider-div"></div>

                    <div>
                        <div class="input-container">
                            <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                <div class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                    <input type="text" name="mobile_number" id="mobile_number" class="MuiInputBase-input-box MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input" placeholder="Mobile number" value="{{ auth()->user()->mobile_number }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider-div"></div>

                    <div class="double-field-wrapper">
                        <div class="dfw-contt-one">
                            <select class="select-input" name="salutation" id="salutation">
                                <option value="">Title</option>
                                <option class="option-select-input" value="mrs" {{ ((old('salutation') == 'mrs' || $user->salutation == 'mrs')) ? 'selected' : '' }}>Mrs</option>
                                <option class="option-select-input" value="mr" {{ ((old('salutation') == 'mr' || $user->salutation == 'mr')) ? 'selected' : '' }}>Mr</option>
                                <option class="option-select-input" value="ms" {{ ((old('salutation') == 'ms' || $user->salutation == 'ms')) ? 'selected' : '' }}>Ms</option>
                            </select>
                        </div>

                        <div class="separate"></div>

                        <div class="dfw-contt-two">
                            <div class="input-name">
                                <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                    <div class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                        <input type="text" name="name" id="name" class="MuiInputBase-input-box MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input" placeholder="Name *", value="{{ old('name', $user->name) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gender-container">
                        <div class="dob-field">
                            <div class="dob-field-one">
                                <div style="font-size: 16px; color: rgb(113, 111, 134);">D.O.B *</div>
                                <div style="display: flex; flex-direction: row; align-items: center; background-color: white; border-radius: 8px; justify-content: end; width: 100%;">
                                    <div class="MuiFormControl-root MuiTextField-root css-r0ibox-MuiFormControl-root-MuiTextField-root">
                                        <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-formControl MuiInputBase-adornedEnd Mui-readOnly MuiInputBase-readOnly css-o9k5xi-MuiInputBase-root-MuiOutlinedInput-root">
                                            <input type="text" name="dob" id="dob" class="!outline-0 focus:border-0 MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd Mui-readOnly MuiInputBase-readOnly css-nxo287-MuiInputBase-input-MuiOutlinedInput-input" placeholder="MM/DD/YYYY" autocomplete="off" value="{{ old('dob', date('m/d/Y', strtotime($user->dob))) }}">

                                            <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-1d3z3hw-MuiOutlinedInput-notchedOutline">
                                                <legend class="css-ihdtdm">
                                                    <span class="notranslate">&ZeroWidthSpace;</span>
                                                </legend>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div style="position: absolute; z-index: 0; margin-right: 10px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 2V5" stroke="#F15600" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M16 2V5" stroke="#F15600" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M16 3.5C19.33 3.68 21 4.95 21 9.65V15.83C21 19.95 20 22.01 15 22.01H9C4 22.01 3 19.95 3 15.83V9.65C3 4.95 4.67 3.69 8 3.5H16Z" stroke="#F15600" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M20.75 17.5996H3.25" stroke="#F15600" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path d="M12 8.25C10.77 8.25 9.73 8.92 9.73 10.22C9.73 10.84 10.02 11.31 10.46 11.61C9.85 11.97 9.5 12.55 9.5 13.23C9.5 14.47 10.45 15.24 12 15.24C13.54 15.24 14.5 14.47 14.5 13.23C14.5 12.55 14.15 11.96 13.53 11.61C13.98 11.3 14.26 10.84 14.26 10.22C14.26 8.92 13.23 8.25 12 8.25ZM12 11.09C11.48 11.09 11.1 10.78 11.1 10.29C11.1 9.79 11.48 9.5 12 9.5C12.52 9.5 12.9 9.79 12.9 10.29C12.9 10.78 12.52 11.09 12 11.09ZM12 14C11.34 14 10.86 13.67 10.86 13.07C10.86 12.47 11.34 12.15 12 12.15C12.66 12.15 13.14 12.48 13.14 13.07C13.14 13.67 12.66 14 12 14Z" fill="#F15600"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="dob-field-two">
                                <div style="font-size: 16px; color: transparent;">Age</div>
                                <div class="MuiFormControl-root MuiTextField-root age-input css-1rd8emk-MuiFormControl-root-MuiTextField-root">
                                    <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-formControl Mui-readOnly MuiInputBase-readOnly css-9ddj71-MuiInputBase-root-MuiOutlinedInput-root">
                                        <input type="text" name="age" id="age" placeholder="Age" class="MuiInputBase-input MuiOutlinedInput-input Mui-readOnly MuiInputBase-readOnly css-1t8l2tu-MuiInputBase-input-MuiOutlinedInput-input" value="{{ old('age', $user->age.' Yrs') }}" readonly>

                                        <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-1d3z3hw-MuiOutlinedInput-notchedOutline">
                                            <legend class="css-ihdtdm">
                                                <span class="notranslate">&ZeroWidthSpace;</span>
                                            </legend>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gender-label" style="margin-top: 10px;">Gender *</div>
                        <input type="hidden" name="gender" id="gender" value="{{ $user->gender }}">
                        <div class="chip-container">
                            <div class="chip {{ (old('gender') == 1 || $user->gender == 1) ? 'selected' : '' }}" data-value="1">Female</div>
                            <div class="chip {{ (old('gender') == 2 || $user->gender == 2) ? 'selected' : '' }}" data-value="2">Male</div>
                            <div class="chip {{ (old('gender') == 3 || $user->gender == 3) ? 'selected' : '' }}" data-value="3">Other</div>
                        </div>
                    </div>

                    <div>
                        <div>
                            <div class="input-container">
                                <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                    <div class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                        <input type="text" name="email" id="email" class="MuiInputBase-input-box MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input" placeholder="Email Id" value="{{ old('email', $user->email) }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <span style="color: red;" id="emailErr" class="d-none">Enter a valid email </span>
                    </div>

                    <div class="user-extra-form-container">
                        <div class="primary-dropdown-container">
                            <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                                <div class="MuiInputBase-root MuiInputBase-input-box MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root dropdown">
                                    <div tabindex="0" role="combobox" aria-controls=":ra:" aria-expanded="false" aria-haspopup="listbox" aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard" id="divReligionName" class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                        @if($user->religion_id != '')
                                            {{ $user->religion->name }}
                                        @endif
                                    </div>

                                    <input name="religion_id" id="religion_id" class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput {{ $user->religion_id != '' ? 'd-none' : '' }}" value="{{ old('religion_id', $user->religion_id) }}" placeholder="Religion">

                                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                                        <path d="M7 10l5 5 5-5z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="primary-dropdown-container">
                            <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                                <div class="MuiInputBase-root MuiInputBase-input-box MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root dropdown">
                                    <div tabindex="0" role="combobox" aria-controls=":ra:" aria-expanded="false" aria-haspopup="listbox" aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard" id="divCategoryName" class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                        @if($user->category_id != '')
                                            {{ $user->category->name }}
                                        @endif
                                    </div>

                                    <input name="category_id" id="category_id" class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput {{ $user->category_id != '' ? 'd-none' : '' }}" value="{{ old('category_id', $user->category_id) }}" placeholder="Category">

                                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                                        <path d="M7 10l5 5 5-5z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                            <div class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                <input type="text" name="caste" id="caste" class="MuiInputBase-input-box MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input" placeholder="Caste" value="{{ old('caste', $user->caste) }}">
                            </div>
                        </div>

                        <div class="primary-dropdown-container">
                            <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                                <div class="MuiInputBase-root MuiInputBase-input-box MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root dropdown">
                                    <div tabindex="0" role="combobox" aria-controls=":ra:" aria-expanded="false" aria-haspopup="listbox" aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard" id="divEducationName" class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                        @if ($user->education_id != '')
                                            {{ $user->education->name }}
                                        @endif
                                    </div>

                                    <input name="education_id" id="education_id" class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput {{ $user->education_id != '' ? 'd-none' : '' }}" value="{{ old('education_id', $user->education_id) }}" placeholder="Education">

                                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                                        <path d="M7 10l5 5 5-5z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="primary-dropdown-container">
                            <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                                <div class="MuiInputBase-root MuiInputBase-input-box MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root dropdown">
                                    <div tabindex="0" role="combobox" aria-controls=":ra:" aria-expanded="false" aria-haspopup="listbox" aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard" id="divProfessionName" class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                        @if ($user->profession_id != '')
                                            {{ $user->profession->name }}
                                        @endif
                                    </div>

                                    <input name="profession_id" id="profession_id" class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput {{ $user->profession_id != '' ? 'd-none' : '' }}" value="{{ old('profession_id', $user->profession_id) }}" placeholder="Profession">

                                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                                        <path d="M7 10l5 5 5-5z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                            <div class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                <input type="text" name="whatsapp_number" id="whatsapp_number" class="MuiInputBase-input-box MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input" placeholder="Whatsapp/ Alternative number" value="{{ old('whatsapp_number', $user->whatsapp_number) }}">
                            </div>
                        </div>

                        <div class="user-extra-details-divider"></div>
                        <div class="relationship-label">Father / Spouse name</div>

                        <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                            <div class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                <input type="text" name="relationship_name" id="relationship_name" class="MuiInputBase-input-box MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input" placeholder="Father / Spouse name" value="{{ old('relationship_name', $user->relationship_name) }}">
                            </div>
                        </div>
                    </div>

                    <div class="divider-div"></div>

                    <div class="add-address-label">Referral (only a Primary Member can refer)</div>

                    <div>
                        <div>
                            <div class="input-container">
                                <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                    <div class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                        <input type="text" name="referral_code" id="referral_code" class="MuiInputBase-input-box MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input" placeholder="Mobile number / Referral code" value="{{ old('referral_code', $user->reffered_user ? $user->reffered_user->referral_code : '') }}" maxlength="10" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="margin-top: 1rem;">
                            <div>
                                <div class="input-container">
                                    <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                        <div class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                            <input type="text" name="referred_name" id="referred_name" class="MuiInputBase-input-box MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input" placeholder="Referred by (name)" value="{{ old('referred_name', $user->reffered_user ? $user->reffered_user->name : '') }}" maxlength="10" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-containers family-tab-container d-none" id="divFamilyInfo">
                <div class="family-form-container">
                    <input type="hidden" id="familyMemberId" value="">

                    <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                        <div class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                            <input type="text" name="member_name" id="member_name" class="MuiInputBase-input-box MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input" placeholder="Full Name *">
                        </div>
                    </div>

                    <div class="abc">
                        <div class="primary-dropdown-container">
                            <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                                <div class="MuiInputBase-root MuiInputBase-input-box MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root dropdown">
                                    <div tabindex="0" role="combobox" aria-controls=":ra:" aria-expanded="false" aria-haspopup="listbox" aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard" id="divRelationshipName" class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                    </div>

                                    <input name="relationship_id" id="relationship_id" class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput" placeholder="Relationship">

                                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                                        <path d="M7 10l5 5 5-5z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="border: 1px solid rgb(195, 201, 213); border-radius: 10px; padding: 10px;">
                        <div class="dob-field">
                            <div class="dob-field-one">
                                <div style="font-size: 0.7rem; color: rgb(113, 111, 134);">D.O.B </div>
                                <div style="display: flex; flex-direction: row; align-items: center; background-color: white; border-radius: 8px; justify-content: end; width: 100%;">
                                    <div class="MuiFormControl-root MuiTextField-root css-r0ibox-MuiFormControl-root-MuiTextField-root">
                                        <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-formControl MuiInputBase-adornedEnd Mui-readOnly MuiInputBase-readOnly css-o9k5xi-MuiInputBase-root-MuiOutlinedInput-root">
                                            <input type="text" name="member_dob" id="member_dob" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd Mui-readOnly MuiInputBase-readOnly css-nxo287-MuiInputBase-input-MuiOutlinedInput-input" placeholder="MM/DD/YYYY" value="">

                                            <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-1d3z3hw-MuiOutlinedInput-notchedOutline">
                                                <legend class="css-ihdtdm">
                                                    <span class="notranslate">&ZeroWidthSpace;</span>
                                                </legend>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div style="position: absolute; z-index: 0; margin-right: 10px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 2V5" stroke="#F15600" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M16 2V5" stroke="#F15600" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M16 3.5C19.33 3.68 21 4.95 21 9.65V15.83C21 19.95 20 22.01 15 22.01H9C4 22.01 3 19.95 3 15.83V9.65C3 4.95 4.67 3.69 8 3.5H16Z" stroke="#F15600" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M20.75 17.5996H3.25" stroke="#F15600" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M12 8.25C10.77 8.25 9.73 8.92 9.73 10.22C9.73 10.84 10.02 11.31 10.46 11.61C9.85 11.97 9.5 12.55 9.5 13.23C9.5 14.47 10.45 15.24 12 15.24C13.54 15.24 14.5 14.47 14.5 13.23C14.5 12.55 14.15 11.96 13.53 11.61C13.98 11.3 14.26 10.84 14.26 10.22C14.26 8.92 13.23 8.25 12 8.25ZM12 11.09C11.48 11.09 11.1 10.78 11.1 10.29C11.1 9.79 11.48 9.5 12 9.5C12.52 9.5 12.9 9.79 12.9 10.29C12.9 10.78 12.52 11.09 12 11.09ZM12 14C11.34 14 10.86 13.67 10.86 13.07C10.86 12.47 11.34 12.15 12 12.15C12.66 12.15 13.14 12.48 13.14 13.07C13.14 13.67 12.66 14 12 14Z" fill="#F15600"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="dob-field-two">
                                <div style="font-size: 0.7rem; color: transparent;">Age</div>
                                <div class="MuiFormControl-root MuiTextField-root age-input css-1rd8emk-MuiFormControl-root-MuiTextField-root">
                                    <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-formControl Mui-readOnly MuiInputBase-readOnly css-9ddj71-MuiInputBase-root-MuiOutlinedInput-root">
                                        <input type="text" name="member_age" id="member_age" class="MuiInputBase-input MuiOutlinedInput-input Mui-readOnly MuiInputBase-readOnly css-1t8l2tu-MuiInputBase-input-MuiOutlinedInput-input" placeholder="Age" value="" readonly>

                                        <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-1d3z3hw-MuiOutlinedInput-notchedOutline">
                                            <legend class="css-ihdtdm">
                                                <span class="notranslate">&ZeroWidthSpace;</span>
                                            </legend>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                        <div class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                            <input type="tel" name="member_mobile_number" id="member_mobile_number" class="MuiInputBase-input-box MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input" maxlength="10" placeholder="Mobile number">
                        </div>
                    </div>

                    <div style="display: flex; flex-direction: row; gap: 10px;">
                        <div class="family-form-add-btn" id="btnAddFamilyMember">Add</div>
                    </div>
                </div>

                <div class="family-list-container {{ (isset($user->familyMembers) && $user->familyMembers->count() == 0) ? 'd-none' : '' }}" id="divFamilyMemberList">
                    @if ($user->familyMembers->count() > 0)
                        <p class="family-list-header">Added</p>

                        <div class="family-details" id="divFamilyMemberDetails">
                            @foreach ($user->familyMembers as $familyMember)
                                <div class="family-list-item-container" id="divFamilyMemberContiner_{{ $familyMember->id }}">
                                    <div class="row-item">
                                        <div class="label">Full Name </div>
                                        <div class="value">{{ $familyMember->name }}</div>
                                    </div>

                                    <div class="divider"></div>

                                    <div class="row-item">
                                        <div class="label"> Relationship</div>
                                        <div class="value">{{ $familyMember->relationship ? $familyMember->relationship->name : '' }}</div>
                                    </div>

                                    <div class="divider"></div>

                                    <div class="row-item">
                                        <div class="label">D.O.B | Age</div>
                                        <div class="value">{{ date('d-m-Y', strtotime($familyMember->dob)) }} | {{ $familyMember->age.'Y' }}</div>
                                    </div>

                                    <div class="divider"></div>

                                    <div class="row-item">
                                        <div class="label">Mobile number</div>
                                        <div class="value">{{ $familyMember->mobile_number }}</div>
                                    </div>

                                    <div class="dashed-divider"></div>

                                    <div class="btn-wrapper">
                                        <div class="spacer"></div>

                                        <div class="family-form-list-btn-container">
                                            <div class="action-btn left-btn btnEditFamilyMember" data-id="{{ $familyMember->id }}">Edit</div>
                                            <div class="action-btn right-btn btnDeleteFamilyMember" data-id="{{ $familyMember->id }}">Delete</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <div class="tab-containers contact-tab-container d-none" id="divContactInfo">
                <div class="address-form-container">
                    <div class="add-address-label">Address</div>

                    <div>
                        <div class="input-container">
                            <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                <div class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                    <input type="text" name="address" id="address" class="MuiInputBase-input-box MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input" placeholder="Address (House / Flat / Floor No.)" maxlength="100" value="{{ old('address', $user->address) }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="input-container">
                            <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                <div class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                    <input type="tel" name="pincode" id="pincode" maxlength="6" class="MuiInputBase-input-box MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input" placeholder="Pincode" value="{{ old('pincode', $user->pincode) }}" data-url="{{ route('ajax.get_pincode_details') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="primary-dropdown-container">
                        <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                            <div class="MuiInputBase-root MuiInputBase-input-box MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root dropdown stateOrDistrict">
                                <div tabindex="0" role="combobox" aria-controls=":ra:" aria-expanded="false" aria-haspopup="listbox" aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard" id="divStateName" class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input" data-url="{{ route('ajax.get_all_states') }}">
                                    {{ $user->state ? $user->state->name : '' }}
                                </div>

                                <input type="text" name="state" id="state" class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput {{ $user->state ? 'd-none' : '' }}" value="{{ old('state_id', $user->state_id) }}" placeholder="State *">

                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                                    <path d="M7 10l5 5 5-5z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="primary-dropdown-container">
                        <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                            <div class="MuiInputBase-root MuiInputBase-input-box MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root dropdown stateOrDistrict">
                                <div tabindex="0" role="combobox" aria-controls=":rb:" aria-expanded="false" aria-haspopup="listbox" aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard" id="divDistrictName" class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input  css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                    {{ $user->district ? $user->district->name : '' }}
                                </div>

                                <input type="text" name="district" id="district" class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput {{ $user->district ? 'd-none' : '' }}" value="{{ old('district_id', $user->district_id) }}" placeholder="District *">

                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                                    <path d="M7 10l5 5 5-5z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="primary-dropdown-container">
                        <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                            <div class="MuiInputBase-root MuiInputBase-input-box MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root dropdown">
                                <div tabindex="0" role="combobox" aria-controls=":rc:" aria-expanded="false" aria-haspopup="listbox" aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard" id="divAssemblyName" class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                    {{ $user->assemblyConstituency ? $user->assemblyConstituency->name : '' }}
                                </div>

                                <input type="text" name="assembly_constituency" id="assembly_constituency" class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput {{ $user->assemblyConstituency ? 'd-none' : '' }}" placeholder="Assembly constituency (AC)" value="{{ old('assembly_constituency', $user->assembly_id) }}">

                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                                    <path d="M7 10l5 5 5-5z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-divier"></div>

                <div class="extra-contact-form-container">
                    <div class="add-address-label">If you are a BJP karyakarta? Please fill these information</div>

                    <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                        <div class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                            <input type="text" name="landline_number" id="landline_number" class="MuiInputBase-input-box MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input" placeholder="Landline number" maxlength="100" value="{{ old('landline_number', $user->landline_number) }}">
                        </div>
                    </div>

                    <div class="primary-dropdown-container">
                        <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                            <div class="MuiInputBase-root MuiInputBase-input-box MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root dropdown">
                                <div tabindex="0" role="combobox" aria-controls=":rc:" aria-expanded="false" aria-haspopup="listbox" aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard" id="divZilaName" class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                    {{ $user->zila ? $user->zila->name : '' }}
                                </div>

                                <input type="text" name="zila_id" id="zila_id" class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput {{ $user->zila ? 'd-none' : '' }}" placeholder="Zila" value="{{ old('zila_id', $user->zila_id) }}">

                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                                    <path d="M7 10l5 5 5-5z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="primary-dropdown-container">
                        <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                            <div class="MuiInputBase-root MuiInputBase-input-box MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root dropdown">
                                <div tabindex="0" role="combobox" aria-controls=":rc:" aria-expanded="false" aria-haspopup="listbox" aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard" id="divMandalName" class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                    {{ $user->mandal ? $user->mandal->name : '' }}
                                </div>

                                <input type="text" name="mandal_id" id="mandal_id" class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput {{ $user->mandal ? 'd-none' : '' }}" placeholder="Mandal" value="{{ old('mandal_id', $user->mandal_id) }}">

                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                                    <path d="M7 10l5 5 5-5z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                        <div class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                            <input type="text" name="ward_name" id="ward_name" class="MuiInputBase-input-box MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input" placeholder="Ward name" maxlength="100" value="{{ old('ward_name', $user->ward_name) }}">
                        </div>
                    </div>

                    <div class="primary-dropdown-container">
                        <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                            <div class="MuiInputBase-root MuiInputBase-input-box MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root dropdown">
                                <div tabindex="0" role="combobox" aria-controls=":rc:" aria-expanded="false" aria-haspopup="listbox" aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard" id="divBoothName" class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                    {{ $user->booth ? $user->booth->name : '' }}
                                </div>

                                <input type="text" name="booth_id" id="booth_id" class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput {{ $user->booth ? 'd-none' : '' }}" placeholder="Booth" value="{{ old('booth_id', $user->booth_id) }}">

                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon">
                                    <path d="M7 10l5 5 5-5z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="update-next-btn-container" id="btnSubmit">
            <div class="form-update-btn form-update-dark-btn" id="divSubmit" style="width: 50%; font-size:16px">Update & Next</div>
        </div>
    </div>

    <div role="presentation" id="menu-state" class="MuiPopover-root MuiMenu-root MuiModal-root css-10nakn3-MuiModal-root-MuiPopover-root-MuiMenu-root d-none" style="display: flex; align-items: center; justify-content: center;">
        <div aria-hidden="true" class="MuiBackdrop-root MuiBackdrop-invisible MuiModal-backdrop css-g3hgs1-MuiBackdrop-root-MuiModal-backdrop" style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1);"></div>

        <div tabindex="0" data-testid="sentinelStart"></div>

        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation8 MuiPopover-paper MuiMenu-paper MuiMenu-paper css-12711zd-MuiPaper-root-MuiPopover-paper-MuiMenu-paper" tabindex="-1" style="opacity: 1; transform: none; min-width: 360px; transition: opacity 384ms cubic-bezier(0.4, 0, 0.2, 1), transform 256ms cubic-bezier(0.4, 0, 0.2, 1);  transform-origin: 180px 172.588px;">
            <ul class="MuiList-root MuiList-padding MuiMenu-list css-6hp17o-MuiList-root-MuiMenu-list" role="listbox" tabindex="-1" aria-labelledby="demo-simple-select-standard-label" id="stateUl" style="padding-right: 0px; width: calc(100% + 0px);">

            </ul>
        </div>

        <div tabindex="0" data-testid="sentinelEnd"></div>
    </div>

    <div role="presentation" id="menu-district" class="MuiPopover-root MuiMenu-root MuiModal-root css-10nakn3-MuiModal-root-MuiPopover-root-MuiMenu-root d-none"  style="display: flex; align-items: center; justify-content: center;">
        <div aria-hidden="true" class="MuiBackdrop-root MuiBackdrop-invisible MuiModal-backdrop css-g3hgs1-MuiBackdrop-root-MuiModal-backdrop" style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1);"></div>

        <div tabindex="0" data-testid="sentinelStart"></div>

        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation8 MuiPopover-paper MuiMenu-paper MuiMenu-paper css-12711zd-MuiPaper-root-MuiPopover-paper-MuiMenu-paper" tabindex="-1" style="opacity: 1; transform: none; min-width: 360px; transition: opacity 384ms cubic-bezier(0.4, 0, 0.2, 1), transform 256ms cubic-bezier(0.4, 0, 0.2, 1); transform-origin: 180px 172.588px;">
            <ul class="MuiList-root MuiList-padding MuiMenu-list css-6hp17o-MuiList-root-MuiMenu-list" role="listbox" tabindex="-1" aria-labelledby="demo-simple-select-standard-label" id="districtUl" style="padding-right: 0px; width: calc(100% + 0px);">

            </ul>
        </div>

        <div tabindex="0" data-testid="sentinelEnd"></div>
    </div>

    <div role="presentation" id="menu-assembly" class="MuiPopover-root MuiMenu-root MuiModal-root css-10nakn3-MuiModal-root-MuiPopover-root-MuiMenu-root d-none"  style="display: flex; align-items: center; justify-content: center;">
        <div aria-hidden="true" class="MuiBackdrop-root MuiBackdrop-invisible MuiModal-backdrop css-g3hgs1-MuiBackdrop-root-MuiModal-backdrop" style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1);"></div>

        <div tabindex="0" data-testid="sentinelStart"></div>

        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation8 MuiPopover-paper MuiMenu-paper MuiMenu-paper css-12711zd-MuiPaper-root-MuiPopover-paper-MuiMenu-paper" tabindex="-1" style="opacity: 1; transform: none; min-width: 360px; transition: opacity 384ms cubic-bezier(0.4, 0, 0.2, 1), transform 256ms cubic-bezier(0.4, 0, 0.2, 1); transform-origin: 180px 172.588px;">
            <ul class="MuiList-root MuiList-padding MuiMenu-list css-6hp17o-MuiList-root-MuiMenu-list" role="listbox" tabindex="-1" aria-labelledby="demo-simple-select-standard-label" id="assemblyUl" style="padding-right: 0px; width: calc(100% + 0px);">

            </ul>
        </div>

        <div tabindex="0" data-testid="sentinelEnd"></div>
    </div>

    <div role="presentation" id="menu-zila" class="MuiPopover-root MuiMenu-root MuiModal-root css-10nakn3-MuiModal-root-MuiPopover-root-MuiMenu-root d-none"  style="display: flex; align-items: center; justify-content: center;">
        <div aria-hidden="true" class="MuiBackdrop-root MuiBackdrop-invisible MuiModal-backdrop css-g3hgs1-MuiBackdrop-root-MuiModal-backdrop" style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1);"></div>

        <div tabindex="0" data-testid="sentinelStart"></div>

        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation8 MuiPopover-paper MuiMenu-paper MuiMenu-paper css-12711zd-MuiPaper-root-MuiPopover-paper-MuiMenu-paper" tabindex="-1" style="opacity: 1; transform: none; min-width: 360px; transition: opacity 384ms cubic-bezier(0.4, 0, 0.2, 1), transform 256ms cubic-bezier(0.4, 0, 0.2, 1); transform-origin: 180px 172.588px;">
            <ul class="MuiList-root MuiList-padding MuiMenu-list css-6hp17o-MuiList-root-MuiMenu-list" role="listbox" tabindex="-1" aria-labelledby="demo-simple-select-standard-label" id="zilaUl" style="padding-right: 0px; width: calc(100% + 0px);">

            </ul>
        </div>

        <div tabindex="0" data-testid="sentinelEnd"></div>
    </div>

    <div role="presentation" id="menu-religion" class="MuiPopover-root MuiMenu-root MuiModal-root css-10nakn3-MuiModal-root-MuiPopover-root-MuiMenu-root d-none" style="display: flex; align-items: center; justify-content: center;">
        <div aria-hidden="true" class="MuiBackdrop-root MuiBackdrop-invisible MuiModal-backdrop css-g3hgs1-MuiBackdrop-root-MuiModal-backdrop" style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1);"></div>

        <div tabindex="0" data-testid="sentinelStart"></div>

        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation8 MuiPopover-paper MuiMenu-paper MuiMenu-paper css-12711zd-MuiPaper-root-MuiPopover-paper-MuiMenu-paper" tabindex="-1" style="opacity: 1; transform: none; min-width: 360px; transition: opacity 384ms cubic-bezier(0.4, 0, 0.2, 1), transform 256ms cubic-bezier(0.4, 0, 0.2, 1);  transform-origin: 180px 172.588px;">
            <ul class="MuiList-root MuiList-padding MuiMenu-list css-6hp17o-MuiList-root-MuiMenu-list" role="listbox" tabindex="-1" aria-labelledby="demo-simple-select-standard-label" id="religionUl" style="padding-right: 0px; width: calc(100% + 0px);">
                @foreach ($religions as $religion)
                    <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root religionLi" tabindex="0" role="option" aria-selected="false" data-id="{{ $religion->id }}" data-name="{{ $religion->name }}"> {{ $religion->name }} <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span> </li>
                @endforeach
            </ul>
        </div>

        <div tabindex="0" data-testid="sentinelEnd"></div>
    </div>

    <div role="presentation" id="menu-category" class="MuiPopover-root MuiMenu-root MuiModal-root css-10nakn3-MuiModal-root-MuiPopover-root-MuiMenu-root d-none" style="display: flex; align-items: center; justify-content: center;">
        <div aria-hidden="true" class="MuiBackdrop-root MuiBackdrop-invisible MuiModal-backdrop css-g3hgs1-MuiBackdrop-root-MuiModal-backdrop" style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1);"></div>

        <div tabindex="0" data-testid="sentinelStart"></div>

        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation8 MuiPopover-paper MuiMenu-paper MuiMenu-paper css-12711zd-MuiPaper-root-MuiPopover-paper-MuiMenu-paper" tabindex="-1" style="opacity: 1; transform: none; min-width: 360px; transition: opacity 384ms cubic-bezier(0.4, 0, 0.2, 1), transform 256ms cubic-bezier(0.4, 0, 0.2, 1);  transform-origin: 180px 172.588px;">
            <ul class="MuiList-root MuiList-padding MuiMenu-list css-6hp17o-MuiList-root-MuiMenu-list" role="listbox" tabindex="-1" aria-labelledby="demo-simple-select-standard-label" id="categoryUl" style="padding-right: 0px; width: calc(100% + 0px);">
                @foreach ($categories as $category)
                    <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root categoryLi" tabindex="0" role="option" aria-selected="false" data-id="{{ $category->id }}" data-name="{{ $category->name }}"> {{ $category->name }} <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span> </li>
                @endforeach
            </ul>
        </div>

        <div tabindex="0" data-testid="sentinelEnd"></div>
    </div>

    <div role="presentation" id="menu-education" class="MuiPopover-root MuiMenu-root MuiModal-root css-10nakn3-MuiModal-root-MuiPopover-root-MuiMenu-root d-none" style="display: flex; align-items: center; justify-content: center;">
        <div aria-hidden="true" class="MuiBackdrop-root MuiBackdrop-invisible MuiModal-backdrop css-g3hgs1-MuiBackdrop-root-MuiModal-backdrop" style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1);"></div>

        <div tabindex="0" data-testid="sentinelStart"></div>

        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation8 MuiPopover-paper MuiMenu-paper MuiMenu-paper css-12711zd-MuiPaper-root-MuiPopover-paper-MuiMenu-paper" tabindex="-1" style="opacity: 1; transform: none; min-width: 360px; transition: opacity 384ms cubic-bezier(0.4, 0, 0.2, 1), transform 256ms cubic-bezier(0.4, 0, 0.2, 1);  transform-origin: 180px 172.588px;">
            <ul class="MuiList-root MuiList-padding MuiMenu-list css-6hp17o-MuiList-root-MuiMenu-list" role="listbox" tabindex="-1" aria-labelledby="demo-simple-select-standard-label" id="educationUl" style="padding-right: 0px; width: calc(100% + 0px);">
                @foreach ($educations as $education)
                    <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root educationLi" tabindex="0" role="option" aria-selected="false" data-id="{{ $education->id }}" data-name="{{ $education->name }}"> {{ $education->name }} <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span> </li>
                @endforeach
            </ul>
        </div>

        <div tabindex="0" data-testid="sentinelEnd"></div>
    </div>

    <div role="presentation" id="menu-profession" class="MuiPopover-root MuiMenu-root MuiModal-root css-10nakn3-MuiModal-root-MuiPopover-root-MuiMenu-root d-none" style="display: flex; align-items: center; justify-content: center;">
        <div aria-hidden="true" class="MuiBackdrop-root MuiBackdrop-invisible MuiModal-backdrop css-g3hgs1-MuiBackdrop-root-MuiModal-backdrop" style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1);"></div>

        <div tabindex="0" data-testid="sentinelStart"></div>

        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation8 MuiPopover-paper MuiMenu-paper MuiMenu-paper css-12711zd-MuiPaper-root-MuiPopover-paper-MuiMenu-paper" tabindex="-1" style="opacity: 1; transform: none; min-width: 360px; transition: opacity 384ms cubic-bezier(0.4, 0, 0.2, 1), transform 256ms cubic-bezier(0.4, 0, 0.2, 1);  transform-origin: 180px 172.588px;">
            <ul class="MuiList-root MuiList-padding MuiMenu-list css-6hp17o-MuiList-root-MuiMenu-list" role="listbox" tabindex="-1" aria-labelledby="demo-simple-select-standard-label" id="professionUl" style="padding-right: 0px; width: calc(100% + 0px);">
                @foreach ($professions as $profession)
                    <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root professionLi" tabindex="0" role="option" aria-selected="false" data-id="{{ $profession->id }}" data-name="{{ $profession->name }}"> {{ $profession->name }} <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span> </li>
                @endforeach
            </ul>
        </div>

        <div tabindex="0" data-testid="sentinelEnd"></div>
    </div>

    <div role="presentation" id="menu-relationship" class="MuiPopover-root MuiMenu-root MuiModal-root css-10nakn3-MuiModal-root-MuiPopover-root-MuiMenu-root d-none" style="display: flex; align-items: center; justify-content: center;">
        <div aria-hidden="true" class="MuiBackdrop-root MuiBackdrop-invisible MuiModal-backdrop css-g3hgs1-MuiBackdrop-root-MuiModal-backdrop" style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1);"></div>

        <div tabindex="0" data-testid="sentinelStart"></div>

        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation8 MuiPopover-paper MuiMenu-paper MuiMenu-paper css-12711zd-MuiPaper-root-MuiPopover-paper-MuiMenu-paper" tabindex="-1" style="opacity: 1; transform: none; min-width: 360px; transition: opacity 384ms cubic-bezier(0.4, 0, 0.2, 1), transform 256ms cubic-bezier(0.4, 0, 0.2, 1);  transform-origin: 180px 172.588px;">
            <ul class="MuiList-root MuiList-padding MuiMenu-list css-6hp17o-MuiList-root-MuiMenu-list" role="listbox" tabindex="-1" aria-labelledby="demo-simple-select-standard-label" id="relationshipUl" style="padding-right: 0px; width: calc(100% + 0px);">
                @foreach ($relationships as $relationship)
                    <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root relationshipLi" tabindex="0" role="option" aria-selected="false" data-id="{{ $relationship->id }}" data-name="{{ $relationship->name }}"> {{ $relationship->name }} <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span> </li>
                @endforeach
            </ul>
        </div>

        <div tabindex="0" data-testid="sentinelEnd"></div>
    </div>

    <div role="presentation" id="uploadProfilePicPopup" class="MuiDrawer-root MuiDrawer-modal MuiModal-root css-195ptfl-MuiModal-root-MuiDrawer-root d-none">
        <div aria-hidden="true" class="MuiBackdrop-root MuiModal-backdrop css-i9fmh8-MuiBackdrop-root-MuiModal-backdrop" style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1);"></div>

        <div tabindex="0" data-testid="sentinelStart"></div>

        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-elevation16 MuiDrawer-paper MuiDrawer-paperAnchorBottom css-9emuhu-MuiPaper-root-MuiDrawer-paper" tabindex="-1" style="transform: none; transition: transform 225ms cubic-bezier(0, 0, 0.2, 1);">
            <div class="MuiBox-root css-10mm8wz" role="presentation">
                <div class="profile-upload-containerr">
                    <div class="profile-upload-sub-containerr">
                        <div>
                            <label class="file-label">
                                <div class="upload-icon">
                                    <svg width="124" height="95" viewBox="0 0 124 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M64.8419 23.5506L64.5283 23.4687C63.583 23.2218 62.9207 22.292 63.254 21.3127L64.8419 23.5506ZM64.8419 23.5506L64.8658 23.5265M64.8419 23.5506L64.8658 23.5265M64.8658 23.5265C65.7025 23.5985 66.5581 23.154 66.8368 22.33C68.8812 16.3162 75.3599 12.0479 82.6512 12.0479C83.6144 12.0479 84.5273 11.3489 84.5273 10.335C84.5273 9.32101 83.6144 8.62205 82.6512 8.62205C73.5045 8.62205 65.7543 13.9565 63.2541 21.3124L64.8658 23.5265Z" fill="#F15600" stroke="#F9FFF9" stroke-width="1.12845"></path>
                                        <path d="M101.015 66.6194H93.1443C92.42 66.6194 91.8324 66.1049 91.8324 65.4707C91.8324 64.8365 92.4199 64.322 93.1443 64.322H101.015C111.866 64.322 120.694 56.5923 120.694 47.0921C120.694 37.5919 111.866 29.8622 101.015 29.8622H100.826C100.446 29.8622 100.084 29.7178 99.8348 29.4659C99.5855 29.214 99.4731 28.88 99.5274 28.5502C99.6446 27.8348 99.7036 27.116 99.7036 26.4162C99.7036 18.1828 92.0524 11.4835 82.6491 11.4835C78.9908 11.4835 75.5021 12.4845 72.5597 14.3789C71.9131 14.7949 70.9948 14.6103 70.6209 13.9875C62.2877 0.0937152 40.5223 -1.77209 29.2381 10.3143C24.4845 15.4062 22.6167 22.0298 24.1134 28.4855C24.2783 29.1985 23.6551 29.863 22.8277 29.863H22.302C11.452 29.863 2.62388 37.5928 2.62388 47.093C2.62388 56.5932 11.452 64.3229 22.302 64.3229H30.1732C30.8975 64.3229 31.4851 64.8373 31.4851 65.4716C31.4851 66.1058 30.8976 66.6202 30.1732 66.6202H22.302C10.005 66.6202 0 57.86 0 47.0929C0 36.6278 9.45106 28.0587 21.2722 27.5861C20.1618 20.8885 22.2852 14.1327 27.2065 8.86047C39.2879 -4.08082 62.4411 -2.63027 72.2284 11.8002C75.3508 10.0862 78.9237 9.18709 82.6486 9.18709C94.0413 9.18709 103.069 17.6774 102.279 27.5968C113.991 28.172 123.317 36.6958 123.317 47.092C123.317 57.86 113.312 66.6194 101.015 66.6194L101.015 66.6194Z" fill="#F15600"></path>
                                        <path d="M28.1216 64.8185C28.1216 81.0328 43.1599 94.0996 61.4831 94.0996C79.8066 94.0996 94.8447 81.0326 94.8447 64.8185C94.8447 48.6041 79.8066 35.5373 61.4831 35.5373C43.1597 35.5373 28.1216 48.6043 28.1216 64.8185ZM31.8744 64.8185C31.8744 50.6309 45.0846 38.9636 61.4831 38.9636C77.8814 38.9636 91.0918 50.6307 91.0918 64.8185C91.0918 79.006 77.8814 90.6733 61.4831 90.6733C45.0849 90.6733 31.8744 79.0062 31.8744 64.8185Z" fill="#F15600" stroke="#F9FFF9" stroke-width="1.12845"></path>
                                        <path d="M60.5578 76.3778C60.5578 77.2218 61.3134 77.7829 62.0825 77.7829C62.8514 77.7829 63.6072 77.2226 63.6072 76.3778V54.5128C63.6072 53.6688 62.8517 53.1076 62.0825 53.1076C61.3133 53.1076 60.5578 53.6688 60.5578 54.5128V76.3778Z" fill="#F15600" stroke="#F15600" stroke-width="1.12845"></path>
                                        <path d="M68.7162 62.2597C69.0173 62.5233 69.3999 62.6457 69.767 62.6457H69.7671C70.133 62.6457 70.5161 62.5246 70.8179 62.2597C71.4498 61.7063 71.4498 60.7747 70.8179 60.2214L63.1344 53.4938C62.5467 52.9792 61.6204 52.9787 61.0327 53.4938C61.0327 53.4938 61.0326 53.4939 61.0326 53.4939C61.0325 53.494 61.0324 53.4941 61.0323 53.4941L53.3492 60.2214C52.7172 60.7747 52.7172 61.7063 53.3492 62.2597C53.9369 62.7743 54.8632 62.7748 55.4509 62.2597C55.451 62.2596 55.451 62.2596 55.4511 62.2596C55.4511 62.2595 55.4512 62.2594 55.4513 62.2594L62.0836 56.4522L68.7162 62.2597C68.7162 62.2597 68.7162 62.2597 68.7162 62.2597Z" fill="#F15600" stroke="#F15600" stroke-width="1.12845"></path>
                                    </svg>
                                </div>

                                <input id="file-upload-gallery" type="file" class="file-input" accept="image/jpeg, image/png, image/heic, image/heif">
                            </label>
                        </div>

                        <div class="select-label">Select</div>

                        <div class="or-label">Supported formats : Jpg, Jpeg, Png, Heic, Heif, Bmp</div>

                        <div class="btns-container">
                            <label for="file-upload-gallery">
                                <div class="gallery-btn">Gallery</div>
                            </label>
                        </div>
                    </div>

                    <button class="cancel-label">Cancel</button>
                </div>
            </div>
        </div>

        <div tabindex="0" data-testid="sentinelEnd"></div>
    </div>

    <div role="presentation" id="previewUploadedImg" class="MuiDrawer-root MuiDrawer-modal MuiModal-root css-195ptfl-MuiModal-root-MuiDrawer-root d-none">
        <div aria-hidden="true" class="MuiBackdrop-root MuiModal-backdrop css-i9fmh8-MuiBackdrop-root-MuiModal-backdrop"
            style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1);"></div>

        <div tabindex="0" data-testid="sentinelStart"></div>

        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-elevation16 MuiDrawer-paper MuiDrawer-paperAnchorBottom css-9emuhu-MuiPaper-root-MuiDrawer-paper"
            tabindex="-1" style="transform: none; transition: transform 225ms cubic-bezier(0, 0, 0.2, 1);">
            <div class="MuiBox-root css-10mm8wz" role="presentation">
                <div class="profile-upload-containerr">
                    <div class="profile-upload-sub-containerr">
                        <div class="profile-image-container-two">
                            <div class="profile-img-div">
                                <img src="" id="profile-img" alt="Profile" class="profile-img">
                            </div>

                            <button class="" id="btnPreviewCancel">Cancel</button>
                        </div>
                    </div>

                    <button class="width-btn btn-container" id="btnUploadImage" data-img-upload-url="{{ route('front.update.user.image') }}">
                        <div></div>

                        <p class="m-0"> Upload</p>

                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="17.1343" cy="17.1343" r="17.1343" fill="#FE9900"></circle>
                            <path
                                d="M21.4179 17.9376C21.4179 18.1873 21.3284 18.4371 21.1367 18.6342L16.6252 23.2739C16.2546 23.6551 15.6411 23.6551 15.2705 23.2739C14.8999 22.8928 14.8999 22.2619 15.2705 21.8807L19.1046 17.9376L15.2705 13.9945C14.8999 13.6133 14.8999 12.9825 15.2705 12.6013C15.6411 12.2201 16.2546 12.2201 16.6252 12.6013L21.1367 17.241C21.3284 17.4382 21.4179 17.6879 21.4179 17.9376Z"
                                fill="white"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div tabindex="0" data-testid="sentinelEnd"></div>
    </div>

    @section('scripts')
        @parent

        <script>
            const mobileNumberMaxLength = 10;

            $(document).on('click', '#divReligionName', function() {
                $('#menu-religion').removeClass('d-none');
            });

            $(document).on('click', '.religionLi', function() {
                const religionId = $(this).data('id');
                const religionName = $(this).data('name');

                $('#religion_id').val(religionId);
                $('#divReligionName').html(religionName);

                $('#menu-religion').addClass('d-none');
                $('#religion_id').addClass('d-none');
            });

            $(document).on('click', '#divCategoryName', function() {
                $('#menu-category').removeClass('d-none');
            });

            $(document).on('click', '.categoryLi', function() {
                const categoryId = $(this).data('id');
                const categoryName = $(this).data('name');

                $('#category_id').val(categoryId);
                $('#divCategoryName').html(categoryName);

                $('#menu-category').addClass('d-none');
                $('#category_id').addClass('d-none');
            });

            $(document).on('click', '#divEducationName', function() {
                $('#menu-education').removeClass('d-none');
            });

            $(document).on('click', '.educationLi', function() {
                const educationId = $(this).data('id');
                const educationName = $(this).data('name');

                $('#education_id').val(educationId);
                $('#divEducationName').html(educationName);

                $('#menu-education').addClass('d-none');
                $('#education_id').addClass('d-none');
            });

            $(document).on('click', '#divProfessionName', function() {
                $('#menu-profession').removeClass('d-none');
            });

            $(document).on('click', '.professionLi', function() {
                const professionId = $(this).data('id');
                const professionName = $(this).data('name');

                $('#profession_id').val(professionId);
                $('#divProfessionName').html(professionName);

                $('#menu-profession').addClass('d-none');
                $('#profession_id').addClass('d-none');
            });

            $(document).on('click', '#divRelationshipName', function() {
                $('#menu-relationship').removeClass('d-none');
            });

            $(document).on('click', '.relationshipLi', function() {
                const relationshipId = $(this).data('id');
                const relationshipName = $(this).data('name');

                $('#relationship_id').val(relationshipId);
                $('#divRelationshipName').html(relationshipName);

                $('#menu-relationship').addClass('d-none');
                $('#relationship_id').addClass('d-none');
            });

            $(document).on('click', '#divZilaName', function() {
                const stateId = $('#state').val();

                $.ajax({
                    type: "POST",
                    url: "{!! route('ajax.get_zils') !!}",
                    data: {
                        '_token': '{{ csrf_token() }}',
                        stateId: stateId
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            $('#zilaUl').html(response.html);
                            $('#menu-zila').removeClass('d-none');
                        }
                    }
                });
            });

            $(document).on('click', '.zilaLi', function() {
                const zilaId = $(this).data('id');
                const zilaName = $(this).data('name');

                $('#zila_id').val(zilaId);
                $('#divZilaName').html(zilaName);

                $('#menu-zila').addClass('d-none');
                $('#zila_id').addClass('d-none');
            });

            $(document).on('click', '.update-details-tab', function() {
                $(".update-details-tab").removeClass("active-tab");
                $(this).addClass('active-tab');
                const selection = $(this).data('tab');

                if (selection == 'personal') {
                    $('#tabPersonal').html('Personal Details');
                    $('#tabFamily').html('Family');
                    $('#tabContact').html('Contact');

                    $('.tab-containers').addClass('d-none');
                    $('#divPersonalInfo').removeClass('d-none');

                    $('#divSubmit').html('Update & Next');
                } else if (selection == 'family') {
                    $('#tabPersonal').html('Personal');
                    $('#tabFamily').html('Family Details');
                    $('#tabContact').html('Contact');

                    $('.tab-containers').addClass('d-none');
                    $('#divFamilyInfo').removeClass('d-none');

                    $('#divSubmit').html('Update & Next');
                } else if (selection == 'contact') {
                    $('#tabPersonal').html('Personal');
                    $('#tabFamily').html('Family');
                    $('#tabContact').html('Contact Details');

                    $('.tab-containers').addClass('d-none');
                    $('#divContactInfo').removeClass('d-none');

                    $('#divSubmit').html('Update & got to dashboard');
                }

            });

            $(document).on('click', '#btnSubmit', function() {
                const isPersonal = $('#tabPersonal').hasClass('active-tab');
                const isFamily = $('#tabFamily').hasClass('active-tab');
                const isContact = $('#tabContact').hasClass('active-tab');

                if (isPersonal) {
                    const salutation = $('#salutation').val();
                    const name = $('#name').val();
                    const dob = $('#dob').val();
                    const gender = $('#gender').val();

                    if (salutation == '' || name == '' || dob == '' || gender == '') {
                        if (salutation == '') {
                            Toast.fire({ icon: 'error', title: 'Salutation is reuired.' });
                        }
                        if (name == '') {
                            Toast.fire({ icon: 'error', title: 'Name is reuired.' });
                        }
                        if (dob == '') {
                            Toast.fire({ icon: 'error', title: 'DOB is reuired.' });
                        }
                        if (gender == '') {
                            Toast.fire({ icon: 'error', title: 'Gender is reuired.' });
                        }

                        return false;
                    }

                    $.ajax({
                        type: "POST",
                        url: "{!! route('front.update.details') !!}",
                        data: {
                            '_token': '{{ csrf_token() }}',
                            salutation,
                            name,
                            dob,
                            gender,
                            age: $('#age').val(),
                            email: $('#email').val(),
                            religion_id: $('#religion_id').val(),
                            category_id: $('#category_id').val(),
                            caste: $('#caste').val(),
                            education_id: $('#education_id').val(),
                            profession_id: $('#profession_id').val(),
                            whatsapp_number: $('#whatsapp_number').val(),
                            relationship_name: $('#relationship_name').val()
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.success) {
                                $('#tabPersonal').html('Personal');
                                $('#tabContact').html('Contact');
                                $('#tabFamily').html('Family Details');

                                $('.tab-containers').addClass('d-none');
                                $('#divFamilyInfo').removeClass('d-none');

                                $(".update-details-tab").removeClass("active-tab");
                                $('#tabFamily').addClass('active-tab');

                                Toast.fire({ icon: 'success', title: response.message });
                            } else {
                                Toast.fire({ icon: 'error', title: response.message });
                            }
                        }
                    });

                    $('#divSubmit').html('Update & Next');
                } else if (isFamily) {
                    $('#tabPersonal').html('Personal');
                    $('#tabFamily').html('Family');
                    $('#tabContact').html('Contact Details');

                    $('.tab-containers').addClass('d-none');
                    $('#divContactInfo').removeClass('d-none');

                    $(".update-details-tab").removeClass("active-tab");
                    $('#tabContact').addClass('active-tab');

                    $('#divSubmit').html('Update & got to dashboard');
                } else if (isContact) {
                    const address = $('#address').val();
                    const pincode = $('#pincode').val();
                    const state = $('#state').val();
                    const district = $('#district').val();
                    const assembly_constituency = $('#assembly_constituency').val();
                    const zila_id = $('#zila_id').val();
                    const mandal_id = $('#mandal_id').val();
                    const booth_id = $('#mandal_id').val();
                    const landline_number = $('#landline_number').val();
                    const ward_name = $('#ward_name').val();

                    if (address == '' && pincode == '' && state == '' && district == '' && assembly_constituency == '') {
                        if (address == '') {
                            Toast.fire({ icon: 'error', title: 'Address is reuired.' });
                        }
                        if (pincode == '') {
                            Toast.fire({ icon: 'error', title: 'Pincode is reuired.' });
                        }
                        if (state == '') {
                            Toast.fire({ icon: 'error', title: 'State is reuired.' });
                        }
                        if (district == '') {
                            Toast.fire({ icon: 'error', title: 'Dstrict is reuired.' });
                        }
                        if (assembly_constituency == '') {
                            Toast.fire({ icon: 'error', title: 'Assembly constituency is reuired.' });
                        }

                        return false;
                    }

                    if (zila_id == '' && mandal_id == '' && booth_id == '' && landline_number == '' && ward_name == '') {
                        Toast.fire({ icon: 'success', title: "Contact details updated successfully." });
                        window.location.href = "{!! route('front.index') !!}";
                    }

                    $.ajax({
                        type: "POST",
                        url: "{!! route('front.update.details') !!}",
                        data: {
                            '_token': '{{ csrf_token() }}',
                            address: address,
                            pincode: pincode,
                            state: state,
                            district: district,
                            assembly_constituency: assembly_constituency,
                            zila_id: zila_id,
                            mandal_id: mandal_id,
                            booth_id: booth_id,
                            landline_number: landline_number,
                            ward_name: ward_name,
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.success) {
                                Toast.fire({ icon: 'success', title: response.message });

                                window.location.href = "{!! route('front.index') !!}";
                            } else {
                                Toast.fire({ icon: 'error', title: response.message });
                            }
                        }
                    });
                }
            });

            $(document).on('click', '#btnAddFamilyMember', function() {
                const familyMemberId = $('#familyMemberId').val();
                const memberName = $('#member_name').val();
                const relationshipId = $('#relationship_id').val();
                const memberDob = $('#member_dob').val();
                const memberAge = $('#member_age').val();
                const memberMobileNumber = $('#member_mobile_number').val();

                if ( memberName == '' || relationshipId == '' || memberDob == '' || memberAge == '' || memberMobileNumber == '') {
                    if (memberName == '') {
                        Toast.fire({ icon: 'error', title: 'Full name is reuired.' });
                    }
                    if (relationshipId == '') {
                        Toast.fire({ icon: 'error', title: 'Relationship is reuired.' });
                    }
                    if (memberDob == '') {
                        Toast.fire({ icon: 'error', title: 'D.O.B is reuired.' });
                    }
                    if (memberAge == '') {
                        Toast.fire({ icon: 'error', title: 'Age is reuired.' });
                    }
                    if (memberMobileNumber == '') {
                        Toast.fire({ icon: 'error', title: 'Mobile number is reuired.' });
                    }

                    return false;
                }

                $.ajax({
                    type: "POST",
                    url: "{!! route('front.store.family.member.details') !!}",
                    data: {
                        '_token': '{{ csrf_token() }}',
                        familyMemberId: familyMemberId,
                        name: memberName,
                        relationship_id: relationshipId,
                        dob: memberDob,
                        age: memberAge,
                        mobile_number: memberMobileNumber,
                    },
                    dataType: "json",
                    success: function (response) {
                        if (response.success) {
                            if (response.memberDetailsHtml) {
                                if ($('#divFamilyMemberList').hasClass('d-none')) {
                                    $('#divFamilyMemberList').removeClass('d-none');
                                }

                                $('#divFamilyMemberDetails').html('');
                                $('#divFamilyMemberDetails').html(response.memberDetailsHtml);
                            }

                            Toast.fire({ icon: 'success', title: response.message });
                        } else {
                            Toast.fire({ icon: 'error', title: response.message });
                        }
                    }
                });
            });

            $(document).on('click', '.btnDeleteFamilyMember', function () {
                const id = $(this).data('id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "{!! route('front.delete.family.member') !!}",
                            data: {
                                id: id,
                                "_token": "{{ csrf_token() }}"
                            },
                            dataType: 'json',
                        }).done(function (response) {
                            if (response.success) {
                                $('#divFamilyMemberContiner_'+id).remove();

                                Toast.fire({ icon: 'success', title: response.message });
                            } else {
                                Toast.fire({ icon: 'error', title: response.message });
                            }
                        }).fail(function (jqXHR, status, exception) {
                            if (jqXHR.status === 0) {
                                error = 'Not connected.\nPlease verify your network connection.';
                            } else if (jqXHR.status == 404) {
                                error = 'The requested page not found. [404]';
                            } else if (jqXHR.status == 500) {
                                error = 'Internal Server Error [500].';
                            } else if (exception === 'parsererror') {
                                error = 'Requested JSON parse failed.';
                            } else if (exception === 'timeout') {
                                error = 'Time out error.';
                            } else if (exception === 'abort') {
                                error = 'Ajax request aborted.';
                            } else {
                                error = 'Uncaught Error.\n' + jqXHR.responseText;
                            }

                            Toast.fire({ icon: 'error', title: error })
                        });
                    }
                })
            });

            $(document).on('click', '.btnEditFamilyMember', function() {
                const id = $(this).data('id');

                $.ajax({
                    type: "POST",
                    url: "{!! route('front.get.family.member') !!}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id: id
                    },
                    dataType: "json",
                    success: function (response) {
                        if (response.success) {
                            $('#familyMemberId').val(id);
                            $('#member_name').val(response.name);
                            $('#relationship_id').addClass('d-none');
                            $('#relationship_id').val(response.relationship_id);
                            $('#divRelationshipName').html(response.relationship_name);
                            $('#member_dob').val(response.dob);
                            $('#member_age').val(response.age);
                            $('#member_mobile_number').val(response.mobile_number);
                        } else {
                            Toast.fire({ icon: 'error', title: response.message });
                        }
                    }
                });
            });

            $(document).on('keydown', '#member_mobile_number', function(e) {
                const allowedKeys = [
                    "0",
                    "1",
                    "2",
                    "3",
                    "4",
                    "5",
                    "6",
                    "7",
                    "8",
                    "9",
                    "Backspace",
                    "Delete",
                    "ArrowLeft",
                    "ArrowRight",
                    "Tab",
                    "Enter",
                ];

                const input = e.target;

                if (e.ctrlKey || e.metaKey) {
                    switch (e.key) {
                        case "a":
                        case "c":
                        case "v":
                        case "x":
                        case "z":
                        case "y":
                            return;
                    }
                }

                if (!allowedKeys.includes(e.key)) {
                    e.preventDefault();
                    return;
                }

                if (input.value.length >= mobileNumberMaxLength) {
                    if (e.key !== "Backspace" && e.key !== "Delete" && !e.ctrlKey && !e.metaKey) {
                        e.preventDefault();
                    }
                }
            });

            $(document).on('click', '#divDistrictName, #divAssemblyName', function() {
                const districtList = $('#districtUl').children("li").length;

                if (districtList == 0) {
                    $.ajax({
                        type: "POST",
                        url: "{!! route('ajax.get_districts_and_assemblies') !!}",
                        data: {
                            "_token": $('meta[name="csrf-token"]').attr('content'),
                            "stateId": $('#state').val()
                        },
                        dataType: "json",
                        success: function(response) {
                            if (response.success) {
                                $('#districtUl').html(response.districtHtml);
                                $('#assemblyUl').html(response.assemblyHtml);
                            }
                        }
                    });
                }
            });
        </script>
    @endsection
@endsection
