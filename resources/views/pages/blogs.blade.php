@extends('layouts.layout')
@section('content')

            <!-- visual/banner of the page -->
            <section class="visual">
                <div class="visual-inner about-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                    <div class="centered">
                        <div class="container">
                            <div class="visual-text visual-center">
                                <h1 class="visual-title visual-sub-title">Blog</h1>
                                <div class="breadcrumb-block">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"> Home </a></li>
                                        <li class="breadcrumb-item"><a href="index.html"> Blog </a></li>
                                        <li class="breadcrumb-item active"> Right Sidebar </li>
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
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row multiple-row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="col-wrap">
                                            <div class="post-grid reverse-grid">
                                                <div class="img-block post-img">
                                                    <a href="#"><img src="{{asset('template/img/img-32.jpg')}}" alt="images"></a>
                                                    <time class="post-date" datetime="2016-10-10">17 Jun</time>
                                                </div>
                                                <div class="post-text-block bg-gray-light">
                                                    <strong class="content-title mb-0"><a href="#">Heading South</a></strong>
                                                    <span class="content-sub-title">Where’s Responsive Design?</span>
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                                    <div class="post-meta clearfix">
                                                        <div class="post-link-holder">
                                                            <a href="{{'blog-details'}}">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
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
                                    <div class="col-md-6 col-lg-6">
                                        <div class="col-wrap">
                                            <div class="post-grid reverse-grid">
                                                <div class="img-block post-img">
                                                    <a href="#"><img src="{{asset('template/img/img-33.jpg')}}" alt="images"></a>
                                                    <time class="post-date" datetime="2016-10-10">17 Jun</time>
                                                </div>
                                                <div class="post-text-block bg-gray-light">
                                                    <strong class="content-title mb-0"><a href="#">Product Design</a></strong>
                                                    <span class="content-sub-title">Thechnology and Trends</span>
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                                    <div class="post-meta clearfix">
                                                        <div class="post-link-holder">
                                                            <a href="{{'blog-details'}}">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
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
                                    <div class="col-md-6 col-lg-6">
                                        <div class="col-wrap">
                                            <div class="post-grid reverse-grid">
                                                <div class="img-block post-img">
                                                    <a href="#"><img src="{{asset('template/img/img-34.jpg')}}" alt="images"></a>
                                                    <time class="post-date" datetime="2016-10-10">17 Jun</time>
                                                </div>
                                                <div class="post-text-block bg-gray-light">
                                                    <strong class="content-title mb-0"><a href="#">Working Remotely</a></strong>
                                                    <span class="content-sub-title">Home office working for you.</span>
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                                    <div class="post-meta clearfix">
                                                        <div class="post-link-holder">
                                                            <a href="{{'blog-details'}}">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
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
                                    <div class="col-md-6 col-lg-6">
                                        <div class="col-wrap">
                                            <div class="post-grid reverse-grid">
                                                <div class="img-block post-img">
                                                    <a href="#"><img src="{{asset('template/img/img-35.jpg')}}" alt="images"></a>
                                                    <time class="post-date" datetime="2016-10-10">17 Jun</time>
                                                </div>
                                                <div class="post-text-block bg-gray-light">
                                                    <strong class="content-title mb-0"><a href="#">Leaving With A Note</a></strong>
                                                    <span class="content-sub-title">If you want to get back again.</span>
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                                    <div class="post-meta clearfix">
                                                        <div class="post-link-holder">
                                                            <a href="{{'blog-details'}}">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
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
                                    <div class="col-md-6 col-lg-6">
                                        <div class="col-wrap">
                                            <div class="post-grid reverse-grid">
                                                <div class="img-block post-img">
                                                    <a href="#"><img src="{{asset('template/img/img-36.jpg')}}" alt="images"></a>
                                                    <time class="post-date" datetime="2016-10-10">17 Jun</time>
                                                </div>
                                                <div class="post-text-block bg-gray-light">
                                                    <strong class="content-title mb-0"><a href="#">Break Timings</a></strong>
                                                    <span class="content-sub-title">Spending them wisely.</span>
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                                    <div class="post-meta clearfix">
                                                        <div class="post-link-holder">
                                                            <a href="{{'blog-details'}}">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
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
                                    <div class="col-md-6 col-lg-6">
                                        <div class="col-wrap">
                                            <div class="post-grid reverse-grid">
                                                <div class="img-block post-img">
                                                    <a href="#"><img src="{{asset('template/img/img-37.jpg')}}" alt="images"></a>
                                                    <time class="post-date" datetime="2016-10-10">17 Jun</time>
                                                </div>
                                                <div class="post-text-block bg-gray-light">
                                                    <strong class="content-title mb-0"><a href="#">Heading South</a></strong>
                                                    <span class="content-sub-title">Where’s Responsive Design?</span>
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                                    <div class="post-meta clearfix">
                                                        <div class="post-link-holder">
                                                            <a href="{{'blog-details'}}">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
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
                                <div class="btn-container full-width-btn top-space">
                                    <a href="javascript:void(0)" class="btn btn-black">LOAD MORE<span class="c-ripple js-ripple"><span class="c-ripple__circle"></span></span></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="sidebar-wrap mt-5 mt-lg-0">
                                    <div class="widget-block">
                                        <div class="post-block">
                                            <h4>RECENT POSTS</h4>
                                            <div class="post-holder"><a href="#" class="post-link"></a>
                                                <div class="post-avatar">
                                                    <a href="#"><img src="{{asset('template/img/thumb.jpg')}}" alt="image description"></a>
                                                </div>
                                                <div class="post-desc">
                                                    <h6><a href="#">Left Sidebar Portfolio</a></h6>
                                                    <p><a href="#">7 Comments</a></p>
                                                </div>
                                            </div>
                                            <div class="post-holder"><a href="#" class="post-link"></a>
                                                <div class="post-avatar">
                                                    <a href="#"><img src="{{asset('template/img/thumb1.jpg')}}" alt="image description"></a>
                                                </div>
                                                <div class="post-desc">
                                                    <h6><a href="#">Right Sidebar Portfolio</a></h6>
                                                    <p><a href="#">12 Comments</a></p>
                                                </div>
                                            </div>
                                            <div class="post-holder"><a href="#" class="post-link"></a>
                                                <div class="post-avatar">
                                                    <a href="#"><img src="{{asset('template/img/thumb2.jpg')}}" alt="image description"></a>
                                                </div>
                                                <div class="post-desc">
                                                    <h6><a href="#">Metro Style Portfolio</a></h6>
                                                    <p><a href="#">12 Comments</a></p>
                                                </div>
                                            </div>
                                            <div class="post-holder"><a href="#" class="post-link"></a>
                                                <div class="post-avatar">
                                                    <a href="#"><img src="{{asset('template/img/thumb3.jpg')}}" alt="image description"></a>
                                                </div>
                                                <div class="post-desc">
                                                    <h6><a href="#">Clean Sidebar Styles</a></h6>
                                                    <p><a href="#">12 Comments</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="twitter-feed mt-5">
                                            <h4>TWITTER FEED</h4>
                                            <div class="tweet-holder"><a href="#" class="post-link"></a>
                                                <div class="twit-ico"><i class="icon-twitter"></i></div>
                                                <div class="twit-desc">
                                                    <h6><a href="#">Roxine Templates</a></h6>
                                                    <p>7 Hours Ago</p>
                                                </div>
                                            </div>
                                            <div class="tweet-holder"><a href="#" class="post-link"></a>
                                                <div class="twit-ico"><i class="icon-twitter"></i></div>
                                                <div class="twit-desc">
                                                    <h6><a href="#">Roxine Templates</a></h6>
                                                    <p>7 Hours Ago</p>
                                                </div>
                                            </div>
                                            <div class="tweet-holder"><a href="#" class="post-link"></a>
                                                <div class="twit-ico"><i class="icon-twitter"></i></div>
                                                <div class="twit-desc">
                                                    <h6><a href="#">Roxine Templates</a></h6>
                                                    <p>7 Hours Ago</p>
                                                </div>
                                            </div>
                                            <div class="tweet-holder"><a href="#" class="post-link"></a>
                                                <div class="twit-ico"><i class="icon-twitter"></i></div>
                                                <div class="twit-desc">
                                                    <h6><a href="#">Roxine Templates</a></h6>
                                                    <p>7 Hours Ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tag-block mt-5">
                                            <h4>TAG CLOUD</h4>
                                            <ul>
                                                <li>
                                                    <a href="#">Cloud</a>
                                                </li>
                                                <li>
                                                    <a href="#">Bootstrap</a>
                                                </li>
                                                <li>
                                                    <a href="#">Web</a>
                                                </li>
                                                <li>
                                                    <a href="#">Web</a>
                                                </li>
                                                <li>
                                                    <a href="#">Cloud</a>
                                                </li>
                                                <li>
                                                    <a href="#">UI/UX</a>
                                                </li>
                                                <li>
                                                    <a href="#">Cloud</a>
                                                </li>
                                                <li>
                                                    <a href="#">Bootstrap</a>
                                                </li>
                                                <li>
                                                    <a href="#">Web</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!--/main content wrapper -->

@endsection
