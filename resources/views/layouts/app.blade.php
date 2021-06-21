<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    @php
    $main_meta = App\Models\ManageContent::first();
    @endphp

    {{-- {{$main_meta}} --}}
    <title>{{$main_meta && $main_meta->meta_title ? $main_meta->meta_title : "title"}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="{{$main_meta && $main_meta->meta_description ? $main_meta->meta_description : "description"}}">
    <meta name="keywords" content="{{$main_meta && $main_meta->meta_keyword ? $main_meta->meta_keyword : "keywords"}}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/> --}}


    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>

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
        {{-- <button type="button" class="btn btn-primary"
            style="background-color: white; color: white; width: 60px; height: 60px; border-color: red; position: absolute; border-radius: 50%; border-width: 5px;transform: translate(120px, -50%)"><img
                src="data:image/png;base64,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"></button> --}}

        @php
            $content = App\Models\ManageContent::first();
        @endphp
        <div class="mt-3" style="width: 100%;padding-top: 10px;padding-bottom: 30px;background-color: black;">
            <h2 class="title-footer">ติดต่อเราได้ทาง</h2>
            <div>

                <a href="{{ $content->facebook_link ?? '#' }}"><img class="m-4" style="width :20px;height :20px"
                        src="{{ asset('img/social/facebook.svg') }}" /></a>
                <a href="{{ $content->global_link ?? '#' }}"><img class="m-4" style="width :20px;height :20px"
                        src="{{ asset('img/social/network.svg') }}" /></a>
                <a href="{{ $content->phone_footer ?? '#' }}"><img class="m-4" style="width :20px;height :20px"
                        src="{{ asset('img/social/phone.svg') }}" /></a>

            </div>

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

</body>

</html>
