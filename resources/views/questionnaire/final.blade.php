@extends('layouts.app')

@section('content')
    {{-- image 1 --}}
    <div>
        <div class="w-100 text-center"
            style="background-image: url('{{ asset('img/banner/Banner-08 1.png') }}');min-height: 200px;background-size: cover;background-repeat: no-repeat;">
            <div class="process">
                <div class="box-process step-1 active">
                </div>
                <div class="box-process step-2 active">
                </div>
                <div class="box-process step-3 active">
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="mt-5 text-center">Nissan Krungthai จะติดต่อ คุณกลับภายในช่วงเวลาที่คุณกำหนด ขอบคุณครับ</h2>
        </div>


        <div class="container"  style="margin-bottom : 5rem">
            <div class="text-center m-5">
                <a class="text-deco-none" href="/nissan"><img src="{{ asset('img/icon/homepage.svg') }}" alt="homepage.svg">
                    กลับหน้าแรก </a>
            </div>
        </div>

    @endsection

    @push('script')
        <link rel="stylesheet" href="{{ asset('framework/timepicker/style.css') }}" />
        <script src="{{ asset('framework/timepicker/script.js') }}">
        </script>
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


            .text-deco-none {
                text-decoration: none;
            }


            p.text-left {
                margin-left: 3em;
                margin-top: 1em;
                color: #ED1C24;
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

        </style>

    @endpush
