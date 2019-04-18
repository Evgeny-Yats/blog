@extends('layouts.shop')

@section('content2')

<!--Shop Item-->
@foreach($products as $product)
<div class="shop-item col-lg-3 col-md-6 col-sm-12">
    <div class="inner-box">
        <div class="image">
            <a href="/article/{{$product->id}}"><img src="{{$product->image}}" alt="" /></a>
        </div>
        <div class="lower-content">
            <h3><a href="shop-single.html">{{$product->title}}</a></h3>
            <div class="price">{{$product->intro}}</div>
            <a href="shop-single.html" class="theme-btn btn-style-two">Add to cart</a>
        </div>
    </div>
</div>
@endforeach
@endsection