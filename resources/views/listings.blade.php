@extends('layout')

@section('content')
    @include('partials._search')
@unless(count($listings) == 0)

    <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><section class="n-featured-jobs-two">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="heading-title left">
                                        <h2>Latest Jobs</h2>
                                        <!-- <span class="view-more"><a href="# " class="btn n-btn-rounded"> View All </a></span> -->
                                    </div>
                                </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="n-features-job-two-box clear-custom">
@foreach($listings as $listing)



                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="n-featured-single">
                        <div class="n-featured-single-top">
                            <div class="n-featured-singel-img">
                                <a href="job/ios-engineer-backup/index.html"><img src="wp-content/uploads/sites/3/2018/09/images-8-150x150.png" class="img-responsive" alt="logo"></a>
                            </div>
                            <div class="n-featured-singel-meta">
                                <h4><a href="listings/{{$listing['id']}}">{{$listing->title}}</a></h4>

                                <p><i class="fa fa-map-marker"></i><a href="ad_location/usa/index.html"> {{$listing->location}}</a></p>
                                <div class="n-cat">{{$listing->description}}</div>

                            </div>

                        </div>
                        <div class="n-featured-single-bottom">
                            <ul class="">
                                <li> <i class="fa fa-clock-o"></i>4 years ago</li>
                                <li>
                                    Dollar 2000-3000 / Monthly
                                </li>
                                <li> <i class="fa fa-hand-o-right"></i>Contract</li>
                            </ul>
                        </div>
                    </div>
                </div>
@endforeach

@else
    <p>No listings found.</p>
@endunless
@endsection
