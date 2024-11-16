const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});

const currentUrl = window.location.href;

$(document).on('click', '.chip', function() {
    $(".chip").removeClass("selected");
    $(this).addClass('selected');

    const gender = $(this).data('value');
    $('#gender').val(gender);

    if (currentUrl.includes("user-details")) {
        checkFormValues();
    }
});

$(document).on('click', '.dropdown', function() {
    isClicked = $(this).find('svg').hasClass('css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon');

    if (isClicked) {
        $(this).find('svg').removeClass('css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon');
        $(this).find('svg').addClass('MuiSelect-iconOpen css-1mf6u8l-MuiSvgIcon-root-MuiSelect-icon');

        $(this).prev('label').removeClass('css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root');
        $(this).prev('label').addClass(
            'MuiInputLabel-shrink Mui-focused css-1c2i806-MuiFormLabel-root-MuiInputLabel-root');

        $(this).addClass('Mui-focused');
    } else {
        $(this).find('svg').removeClass('MuiSelect-iconOpen css-1mf6u8l-MuiSvgIcon-root-MuiSelect-icon');
        $(this).find('svg').addClass('css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon');

        $(this).prev('label').removeClass(
            'MuiInputLabel-shrink Mui-focused css-1c2i806-MuiFormLabel-root-MuiInputLabel-root');
        $(this).prev('label').addClass('css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root');
        $(this).removeClass('Mui-focused');
    }
});

$(document).on('click', '#divStateName', function() {
    const url =$(this).data('url');

    $.ajax({
        type: "GET",
        url: url,
        dataType: "json",
        success: function(response) {
            if (response.success) {
                $('#stateUl').html(response.html);
                $('#menu-state').removeClass('d-none');
            }
        }
    });
});

$(document).on('click', '.stateLi', function() {
    const stateId = $(this).data('id');
    const stateName = $(this).data('name');
    const url = $(this).data('assembly-url');

    $('#state').val(stateId);
    $('#divStateName').html(stateName);

    $('#district').val('');
    $('#district').removeClass('d-none');
    $('#divDistrictName').html('');

    $('#assembly_constituency').val('');
    $('#assembly_constituency').removeClass('d-none');
    $('#divAssemblyName').html('');

    $('#menu-state').addClass('d-none');
    $('#state').addClass('d-none');

    $.ajax({
        type: "POST",
        url: url,
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
            "stateId": stateId
        },
        dataType: "json",
        success: function(response) {
            if (response.success) {
                $('#districtUl').html(response.districtHtml);
                $('#assemblyUl').html(response.assemblyHtml);

                if (currentUrl.includes("update-details")) {
                    $('#zilaUl').html(response.zilaHtml);
                }

                if (currentUrl.includes("user-details")) {
                    checkFormValues();
                }
            }
        }
    });
});

$(document).on('click', '#divDistrictName', function() {
    const stateId = $('#state').val();

    if (stateId != '') {
        $('#menu-district').removeClass('d-none');
    }
});

$(document).on('click', '.districtLi', function() {
    const districtId = $(this).data('id');
    const districtName = $(this).data('name');

    $('#district').val(districtId);
    $('#divDistrictName').html(districtName);
    $('#menu-district').addClass('d-none');
    $('#district').addClass('d-none');

    if (currentUrl.includes("user-details")) {
        checkFormValues();
    }
});

$(document).on('click', '#divAssemblyName', function() {
    const stateId = $('#state').val();

    if (stateId != '') {
        $('#menu-assembly').removeClass('d-none');
    }
});

$(document).on('click', '.assemblyLi', function() {
    const assemblyId = $(this).data('id');
    const assemblyName = $(this).data('name');

    $('#assembly_constituency').val(assemblyId);
    $('#divAssemblyName').html(assemblyName);
    $('#menu-assembly').addClass('d-none');
    $('#assembly_constituency').addClass('d-none');

    if (currentUrl.includes("user-details")) {
        checkFormValues();
    }
});

$(document).on('keyup', '#pincode', function() {
    const pincode = $(this).val();
    const url = $(this).data('url');

    if (pincode.length == 6) {
        $.ajax({
            type: "POST",
            url: url,
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                "pincode": pincode
            },
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('.stateOrDistrict').find('svg').removeClass(
                        'css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon');
                    $('.stateOrDistrict').find('svg').addClass(
                        'MuiSelect-iconOpen css-1mf6u8l-MuiSvgIcon-root-MuiSelect-icon');

                    $('.stateOrDistrict').prev('label').removeClass(
                        'css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root');
                    $('.stateOrDistrict').prev('label').addClass(
                        'MuiInputLabel-shrink Mui-focused css-1c2i806-MuiFormLabel-root-MuiInputLabel-root'
                        );

                    $('.stateOrDistrict').addClass('Mui-focused');

                    $('#state').val(response.stateId);
                    $('#state').addClass('d-none');
                    $('#divStateName').html(response.stateName);

                    $('#district').val(response.districtId);
                    $('#district').addClass('d-none');
                    $('#divDistrictName').html(response.districtName);

                    $('#assembly_constituency').val('');
                    $('#assembly_constituency').removeClass('d-none');
                    $('#divAssemblyName').html('');

                    $('#districtUl').html(response.districtHtml);
                    $('#assemblyUl').html(response.assemblyHtml);

                    if (currentUrl.includes("user-details")) {
                        checkFormValues();
                    }
                }
            }
        });
    }
});

