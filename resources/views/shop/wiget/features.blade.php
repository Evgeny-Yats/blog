<section class="shop-features-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Feature Block-->
            @foreach($features as $feature)
            <div class="feature-block-three col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="{{$feature->icons}}"></span>
                    </div>
                    <h3><a href="#">{{$feature->title}}</a></h3>
                    <div class="text">{{$feature->body}}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>