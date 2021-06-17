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
                                        <th>ประเภท</th>
                                        <th>สินค้า</th>
                                        <th>location</th>
                                        <th>store</th>
                                        <th>ช่วงเวลา</th>
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
                        data: 'type',
                        name: 'type',
                        render: function(data, type, full, meta) {
                            var type = [null, 'เอเจนซี่โฆษณา', 'เจ้าของธุรกิจ', 'เจ้าของธุรกิจ'];
                            console.log(full)
                            return type[full.type]
                        }
                    },
                    {
                        data: 'product',
                        name: 'product'
                    },
                    {
                        data: 'location',
                        name: 'location'
                    },
                    {
                        data: 'brand',
                        name: 'brand',
                        render: function(data, type, full, meta) {
                            if (full.brand) {
                                var brand = full.brand.split(',');

                                var array = [
                                    null,
                                    'Image 2 1.png',
                                    'Image 3 1.png',
                                    'Image 5 1.png',
                                    'Image 6 1.png',
                                    'Image 7 1.png',
                                    'Image -9 1.png'
                                ]

                                var img = '';
                                var path = '{!! asset('img/brand') !!}';
                                if (brand.length > 1) {
                                    brand.forEach(element => {
                                        // console.log(path + '/' + array[element])
                                        img += '<img style="margin-right:5px;" src="' +
                                            path +
                                            '/' + array[element] +
                                            '" width="20" height="20">';
                                    });
                                } else {
                                    img += '<img style="margin-right:5px;" src="' + path + '/' +
                                        array[
                                            brand] +
                                        '" width="20" height="20">';
                                }


                                return img;
                            } else {
                                return '-'
                            }
                        }
                    },
                    {
                        data: 'period',
                        name: 'period'
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
