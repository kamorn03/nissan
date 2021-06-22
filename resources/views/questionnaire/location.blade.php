@extends('layouts.app')

@section('content')
    {{-- image 1 --}}
    <!-- partial:index.partial.html -->
    {{-- <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h3>Bootstrap 4 and Tempus Dominus in a modal</h3>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal">Click to open Modal</a>
            </div>
        </div>
    </div> --}}

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalLabel">Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <div class="container" style="margin-bottom : 55rem">
                      

      <div class="row">
          <div class="form-group col-md-6">
              <label>Time only</label>
              <input type="text" class="form-control datetimepicker-input" id="datetimepicker3"
                  data-toggle="datetimepicker" data-target="#datetimepicker3" />
          </div>
      </div>
  </div>
@endsection
