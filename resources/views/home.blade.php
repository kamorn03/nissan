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

            <div class="modal" id="welcome-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                data-backdrop="static">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="hca-dialog__content">

                            <div class="modal-body">
                                <div id="step1">
                                    <h2>Step 1</h2>
                                    <div class="text-center">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum labore voluptatibus
                                        libero totam error dolores in suscipit vitae, distinctio, optio quis quidem aut
                                        atque nostrum, porro hic exercitationem aliquam id.
                                    </div>
                                </div>
                                <div id="step2" class="fade hidden">
                                    <h2>Step 2</h2>
                                    <div class="text-center">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum labore voluptatibus
                                        libero totam error dolores in suscipit vitae, distinctio, optio quis quidem aut
                                        atque nostrum, porro hic exercitationem aliquam id.
                                    </div>
                                </div>
                                <div id="step3" class="fade hidden">
                                    <h2>Step 3</h2>
                                    <div class="text-center">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum labore voluptatibus
                                        libero totam error dolores in suscipit vitae, distinctio, optio quis quidem aut
                                        atque nostrum, porro hic exercitationem aliquam id.
                                    </div>
                                </div>
                            </div>

                            <div>
                                <ol class="indicators">
                                    <li id="indicator1" class="active" />
                                    <li id="indicator2" />
                                    <li id="indicator3" />
                                </ol>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Dismiss</button>
                            <button onClick="handleNextStep()" type="button" class="btn btn-primary next">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="fadeInRight btn btn-primary btn-lg" data-toggle="modal"
                data-target="#welcome-modal">
                Open Modal
            </button>

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

            <div class="col-12 col-sm-6 d-none d-sm-block">
                <div class="mt-5 m-3 text-center"> {!! $content->home_text_3 ?? '' !!} </div>
            </div>

            <div class="col-12 col-sm-6 d-none d-sm-block"> <img class="w-100"
                    src="{{ isset($content) && $content->image_path_2 ? asset('img/content/' . $content->image_path_2) : asset('img/dist/default-thumbnail.jpg') }}"
                    alt="image_path_2.png"></div>


            <div class="col-12 col-sm-6 d-md-none"> <img class="w-100"
                    src="{{ isset($content) && $content->image_path_2 ? asset('img/content/' . $content->image_path_2) : asset('img/dist/default-thumbnail.jpg') }}"
                    alt="image_path_2.png"> </div>
            <div class="col-12 col-sm-6 d-md-none">
                <div class="m-3 text-center">
                    {!! $content->home_text_3 ?? '' !!} </div>
            </div>
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
    <script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script>
        // $('.carousel').carousel({
        //     interval: 1000 * 1
        // });

        // $('#welcome-modal').modal('show')
        $(document).ready(function() {
            $('.next').click(function() {
                let step1 = $("#step1");
                let step2 = $("#step2");
                let step3 = $("#step3");

                // Remove active class from indicators
                $('.indicators li').removeClass('active');

                // If step is not hidden, do something 
                if (!step1.hasClass('hidden')) {
                    step1.addClass('hidden');
                    step2.removeClass('hidden');
                    $('#indicator2').addClass('active');
                    setTimeout(function() {
                        step2.addClass('in');
                    }, 200);
                } else if (!step2.hasClass('hidden')) {
                    step2.addClass('hidden');
                    step3.removeClass('hidden');
                    $('#indicator3').addClass('active');
                    $(this).html('Go to dashboard');
                    setTimeout(function() {
                        step3.addClass('in');
                    }, 200);
                } else {
                    $("#welcome-modal").modal("hide");

                    // reset
                    $('#indicator1').addClass('active');
                    $("#step2, #step3").addClass('hidden');
                    $("#step1").removeClass('hidden');
                    $('button.next').html('Next');
                }
            });
        });

        // $('button[data-toggle="modal"]').click(function() {
        //   // reset modal
        //   $('#indicator1').addClass('active');
        //   $("#step2, #step3").addClass('hidden');
        //   $("#step1").removeClass('hidden');
        //   $('button.next').html('Next');
        // })
    </script>
@endpush

@push('styles')
    <style>
        body.modal-open {
            overflow: hidden;
        }

        h4 {
            margin-top: 0;
        }

        .hca-dialog__content {
            padding: 24px;
        }

        .hidden {
            display: none;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .fade.in {
            animation: fadeIn 0.2s both ease-in;
        }

        .modal-dialog {
            min-width: 290px;
            max-width: 550px;
        }

        .modal-content {
            box-shadow: 0px 16px 30px 0px fade;
        }

        .modal-header {
            margin-bottom: 10px;
            border: none;
        }

        .modal-header,
        .modal-body {
            padding: 0;
        }

        .modal-body {
            max-height: 500px;
            overflow: scroll;
        }

        .modal-footer {
            padding: 0px;
            margin: 10px;
            border: none;
        }

        .modal-footer button+button {
            margin-left: 10px;
        }

        .indicators {
            top: 25px;
            position: relative;
            left: 50%;
            z-index: 15;
            width: 60%;
            padding-left: 0;
            margin-left: -30%;
            text-align: center;
            list-style: none;
        }

        @media screen (min-width: 768px) {
            .indicators {
                bottom: 20px;
            }
        }

        .indicators li {
            display: inline-block;
            width: 12px;
            height: 12px;
            margin: 0 10px 0 0;
            text-indent: -999px;
            background: #efefef;
            border: 1px solid #fff;
            border-radius: 10px;
        }

        .indicators .active {
            width: 12px;
            height: 12px;
            margin: 0 10px 0 0;
            background-color: #468fdb;
        }

    </style>
@endpush
