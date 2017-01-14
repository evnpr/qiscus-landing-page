@extends('layouts.master')

@section('main-content')
    @include('layouts.components.slider')
    <section class="section-content section-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12 on-center">
                    <h2 class="heading">Virtualize and Empower your business with any combination of:</h2>
                    <span class="divider"></span>
                    <div class="clearfix"></div>
                    <img src="{{ URL::to('images/ilustrasi.png') }}" alt="" class="ilustrasi">
                </div>

                <div class="col-md-5 offset-md-1">
                    <div class="list-features">
                        <div class="list-features__content">
                            <h3 class="sub-heading">ACCELERATOR PACKAGE</h3>
                           {{--  <span class="divider w-s"></span> --}}
                            <p>
                                All-inclusive package designed for you to have your own apps in just a month!
                            </p>
                            <a href="{{ URL::to('/solutions/accelerator') }}" class="btn-outline btn-small">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="list-features">
                        <div class="list-features__content">
                            <h3 class="sub-heading">SDK FOR CHAT</h3>
                           {{--  <span class="divider w-s"></span> --}}
                            <p>
                                Powering up your app with a chat feature is now made super simple!
                            </p>
                            <a href="{{ URL::to('/solutions/sdk') }}" class="btn-outline btn-small">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-5 offset-md-1">
                    <div class="list-features">
                        <div class="list-features__content">
                            <h3 class="sub-heading">CHAT BOT</h3>
                           {{--  <span class="divider w-s"></span> --}}
                            <p>
                                Making your services <em>instantly</em> available for your customers
                            </p>
                            <a href="{{ URL::to('/solutions/bot') }}" class="btn-outline btn-small">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="list-features">
                        <div class="list-features__content">
                            <h3 class="sub-heading">FREE CONSULTING</h3>
                           {{--  <span class="divider w-s"></span> --}}
                            <p>
                                We can help you figure how to virtualize your business. It’s FREE.
                            </p>
                            <a href="{{ URL::to('/soon') }}" class="btn-outline btn-small">Chat with Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-content section-spotlight">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="box-spotlight">
                        <h3 class="sub-heading">REVOLUTIONISING THE HEALTHCARE INDUSTRY</h3>
                        <div class="divider"></div>
                        <p>
                            We are now creating a huge impact in Indonesia and are getting good support even from President Jokowi himself. We are helping patients in real-time, thanks to qiscus’s chat, video and voice call. 
                        </p>
                        <div class="logo">
                            <img src="{{ URL::to('images/hd.png') }}" alt="">
                        </div>
                        <strong>Mr Doddy Lukito</strong>
                        <span>Chief Technology Office of HaloDoc, Indonesia’s Virtual Consultation App between Doctors and patients</span>
                        <a href="" class="see">
                            see how <i class="zmdi zmdi-arrow-right"></i>
                        </a>
                         
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box-spotlight">
                        <h3 class="sub-heading">BREAKING THE BOUNDARIES IN EDUCATION</h3>
                        <div class="divider"></div>
                        <p>
                           Teachers/students can now teach/learn anytime and anywhere, right from their mobile devices. I am based in Singapore while my students are in Indonesia, Japan and US.

                        </p>
                        <div class="logo">
                            <img src="{{ URL::to('images/i.png') }}" alt="">
                        </div>
                        <strong>Mdm Kamala</strong>
                        <span>a teacher of iRecite App, a Quran Learning Application in Singapore.</span>
                         <a href="" class="see">
                            see how <i class="zmdi zmdi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-content section-benefit">
        <div class="container">
            <div class="row">
                <div class="col-md-12 on-center">
                    <img src="{{ URL::to('images/sc.png') }}" alt="" class="sc">
                    <h2 class="heading">Customers see benefits across Industries</h2>
                    <span class="divider"></span>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4">
                    <div class="list-benefit">
                        <div class="list-benefit__icon">
                            <img src="{{ URL::to('images/benefit/icon.png') }}" alt="">    
                        </div>
                        <div class="list-benefit__content">
                            <h3 class="sub-heading">Education</h3>
                            <p>
                                Enable learning anytime from anywhere
                            </p>
                        </div>    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-benefit">
                        <div class="list-benefit__icon">
                            <img src="{{ URL::to('images/benefit/icon.png') }}" alt="">    
                        </div>
                        <div class="list-benefit__content">
                            <h3 class="sub-heading">Healthcare</h3>
                            <p>
                                Dispense medical advice timely.
                            </p>
                        </div>    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-benefit">
                        <div class="list-benefit__icon">
                            <img src="{{ URL::to('images/benefit/icon.png') }}" alt="">    
                        </div>
                        <div class="list-benefit__content">
                            <h3 class="sub-heading">Legal</h3>
                            <p>
                               Legal advices accessible at the fingertips.
                            </p>
                        </div>    
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="list-benefit">
                        <div class="list-benefit__icon">
                            <img src="{{ URL::to('images/benefit/icon.png') }}" alt="">    
                        </div>
                        <div class="list-benefit__content">
                            <h3 class="sub-heading">Non-Profit</h3>
                            <p>
                                Increase member engagement
                            </p>
                        </div>    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-benefit">
                        <div class="list-benefit__icon">
                            <img src="{{ URL::to('images/benefit/icon.png') }}" alt="">    
                        </div>
                        <div class="list-benefit__content">
                            <h3 class="sub-heading">Customer Service</h3>
                            <p>
                                Meet customers’ needs 24/7
                            </p>
                        </div>    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-benefit">
                        <div class="list-benefit__icon">
                            <img src="{{ URL::to('images/benefit/icon.png') }}" alt="">    
                        </div>
                        <div class="list-benefit__content">
                            <h3 class="sub-heading">Retail</h3>
                            <p>
                               Increase sales potential via Chat
                            </p>
                        </div>    
                    </div>
                </div>
                
                <div class="clearfix"></div>
                <div class="col-md-12 on-center">
                    <hr>
                    <a href="{{ URL::to('/contact') }}" class="btn-primary btn-large"> CONTACT SALES <i class="zmdi zmdi-arrow-right"></i></a>
                </div>
            </div>
        </div>
       
    </section>

@stop