@extends('layouts.landing')

@section('content')

	<div id="scroll-page">
            <div id="s1" class="section fullscreen" style="background-color: #ff525e;">
                <div class="container">
                    <div class="home-flex">
                        <ul class="slides">
                            <li>
                                <div class="item-inner">
                                    <div>
                                        <h1>Welcome to the Ismar's and Harun's website</h1>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item-inner">
                                    <div>
                                        <h1>We offer best IT Solutions for corporatives</h1>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="s2" class="section" style="background-image: url(img/slider/blurry-2.jpg)">
                <section id="team" class="team">
                    <div class="container">
                        <div class="row">
                            <header class="col-lg-12 section-head text-center item_top">
                                <h2>products developer team</h2>
                            </header>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-2 col-lg-8">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center item_left">
                                    <div class="team-mate">
                                        <figure class="member-thumb">
                                            <img src="img/team/member.jpg" alt="team member" class="img-responsive">
                                            <figcaption class="mask">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class="about">
                                            <h4>Harun Ćemalović</h4>
                                            <span>Sales Manager</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center item_bottom">
                                    <div class="team-mate">
                                        <figure class="member-thumb">
                                            <img src="img/team/member2.jpg" alt="team member" class="img-responsive">
                                            <figcaption class="mask">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class="about">
                                            <h4>Ismar Hadžić</h4>
                                            <span>Product Manager</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center item_bottom">
                                    <div class="team-mate">
                                        <figure class="member-thumb">
                                            <img src="img/team/member.jpg" alt="team member" class="img-responsive">
                                            <figcaption class="mask">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class="about">
                                            <h4>Neko Pozeljan</h4>
                                            <span>Marketing Director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="s3" class="section" style="background-image: url(img/slider/sea.jpg)">
                <section class="text-parallax parallax">
                    <div class="overlay"></div>
                    <div class="container">
                        <h1><strong>This is a</strong> dedicated solution <strong>and</strong> creative  <strong> interface</strong></h1>
                    </div>
                </section>
            </div>
            <div id="s4" class="section" style="background-image: url(img/slider/blurr-bg2.jpg)">
                <section>
                    <div class="container">
                        <div class="content-box text-center">
                            <h1><strong>strategy</strong> <br>and passion <br>of <strong>creativity</strong></h1>
                            <p>This is the only solution <br>you need for your business <br>now for free first 3 months</p>
                            <a href="#" class="btn btn-border">order now!</a>
                        </div>
                    </div>
                </section>
            </div>
            
            <div id="s8" class="section" style="background-image: url(img/slider/blurr-bg2.jpg);">
                <section id="contact" class="contact parallax">
                    <div class="overlay">
                        <div class="container">
                            <div class="row">
                                <header class="col-lg-offset-1 col-lg-10 section-head text-center">
                                    <h2>Contact Us</h2>
                                </header>
                                
                                <div class="col-sm-offset-1 col-sm-10 col-lg-8 col-lg-offset-2">
                                    <form action="{{route('contactus')}}" method="post" id="contact-form" class="row contact-form">
                                        <div class="col-md-6">
                                            <input type="text" name="fname" placeholder="First Name" required class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="lname" placeholder="Last Name" required class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="email" placeholder="Email" required class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="subject" placeholder="Subject" required class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="message" class="form-control" required placeholder="Message"></textarea>
                                            <input type="submit" value="Send Message" class="message-sub pull-right btn btn-border">
                                        </div>
                                    </form>
                                    <div id="success">
                                        <p>Your message was sent succssfully! I will be in touch as soon as I can.</p>
                                    </div>
                                    <div id="error">
                                         <p>Something went wrong, try refreshing and submitting the form again.</p>
                                    </div> 
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

@endsection