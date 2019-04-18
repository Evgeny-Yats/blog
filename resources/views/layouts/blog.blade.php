@extends('layouts.dizital')

@section('content')
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
			
				<!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">


						@yield('content1')
						

				</div>
				
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar">
						
						<!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                        	<div class="sidebar-title">
                            	<h3>Последние публикации</h3>
                            </div>
                            <div class="widget-content">
								@foreach($lastArticles as $last)
								<article class="post">
                                    <figure class="post-thumb"><a href="/article/{{$last->id}}"><img src="{{$last->image}}" alt=""></a></figure>
                                    <div class="post-info">{{$last->created_at}}</div>
                                    <div class="text"><a href="/article/{{$last->id}}">{{$last->title}}</a></div>
                                </article>
    							@endforeach


							</div>
                        </div>
                        
                        <!-- Category Widget -->
                        <div class="sidebar-widget category-widget">
                        	<div class="sidebar-title">
                            	<h3>Category</h3>
                            </div>
                            <div class="widget-content">
                            	<ul>
									@foreach($cat as $c)
									<li><a href="/category/{{$c->id}}">{{$c->name}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						
						<!-- Instagram Widget -->
                        <div class="sidebar-widget instagram-widget">
                        	<div class="sidebar-title">
                            	<h3>Category</h3>
                            </div>
                            <div class="widget-content">
                            	<div class="images-outer clearfix">
									<!--Image Box-->
									<figure class="image-box"><a href="images/gallery/1.jpg" class="instagram-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus"></span></a>
									<img src="images/gallery/instagram-1.jpg" alt=""></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="images/gallery/2.jpg" class="instagram-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus"></span></a>
									<img src="images/gallery/instagram-2.jpg" alt=""></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="images/gallery/3.jpg" class="instagram-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus"></span></a>
									<img src="images/gallery/instagram-3.jpg" alt=""></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="images/gallery/4.jpg" class="instagram-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus"></span></a>
									<img src="images/gallery/instagram-4.jpg" alt=""></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="images/gallery/1.jpg" class="instagram-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus"></span></a>
									<img src="images/gallery/instagram-5.jpg" alt=""></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="images/gallery/2.jpg" class="instagram-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus"></span></a>
									<img src="images/gallery/instagram-6.jpg" alt=""></figure>
								</div>
							</div>
						</div>
						
					</aside>
				</div>
				
			</div>
		</div>
	</div>
@endsection
