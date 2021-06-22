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
                <div class="box-process step-5">
                </div>
                <div class="box-process step-6">
                </div>
            </div>
            <div style="vertical-align: middle;line-height: 150px;color:#fff">
                Store ที่อยากให้เราโฆษณา สินค้า/บริการของคุณ?
            </div>
            <div class="text-right">
                <img class="pull-right" src="{{ asset('img/logo.png') }}" alt="logo.png">
            </div>
        </div>
    </div>


    <div class="container">
        <div class="text-center mt-3">
            <div class="row">
                <div class="col-6 col-sm-6">
                    <div class="box-select-brand left" data-id="1">
                        <img src="{{ asset('img/brand/logo_7-11.jpg') }}" alt="logo_7-11.jpg">
                    </div>
                </div>
                <div class="col-6 col-sm-6">
                    <div class="box-select-brand right" data-id="2">
                        <img src="{{ asset('img/brand/logo_FamikyMart.jpg') }}" alt="logo_FamikyMart.jpg">
                    </div>
                </div>
                <div class="col-6 col-sm-6">
                    <div class="box-select-brand left" data-id="3">
                        <img src="{{ asset('img/brand/logo_BigC.jpg') }}" alt="logo_BigC.jpg">
                    </div>
                </div>
                <div class="col-6 col-sm-6">
                    <div class="box-select-brand right" data-id="4">
                        <img src="{{ asset('img/brand/logo_MiniBigC.jpg') }}" alt="logo_MiniBigC.jpg">
                    </div>
                </div>
                <div class="col-6 col-sm-6">
                    <div class="box-select-brand left" data-id="5">
                        <img src="{{ asset('img/brand/logo_TopsMarket.jpg') }}" alt="logo_TopsMarket.jpg">
                    </div>
                </div>
                <div class="col-6 col-sm-6">
                    <div class="box-select-brand right" data-id="6">
                        <img src="{{ asset('img/brand/logo_makro.jpg') }}" alt="logo_makro.jpg">
                    </div>
                </div>
            </div>

            <form action="{{ route('store.brand') }}" method="POST">
                @csrf
                <div class="mt-3">
                    <input type="hidden" name="selected_brand" id="selected-brand">
                    <button class="btn btn-red next">ถัดไป</button><br>
                    <div class="mt-2">
                        <a href="{{ route('survay.location') }}">ย้อนกลับ</a>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <div class="container">
        <div class="text-center m-5">
            <a href="{{ route('main') }}"><img src="{{ asset('img/icon/homepage.svg') }}" alt="homepage.svg"> กลับหน้าแรก </a>
        </div>
    </div>



@endsection

@push('script')
    <script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}"></script>
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
                    data.push($(selected[index]).data().id)
                    // console.log($(selected[index]).data().id)
                }
                // console.log(data)
                $('#selected-brand').val(data);
            })
        });

    </script>
@endpush

@push('styles')
    <style>
        * {
            box-sizing: border-box;
        }

        .box-select-brand {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            border: #000 solid 1px;
            width: 70%;
            margin: 0 auto;
            margin-top: 15px;
        }


        .box-select-brand.active {
            border: red solid 4px;
        }

        .box-select-brand.left {
            margin-right: 2px;
        }

        .box-select-brand.right {
            margin-left: 2.5px;
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
