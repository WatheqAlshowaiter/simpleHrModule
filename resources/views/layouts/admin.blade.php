<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/cust-fonts.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawsome.min.css') }}"> --}}
    {{-- https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive-fonts.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
</head>

<body>

    <div class="col-12 justify-content-end d-flex">
        @if ($errors->any())
            <div class="col-12" style="position: absolute;top: 80px;left: 10px;">
                {!! implode('', $errors->all('<div class="alert-click-hide alert alert-danger alert alert-danger col-9 col-xl-3 rounded-0 mb-1" style="position: fixed!important;z-index: 11;opacity:.9;left:25px;cursor:pointer;" onclick="$(this).fadeOut();">:message</div>')) !!}
            </div>
        @endif
        @if (isset($message))
            <div class="col-12" style="position: absolute;top: 80px;left: 10px;">
                <div class="alert-click-hide alert alert-success col-9 col-xl-3 rounded-0 mb-1"
                    style="cursor:pointer;"
                    onclick="$(this).fadeOut();">{{ $message }}</div>
            </div>
        @endif
    </div>
    <form method="POST" action="{{ route('logout') }}" id="logout-form">@csrf</form>
    <div class="col-12 d-flex">
        <div style="width: 280px;background: #11233b;min-height: 100vh;position: fixed;z-index: 1"
            class="aside active">
            <div class="col-12 px-0 d-flex" style="height: 60px;background: #1a2d4d">
                <div class="col-12 px-2 font-3  d-flex  justify-content-center pt-md-1" style="color: #fff">
                    <span class="fas fa-chart-pie font-4 pt-3 d-inline-block "></span>
                    <span class="d-inline-block px-2 pt-2">{{ __('لوحة التحكم') }}</span>
                    <div class="d-flex d-md-none justify-content-center align-items-center px-0 asideToggle"
                        style="width: 60px;height: 60px;">
                        <span class="fas fa-bars font-4"></span>

                    </div>
                </div>
            </div>
            <div class="col-12 px-0 py-5 text-center ">
                <span class="fas fa-user font-5 pt-2"
                    style="border: 2px solid #fff;width: 55px;height: 55px;color: #fff;border-radius: 50%"> </span>
                <div class="col-12 px-0 mt-2" style="color: #fff">
                    مرحباً {{ auth()->user()->name }}
                </div>
            </div>
            <div class="col-12 px-0">
                <div class="col-12 px-0">
                    <a href="{{ route('home') }}" class="col-12 px-0">
                        <div class="col-12 item px-0 d-flex aside-item">
                            <div style="width: 50px" class="px-3 text-center">
                                <span class="fas fa-home font-3"> </span>
                            </div>
                            <div style="width: calc(100% - 50px)" class="px-2">
                                الرئيسية
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('employees.index') }}" class="col-12 px-0">
                        <div class="col-12 item px-0 d-flex  aside-item ">
                            <div style="width: 50px" class="px-3 text-center">
                                <span class="fas fa-images font-3"> </span>
                            </div>
                            <div style="width: calc(100% - 50px)" class="px-2">
                                الموظفين
                            </div>
                        </div>
                    </a>

                    <a href="#" class="col-12 px-0" onclick="document.getElementById('logout-form').submit();">
                        <div class="col-12 item px-0 d-flex aside-item">
                            <div style="width: 50px" class="px-3 text-center">
                                <span class="fas fa-sign-out-alt font-3"> </span>
                            </div>
                            <div style="width: calc(100% - 50px)" class="px-2">
                                تسجيل الخروج
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-content in-active" style="overflow: hidden;">
            <div class="col-12 px-0 d-flex justify-content-between"
                style="height: 60px;box-shadow: 0px 0px 12px #f1f1f1;background: #fff;position: fixed;width: 100%;width: calc(100% - 280px); z-index:99">
                <div class="col-12 px-0 d-flex justify-content-center align-items-center btn btn-light asideToggle"
                    style="width: 60px;height: 60px;">
                    <span class="fas fa-bars font-4"></span>
                </div>

                <div class="col-12 px-0 d-flex justify-content-center align-items-center"
                    style="width: 120px;height: 60px; cursor: pointer;">

                    <div class="col-12 px-0 d-flex justify-content-center align-items-center  "
                        style="width: 60px;height: 60px;background: #2381c6"
                        onclick="document.getElementById('logout-form').submit();" title="تسجيل الخروج">
                        <span class="fas fa-sign-out-alt fa-flip-horizontal font-4" style="color: #fff"></span>
                    </div>
                </div>
            </div>
            <div class="col-12 px-0 py-2" style="margin-top: 60px;">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    <script>
        var allEditors = document.querySelectorAll('.editor');
        for (var i = 0; i < allEditors.length; ++i) {
            ClassicEditor
                .create(allEditors[i], {

                    toolbar: {
                        items: [
                            'heading', '|',
                            'fontfamily', 'fontsize', '|',
                            'alignment', '|',
                            'fontColor', 'fontBackgroundColor', '|',
                            'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
                            'link', '|',
                            'outdent', 'indent', '|',
                            'bulletedList', 'numberedList', 'todoList', '|',
                            'code', 'codeBlock', '|',
                            'insertTable', '|',
                            'uploadImage', 'blockQuote', '|',
                            'undo', 'redo'
                        ],
                        shouldNotGroupWhenFull: true
                    },
                    heading: {
                        options: [{
                                model: 'paragraph',
                                title: 'Paragraph',
                                class: 'ck-heading_paragraph'
                            },
                            {
                                model: 'heading1',
                                view: 'h1',
                                title: 'Heading 1',
                                class: 'ck-heading_heading1'
                            },
                            {
                                model: 'heading2',
                                view: 'h2',
                                title: 'Heading 2',
                                class: 'ck-heading_heading2'
                            },
                            {
                                model: 'heading3',
                                view: 'h3',
                                title: 'Heading 3',
                                class: 'ck-heading_heading3'
                            },
                            {
                                model: 'heading4',
                                view: 'h4',
                                title: 'Heading 4',
                                class: 'ck-heading_heading4'
                            },
                            {
                                model: 'heading5',
                                view: 'h5',
                                title: 'Heading 5',
                                class: 'ck-heading_heading5'
                            },
                            {
                                model: 'heading6',
                                view: 'h6',
                                title: 'Heading 6',
                                class: 'ck-heading_heading6'
                            }
                        ]
                    },
                    alignment: {
                        options: ['left', 'right', 'center']
                    },
                    ckfinder: {

                    },
                    image: {
                        toolbar: ['toggleImageCaption', 'imageTextAlternative']
                    }


                })
                .catch(error => {
                    console.error(error);
                });
        }
    </script>
    <script>
        $('.asideToggle').on('click', function() {
            $('.aside').toggleClass('active');
            $('.aside').toggleClass('in-active');
            $('.main-content').toggleClass('active');
            $('.main-content').toggleClass('in-active');
        });
        $("a[href='" + window.location.href + "'] >div").addClass('active');
        $('.alert-click-hide').on('click', function() {
            $(this).fadeOut();
        });
    </script>
    @yield('scripts')
</body>

</html>
