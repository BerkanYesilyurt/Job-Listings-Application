@extends('layout')

@section('content')
    @unless(count($listings) == 0)

        <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><section class="n-featured-jobs-two">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="heading-title left">
                                            <h2>Current Listings</h2>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="n-features-job-two-box clear-custom" style="width: 100%;">
                                                @foreach($listings as $listing)



                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="n-featured-single">
                                                            <div class="n-featured-single-top">
                                                                <div class="n-featured-singel-img">
                                                                    <a href="listings/{{$listing['id']}}"><img src="{{$listing->logo ? asset(('storage/' . $listing['logo'])) : asset(('img/nologo.jpg'))}}" class="img-responsive" alt="logo"></a>
                                                                </div>
                                                                <div class="n-featured-singel-meta">
                                                                    <h4><a href="listings/{{$listing['id']}}">{{$listing->title}}</a></h4>

                                                                    <div class="n-cat">{{substr($listing->description, 0, 135)}}...</div>

                                                                </div>

                                                            </div>
                                                            <div class="n-featured-single-bottom">
                                                                <center>
                                                                    <form method="POST" action="/listings/{{$listing->id}}">

                                                                        <a href ="/listings/{{$listing->id}}/edit" class="btn n-btn-rounded">Update</a>
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn n-btn-rounded">Delete</button>
                                                                    </form>
                                                                </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                @else
                                                    <p>No listings found.</p>
    @endunless
@endsection
