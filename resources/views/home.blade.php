@extends('layouts.app')

@section('content')

    @php
    $main = App\Models\ManageSlide::all();
    @endphp

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/Image 1 1.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/Image 1 1.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/Image 1 1.png') }}" alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- container 1 --}}
    <div class="container">
        <div class="text-center mt-4">
            {!! $content->home_text_1 ?? '' !!}
        </div>

        <div class="text-center mt-5">
            <p style="color: red"> อยากได้รถแบบไหนบอกเราได้ </p>
            <a href="{{ route('main') }}"><button class="btn btn-red">เริ่ม!</button></a>
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
            <p style="color: red"> อยากได้รถแบบไหนบอกเราได้ </p>
            <a href="{{ route('main') }}"><button class="btn btn-red">เริ่ม!</button></a>
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
