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

    <div class="modal" id="welcome-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="hca-dialog__content">

                    <div class="modal-body">
                        <div id="step1">
                            <div class="text-center">


                                <div class="process">
                                    <div class="box-process step-1 active">
                                    </div>
                                    <div class="box-process step-2">
                                    </div>
                                    <div class="box-process step-3">
                                    </div>

                                </div>

                                <h2>เลือกประเภทรถที่คุณมองหา</h2>
                                <div class="row mt-5">
                                    <div class="col-3 col-sm-3">
                                        <div class="box-select-brand " data-id="1">
                                            <img src="{{ asset('img/type/Car 1.png') }}" alt="Car 1.png">
                                        </div>
                                    </div>
                                    <div class="col-3 col-sm-3">
                                        <div class="box-select-brand " data-id="2">
                                            <img src="{{ asset('img/type/Car 2.png') }}" alt="Car 2.png">
                                        </div>
                                    </div>
                                    <div class="col-3 col-sm-3">
                                        <div class="box-select-brand " data-id="3">
                                            <img src="{{ asset('img/type/Car 3.png') }}" alt="Car 3.png">
                                        </div>
                                    </div>
                                    <div class="col-3 col-sm-3">
                                        <div class="box-select-brand " data-id="4">
                                            <img src="{{ asset('img/type/Car 4.png') }}" alt="Car 4.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="step2" class="fade hidden">
                            <div class="process">
                                <div class="box-process step-1 active">
                                </div>
                                <div class="box-process step-2 active">
                                </div>
                                <div class="box-process step-3">
                                </div>

                            </div>
                            <div class="text-center">
                                <h2>กรอกข้อมูลส่วนตัวของคุณ </h2>
                                <div class="mt-5">
                                    <p class=""> ชื่อ - นามสกุล</p>
                                    <div class="text-center">
                                        <input type="text" name="name" id="name" required>
                                    </div>

                                    <p class=""> เบอร์ติดต่อ </p>
                                    <div class="text-center ">
                                        <input type="number" name="phone" id="phone" required>
                                    </div>


                                    <p class=""> เวลา </p>
                                    <div class="time">

                                        <div class="time__input">

                                            {{-- <input type="text" name="time" id="time" class="timepicker" required /> --}}

                                            <input type="text" name="time" id="datetimepicker3" class="datetimepicker-input"
                                                data-toggle="datetimepicker" data-target="#datetimepicker3" required />

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="step3" class="fade hidden">
                            <div class="text-center">
                                {{-- ขีด --}}
                                <div class="process">
                                    <div class="box-process step-1 active">
                                    </div>
                                    <div class="box-process step-2 active">
                                    </div>
                                    <div class="box-process step-3 active">
                                    </div>

                                </div>

                                {{-- รูป --}}
                                <img src="{{ asset('img/Banner-02 1.png') }}" class="mt-3"
                                    style="width: 378px; height: 202px;" alt="Banner-02 1.png">
                                <h2>ขอบคุณสำหรับข้อมูล</h2>
                                <div>
                                    Nissan Krungthai จะติดต่อ <br>
                                    คุณกลับภายในช่วงเวลาที่คุณกำหนด <br>
                                    ขอบคุณครับ
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div>
                        <ol class="indicators">
                            <li id="indicator1" class="active" />
                            <li id="indicator2" />
                            <li id="indicator3" />
                        </ol>
                    </div> --}}

                </div>

                <div class="modal-footer mb-5">
                    <button type="button" class="btn btn-back hidden">ย้อนกลับ</button>
                    <button type="button" class="btn btn-default btn-close hidden" data-dismiss="modal">Dismiss</button>
                    <button onClick="handleNextStep()" type="button" class="btn btn-red next">ถัดไป</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="text-center mt-4">
            <h5 style="font-weight: bold">นิสสันกรุงไทยรถมือสอง ช่วยคัดสรรถยนต์ที่ดีที่สุดเพื่อคุณ</h5>
        </div>

        <div class="text-center mt-3">
            <p style="color: red"> อยากได้รถแบบไหนบอกเราได้ </p>
            <a class="d-md-none" href="{{ route('main') }}"><button class="btn btn-red ">เริ่ม!</button></a>


            <button type="button" class="fadeInRight btn btn-red  d-none d-sm-block" data-toggle="modal"
                data-target="#welcome-modal" style="margin:0 auto;">
                เริ่ม!
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


    <div class="container" style="margin-bottom : 5rem">

        <div class="text-center mt-4">
            <h5 style="font-weight: bold">นิสสันกรุงไทยรถมือสอง ช่วยคัดสรรถยนต์ที่ดีที่สุดเพื่อคุณ</h5>
        </div>
        <div class="text-center mb-2">
            <p style="color: red"> อยากได้รถแบบไหนบอกเราได้ </p>
            <a class="d-md-none" href="{{ route('main') }}"><button class="btn btn-red ">เริ่ม!</button></a>


            <button type="button" class="fadeInRight btn btn-red  d-none d-sm-block" data-toggle="modal"
                data-target="#welcome-modal" style="margin:0 auto;">
                เริ่ม!
            </button>
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

            var slected_car = 0;
            $('.box-select-brand').on('click', function() {
                $('.box-select-brand').removeClass('active');
                $(this).toggleClass('active');
                var selected = $('.box-select-brand.active');
                slected_car = selected.data().id;
                console.log(slected_car)
                // var data = Array();
                // for (let index = 0; index < selected.length; index++) {
                //     data = $(selected[index]).data().id;
                //     // console.log($(selected[index]).data().id)
                // }
                // // console.log(data)
                // $('#selected-brand').val(data);

                // $('form').submit();
            })
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
                    $('.btn-back').removeClass('hidden');
                    $('#indicator2').addClass('active');
                    setTimeout(function() {
                        step2.addClass('in');
                    }, 200);
                } else if (!step2.hasClass('hidden')) {
                    // loding


                    $.ajax({
                        type: "POST",
                        url: '{!! route('store.personal') !!}',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            brand: slected_car,
                            name: $('#name').val(),
                            phone: $('#phone').val(),
                            time: $('#datetimepicker3').val(),
                        },
                        success: function(resultData) {

                            // loaded
                            step2.addClass('hidden');
                            step3.removeClass('hidden');
                            $('#indicator3').addClass('active');
                            $('.btn-back').addClass('hidden');
                            $(this).html('ตกลง');
                        },
                        error: function() {
                            alert("Save fail");
                        }
                    });
                    setTimeout(function() {
                        step3.addClass('in');
                    }, 200);
                } else {
                    // $("#welcome-modal").modal("hide");
                    // $('#welcome-modal').modal().hide();
                    $(".btn-close").click();

                    // $.ajax({
                    //         url: '{!! route('store.personal') !!}',
                    //         method: 'post',
                    //         data: {
                    //             type: slected_car,
                    //             name: $('#name').val(),
                    //             phone: $('#phone').val(),
                    //             time: $('#datetimepicker3').val(),
                    //         }).success: function(result) {
                    //         window.location = '{!! route('home') !!}';
                    //     }
                    // });





                    // $('#welcome-modal').modal('toggle'); 
                    // reset || close
                    // $("#welcome-modal").removeClass("show");
                    $('.btn-back').addClass('hidden');
                    $('#indicator1').addClass('active');
                    $("#step2, #step3").addClass('hidden');
                    $("#step1").removeClass('hidden');
                    // $('button.next').html('Next');
                }
            });
            $('.btn-back').click(function() {
                $('.btn-back').addClass('hidden');
                $('#indicator1').addClass('active');
                $("#step2, #step3").addClass('hidden');
                $("#step1").removeClass('hidden');
            });


            $('.datetimepicker-input').datetimepicker({
                format: 'HH:mm'
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

        .modal input {
            width: 302px;
            height: 45px;


            background: #FFFFFF;
            border: 1px solid #000000;
            box-sizing: border-box;
        }

        .modal-dialog {
            min-width: 290px;
            max-width: 1048px;

        }

        .modal-content {
            box-shadow: 0px 16px 30px 0px fade;
            background-color: #F5F5F5;
            height: auto;
            position: relative;
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
            height: 400px;
            overflow: inherit;
        }

        .modal-footer {
            border: none;
            bottom: 0px;
            flex: 1;
            text-align: center;
            /* position: absolute; */
            justify-content: center;
        }

        .modal-footer button+button {
            margin-left: 10px;
        }

        .dropdown-menu.bootstrap-datetimepicker-widget {
            z-index: 1000;
            /* position: relative; */
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



        .process {
            margin: auto 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
        }

        .box-process {
            /* flex:1 1 auto; */
            width: 40px;
            height: 4px;
            margin: 20px 10px;
            background: #fff;
        }

        .box-process.active {
            /* flex:1 1 auto; */
            width: 40px;
            height: 4px;
            margin: 20px 10px;
            background: #670000;
        }

        .box-select-brand {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            /* border: #000 solid 1px; */
            width: 200px;
            height: 200px;
            background: #FFFFFF;
            margin: 0 auto;
            margin-top: 15px;
        }

        .box-select-brand img {
            margin-top: 25px;
        }


        .box-select-brand.active {
            border: #000 solid 2px;
        }

        .box-select-brand.left {
            margin-right: 2px;
        }

        .box-select-brand.right {
            margin-left: 2.5px;
        }

    </style>
@endpush
