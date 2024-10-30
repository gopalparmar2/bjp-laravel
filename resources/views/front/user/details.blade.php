<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BJP | Home</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontAssets/css/styles.css') }}">

    <style>
        
      input {
        outline:0;
     }
     .selected-language  {
    color: #f5821f;
}
    </style>
</head>

<body>
    <div>
        <div class="bg-white main-container">
            <div class="d-flex align-style align-items-center  secondary-container fixed-position">
                <div class="d-flex align-items-center " style="column-gap: 6px;">
                    <img src="{{ asset('frontAssets/imgs/logo.svg') }}" alt="logo">

                    <p class="m-0 bjp-text">BHARATIYA JANATA PARTY</p>
                </div>

                <div class="header-wrapper">
                    <div class="dropdown-container">
                        <button class="css-1pe4mpk-MuiButtonBase-root-MuiIconButton-root" tabindex="0" type="button"
                            aria-haspopup="true" aria-label="Change Language" data-mui-internal-clone-element="true">
                            {{-- <img src="{{ asset('frontAssets/imgs/img1.png') }}" class="translation-icon" alt="icon"> --}}
                            <span class="css-8je8zh-MuiTouchRipple-root"></span>
                        </button>

                        <p class="selected-language">en</p>
                    </div>

                    <div class="logout-icon" onclick="event.preventDefault(); document.getElementById('frmLogout').submit();">
                        <svg class="css-i4bv87-MuiSvgIcon-root" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                            data-testid="LogoutIcon">
                            <path
                                d="m17 7-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4z">
                            </path>
                        </svg>
                    </div>

                    <form id="frmLogout" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>

            <div class="margin-second d-flex  align-items-center pd-heading" style="padding: 0px 25px;">
                <div style="width: 18px;"></div>

                <p class="m-0 fill-details-text">Provide Details</p>

                <div></div>
            </div>

            <div class="Toastify"></div>

            <div class="position-relative bg-white"></div>

            <div class="pp-main-container">
                <div class="pp-sub-contt">
                    <div class="profile-pic-container">
                        <div class="css-mkijz0-MuiAvatar-root">
                            <svg class="css-10mi8st-MuiSvgIcon-root-MuiAvatar-fallback" focusable="false"
                                aria-hidden="true" viewBox="0 0 24 24" data-testid="PersonIcon">
                                <path
                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <button class="pp-upload-btn">
                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.345 12.2439L11.7967 3.79222L10.6183 2.61388L2.16667 11.0656V12.2439H3.345ZM4.03583 13.9106H0.5V10.3747L10.0292 0.845551C10.1854 0.689325 10.3974 0.601562 10.6183 0.601562C10.8393 0.601562 11.0512 0.689325 11.2075 0.845551L13.565 3.20305C13.7212 3.35932 13.809 3.57125 13.809 3.79222C13.809 4.01319 13.7212 4.22511 13.565 4.38138L4.03583 13.9106ZM0.5 15.5772H15.5V17.2439H0.5V15.5772Z"
                                fill="#F15600"></path>
                        </svg>
                    </button>
                </div>

                <div class="profile-photo-label">Upload Photo</div>
            </div>

            <div class="form-container">
                <div class="divider-div"></div>

                <div>
                    <div class="input-container">
                        <div class="css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                            <label
                                class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary Mui-disabled MuiFormLabel-filled MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-sizeMedium MuiInputLabel-filled css-o943dk-MuiFormLabel-root-MuiInputLabel-root"
                                data-shrink="true" for=":r1:" id=":r1:-label">
                                Mobile number
                            </label>

                            <div
                                class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                <input aria-invalid="false" disabled="" id=":r1:" name="mobile_number"
                                    type="text"
                                    class="MuiInputBase-input MuiFilledInput-input Mui-disabled css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                    value="7874828898">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider-div"></div>

                <div class="double-field-wrapper">
                    <div class="dfw-contt-one">
                        <select class="select-input" name="salutation">
                            <option value="" disabled>Title</option>
                            <option class="option-select-input" value="mrs">Mrs</option>
                            <option class="option-select-input" value="mr">Mr</option>
                            <option class="option-select-input" value="ms">Ms</option>
                        </select>
                    </div>

                    <div class="separate"></div>

                    <div class="dfw-contt-two">
                        <div class="input-name ">
                            <div
                                class="form MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                <label
                                    class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled css-e4w4as-MuiFormLabel-root-MuiInputLabel-root  label-name "
                                    data-shrink="false" for=":r2:" id="inputNameLabel">
                                    {{-- <span class="Content-name"> Name *</span> --}}

                                </label>

                                <div class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root"
                                    id="inputNameDiv">
                                    <input aria-invalid="false" placeholder="Name *"  id="inputName" name="name" type="text"
                                        class=" MuiInputBase-input-box MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                        value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gender-container">
                    <div class="dob-field">
                        <div class="dob-field-one">
                            <div style="font-size: 16px; color: rgb(113, 111, 134);">D.O.B *</div>
                            <div
                                style="display: flex; flex-direction: row; align-items: center; background-color: white; border-radius: 8px; justify-content: end; width: 100%;">
                                <div
                                    class="MuiFormControl-root MuiTextField-root css-r0ibox-MuiFormControl-root-MuiTextField-root">
                                    <div
                                        class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-formControl MuiInputBase-adornedEnd Mui-readOnly MuiInputBase-readOnly css-o9k5xi-MuiInputBase-root-MuiOutlinedInput-root">
                                        <input aria-invalid="false" autocomplete="off" id=":r4:"
                                            placeholder="DD-MM-YYYY" readonly="" type="text"
                                            aria-label="Choose date" inputmode="text"
                                            class="!outline-0 focus:border-0 MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd Mui-readOnly MuiInputBase-readOnly css-nxo287-MuiInputBase-input-MuiOutlinedInput-input"
                                            value="">

                                        <fieldset aria-hidden="true"
                                            class="MuiOutlinedInput-notchedOutline css-1d3z3hw-MuiOutlinedInput-notchedOutline">
                                            <legend class="css-ihdtdm">
                                                <span class="notranslate">&ZeroWidthSpace;</span>
                                            </legend>
                                        </fieldset>
                                    </div>
                                </div>

                                <div style="position: absolute; z-index: 0; margin-right: 10px;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 2V5" stroke="#F15600" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16 2V5" stroke="#F15600" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M16 3.5C19.33 3.68 21 4.95 21 9.65V15.83C21 19.95 20 22.01 15 22.01H9C4 22.01 3 19.95 3 15.83V9.65C3 4.95 4.67 3.69 8 3.5H16Z"
                                            stroke="#F15600" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M20.75 17.5996H3.25" stroke="#F15600" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                        <path
                                            d="M12 8.25C10.77 8.25 9.73 8.92 9.73 10.22C9.73 10.84 10.02 11.31 10.46 11.61C9.85 11.97 9.5 12.55 9.5 13.23C9.5 14.47 10.45 15.24 12 15.24C13.54 15.24 14.5 14.47 14.5 13.23C14.5 12.55 14.15 11.96 13.53 11.61C13.98 11.3 14.26 10.84 14.26 10.22C14.26 8.92 13.23 8.25 12 8.25ZM12 11.09C11.48 11.09 11.1 10.78 11.1 10.29C11.1 9.79 11.48 9.5 12 9.5C12.52 9.5 12.9 9.79 12.9 10.29C12.9 10.78 12.52 11.09 12 11.09ZM12 14C11.34 14 10.86 13.67 10.86 13.07C10.86 12.47 11.34 12.15 12 12.15C12.66 12.15 13.14 12.48 13.14 13.07C13.14 13.67 12.66 14 12 14Z"
                                            fill="#F15600"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="dob-field-two">
                            <div style="font-size: 16px; color: transparent;">Age</div>
                            <div
                                class="MuiFormControl-root MuiTextField-root age-input css-1rd8emk-MuiFormControl-root-MuiTextField-root">
                                <div
                                    class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-formControl Mui-readOnly MuiInputBase-readOnly css-9ddj71-MuiInputBase-root-MuiOutlinedInput-root">
                                    <input aria-invalid="false" id=":r6:" name="age" placeholder="Age"
                                        readonly="" type="text"
                                        class="MuiInputBase-input MuiOutlinedInput-input Mui-readOnly MuiInputBase-readOnly css-1t8l2tu-MuiInputBase-input-MuiOutlinedInput-input"
                                        value="">
                                    <fieldset aria-hidden="true"
                                        class="MuiOutlinedInput-notchedOutline css-1d3z3hw-MuiOutlinedInput-notchedOutline">
                                        <legend class="css-ihdtdm">
                                            <span class="notranslate">&ZeroWidthSpace;</span>
                                        </legend>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gender-label" style="margin-top: 10px;">Gender *</div>
                    <div class="chip-container">
                        <div class="chip ">Female</div>
                        <div class="chip ">Male</div>
                        <div class="chip ">Other</div>
                    </div>
                </div>

                <div>
                    <div>
                        <div class="input-container">
                            <div
                                class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                {{-- <label
                                    class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled css-e4w4as-MuiFormLabel-root-MuiInputLabel-root"
                                    data-shrink="false" for=":r7:" id=":r7:-label">
                                    Email Id
                                </label> --}}

                                <div
                                    class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                    <input aria-invalid="false" id=":r7:" placeholder="Email Id" name="email" type="text"
                                        class="MuiInputBase-input-box MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                        value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider-div"></div>

                <div class="address-form-container">
                    <div class="add-address-label">Add address</div>

                    <div>
                        <div class="input-container">
                            <div
                                class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                {{-- <label
                                    class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled css-e4w4as-MuiFormLabel-root-MuiInputLabel-root"
                                    data-shrink="false" for=":r8:" id=":r8:-label">
                                    Address (House / Flat / Floor No.)
                                </label> --}}

                                <div
                                    class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                    <input aria-invalid="false" id=":r8:" placeholder="Address (House / Flat / Floor No.)" name="house_no" type="text"
                                        maxlength="100"
                                        class="MuiInputBase-input-box MuiInputBase-input MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                        value="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="input-container">
                            <div
                                class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root">
                                {{-- <label
                                    class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled css-e4w4as-MuiFormLabel-root-MuiInputLabel-root"
                                    data-shrink="false" for=":r9:" id=":r9:-label">

                                </label> --}}

                                <div
                                    class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                    <input aria-invalid="false" placeholder="Pincode" id=":r9:" name="pincode" type="tel"
                                        maxlength="6"
                                        class="MuiInputBase-input-box MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                        value="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="primary-dropdown-container">
                        <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                            <label
                                class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root"
                                data-shrink="false" id="demo-simple-select-standard-label">
                                State *
                            </label>

                            <div
                                class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl  css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root">
                                <div tabindex="0" role="combobox" aria-controls=":ra:" aria-expanded="false"
                                    aria-haspopup="listbox"
                                    aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard"
                                    id="demo-simple-select-standard"
                                    class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                    <span class="notranslate">&ZeroWidthSpace;</span>
                                </div>

                                <input aria-invalid="false" name="state" aria-hidden="true" tabindex="-1"
                                    class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput" value="">

                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon"
                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                    data-testid="ArrowDropDownIcon">
                                    <path d="M7 10l5 5 5-5z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="primary-dropdown-container">
                        <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                            <label
                                class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root"
                                data-shrink="false" id="demo-simple-select-standard-label">
                                District *
                            </label>

                            <div
                                class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl  css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root">
                                <div tabindex="0" role="combobox" aria-controls=":rb:" aria-expanded="false"
                                    aria-haspopup="listbox"
                                    aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard"
                                    id="demo-simple-select-standard"
                                    class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                    <span class="notranslate">&ZeroWidthSpace;</span>
                                </div>

                                <input aria-invalid="false" name="district" aria-hidden="true" tabindex="-1"
                                    class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput" value="">

                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon"
                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                    data-testid="ArrowDropDownIcon">
                                    <path d="M7 10l5 5 5-5z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="primary-dropdown-container">
                        <div class="MuiFormControl-root css-1869usk-MuiFormControl-root">
                            <label
                                class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-standard css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root"
                                data-shrink="false" id="demo-simple-select-standard-label">
                                Assembly constituency (AC)
                            </label>

                            <div
                                class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl  css-n70jm4-MuiInputBase-root-MuiInput-root-MuiSelect-root">
                                <div tabindex="0" role="combobox" aria-controls=":rc:" aria-expanded="false"
                                    aria-haspopup="listbox"
                                    aria-labelledby="demo-simple-select-standard-label demo-simple-select-standard"
                                    id="demo-simple-select-standard"
                                    class="MuiSelect-select MuiSelect-standard MuiInputBase-input MuiInput-input css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input">
                                    <span class="notranslate">&ZeroWidthSpace;</span>
                                </div>

                                <input aria-invalid="false" name="ac" aria-hidden="true" tabindex="-1"
                                    class="MuiSelect-nativeInput css-yf8vq0-MuiSelect-nativeInput" value="">

                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiSelect-icon MuiSelect-iconStandard css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon"
                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                    data-testid="ArrowDropDownIcon">
                                    <path d="M7 10l5 5 5-5z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider-div"></div>

                <div class="add-address-label">Referral (only a Primary Member can refer)</div>

                <div>
                    <div>
                        <div class="input-container">
                            <div class="MuiFormControl-root MuiTextField-root css-1u3bzj6-MuiFormControl-root-MuiTextField-root"
                                inputmode="text">
                                {{-- <label
                                    class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled MuiFormLabel-colorPrimary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-sizeMedium MuiInputLabel-filled css-e4w4as-MuiFormLabel-root-MuiInputLabel-root"
                                    data-shrink="false" for=":rd:" id=":rd:-label">

                                </label> --}}

                                <div
                                    class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-batk84-MuiInputBase-root-MuiFilledInput-root">
                                    <input aria-invalid="false" placeholder="Mobile number / Referral code" id=":rd:" name="referral_code" type="text"
                                        maxlength="10"
                                        class="MuiInputBase-input-box MuiFilledInput-input css-10botns-MuiInputBase-input-MuiFilledInput-input"
                                        value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="height-div"></div>

                <div class="checkbox-container checkbox-container-user  bg-pledge ">
                    <div>
                        <input type="checkbox" class="user-checkbox">
                    </div>

                    <div class="checkbox-tnc pledge-style">I pledge and willing to receive regular updates from BJP
                    </div>
                </div>

                <button class="btn-container" disabled="">
                    <div></div>

                    Save

                    <div class="arrow-div">
                        <svg width="6" height="11" viewBox="0 0 6 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 5.75C6 5.9832 5.91646 6.21639 5.73744 6.4005L1.52461 10.7331C1.17852 11.089 0.605669 11.089 0.259572 10.7331C-0.0865241 10.3771 -0.0865241 9.78799 0.259572 9.43206L3.83988 5.75L0.259572 2.06794C-0.0865241 1.71201 -0.0865241 1.12288 0.259572 0.76695C0.605669 0.411017 1.17852 0.411017 1.52461 0.76695L5.73744 5.0995C5.91646 5.28361 6 5.5168 6 5.75Z"
                                fill="#878D92"></path>
                        </svg>
                    </div>
                </button>

                <div class="height-div-two"></div>
            </div>
        </div>
    </div>

    <div role="presentation" id="menu-state" class="MuiPopover-root MuiMenu-root MuiModal-root css-10nakn3-MuiModal-root-MuiPopover-root-MuiMenu-root d-none">
        <div aria-hidden="true" class="MuiBackdrop-root MuiBackdrop-invisible MuiModal-backdrop css-g3hgs1-MuiBackdrop-root-MuiModal-backdrop" style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1);"></div>
        <div tabindex="0" data-testid="sentinelStart"></div>
        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation8 MuiPopover-paper MuiMenu-paper MuiMenu-paper css-12711zd-MuiPaper-root-MuiPopover-paper-MuiMenu-paper" tabindex="-1" style="opacity: 1; transform: none; min-width: 360px; transition: opacity 384ms cubic-bezier(0.4, 0, 0.2, 1), transform 256ms cubic-bezier(0.4, 0, 0.2, 1); top: 80px; left: 178px; transform-origin: 180px 172.588px;">
            <ul class="MuiList-root MuiList-padding MuiMenu-list css-6hp17o-MuiList-root-MuiMenu-list" role="listbox" tabindex="-1" aria-labelledby="demo-simple-select-standard-label" id=":ra:" style="padding-right: 0px; width: calc(100% + 0px);">
                <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root" tabindex="0" role="option" aria-selected="false" data-value="33">
                    Andaman and Nicobar Islands
                    <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span>
                </li>
                <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root" tabindex="-1" role="option" aria-selected="false" data-value="1">
                    Andhra Pradesh
                    <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span>
                </li>
                <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root" tabindex="-1" role="option" aria-selected="false" data-value="2">
                    Arunachal Pradesh
                    <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span>
                </li>
                <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root" tabindex="-1" role="option" aria-selected="false" data-value="3">
                    Assam
                    <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span>
                </li>
                <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root" tabindex="-1" role="option" aria-selected="false" data-value="4">
                    Bihar
                    <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span>
                </li>
                <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root" tabindex="-1" role="option" aria-selected="false" data-value="34">
                    Chandigarh
                    <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span>
                </li>
                <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root" tabindex="-1" role="option" aria-selected="false" data-value="5">
                    Chhattisgarh
                    <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span>
                </li>
                <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root" tabindex="-1" role="option" aria-selected="false" data-value="32">
                    Dadra Nagar Haveli & Daman-Diu
                    <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span>
                </li>
                <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-1dinu7n-MuiButtonBase-root-MuiMenuItem-root" tabindex="-1" role="option" aria-selected="false" data-value="30">
                    Delhi
                    <span class="MuiTouchRipple-root css-8je8zh-MuiTouchRipple-root"></span>
                </li>
            </ul>
        </div>
        <div tabindex="0" data-testid="sentinelEnd"></div>
    </div>

    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script>
        // $(document).on('focus', '#inputName', function() {
        //     $('#inputNameDiv').addClass('MuiInputLabel-shrink Mui-focused css-o943dk-MuiFormLabel-root-MuiInputLabel-root');
        //     $('#inputNameLabel').addClass('Mui-focused');
        // });

        // $(document).on('blur', '#inputName', function() {
        //     $('#inputNameDiv').removeClass('MuiInputLabel-shrink Mui-focused css-o943dk-MuiFormLabel-root-MuiInputLabel-root');
        //     $('#inputNameLabel').removeClass('Mui-focused');
        // });

        $(document).on('click', '.chip', function() {
            $(".chip").removeClass("selected");
            $(this).addClass('selected');
        });
    </script>
</body>

</html>
