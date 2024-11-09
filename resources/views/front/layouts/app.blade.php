<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name').' - '.date('Y') }}</title>

    @section('styles')
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="assets/libs/datepicker/bootstrap-datepicker.min.css">

        <link rel="stylesheet" href="{{ asset('frontassets/css/styles.css') }}">

        <style>
            .swal2-popup.swal2-toast {
                font-size: 13px;
            }

            body {
                color: #212529;
            }

            input {
                outline: 0;
            }

            .selected-language {
                color: #f5821f;
            }

            .nav-pills .nav-link.active,
            .nav-pills .show>.nav-link {
                color: #f5821f;
                background-color: #ffffff;
                border-bottom: 1px solid #f5821f;
            }

            .selected-language,
            .nav-link:focus,
            .nav-link:hover {
                color: #f5821f;
            }

            .nav-pills .nav-link {
                border-radius: 0px;
            }
        </style>
    @show
  </head>

  <body>
    @yield('content')

    @section('scripts')
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datepicker/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.js') }}"></script>

        <script>
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

            // $('#dob').datepicker({
            //     dateFormat: 'dd/mm/yy',
            // });

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

            $(document).on('click', '.chip', function() {
                $(".chip").removeClass("selected");
                $(this).addClass('selected');
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
        </script>

        @if (Session::has('alert-message'))
            <script>
                Toast.fire({
                    icon: "{{ Session::get('alert-class', 'info') }}",
                    title: "{{ Session::get('alert-message') }}"
                })
            </script>
        @endif
    @show
  </body>
</html>
