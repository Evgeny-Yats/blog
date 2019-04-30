@extends('layouts.dizital')

@section('content')

    <!--Shop Item-->
    <section class="team-page-section">
    <div class="auto-container">
    @foreach($teams as $team)
        <div class="team-block col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box">
                <div class="image">
                    <a href="#"><img src="{{$team->image}}" alt="" /></a>
                </div>
                <div class="lower-content">
                    <h3><a href="#">{{$team->title}}</a></h3>
                    <div clas~s="designation">{{$team->view}}</div>
                    <div class="text">{{$team->body}}</div>
                    <ul class="social-icon-one">
                        <li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="pinterest"><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                        <li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    </section>
@endsection