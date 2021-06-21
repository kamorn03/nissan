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
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}" />

    <link rel="icon" href="{{ asset('img/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
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

    <title>{{ config('app.name') }}</title>
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
        <div class="mt-3" style="width: 100%;padding-top: 10px;padding-bottom: 30px;background-color: black;">
            <div class="row overflow-content">
                <div>
                    <a class="btn btn-primary btn-circle btn-xl"> test </a>
                    <a class="btn btn-primary btn-circle btn-xl"> test </a>
                    <a class="btn btn-primary btn-circle btn-xl"> test </a>
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
        </div>
    </footer>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @stack('script')
    @stack('styles')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('js/fontawesome.min.js') }}">
    </script>
    <script src="{{ asset('js/app.js') }}"></script>

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
        });
    </script>

    <style>
        .overflow-content {
            transform: translate(0px, -70%);
        }

        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }

        .btn-circle.btn-lg {
            width: 50px;
            height: 50px;
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.33;
            border-radius: 25px;
        }

        .btn-circle.btn-xl {
            width: 70px;
            height: 70px;
            padding: 10px 16px;
            font-size: 24px;
            line-height: 1.33;
            border-radius: 35px;
        }

    </style>

</body>

</html>
