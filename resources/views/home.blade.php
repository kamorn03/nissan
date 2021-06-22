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

    {{-- <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">.col-6 .col-sm-6</div>
            <div class="col-12 col-sm-6">.col-6 .col-sm-6</div>

            <!-- Force next columns to break to new line at md breakpoint and up -->
            <div class="w-100 d-none d-md-block"></div>

            <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
            <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
        </div>
    </div> --}}



    <div class="container">

        <div class="text-center mt-4">
            <h5 style="font-weight: bold">นิสสันกรุงไทยรถมือสอง ช่วยคัดสรรถยนต์ที่ดีที่สุดเพื่อคุณ</h5>
        </div>

        <div class="text-center mt-3">
            <p style="color: red"> อยากได้รถแบบไหนบอกเราได้ </p>
            <a href="{{ route('main') }}"><button class="btn btn-red">เริ่ม!</button></a>
        </div>

        <div class="row mt-5">
            <div class="col-12 col-sm-6">
                <img class="w-100"
                    src="{{ isset($content) && $content->image_path_1 ? asset('img/content/' . $content->image_path_1) : asset('img/dist/default-thumbnail.jpg') }}"
                    alt="image_path_1.png">
            </div>
            <div class="col-12 col-sm-6 ">
                <div class="mt-3 m-3 text-center">
                    {!! $content->home_text_2 ?? '' !!}
                </div>
            </div>

            <!-- Force next columns to break to new line at md breakpoint and up -->

            <div class="w-100 d-none d-md-block mt-5"></div>

            <div class="col-12 col-sm-6 d-none d-sm-block"> <div class="mt-5 m-3 text-center"> {!! $content->home_text_3 ?? '' !!} </div> </div>

            <div class="col-12 col-sm-6 d-none d-sm-block"> <img class="w-100"
                    src="{{ isset($content) && $content->image_path_2 ? asset('img/content/' . $content->image_path_2) : asset('img/dist/default-thumbnail.jpg') }}"
                    alt="image_path_2.png"></div>


            <div class="col-12 col-sm-6 d-md-none"> <img class="w-100"
                    src="{{ isset($content) && $content->image_path_2 ? asset('img/content/' . $content->image_path_2) : asset('img/dist/default-thumbnail.jpg') }}"
                    alt="image_path_2.png"> </div>
            <div class="col-12 col-sm-6 d-md-none">  <div class="m-3 text-center">
                {!! $content->home_text_3 ?? '' !!} </div></div>
        </div>
    </div>



    {{-- <div class="container">
        <div class="text-center mt-4">
            {!! $content->home_text_1 ?? '' !!}
        </div>

        <div class="text-center mt-5">
            <p style="color: red"> อยากได้รถแบบไหนบอกเราได้ </p>
            <a href="{{ route('main') }}"><button class="btn btn-red">เริ่ม!</button></a>
        </div>
        <div class="mt-4">
            <img class="w-100"
                src="{{ isset($content) && $content->image_path_1 ? asset('img/content/' . $content->image_path_1) : asset('img/dist/default-thumbnail.jpg') }}"
                alt="image_path_1.png">
        </div>
    </div> --}}

    {{-- <div class="container">
        <div class="text-center mt-3 mb-3">
            {!! $content->home_text_2 ?? '' !!}
        </div>
    </div> --}}

    
    <div class="container">

        <div class="text-center mt-4">
            <h5 style="font-weight: bold">นิสสันกรุงไทยรถมือสอง ช่วยคัดสรรถยนต์ที่ดีที่สุดเพื่อคุณ</h5>
        </div>
        <div class="text-center mt-3">
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
