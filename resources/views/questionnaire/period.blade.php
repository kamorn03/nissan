@extends('layouts.app')

@section('content')
    {{-- image 1 --}}
    <div>
        <div class="w-100 text-center" style="background-image: url('{{ asset('img/main.png') }}');height:200px;">
            <div class="process">
                <div class="box-process step-1 active">
                </div>
                <div class="box-process step-2 active">
                </div>
                <div class="box-process step-3 active">
                </div>
                <div class="box-process step-4 active">
                </div>
                <div class="box-process step-5 active">
                </div>
                <div class="box-process step-6">
                </div>
            </div>
            <div style="vertical-align: middle;line-height: 150px;color:#fff">
                ระยะเวลาที่คุณต้องการโฆษณา สินค้า/บริการ?
            </div>
            <div class="text-right">
                <img class="pull-right" src="{{ asset('img/logo.png') }}" alt="logo.png">
            </div>
        </div>
    </div>


    <div class="container">
        <div class="text-center mt-5">
            <form action="{{ route('store.period') }}" method="POST">
                @csrf
                <div class="main-content text-left ml-5">
                    <p style="color: red">เลือกระยะเวลา </p>
                    <p>
                        <input class="form-check-input" type="radio" name="period" id="flexRadioDefault1" value="1 เดือน" />
                        <label class="form-check-label" for="flexRadioDefault1"> 1 เดือน </label>
                    <p>
                        <!-- Default checked radio -->
                    <p>
                        <input class="form-check-input" type="radio" name="period" id="flexRadioDefault2" value="3 เดือน" />
                        <label class="form-check-label" for="flexRadioDefault2"> 3 เดือน </label>
                    <p>
                    <p>
                        <input class="form-check-input" type="radio" name="period" id="flexRadioDefault3" value="6 เดือน" />
                        <label class="form-check-label" for="flexRadioDefault3"> 6 เดือน </label>
                    <p>
                    <p>
                        <input class="form-check-input" type="radio" name="period" id="flexRadioDefault4" value="1 ปี"
                            checked />
                        <label class="form-check-label" for="flexRadioDefault4"> 1 ปี </label>
                    <p>
                </div>


                <div class="mt-3">
                    <button class="btn btn-red next">ถัดไป</button><br>
                    <div class="mt-2">
                        <a href="{{ route('survay.brand') }}">ย้อนกลับ</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="text-center m-5">
            <a href="/nissan"><img src="{{ asset('img/icon/homepage.svg') }}" alt="homepage.svg"> กลับหน้าแรก </a>
        </div>
    </div>

@endsection


@push('styles')
    <style>
        * {
            box-sizing: border-box;
        }

        .process {
            margin: auto 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
        }

        .main-content {
            font-size: 18px;
            line-height: 27px;
        }

        .box-process {
            /* flex:1 1 auto; */
            width: 40px;
            height: 10px;
            margin: 5px;
            background: #fff;
        }

        .box-process.active {
            /* flex:1 1 auto; */
            width: 40px;
            height: 10px;
            margin: 5px;
            background: #000;
        }

        p {
            margin-top: 0.5em;
        }

        [type="radio"]:checked,
        [type="radio"]:not(:checked) {
            position: absolute;
            left: -9999px;
        }

        [type="radio"]:checked+label,
        [type="radio"]:not(:checked)+label {
            position: relative;
            padding-left: 28px;
            cursor: pointer;
            line-height: 20px;
            display: inline-block;
            color: #000;
        }

        [type="radio"]:checked+label:before,
        [type="radio"]:not(:checked)+label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 18px;
            height: 18px;
            border: 1px solid #ddd;
            border-radius: 100%;
            background: #fff;
        }

        [type="radio"]:checked+label:after,
        [type="radio"]:not(:checked)+label:after {
            content: '';
            width: 8px;
            height: 8px;
            background: #ED1C24;
            ;
            position: absolute;
            top: 5px;
            left: 5px;
            border-radius: 100%;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        [type="radio"]:not(:checked)+label:after {
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        [type="radio"]:checked+label:after {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }

    </style>

@endpush
