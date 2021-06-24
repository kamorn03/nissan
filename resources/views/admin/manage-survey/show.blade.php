@extends('admin-layouts.admin_app')

@section('content')
    <div class="form-group row">
        <div class="col-12">
            <span class="pull-right">
                <a href="{{ route('admin.survay') }}">
                    < ย้อนกลับ </a>
            </span>
            <h2>Survey</h2>

            <div class="separator mb-5"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card card-tasks">
                <div class="card-body">
                    <div style="margin-top: 80px">
                        @if (session()->has('success_msg'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session()->get('success_msg') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @endif
                        @if (session()->has('alert_msg'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ session()->get('alert_msg') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ $error }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            @endforeach
                        @endif

                        <div class="col-12">
                            <h3> ชื่อ : {{ $survayData->name }} </h3><br>
                            @php
                                // $survayData->brand
                                $type = [null, 'car-type1.svg', 'car-type2.svg', 'car-type3.svg', 'car-type4.svg'];
                                
                            @endphp
                            <h3> ประเภท :
                                <img style="margin-right:5px;"
                                    src="{!! asset('img/icon/') !!}/{{ $type[$survayData->brand] }}" width="70" height="70">
                            </h3>
                            <br>

                            <h3> เวลา : {{ $survayData->time }} </h3> <br>
                            <h3>เบอร์โทร : {{ $survayData->phone }} </h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    <script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script>
        $(function() {
            // Edit record
            $('#survey-table').on('click', 'td.editor-edit', function(e) {
                console.log('edit', $(this).children().data('id'));
            });

            // Delete a record
            $('#survey-table').on('click', 'td.editor-delete', function(e) {
                console.log('remove', $(this).children().data('id'));
            });


        });
    </script>
