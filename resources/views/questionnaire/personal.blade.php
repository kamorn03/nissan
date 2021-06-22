@extends('layouts.app')

@section('content')
    {{-- image 1 --}}

    <div>
        <div class="w-100 text-center"
            style="background-image: url('{{ asset('img/banner/Banner-07 1.png') }}');min-height: 200px;background-size: cover;background-repeat: no-repeat;">
            <div class="process">
                <div class="box-process step-1 active">
                </div>
                <div class="box-process step-2 active">
                </div>
                <div class="box-process step-3">
                </div>
            </div>
        </div>



        <div class="container">
            <form action="{{ route('store.personal') }}" method="POST">
                @csrf
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
                    <div class="time text-center">

                        <div class="time__input">
                            <input type="text" name="time" id="datetimepicker3" class="datetimepicker-input"
                                data-toggle="datetimepicker" data-target="#datetimepicker3" required />
                        </div>

                    </div>

                </div>
                <div class="text-center mt-3">
                    <div>
                        <button class="btn btn-red next">ส่งข้อมูล</button><br>
                        <div class="mt-2">
                            <a class="text-deco-none" href="{{ route('main') }}">ย้อนกลับ</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="container" style="margin-bottom : 5rem">
            <div class="text-center m-5">
                <a class="text-deco-none" href="/"><img src="{{ asset('img/icon/homepage.svg') }}" alt="homepage.svg">
                    กลับหน้าแรก </a>
            </div>
        </div>

    @endsection

    @push('script')

        <!-- partial -->
        <script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}"></script>
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
        <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js'></script>
        <script
                src='https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js'>
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
        
        <script src="{{ asset('js/script-time.js') }}"></script>


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
                                window.location = '{!! route('survay.final') !!}';
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

            p {
                margin-top: 10px;
                margin-bottom: 0;
                font-weight: bold;
                padding-left: 20px;
            }

            p.text-left {
                margin-left: 3em;
                margin-top: 1em;
                color: #ED1C24;
            }

            input {
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
