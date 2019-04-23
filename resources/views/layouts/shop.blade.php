
@extends('layouts.dizital')
@section('content')

    <!--Page Title-->
    <section class="page-title">
        <div class="auto-container">
            <h1>Our Shop</h1>
            <div class="text">Highlight your writing with beautiful, expressive featured images.</div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Shop Features Section-->

    @include('shop.wiget.features',compact('features'));
    <!--End Shop Features Section-->



    <section class="shop-page-section">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Featured Products</h2>
            </div>

            <div class="row clearfix">

                @yield('content2')

            </div>

        </div>
    </section>
    <!--End Shop Page Section-->
@endsection