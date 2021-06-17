@extends('layouts.app')

@section('content')
    {{-- image 1 --}}
    <div>
        <div class="w-100 text-center" style="background-image: url('{{ asset('img/main.png') }}');height:200px;">
            <div class="process">
                <div class="box-process step-1 active">
                </div>
                <div class="box-process step-2">
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
                ให้ DV8 เรียกคุณว่าเป็นใคร?
            </div>
            <div class="text-right">      
                <img class="pull-right" src="{{ asset('img/logo.png') }}" alt="logo.png">
            </div>
        </div>
    </div>


    <div class="container">
        <div class="text-center mt-5">
            <div>
                <div>
                    {{-- click save and next page --}}
                    <a href="{{ route('survay.product', ['type' => 1]) }}"><img src="{{ asset('img/btn/Agency.png') }}"
                            alt="Agency.png"></a>
                </div>

                <div class="mt-3">
                    <a href="{{ route('survay.product', ['type' => 2]) }}"><img src="{{ asset('img/btn/Business.png') }}"
                            alt="Business.png"></a>
                </div>

                <div class="mt-3">
                    <a href="{{ route('survay.product', ['type' => 3]) }}"><img
                            src="{{ asset('img/btn/Government.png') }}" alt="Government.png"></a>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="text-center m-5">
            <a href="/"><img src="{{ asset('img/icon/homepage.svg') }}" alt="homepage.svg"> กลับหน้าแรก </a>
        </div>
    </div>

    <button type="button" class="btn btn-primary"
        style="background-color: white; color: white; width: 60px; height: 60px; border-color: red; position: absolute; border-radius: 50%; border-width: 5px;transform: translate(20em,7em);"><img
            src="data:image/png;base64,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"></button>


@endsection
@push('styles')
    <style>

        * {
            box-sizing: border-box;
        }

        .process{
            margin: auto 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction:row;
        }

        .box-process {
            /* flex:1 1 auto; */
            width: 40px;
            height: 10px;
            margin:5px; 
            background: #fff;
        }

        .box-process.active {
            /* flex:1 1 auto; */
            width: 40px;
            height: 10px;
            margin:5px; 
            background: #000;
        }

    </style>
@endpush
