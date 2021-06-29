<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    @php
        $main_meta = App\Models\ManageContent::first();
    @endphp

    {{-- {{$main_meta}} --}}
    <title>{{ $main_meta && $main_meta->meta_title ? $main_meta->meta_title : 'title' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="{{ $main_meta && $main_meta->meta_description ? $main_meta->meta_description : 'description' }}">
    <meta name="keywords"
        content="{{ $main_meta && $main_meta->meta_keyword ? $main_meta->meta_keyword : 'keywords' }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="icon" href="{{ asset('img/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>


    <style>
        /*
            these styles will animate bootstrap alerts.
        */
        .alert {
            z-index: 99;
            top: 60px;
            right: 18px;
            min-width: 30%;
            position: fixed;
            animation: slide 0.5s forwards;
        }

        @keyframes slide {
            100% {
                top: 30px;
            }
        }

        @media screen and (max-width: 668px) {
            .alert {
                /* center the alert on small screens */
                left: 10px;
                right: 10px;
            }
        }


        @media screen and (min-width: 668px) {
            /* body {
                width: 480px;
                margin: 0 auto;
            } */
        }

    </style>

    {{-- <title>{{ config('app.name') }}</title> --}}
</head>

<body>

    @include('inc.navbar')
    <main class="" id="app">
        @yield('content')
    </main>

    {{-- footer --}}
    <footer class="text-center fixed-bottom">

        @php
            $content = App\Models\ManageContent::first();
        @endphp
        <div class="mt-3" style="width: 100%;padding-top: 10px;padding-bottom: 30px;background-color: black;font-size: 13px;">
            <div class="row overflow-content">
                <div>
                    <a href="{{ $content->facebook_link ?? '#' }}"><img src="{{ asset('img\btn\Facebook.svg') }}"
                            alt="img\btn\Facebook.svg"></a>
                    <a href="tel:{{ $content->phone_footer ?? '#' }}"><img src="{{ asset('img\btn\Call.svg') }}"
                            alt="img\btn\Call.svg"></a>
                    <a href="{{ $content->line_link ?? '#' }}"><img src="{{ asset('img\btn\Line.svg') }}"
                            alt="img\btn\Line.svg"></a>
                </div>
            </div>
            <h2 class="title-footer">ติดต่อเราได้ทาง</h2>


            {{-- <img style={{ 'paddingRight': '20px', 'paddingLeft': '20px', 'marginBottom': '10px' }} src={website} />
            <img style={{ 'paddingRight': '20px', 'paddingLeft': '20px', 'marginBottom': '10px' }} src={phone} /><br /> --}}
            <p class="m-0" style="color :white;">{{ $content->company_footer ?? '' }}</p>
            <p class="m-0" style="color :white;">{{ $content->address_footer ?? '' }}</p>
            <p class="m-0" style="color :white;">{{ $content->road_footer ?? '' }}
                {{ $content->district_footer ?? '' }} {{ $content->city_footer ?? '' }}
                {{ $content->province_footer ?? '' }} {{ $content->zipcode_footer ?? '' }} </p>
                {{-- {{ $content }} --}}
            <p class="m-0" style="color :white;">{{ $content->phone_footer ? ' โทรศัพท์: ' . $content->phone_footer : '' }}</p>
        </div>
    </footer>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>


    <script src="{{ asset('js/bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('js/fontawesome.min.js') }}">
    </script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js'></script>
    <script
        src='https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js'>
    </script>


    <script src="{{ asset('js/script-time.js') }}"></script>


    @stack('script')
    @stack('styles')


    {{-- Success Alert --}}
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- Error Alert --}}
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <script>
        //close the alert after 3 seconds.
        $(document).ready(function() {
            setTimeout(function() {
                $(".alert").alert('close');
            }, 3000);

            $('.datepickers').datetimepicker({
                format: 'LT'
            });


        });
    </script>

    <style>
        .overflow-content {
            transform: translate(0px, -70%);
        }

        .row>* {
            margin-left: 0;
            margin-right: 0;
            padding-right: 0;
            padding-left: 0;
        }

        .row {

            margin-right: 0;
            margin-left: 0;
        }

    </style>

</body>

</html>
