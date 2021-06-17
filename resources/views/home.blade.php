@extends('layouts.app')

@section('content')

    @php
    $main = App\Models\ManageSlide::all();
    @endphp

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
        <img class="pull-left" style="position: absolute; z-index: 1;padding: 10px;" src="{{ asset('img/logo.png') }}"
            alt="logo.png">
        <ol class="carousel-indicators">
            @if ($main)
                @foreach ($main as $key => $item)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"
                        class="{{ $key == 0 ? 'active' : '' }}"></li>
                @endforeach
            @endif
        </ol>
        <div class="carousel-inner">
            @if ($main)
                @foreach ($main as $key => $item)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{ asset($item->image_path) }}" alt="{{ $key }} slide">
                    </div>
                @endforeach
            @else
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img/Image 1 1.png') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/Image 1 1.png') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/Image 1 1.png') }}" alt="Third slide">
                </div>
            @endif
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- container 1 --}}
    <div class="container">
        <div class="text-center mt-4">
            {!! $content->home_text_1 ?? '' !!}
        </div>

        <div class="text-center mt-5">
            <p style="color: red"> ให้เรารู้จักคุณมากกว่านี้ </p>
            <a href="{{ route('main') }}"><button class="btn btn-red">มาเริ่มกันเลย!</button></a>
        </div>
    </div>
    {{-- image 1 --}}
    <div class="mt-4">
        <img class="w-100"
            src="{{ isset($content) && $content->image_path_1 ? asset('img/content/' . $content->image_path_1) : asset('img/dist/default-thumbnail.jpg') }}"
            alt="image_path_1.png">
    </div>

    <div class="container">
        <div class="text-center mt-3 mb-3">
            {!! $content->home_text_2 ?? '' !!}
        </div>
    </div>

    {{-- image 2 --}}
    <div class="mt-4">
        <img class="w-100"
            src="{{ isset($content) && $content->image_path_2 ? asset('img/content/' . $content->image_path_2) : asset('img/dist/default-thumbnail.jpg') }}"
            alt="image_path_2.png">
    </div>

    <div class="container">
        <div class="text-center mt-4">
            {!! $content->home_text_3 ?? '' !!}
        </div>

        <div class="text-center mt-5">
            <p style="color: red"> ให้เรารู้จักคุณมากกว่านี้ </p>
            <a href="{{ route('main') }}"><button class="btn btn-red">มาเริ่มกันเลย!</button></a>
        </div>
    </div>
@endsection

@push('script')
    <script>
        // $('.carousel').carousel({
        //     interval: 1000 * 1
        // });
    </script>
@endpush

@push('styles')
    <style>
        .fixed-bottom {
            top: 5rem;
        }

    </style>
@endpush
