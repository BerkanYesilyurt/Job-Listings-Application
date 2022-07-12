@extends('layout')

@section('content')

    <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><section class="n-featured-jobs-two">

                        <div class="container">
                            <div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="n-features-job-two-box clear-custom" style="width: 100%">
                @include('partials._onlysearch')

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width: 100%">
                    <div class="n-featured-single" style="padding: 50px;  border: 5px solid rgb(251, 35, 106);" >
                        <div class="n-featured-single-top">
                            <center>
                                <a href="{{$listing->logo ? asset(('storage/' . $listing['logo'])) : asset(('img/nologo.jpg'))}}"><img src="{{$listing->logo ? asset(('storage/' . $listing['logo'])) : asset(('img/nologo.jpg'))}}" class="img-responsive" alt="logo"></a>

                            <div class="n-featured-singel-meta">
                                <h2><a href="listings/{{$listing['id']}}">{{$listing->title}}</a> <br>{{$listing->company}}</h2>
                                <p><x-listing-tags :tags="$listing->tags" /></p><br>
                                <p><i class="fa fa-map-marker"></i><a href="" style="font-size: 140%"> {{$listing->location}}</a></p>
                                <br>
                                <h2>Job Description</h2>
                                <br>
                                <div class="n-cat">{{$listing->description}}</div>

                            </div>
                                </center>
                        </div>
                        <div class="n-featured-single-bottom">

                        <center>
                        <a href ="mailto:{{$listing->email}}" class="btn n-btn-rounded">Contact</a>

                        <a href ="{{$listing->website}}" class="btn n-btn-rounded">Visit Website</a>

                            @auth
                        <br><hr><br>

                            <form method="POST" action="/listings/{{$listing->id}}">

                                <a href ="/listings/{{$listing->id}}/edit" class="btn n-btn-rounded">Update</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn n-btn-rounded">Delete</button>
                            </form>
                            @endauth
                        </center>
                    </div>

                </div>
@endsection
