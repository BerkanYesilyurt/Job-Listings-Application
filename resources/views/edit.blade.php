@extends('layout')

@section('content')
    <div class="clearfix"></div>
    <input type="hidden" id="is_dashboard_page" value=" "><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><section class="n-pages-breadcrumb"  style="background: rgba(0, 0, 0, 0.6) url({{asset('img/slider-image.png')}}) 0 0 no-repeat; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-position: center center; background-attachment:scroll;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
                                    <div class="n-breadcrumb-info">
                                        <h1>Job Listing</h1><p>Edit > {{$listing->title}}</p>
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
                                                                <h3>Edit > {{$listing->title}}</h3>
                                                            </div>
                                                        </div>
                                                        <form method="post" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Company Name:</label>
                                                                    <input placeholder="Berkan LLC." class="form-control" type="text" name="company" value="{{$listing->company}}"/>
                                                                    @error('company')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Job Title:</label>
                                                                    <input placeholder="Example: Mid. PHP Developer" class="form-control" type="text" name="title" value="{{$listing->title}}"/>
                                                                    @error('title')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Job Location:</label>
                                                                    <input placeholder="Example: Istanbul,Turkey" class="form-control" type="text" name="location"  value="{{$listing->location}}"/>
                                                                    @error('location')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>E-mail:</label>
                                                                    <input placeholder="Example: test@website.com" class="form-control" type="text" name="email" value="{{$listing->email}}"/>
                                                                    @error('email')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Website:</label>
                                                                    <input placeholder="https://www.example.com" class="form-control" type="text" name="website" value="{{$listing->website}}"/>
                                                                    @error('website')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Tags (comma separated):</label>
                                                                    <input placeholder="Example: php, laravel, backend" class="form-control" type="text" name="tags" value="{{$listing->tags}}"/>
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
                                                                    <img src="{{$listing->logo ? asset(('storage/' . $listing['logo'])) : asset(('img/nologo.jpg'))}}" class="img-responsive" alt="logo">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Job Description:</label>
                                                                    <textarea class="form-control" placeholder="Requirements, Salary, Working Days and Hours. All other details about the job." name="description" rows="4" cols="50">{{$listing->description}}</textarea>
                                                                    @error('description')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                <div class="buttons-area">


                                                                    <button class="btn n-btn-flat btn-mid pull-right " type="submit">Update</button>
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
