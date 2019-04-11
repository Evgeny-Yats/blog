@extends('layouts.blog')

@section('content')
    <div class="blog-classic">
    @foreach($articles as $article)
    <div class="news-block-two">
        <div class="inner-box">
            <div class="image">
                <a href="/article/{{$article->id}}"><img src="{{$article->image}}" alt="" /></a>
            </div>
            <div class="post-date">{{$article->created_at}}</div>
            <h3><a href="/article/{{$article->id}}">{{$article->title}}</a></h3>
            <div class="text">
                {{$article->intro}}

            </div>
            <div class="author">
                <div class="author-image"><img src="assets/blog/images/resource/author-2.jpg" alt="" /></div>
                Admin
            </div>
            <ul class="post-meta">
                <li><span class="icon fa fa-bookmark-o"></span>Business, Creative</li>
                <li><span class="icon fa fa-heart-o"></span>12</li>
                <li><span class="icon fa fa-comment-o"></span>3</li>
            </ul>
        </div>
    </div>

    @endforeach
    </div>

@endsection
