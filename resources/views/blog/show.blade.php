@extends('layouts.blog')

@section('content')


        <div class="blog-single">
            <div class="inner-box">
            <div class="image">
                <img src="{{$article->image}}" alt="" />
            </div>
            <div class="post-date">{{$article->created_at}}</div>
            <h3>{{$article->title}}</h3>
            <div class="text">
                <p>{{$article->intro}}</p>
                <div class="row clearfix">

                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="image">
                            <img src="{{$article->image}}" alt="" />
                        </div>
                    </div>

                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="image">
                            <img src="{{$article->image}}" alt="" />
                        </div>
                    </div>

                </div>
                <p>{{$article->body}}</p>
            </div>
            <div class="post-meta-option">
                <div class="author">
                    <div class="author-image"><img src="{{$article->image}}" alt="" /></div>
                    by Ronald Austin
                </div>
                <ul class="post-meta">
                    <li><span class="icon fa fa-bookmark-o"></span>Business, Creative</li>
                    <li><span class="icon fa fa-heart-o"></span>12</li>
                    <li><span class="icon fa fa-comment-o"></span>3</li>
                </ul>
            </div>
        </div>
        </div>





@endsection
