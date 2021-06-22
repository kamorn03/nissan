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
                ]
            });
        });

    </script>
