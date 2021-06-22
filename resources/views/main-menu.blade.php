@extends('layouts.app')

@section('content')
    {{-- image 1 --}}
    <div>
        <div class="w-100 text-center"
            style="background-image: url('{{ asset('img/banner/Banner-06 1.png') }}');min-height: 200px;background-size: cover;background-repeat: no-repeat;">
            <div class="process">
                <div class="box-process step-1 active">
                </div>
                <div class="box-process step-2">
                </div>
                <div class="box-process step-3">
                </div>
                {{-- <div class="box-process step-4">
                </div> --}}
                {{-- <div class="box-process step-5">
                </div>
                <div class="box-process step-6">
                </div> --}}
            </div>
            {{-- <div style="vertical-align: middle;line-height: 150px;color:#fff">
                ให้ DV8 เรียกคุณว่าเป็นใคร?
            </div> --}}
            {{-- <div class="text-right">      
                <img class="pull-right" src="{{ asset('img/logo.png') }}" alt="logo.png">
            </div> --}}
        </div>
    </div>


    <div class="container">
        <div class="text-center mt-3">
            <form action="{{ route('store.brand') }}" method="POST">
                @csrf
                <input type="hidden" name="selected_brand" id="selected-brand">
                <div class="row">


                    <div class="col-6 col-sm-6">
                        <div class="box-select-brand left" data-id="1">
                            <img src="{{ asset('img/type/Car 1.png') }}" alt="Car 1.png">
                        </div>
                    </div>
                    <div class="col-6 col-sm-6">
                        <div class="box-select-brand right" data-id="2">
                            <img src="{{ asset('img/type/Car 2.png') }}" alt="Car 2.png">
                        </div>
                    </div>
                    <div class="col-6 col-sm-6">
                        <div class="box-select-brand left" data-id="3">
                            <img src="{{ asset('img/type/Car 3.png') }}" alt="Car 3.png">
                        </div>
                    </div>
                    <div class="col-6 col-sm-6">
                        <div class="box-select-brand right" data-id="4">
                            <img src="{{ asset('img/type/Car 4.png') }}" alt="Car 4.png">
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <div class="container" style="margin-bottom : 5rem">
        <div class="text-center m-5">
            <a class="text-deco-none" href="/"><img src="{{ asset('img/icon/homepage.svg') }}" alt="homepage.svg">
                กลับหน้าแรก </a>
        </div>
    </div>

@endsection
@push('script')
    <script>
        // $('body').on('click',function(){
        //     alert(1);
        // })

        $(document).ready(function() {
            console.log($('.box-select-brand'))
            $('.box-select-brand').on('click', function() {
                $(this).toggleClass('active');
                var selected = $('.box-select-brand.active');
                var data = Array();
                for (let index = 0; index < selected.length; index++) {
                    data = $(selected[index]).data().id;
                    // console.log($(selected[index]).data().id)
                }
                // console.log(data)
                $('#selected-brand').val(data);

                $('form').submit();
            })
        });
    </script>
@endpush
@push('styles')
    <style>
        * {
            box-sizing: border-box;
        }

        .text-deco-none {
            text-decoration: none;
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
            width: 70%;
            margin: 0 auto;
            margin-top: 15px;
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
