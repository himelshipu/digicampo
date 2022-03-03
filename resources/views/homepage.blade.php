@extends('layouts.layout')
@section('content')
    <!-- main wrapper -->
                <!-- visual/banner of the page -->
                <section class="visual">
                    <div class="visual-inner about-banner dark-overlay parallax">
                        <div class="centered">
                            <div class="container">
                                <div class="visual-text visual-center">
                                    <h1 class="visual-title visual-sub-title">Homepage </h1>
                                    <div class="breadcrumb-block">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html"> Home </a></li>
                                            <li class="breadcrumb-item active"> DIGICAMPO  </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/visual/banner of the page -->

                <!-- main content wrapper -->
                <div class="content-wrapper">
                    <section class="content-block">
                        <div class="container">
                            <div class="row multiple-row v-align-row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="col-wrap">
                                        <div class="block-heading">
                                            <h3 class="block-top-heading">WHAT WE DO</h3>
                                            <h2 class="block-main-heading">EXPERTS</h2>
                                            <sup class="block-sub-heading">We build digital solutions.</sup>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="col-wrap">
                                        <div class="ico-box bg-gray-light  has-radius-large">
                                            <div class="icon">
                                                <span class="custom-icon-pen-tool"><span class="sr-only">&amp;</span></span>
                                            </div>
                                            <h4 class="content-title"><a href="#">PIXEL PERFECT</a></h4>
                                            <div class="des">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                            <div class="link-holder">
                                                <a class="link-more" href="#">LEARN MORE</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="col-wrap">
                                        <div class="ico-box bg-gray-light  has-radius-large">
                                            <div class="icon">
                                                <span class="custom-icon-vector"><span class="sr-only">&amp;</span></span>
                                            </div>
                                            <h4 class="content-title"><a href="#">VECTOR SHAPES</a></h4>
                                            <div class="des">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                            <div class="link-holder">
                                                <a class="link-more" href="#">LEARN MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="col-wrap">
                                        <div class="ico-box bg-gray-light  has-radius-large">
                                            <div class="icon">
                                                <span class="custom-icon-font-design"><span class="sr-only">&amp;</span></span>
                                            </div>
                                            <h4 class="content-title"><a href="#">GOOGLE FONTS</a></h4>
                                            <div class="des">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                            <div class="link-holder">
                                                <a class="link-more" href="#">LEARN MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="col-wrap">
                                        <div class="ico-box bg-gray-light has-radius-large">
                                            <div class="icon">
                                                <span class="custom-icon-layers"><span class="sr-only">&amp;</span></span>
                                            </div>
                                            <h4 class="content-title"><a href="#">EASY LAYERS</a></h4>
                                            <div class="des">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                            <div class="link-holder">
                                                <a class="link-more" href="#">LEARN MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="col-wrap">
                                        <div class="ico-box bg-gray-light has-radius-large">
                                            <div class="icon">
                                                <span class="custom-icon-list"><span class="sr-only">&amp;</span></span>
                                            </div>
                                            <h4 class="content-title"><a href="#">BOOTSTRAP GRID</a></h4>
                                            <div class="des">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>

                                            <div class="link-holder">
                                                <a class="link-more" href="#">LEARN MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--/main content wrapper -->

                <section class="content-block">
                    <div class="container">
                        <div class="block-heading bottom-space">
                            <h3 class="block-top-heading">WHO WE ARE</h3>
                            <h2 class="block-main-heading">TEAM WORK</h2>
                            <span class="block-sub-heading">We really love what we do & our work on every project truly reflects that.</span>
                            <div class="divider"><img src="{{asset('template/img/divider.png')}}" alt="images description"></div>
                        </div>
                        <div class="team-container">
                            <div class="owl-carousel group-slide bottom-m-space">
                                <div class="slide-item">
                                    <figure class="team-box caption-fade-up">
                                        <div class="img-block rev-gray-scale">
                                            <img src="{{asset('template/img/team-02.jpg')}}" alt="images description">
                                        </div>
                                        <figcaption class="text-right">
                                            <strong class="content-title mb-0">JASON STRATHAM</strong>
                                            <span class="sub">UI/UX GURU</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="slide-item">
                                    <figure class="team-box caption-fade-up">
                                        <div class="img-block rev-gray-scale">
                                            <img src="{{asset('template/img/team-01.jpg')}}" alt="images description">
                                        </div>
                                        <figcaption class="text-right">
                                            <strong class="content-title mb-0">JESSICA FIZOVIC</strong>
                                            <span class="sub">UI/UX GURU</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="slide-item">
                                    <figure class="team-box caption-fade-up">
                                        <div class="img-block rev-gray-scale">
                                            <img src="{{asset('template/img/team-03.jpg')}}" alt="images description">
                                        </div>
                                        <figcaption class="text-right">
                                            <strong class="content-title mb-0">JAMES NASS</strong>
                                            <span class="sub">UI/UX GURU</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="slide-item">
                                    <figure class="team-box caption-fade-up">
                                        <div class="img-block rev-gray-scale">
                                            <img src="{{asset('template/img/team-02.jpg')}}" alt="images description">
                                        </div>
                                        <figcaption class="text-right">
                                            <strong class="content-title mb-0">STEVE MANNING</strong>
                                            <span class="sub">UI/UX GURU</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="slide-item">
                                    <figure class="team-box caption-fade-up">
                                        <div class="img-block rev-gray-scale">
                                            <img src="{{asset('template/img/team-01.jpg')}}" alt="images description">
                                        </div>
                                        <figcaption class="text-right">
                                            <strong class="content-title mb-0">JESSICA FIZOVIC</strong>
                                            <span class="sub">UI/UX GURU</span>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <p> Martin loves gossiping code on his iPhone. Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        </div>
                    </div>
                </section>

                <section class="content-block portfolio-block pt-0" id="container">
                    <div class="bottom-space text-center text-uppercase">
                        <h2>The Work</h2>
                    </div>
                    <ul class="filter-nav text-center button-group filter-button-group">
                        <li>
                            <button data-filter="*">ALL</button>
                        </li>
                        <li>
                            <button data-filter=".ui">UI/UX DESIGN</button>
                        </li>
                        <li>
                            <button data-filter=".programming">PROGRAMMING</button>
                        </li>
                        <li>
                            <button data-filter=".photography">PHOTOGRAPHY</button>
                        </li>
                        <li>
                            <button data-filter=".ecommerce">ECOMMERCE</button>
                        </li>
                    </ul>
                    <div class="row grid">
                        <div class="gallery-item col-lg-4 col-md-6 ui photography">
                            <figure class="picture-item img-block shine-effect image-zoom port-v2">
                                <img src="{{asset('template/img/img-01.jpg')}}" alt="images description">
                                <figcaption>
                                    <div class="link-box">
                                        <a href="#">
                                            <span class="icon-heart"><span class="sr-only">&amp;</span></span>
                                        </a>
                                        <a href="#">
                                            <span class="icon-link"><span class="sr-only">&amp;</span></span>
                                        </a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="gallery-item col-lg-4 col-md-6 photography programming">
                            <figure class="picture-item img-block shine-effect image-zoom port-v2">
                                <img src="{{asset('template/img/img-02.jpg')}}" alt="images description">
                                <figcaption>
                                    <div class="link-box">
                                        <a href="#">
                                            <span class="icon-heart"><span class="sr-only">&amp;</span></span>
                                        </a>
                                        <a href="#">
                                            <span class="icon-link"><span class="sr-only">&amp;</span></span>
                                        </a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="gallery-item col-lg-4 col-md-6 ui photography">
                            <figure class="picture-item img-block shine-effect image-zoom port-v2">
                                <img src="{{asset('template/img/img-03.jpg')}}" alt="images description">
                                <figcaption>
                                    <div class="link-box">
                                        <a href="#">
                                            <span class="icon-heart"><span class="sr-only">&amp;</span></span>
                                        </a>
                                        <a href="#">
                                            <span class="icon-link"><span class="sr-only">&amp;</span></span>
                                        </a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="gallery-item col-lg-4 col-md-6 ecommerce programming">
                            <figure class="picture-item img-block shine-effect image-zoom port-v2">
                                <img src="{{asset('template/img/img-04.jpg')}}" alt="images description">
                                <figcaption>
                                    <div class="link-box">
                                        <a href="#">
                                            <span class="icon-heart"><span class="sr-only">&amp;</span></span>
                                        </a>
                                        <a href="#">
                                            <span class="icon-link"><span class="sr-only">&amp;</span></span>
                                        </a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="gallery-item col-lg-4 col-md-6 programming ecommerce">
                            <figure class="picture-item img-block shine-effect image-zoom port-v2">
                                <img src="{{asset('template/img/img-05.jpg')}}" alt="images description">
                                <figcaption>
                                    <div class="link-box">
                                        <a href="#">
                                            <span class="icon-heart"><span class="sr-only">&amp;</span></span>
                                        </a>
                                        <a href="#">
                                            <span class="icon-link"><span class="sr-only">&amp;</span></span>
                                        </a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="gallery-item col-lg-4 col-md-6 ecommerce ui">
                            <figure class="picture-item img-block shine-effect image-zoom port-v2">
                                <img src="{{asset('template/img/img-06.jpg')}}" alt="images description">
                                <figcaption>
                                    <div class="link-box">
                                        <a href="#">
                                            <span class="icon-heart"><span class="sr-only">&amp;</span></span>
                                        </a>
                                        <a href="#">
                                            <span class="icon-link"><span class="sr-only">&amp;</span></span>
                                        </a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </section>

                <section class="content-block">
                    <div class="container">
                        <div class="row multiple-row v-align-row">
                            <div class="col-md-6 col-lg-4">
                                <div class="col-wrap">
                                    <div class="block-heading">
                                        <h3 class="block-top-heading">RECENTLY FROM</h3>
                                        <h2 class="block-main-heading">THE JOURNAL</h2>
                                        <span class="block-sub-heading">Blogging like no tomorrow.</span>
                                        <div class="divider"><img src="{{asset('template/img/divider.png')}}" alt="images description"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="col-wrap">
                                    <div class="post-grid">
                                        <div class="img-block">
                                            <img src="{{asset('template/img/img-16.jpg')}}" alt="images">
                                        </div>
                                        <div class="post-text-block bg-gray-light">
                                            <strong class="content-title mb-0">Heading South</strong>
                                            <span class="content-sub-title">Where’s Responsive Design?</span>
                                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                            <div class="post-meta clearfix">
                                                <div class="post-link-holder">
                                                    <a href="#">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
                                                </div>
                                                <div class="post-social text-right">
                                                    <ul class="social-network social-small">
                                                        <li><a href="#"><span class="icon-facebook"><span class="sr-only">&nbsp;</span></span></a></li>
                                                        <li><a href="#"><span class="icon-twitter"><span class="sr-only">&nbsp;</span></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="col-wrap">
                                    <div class="post-grid">
                                        <div class="img-block">
                                            <img src="{{asset('template/img/img-17.jpg')}}" alt="images">
                                        </div>
                                        <div class="post-text-block bg-gray-light">
                                            <strong class="content-title mb-0">Product Design</strong>
                                            <span class="content-sub-title">Thechnology and Trends</span>
                                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                            <div class="post-meta clearfix">
                                                <div class="post-link-holder">
                                                    <a href="#">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
                                                </div>
                                                <div class="post-social text-right">
                                                    <ul class="social-network social-small">
                                                        <li><a href="#"><span class="icon-facebook"><span class="sr-only">&nbsp;</span></span></a></li>
                                                        <li><a href="#"><span class="icon-twitter"><span class="sr-only">&nbsp;</span></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="col-wrap">
                                    <div class="post-grid">
                                        <div class="img-block">
                                            <img src="{{asset('template/img/img-18.jpg')}}" alt="images">
                                        </div>
                                        <div class="post-text-block bg-gray-light">
                                            <strong class="content-title mb-0">Working Remotely</strong>
                                            <span class="content-sub-title">Home office working for you.</span>
                                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                            <div class="post-meta clearfix">
                                                <div class="post-link-holder">
                                                    <a href="#">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
                                                </div>
                                                <div class="post-social text-right">
                                                    <ul class="social-network social-small">
                                                        <li><a href="#"><span class="icon-facebook"><span class="sr-only">&nbsp;</span></span></a></li>
                                                        <li><a href="#"><span class="icon-twitter"><span class="sr-only">&nbsp;</span></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="col-wrap">
                                    <div class="post-grid">
                                        <div class="img-block">
                                            <img src="{{asset('template/img/img-08.jpg')}}" alt="images">
                                        </div>
                                        <div class="post-text-block bg-gray-light">
                                            <strong class="content-title mb-0">Leaving With A Note</strong>
                                            <span class="content-sub-title">If you want to get back again.</span>
                                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                            <div class="post-meta clearfix">
                                                <div class="post-link-holder">
                                                    <a href="#">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
                                                </div>
                                                <div class="post-social text-right">
                                                    <ul class="social-network social-small">
                                                        <li><a href="#"><span class="icon-facebook"><span class="sr-only">&nbsp;</span></span></a></li>
                                                        <li><a href="#"><span class="icon-twitter"><span class="sr-only">&nbsp;</span></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="col-wrap">
                                    <div class="post-grid">
                                        <div class="img-block">
                                            <img src="{{asset('template/img/img-07.jpg')}}" alt="images">
                                        </div>
                                        <div class="post-text-block bg-gray-light">
                                            <strong class="content-title mb-0">Break Timings</strong>
                                            <span class="content-sub-title">Spending them wisely.</span>
                                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                            <div class="post-meta clearfix">
                                                <div class="post-link-holder">
                                                    <a href="#">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
                                                </div>
                                                <div class="post-social text-right">
                                                    <ul class="social-network social-small">
                                                        <li><a href="#"><span class="icon-facebook"><span class="sr-only">&nbsp;</span></span></a></li>
                                                        <li><a href="#"><span class="icon-twitter"><span class="sr-only">&nbsp;</span></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

    <!-- search form wrapper -->

@endsection
