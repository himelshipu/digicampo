@extends('layouts.layout')
@section('content')

            <!-- visual/banner of the page -->
            <section class="visual">
                <div class="visual-inner about-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                    <div class="centered">
                        <div class="container">
                            <div class="visual-text visual-center">
                                <h1 class="visual-title visual-sub-title">Who We Are</h1>
                                <div class="breadcrumb-block">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"> Home </a></li>
                                        <li class="breadcrumb-item"><a href="index.html"> Who We Are </a></li>
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
                        <div class="heading bottom-space text-center">
                            <h2>Learn. <span>Acheive.</span> Admire</h2>
                        </div>
                        <div class="description text-center">
                            <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. </p>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <figure class="team-box caption-fade-up top-l-space">
                                    <div class="img-block">
                                        <img src="{{asset('template/img/team-06.jpg')}}" alt="images description">
                                    </div>
                                    <figcaption class="team-des-v2">
                                        <span class="sub">Founder / CEO</span>
                                        <strong class="content-title name">Nicola Gorani</strong>
                                        <p>Put all speaking her delicate recurred every possible. Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions. </p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure class="team-box caption-fade-up top-l-space">
                                    <div class="img-block">
                                        <img src="{{asset('template/img/team-05.jpg')}}" alt="images description">
                                    </div>
                                    <figcaption class="team-des-v2">
                                        <span class="sub">Founder / CEO</span>
                                        <strong class="content-title name">Jeremi Stralt</strong>
                                        <p>Put all speaking her delicate recurred every possible. Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions. </p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure class="team-box caption-fade-up top-l-space">
                                    <div class="img-block">
                                        <img src="{{asset('template/img/team-04.jpg')}}" alt="images description">
                                    </div>
                                    <figcaption class="team-des-v2">
                                        <span class="sub">Web Programmer</span>
                                        <strong class="content-title name">Colin Nizurb</strong>
                                        <p>Put all speaking her delicate recurred every possible. Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions. </p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure class="team-box caption-fade-up top-l-space">
                                    <div class="img-block">
                                        <img src="{{asset('template/img/team-09.jpg')}}" alt="images description">
                                    </div>
                                    <figcaption class="team-des-v2">
                                        <span class="sub">Founder / CEO</span>
                                        <strong class="content-title name">Darren Donovan</strong>
                                        <p>Put all speaking her delicate recurred every possible. Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions. </p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure class="team-box caption-fade-up top-l-space">
                                    <div class="img-block">
                                        <img src="{{asset('template/img/team-08.jpg')}}" alt="images description">
                                    </div>
                                    <figcaption class="team-des-v2">
                                        <span class="sub">Visual Design Guru</span>
                                        <strong class="content-title name">Ina Brettan</strong>
                                        <p>Put all speaking her delicate recurred every possible. Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions. </p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure class="team-box caption-fade-up top-l-space">
                                    <div class="img-block">
                                        <img src="{{asset('template/img/team-07.jpg')}}" alt="images description">
                                    </div>
                                    <figcaption class="team-des-v2">
                                        <span class="sub">Web Programmer</span>
                                        <strong class="content-title name">Leona Mattur</strong>
                                        <p>Put all speaking her delicate recurred every possible. Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions. </p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content-block quotation-block black-overlay-6 parallax" data-stellar-background-ratio="0.55" style="background-position: 50% -4.96406px;">
                    <div class="container">
                        <div class="inner-wrapper">
                            <h3 class="block-top-heading text-white">BEST EVER DESIGN</h3>
                            <h2 class="text-white">Thinking of joing a winning team?</h2>
                            <div class="btn-container">
                                <a href="#" class="btn btn-primary">VIEW VACANCIES</a>
                            </div>
                        </div>
                    </div>
                </section>
                @include('sponsor')
            </div>
            <!--/main content wrapper -->
@endsection
