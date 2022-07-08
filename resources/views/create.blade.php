@extends('layout')

@section('content')
    <div class="clearfix"></div>
    <input type="hidden" id="is_dashboard_page" value=" "><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><section class="n-pages-breadcrumb"  style="background: rgba(0, 0, 0, 0.6) url({{asset('img/slider-image.png')}}) 0 0 no-repeat; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-position: center center; background-attachment:scroll;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
                                    <div class="n-breadcrumb-info">
                                        <h1>Job Post</h1><p>Start your process without wasting time.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="n-job-pages-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-lg-offset-3">
                                    <div class="row">
                                        <div class="n-job-pages register-page">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="n-page-left-side">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="post-job-heading">
                                                                <h3>Post a Job</h3>
                                                            </div>
                                                        </div>
                                                        <form method="post" action="/create" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Company Name:</label>
                                                                    <input placeholder="Berkan LLC." class="form-control" type="text" name="company" value="{{old('company')}}"/>
                                                                    @error('company')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Job Title:</label>
                                                                    <input placeholder="Example: Mid. PHP Developer" class="form-control" type="text" name="title" value="{{old('title')}}"/>
                                                                    @error('title')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Job Location:</label>
                                                                    <input placeholder="Example: Istanbul,Turkey" class="form-control" type="text" name="location"  value="{{old('location')}}"/>
                                                                    @error('location')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>E-mail:</label>
                                                                    <input placeholder="Example: test@website.com" class="form-control" type="text" name="email" value="{{old('email')}}"/>
                                                                    @error('email')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Website:</label>
                                                                    <input placeholder="https://www.example.com" class="form-control" type="text" name="website" value="{{old('website')}}"/>
                                                                    @error('website')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Tags (comma separated):</label>
                                                                    <input placeholder="Example: php, laravel, backend" class="form-control" type="text" name="tags" value="{{old('tags')}}"/>
                                                                    @error('tags')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Company Logo:</label>
                                                                    <input class="form-control" type="file" name="logo"/>
                                                                    @error('logo')
                                                            <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Job Description:</label>
                                                                    <textarea class="form-control" placeholder="Requirements, Salary, Working Days and Hours. All other details about the job." name="description" rows="4" cols="50">{{old('description')}}</textarea>
                                                                    @error('description')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                <div class="buttons-area">

                                                                    <div class="form-group">
                                                                        <input type="checkbox" name="confirm" class="input-icheck-others"/>
                                                                        <p> I Agree <a href="#" target="_blank">terms and conditions.</a></p>
                                                                    </div>
                                                                    <button class="btn n-btn-flat btn-mid pull-right " type="submit">Create</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section></div></div></div></div>
@endsection
