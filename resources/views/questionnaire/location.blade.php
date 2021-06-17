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
                <div class="box-process step-4">
                </div>
                <div class="box-process step-5">
                </div>
                <div class="box-process step-6">
                </div>
            </div>
            <div style="vertical-align: middle;line-height: 150px;color:#fff">
                ระบุความครอบคลุมของโฆษณา ของคุณ
            </div>
            <div class="text-right">
                <img class="pull-right" src="{{ asset('img/logo.png') }}" alt="logo.png">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="text-center mt-5">
            @php
                $type = Session::get('type');
                $product = Session::get('product');
            @endphp
            {{-- {{ $type }}
            {{ $product }} --}}
            <form action="{{ route('store.location') }}" method="POST">
                @csrf
                <div>
                    <select name="location" id="location" required>
                        <option value="" style="color: #666666;"> เลือกความครอบคลุม </option>
                        <option value="ทั่วประเทศ">ทั่วประเทศ</option>
                        <option value="กรุงเทพและปริมณฑล">กรุงเทพและปริมณฑล</option>
                        <option value="ภาคกลาง">ภาคกลาง</option>
                        <option value="ภาคตะวันออก">ภาคตะวันออก</option>
                        <option value="ภาคตะวันออกเฉียงเหนือ">ภาคตะวันออกเฉียงเหนือ</option>
                        <option value="ภาคใต้">ภาคใต้</option>
                        <option value="ภาคเหนือ">ภาคเหนือ</option>
                    </select>
                </div>
                <div class="mt-3">
                    <button class="btn btn-red next">ถัดไป</button><br>
                    <div class="mt-2">
                        <a href="{{ route('survay.product', ['type' => $type]) }}">ย้อนกลับ</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="text-center m-5">
            <a href="/"><img src="{{ asset('img/icon/homepage.svg') }}" alt="homepage.svg"> กลับหน้าแรก </a>
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

        select {
            width: 300px;
            height: 68px;
            border: 1px solid #000000;
            background: #fff;
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

        

    </style>

@endpush
