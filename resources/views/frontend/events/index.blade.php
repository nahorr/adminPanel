@extends('layouts.app')
@section('content')

<!-- Blog Section Start -->
<section id="blog" class="section-padding">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="section-title-header text-center">
            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Upcoming Events</h2>
            <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an <br> cule dicta iriure at phaedrum.</p>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
            <div class="blog-image">
                <a href="#">
                <img class="img-fluid" src="{{ asset('frontend/assets/img/blog/img-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="descr">
                <div class="icon">
                <i class="lni-image"></i>
                </div>
                <h3 class="title">
                <a href="single-post.html">
                    Learn Something New
                </a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipsing elit, sed do eiusmodincididunt ut labore et dolore</p>
            </div>
            <div class="meta-tags">
                <span class="date"><i class="lni-calendar"></i> Jan 20, 2020</span>
                <span class="comments"><i class="lni-comment-alt"></i> <a href="#"> 0 Comment</a></span>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
            <div class="blog-image">
                <a href="#">
                <img class="img-fluid" src="{{ asset('frontend/assets/img/blog/img-2.jpg') }}" alt="">
                </a>
            </div>
            <div class="descr">
                <div class="icon">
                <i class="lni-arrow-right"></i>
                </div>
                <h3 class="title">
                <a href="single-post.html">
                    The Student's Meeting
                </a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipsing elit, sed do eiusmodincididunt ut labore et dolore</p>
            </div>
            <div class="meta-tags">
                <span class="date"><i class="lni-calendar"></i> Jan 20, 2020</span>
                <span class="comments"><i class="lni-comment-alt"></i> <a href="#"> 0 Comment</a></span>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
            <div class="blog-image">
                <a href="#">
                <img class="img-fluid" src="{{ asset('frontend/assets/img/blog/img-3.jpg') }}" alt="">
                </a>
            </div>
            <div class="descr">
                <div class="icon">
                <i class="lni-camera"></i>
                </div>
                <h3 class="title">
                <a href="single-post.html">
                    The Meeting in the university
                </a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipsing elit, sed do eiusmodincididunt ut labore et dolore</p>
            </div>
            <div class="meta-tags">
                <span class="date"><i class="lni-calendar"></i> Jan 20, 2020</span>
                <span class="comments"><i class="lni-comment-alt"></i> <a href="#"> 0 Comment</a></span>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

@endsection
