@extends('admin-layouts.admin_app')

@section('content')
    <div class="form-group row">
        <div class="col-12">
            <h2>Survey</h2>
            {{-- <span class="pull-right">
                <a href="{{ route('admin.collection.add') }}"><i class="fa fa-plus"></i> survey </a>
            </span> --}}
            <div class="separator mb-5"></div>
        </div>
    </div>
    <div class="row">
        <div class="modal fade" id="ajaxModel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modelHeading">ข้อมูล</h4>
                        <span class="text-right"> <button class="btn btn-default" style="cursor: pointer"
                                data-dismiss="modal">X </button> </span>
                    </div>
                    <div class="modal-body">
                        <form id="CurrenciesForm" name="CurrenciesForm" class="form-horizontal">
                            <input type="hidden" name="currency_id" id="currency_id">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <h2> ชื่อ :</h2>
                                    </div>
                                    <div class="col-8">
                                        <h2> <span id="show-name"></span> </h2>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <h2> ประเภท :</h2>
                                    </div>
                                    <div class="col-8">
                                        <div id="show-type"></div>
                                    </div>
                                </div>
                                <hr>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <h2> เวลา :</h2>
                                    </div>
                                    <div class="col-8">
                                        <h2> <span id="show-time"></span></h2>
                                    </div>
                                </div>
                                {{-- <h2 class="col-sm-12 control-label"><span>  : </span> </h2> --}}

                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <h2> เบอร์โทร :</h2>
                                    </div>
                                    <div class="col-8">
                                        <h2> <span id="show-phone"></span></h2>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
                            <table class="table table-bordered text-center" id="survey-table" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ประเภทรถ</th>
                                        <th>เวลา</th>
                                        <th>ชื่อ</th>
                                        <th>เบอร์โทร</th>
                                        <th>เรียกดู</th>
                                    </tr>
                                </thead>
                            </table>
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

                $('#show-time').html("");
                $('#show-type').html("");
                $('#show-name').html("");
                $('#show-phone').html("");
                $.ajax({
                    url: "{{ route('survay.get') }}",
                    // headers: {
                    //     'CSRFToken': '{{ csrf_token() }}'
                    // },
                    method: 'post',
                    data: {
                        "_token": '{{ csrf_token() }}',
                        'id': $(this).children().data('id'),
                    },
                    success: function(data) {

                        console.log(data)
                        var path = '{!! asset('img/icon') !!}';
                        var type = [
                            'car-type1.svg',
                            'car-type2.svg',
                            'car-type3.svg',
                            'car-type4.svg',
                        ];

                        $('#show-time').html(data.time);
                        $('#show-type').html('<img src="' + path + "/" + type[data.brand - 1] +
                            '" alt="' +
                            data.brand + '" />');
                        $('#show-name').html(data.name);
                        $('#show-phone').html(data.phone);
                    }
                })


            });

            // Delete a record
            $('#survey-table').on('click', 'td.editor-delete', function(e) {
                console.log('remove', $(this).children().data('id'));
            });

            $('#survey-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.survey.list') !!}',
                columns: [{
                        data: 'id',
                        name: 'id',
                        render: function(data, type, full, meta) {
                            return meta.row + 1;
                        }
                    },
                    {
                        data: 'brand',
                        name: 'brand',
                        render: function(data, type, full, meta) {
                            console.log(full);
                            if (full.brand) {
                                var brand = full.brand.split(',');
                                console.log(brand);
                                var array = [
                                    null,
                                    'car-type1.svg',
                                    'car-type2.svg',
                                    'car-type3.svg',
                                    'car-type4.svg',
                                ]

                                var img = '';
                                var path = '{!! asset('img/icon') !!}';
                                if (brand.length > 1) {
                                    brand.forEach(element => {
                                        // console.log(path + '/' + array[element])
                                        img += '<img style="margin-right:5px;" src="' +
                                            path +
                                            '/' + array[element] +
                                            '" width="70" height="70">';
                                    });
                                } else {
                                    img += '<img style="margin-right:5px;" src="' + path + '/' +
                                        array[
                                            brand] +
                                        '" width="70" height="70">';
                                }


                                return img;
                            } else {
                                return '-'
                            }
                        }
                    },
                    {
                        data: 'time',
                        name: 'time'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                        render: function(data, type, full, meta) {
                            if (data) {
                                return data
                            } else {
                                return '-'
                            }

                        }
                    },
                    {
                        data: null,
                        className: "dt-center editor-edit",
                        render: function(data, type, row) {
                            return '<a data-toggle="modal" class="show-surway" data-id="' + row.id +
                                '" data-target="#ajaxModel" ><i class="fa fa-eye" data-id="' + row
                                .id + '"></a>'
                            // return '<a href="/nissan/admin/survay/' + row.id +
                            //     '/show"><i class="fa fa-eye" data-id="' + row.id + '"></i></a>'
                        }
                    }
                ]
            });

            // $('.show-surway').on('click',function(){
            //     console.log($(this).data().id)
            // })
        });
    </script>
