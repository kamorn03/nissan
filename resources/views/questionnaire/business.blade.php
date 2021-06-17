@extends('layouts.app')

@section('content')
    {{-- image 1 --}}
    <div>
        <img class="w-100" src="{{ asset('img/main.png') }}" alt="main.png">
    </div>


    <div class="container">
        <div class="text-center mt-5">
            <div>
                <div>
                    {{-- click save and next page --}}
                    <button class="btn">
                        เอเจนซี่โฆษณา
                    </button>
                </div>

                <div>
                    <button class="btn">
                        เจ้าของธุรกิจ
                    </button>
                </div>

                <div>
                    <button class="btn">
                        หน่วยงานราชการ
                    </button>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="text-center m-5">
            <a href="/"><img src="{{ asset('img/icon/homepage.svg') }}" alt="homepage.svg"> กลับหน้าแรก </a>
        </div>
    </div>

    <style>
        * {
            box-sizing: border-box;
        }

        .box {
            width: 200px;
            height: 150px;
            background: #63a3e3;
            text-align: center;
        }

        .score {
            font-size: 48px;
            line-height: 88px;
            color: #fff;
        }

        .bar {
            background: #c4c4dd;
            position: relative;
            height: 20px;
            width: 80%;
            margin: 0 auto;
            text-align: left
        }

        .progress {
            position: absolute;
            height: 100%;
            transition: width .4s ease-in;
            width: 8%;
            background-color: rgba(252, 252, 55, 0.8);
            z-index: 1;
        }

        .dot {
            position: relative;
            width: 5%;
            height: 20px;
            margin-left: 16%;
            background-color: rgba(99, 163, 227, 1);
            /* background-color: rgba(199,12,127,.8);*/
            /*display: inline-block; */
            float: left;
            z-index: 2;
        }

        .bar2 {
            background: #ffffff;
            position: relative;
            height: 20px;
            width: 100%;
            margin: 0 auto;
            text-align: left
        }

        .dot2 {
            position: relative;
            width: 16%;
            height: 20px;
            margin-right: 5%;
            background: transparent;
            /*background-color: rgba(99,163,227,1);*/
            display: inline-block;
            z-index: 2;
        }

        .fixed-bottom {
            position: relative !important;
            right: 0;
            bottom: 0;
            left: 0;
        }

    </style>

@endsection
