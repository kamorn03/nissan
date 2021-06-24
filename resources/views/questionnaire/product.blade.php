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
                <div class="box-process step-3">
                </div>
                <div class="box-process step-4">
                </div>
                <div class="box-process step-5">
                </div>
                <div class="box-process step-6">
                </div>
            </div>
            <div style="vertical-align: middle;line-height: 150px;color:#fff">
                สินค้าหรือบริการของคุณคืออะไร?
            </div>
            <div class="text-right">
                <img class="pull-right" src="{{ asset('img/logo.png') }}" alt="logo.png">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="mt-5">
            <p style="color: red"> สินค้าและบริการของคุณ </p>
            <div class="text-center">
                {{-- form --}}
                <form action="{{ route('store.product') }}" method="POST">
                    @csrf
                    <div>
                        <input type="hidden" name="type" id="type" value="{{ $type }}">
                        <textarea class="w-100" style="height: 159px;border: solid 2px;" name="product_text"
                            id="product_text" cols="30" rows="10" required></textarea>
                    </div>

                    <div>
                        <button class="btn btn-red next">ถัดไป</button><br>
                        <div class="mt-2">
                            <a href="/nissan">ย้อนกลับ</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="text-center mt-5">
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
