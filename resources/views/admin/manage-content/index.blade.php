@extends('admin-layouts.admin_app')

@section('content')
    <div class="col-12">
        <h2>Manage Content</h2>
        <div class="separator mb-5"></div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card card-tasks">
                <div class="card-body">

                    <div style="margin-top: 30px">
                        <form class="form form-horizontal"
                            action="{{ route('admin.content.update', ['id' => isset($content) ? $content->id : 1]) }}"
                            method="POST" name="add_post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input name="id" type="hidden" value="{{ isset($content) ? $content->id : null }}">
                            <div class="form-group row mt-3">
                                <label for="meta_title" class="col-sm-2 col-form-label text-right">meta title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="meta_title" id="meta_title" class="form-control"
                                        placeholder="title" value="{{ $content->meta_title ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="meta_description" class="col-sm-2 col-form-label text-right">meta
                                    description</label>
                                <div class="col-sm-10">
                                    <input type="text" name="meta_description" id="meta_description" class="form-control"
                                        placeholder="description" value="{{ $content->meta_description ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="meta_keyword" class="col-sm-2 col-form-label text-right">meta keyword</label>
                                <div class="col-sm-10">
                                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control"
                                        placeholder="keyword" value="{{ $content->meta_keyword ?? '' }}">
                                </div>
                            </div>
                            {{-- after meta --}}
                            {{-- <div class="form-group row mt-3">
                                <label for="meta_keyword" class="col-sm-2 col-form-label text-right">text 1</label>
                                <div class="col-sm-10">
                                    <textarea name="editor1" id="editor1" rows="10" cols="80">
                                                {!! $content->home_text_1 ?? '' !!}
                                            </textarea>
                                </div>
                            </div> --}}
                            <div class="form-group row mt-3">
                                <label for="" class="col-sm-2 col-form-label text-right">main cover image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image1" id="image1"
                                        value="{{ isset($content) && $content->image_path_1 ? null : 'required' }}">
                                    <img class="img-thumbnail"
                                        src="{{ isset($content) && $content->image_path_1 ? asset('img/content/' . $content->image_path_1) : asset('img/dist/default-thumbnail.jpg') }}"
                                        width="300" height="200" id="preview-image1">
                                    <span style="color:red">( Recommended upload size of image 375 x 200 pixels )</span>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="meta_keyword" class="col-sm-2 col-form-label text-right">text 1</label>
                                <div class="col-sm-10">
                                    <textarea name="editor2" id="editor2" rows="10" cols="80">
                                                {!! $content->home_text_2 ?? '' !!}
                                            </textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-sm-2 col-form-label text-right">main cover image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image2" id="image2"
                                        value="{{ isset($content) && $content->image_path_2 ? null : 'required' }}">
                                    <img class="img-thumbnail"
                                        src="{{ isset($content) && $content->image_path_2 ? asset('img/content/' . $content->image_path_2) : asset('img/dist/default-thumbnail.jpg') }}"
                                        width="300" height="200" id="preview-image2">
                                    <span style="color:red">( Recommended upload size of image 375 x 200 pixels )</span>
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="meta_keyword" class="col-sm-2 col-form-label text-right">text 2</label>
                                <div class="col-sm-10">
                                    <textarea name="editor3" id="editor3" rows="10" cols="80">
                                            {!! $content->home_text_3 ?? '' !!}
                                            </textarea>
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="description" class="col-sm-2 col-form-label text-right">link facebook</label>
                                <div class="col-sm-10">
                                    <input type="text" name="facebook" id="facebook" class="form-control"
                                        placeholder="facebook" value="{{ $content->facebook_link ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="description" class="col-sm-2 col-form-label text-right">link website</label>
                                <div class="col-sm-10">
                                    <input type="text" name="global" id="global" class="form-control" placeholder="website"
                                        value="{{ $content->global_link ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="description" class="col-sm-2 col-form-label text-right">phone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="phone"
                                        value="{{ $content->phone_footer ?? '' }}">
                                </div>
                            </div>

                            {{-- $table->string('company-footer')->nullable();
                                $table->string('address-footer')->nullable();
                                $table->string('road-footer')->nullable();
                                $table->string('district-footer')->nullable();
                                $table->string('city-footer')->nullable();
                                $table->string('province-footer')->nullable();
                                $table->string('zipcode-footer')->nullable(); --}}


                            <div class="form-group row mt-3">
                                <h2 class="text-center"> FOOTER </h2>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="description" class="col-sm-2 col-form-label text-right">company</label>
                                <div class="col-sm-10">
                                    <input type="text" name="company" id="company" class="form-control"
                                        placeholder="company" value="{{ $content->company_footer ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="description" class="col-sm-2 col-form-label text-right">address</label>
                                <div class="col-sm-10">
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="address" value="{{ $content->address_footer ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="description" class="col-sm-2 col-form-label text-right">road</label>
                                <div class="col-sm-10">
                                    <input type="text" name="road" id="road" class="form-control" placeholder="road"
                                        value="{{ $content->road_footer ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="description" class="col-sm-2 col-form-label text-right">city</label>
                                <div class="col-sm-10">
                                    <input type="text" name="district" id="district" class="form-control"
                                        placeholder="city" value="{{ $content->district_footer ?? '' }}">
                                </div>
                            </div>
                            {{-- <div class="form-group row mt-3">
                                <label for="description" class="col-sm-2 col-form-label text-right">city</label>
                                <div class="col-sm-10">
                                    <input type="text" name="city" id="city" class="form-control" placeholder="city"
                                        value="{{ $content->city_footer ?? '' }}">
                                </div>
                            </div> --}}
                            <div class="form-group row mt-3">
                                <label for="description" class="col-sm-2 col-form-label text-right">province</label>
                                <div class="col-sm-10">
                                    <input type="text" name="province" id="province" class="form-control"
                                        placeholder="province" value="{{ $content->province_footer ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="description" class="col-sm-2 col-form-label text-right">zipcode</label>
                                <div class="col-sm-10">
                                    <input type="text" name="zipcode" id="zipcode" class="form-control"
                                        placeholder="zipcode" value="{{ $content->zipcode_footer ?? '' }}">
                                </div>
                            </div>
                            <hr>
                            {{-- <div class="form-group row">
                                <label for="description" class="col-sm-2 col-form-label text-right">email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="email"
                                        value="{{ $contact->email ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-2 col-form-label text-right">phone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="phone"
                                        value="{{ $contact->phone ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-2 col-form-label text-right">time period</label>
                                <div class="col-sm-10">
                                    <input type="text" name="time" id="time" class="form-control" placeholder="time"
                                        value="{{ $contact->time ?? '' }}">
                                </div>
                            </div> --}}

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" id="submit-all">save</button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
        CKEDITOR.replace('editor3');



        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview-image1').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#image1").change(function() {
            readURL1(this);
        });

        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview-image2').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#image2").change(function() {
            readURL2(this);
        });

    </script>
    <style>
        .card-tasks {
            height: 100%;
        }

    </style>
@endsection
