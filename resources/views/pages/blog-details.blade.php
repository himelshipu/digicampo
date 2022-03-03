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
                                <div class="blog-desc">
                                    <div class="blog-img">
                                        <div class="image-wrap">
                                            <figure class="">
                                                <img src="{{asset('template/img/img-37.jpg')}}" alt="images description">
                                            </figure>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <div class="blockquote-block blockquote-block-v2 pt-3 pb-3">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore...</p>
                                        </blockquote>
                                    </div>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <div class="blog-share mt-5">
                                        <ul class="social-network with-text">
                                            <li><strong>Share :</strong></li>
                                            <li><a href="#"><span class="icon-facebook"></span> Facebook</a></li>
                                            <li><a href="#"><span class="icon-twitter"></span> Twitter</a></li>
                                            <li><a href="#"><span class="icon-google-plus"></span> Google</a></li>
                                        </ul>
                                    </div>
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
