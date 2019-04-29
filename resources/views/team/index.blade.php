@extends('layouts.dizital')

@section('content3')

    <!--Shop Item-->
    @foreach($teams as $team)
        <div class="team-block col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box">
                <div class="image">
                    <a href="#"><img src="images/resource/team-1.jpg" alt="" /></a>
                </div>
                <div class="lower-content">
                    <h3><a href="#">Dark Smith</a></h3>
                    <div clas~s="designation">designer</div>
                    <div class="text">Lorem Ipsum proin gravda nibh vel velit auctor aliquenean sollicitud</div>
                    <ul class="social-icon-one">
                        <li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="pinterest"><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                        <li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
@endsection