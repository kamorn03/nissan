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
                <div class="box-process step-6 active">
                </div>
            </div>
            <div style="vertical-align: middle;line-height: 150px;color:#fff">
                คุณสะดวกให้เราติดต่อกลับในช่องทางใด?
            </div>
            <div class="text-right">
                <img class="pull-right" src="{{ asset('img/logo.png') }}" alt="logo.png">
            </div>
        </div>
    </div>



    <div class="container">
        <form action="{{ route('store.personal') }}" method="POST">
            @csrf

            <div class="text-center mt-5"> 
                <p class="text-left"> ชื่อ - นามสกุล</p>
                <input type="text" name="name" id="name"> 
                <p class="text-left"> เบอร์ติดต่อ </p>
                <input type="number" name="phone" id="phone">
            </div>
            <div class="text-center mt-3">
                <div >
                    <button class="btn btn-red next">ส่งข้อมูล</button><br>
                    <div class="mt-2">
                        <a href="{{ route('survay.period') }}">ย้อนกลับ</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <div class="text-center m-5">
            <a href="/"><img src="{{ asset('img/icon/homepage.svg') }}" alt="homepage.svg"> กลับหน้าแรก </a>
        </div>
    </div>

@endsection

@push('script')
    @if (session()->has('success'))
        <script>
            Swal.fire('บันทึกข้อมูลสำเร็จ!', '', 'success').then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    console.log('success')
                    // clear session
                    $.ajax({
                        url: '{!! route('clear.survey') !!}',
                        success: function(result) {
                            window.location = '{!! route('home') !!}';
                        }
                    });
                }
            })

        </script>
    @endif
@endpush

@push('styles')
    <style>
        * {
            box-sizing: border-box;
        }

        p.text-left{
            margin-left: 3em;
            margin-top: 1em;
            color: #ED1C24;
        }

        input{
            margin-top: 0.5em;
            width: 300px;
            height: 68px;
            border: 1px solid #000000;
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