$('#dob').datepicker({
    dateFormat: 'dd-mm-yy',
    endDate: '-18y',
    autoclose: true
}).on("change", function() {
    var selectedDate = $(this).datepicker("getDate");

    if (selectedDate) {
        var today = new Date();
        var age = today.getFullYear() - selectedDate.getFullYear();
        var monthDifference = today.getMonth() - selectedDate.getMonth();
        var dayDifference = today.getDate() - selectedDate.getDate();

        if (monthDifference < 0 || (monthDifference === 0 && dayDifference < 0)) {
            age--;
        }

        $('#age').val(age + ' Yrs');
    }
});

$('#member_dob').datepicker({
    dateFormat: 'dd/mm/yy',
    endDate: '-1y',
    autoclose: true
}).on("change", function() {
    var selectedDate = $(this).datepicker("getDate");

    if (selectedDate) {
        var today = new Date();
        var age = today.getFullYear() - selectedDate.getFullYear();
        var monthDifference = today.getMonth() - selectedDate.getMonth();
        var dayDifference = today.getDate() - selectedDate.getDate();

        if (monthDifference < 0 || (monthDifference === 0 && dayDifference < 0)) {
            age--;
        }

        $('#member_age').val(age + ' Yrs');
    }
});

$('.MuiFilledInput-input').on('focus', function() {
    const label = $(this).closest('.MuiFormControl-root').find('.MuiFormLabel-root');
    const inputParentDiv = $(this).closest('.MuiInputBase-root');

    label.addClass('MuiInputLabel-shrink Mui-focused css-o943dk-MuiFormLabel-root-MuiInputLabel-root')
        .removeClass('css-e4w4as-MuiFormLabel-root-MuiInputLabel-root');
    inputParentDiv.addClass('Mui-focused');
});

$('.MuiFilledInput-input').on('blur', function() {
    let inputVal = $(this).val();

    if (inputVal == '') {
        const label = $(this).closest('.MuiFormControl-root').find('.MuiFormLabel-root');
        const inputParentDiv = $(this).closest('.MuiInputBase-root');

        label.removeClass('MuiInputLabel-shrink Mui-focused css-o943dk-MuiFormLabel-root-MuiInputLabel-root')
            .addClass('css-e4w4as-MuiFormLabel-root-MuiInputLabel-root');
        inputParentDiv.removeClass('Mui-focused');
    }
});

$(document).on('click', '.pp-upload-btn', function() {
    $('#uploadProfilePicPopup').removeClass('d-none');
});

$(document).on('click', '.cancel-label', function() {
    $('#uploadProfilePicPopup').addClass('d-none');
});

$(document).on('click', '#btnPreviewCancel', function() {
    $('#profile-img').attr('src', '');
    $('#previewUploadedImg').addClass('d-none');
    $('#uploadProfilePicPopup').removeClass('d-none');
});

$(document).on('change', '#file-upload-gallery', function() {
    if (this.files && this.files[0]) {
        $('#uploadProfilePicPopup').addClass('d-none');

        var reader = new FileReader();

        reader.onload = function(e) {
            $('#profile-img').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);

        $('#previewUploadedImg').removeClass('d-none');
    }
});

$(document).on('click', '#btnUploadImage', function() {
    let formData = new FormData();
    formData.append('image', $('#file-upload-gallery')[0].files[0]);
    const imgUploadUrl = $(this).data('img-upload-url');

    $.ajax({
        type: "POST",
        url: imgUploadUrl,
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: "json",
        success: function(response) {
            if (response.success) {
                let imgHrml =
                    '<div class="MuiAvatar-root MuiAvatar-circular css-11fq0lf-MuiAvatar-root"> <img src="' +
                    response.image +
                    '" alt="Profile Image" class="MuiAvatar-img css-1pqm26d-MuiAvatar-img"> </div>';

                $('.profile-pic-container').html(imgHrml);
                $('#profilePhotoLabel').html('Profile Photo');
            } else {
                setTimeout(function() {
                    Toast.fire("Failed!", response.message, "error");
                }, 2000);
            }

            $('#profile-img').attr('src', '');
            $('#previewUploadedImg').addClass('d-none');
        }
    });
});

$(document).on('keyup change', '#email', function() {
    const emailErr = $('#emailErr').hasClass('d-none');
    const email = $(this).val();

    if (email == '' && !emailErr) {
        $('#emailErr').addClass('d-none');
    }

    if (email != '') {
        if (isValidEmail(email)) {
            $('#emailErr').addClass('d-none');
        } else {
            $('#emailErr').removeClass('d-none');
        }
    }

    if (currentUrl.includes("user-details")) {
        checkFormValues();
    }
});

function isValidEmail(email) {
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailPattern.test(email);
}
