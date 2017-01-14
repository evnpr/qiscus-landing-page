@extends('layouts.master')

@section('main-content')
    <header class="header-page" id="sdk">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-header">
                        <h1 class="heading">Chat SDK for your Mobile and Web Applications</h1>
                        <span class="divider"></span>
                        <p>
                            Qiscus provide everything you need to power up your app with chats. And it's now made simple.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section-page">
        <div class="container">
            <div class="row">
                <div class="pads">
                    <div class="col-md-4">
                        <img src="{{ URL::to('images/icon-large.png') }}" alt="">  
                        <h3 class="sub-heading">Try for Free</h3>
                        <div class="divider w-s"></div>
                        <p class="paragraph">
                            We are developers by blood. We understand the need to try and try because a perfect product can only happen a5er trying. 
                        </p>
                        <h3>So please try and try for FREE.</h3>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ URL::to('images/icon-large.png') }}" alt="">  
                        <h3 class="sub-heading">Super Simple</h3>
                        <div class="divider w-s"></div>
                        <p class="paragraph">
                            We made it really simple for you. A step-by-step guide, examples and even video tutorials are available to help you leverage on our SDK. 
                        </p>
                        <h3>Checkout our</h3>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ URL::to('images/icon-large.png') }}" alt="">  
                        <h3 class="sub-heading">Highly Customisable</h3>
                        <div class="divider w-s"></div>
                        <p class="paragraph">
                            After the handwork you put in, you will want to have your own special touch to your own chat. So yes, we have made this possible as well. 
                        </p>
                        <h3>Customise your own Chat NOW.</h3>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <ul class="link-sdk">
                        <li>
                            <a href="" class="btn-primary"><i class="zmdi zmdi-android on-left"></i>AndroidSDK</a>
                        </li>
                        <li>
                            <a href="" class="btn-primary"><i class="zmdi zmdi-apple on-left"></i>Ios SDK</a>
                        </li>
                        <li>
                            <a href="" class="btn-primary"><i class="zmdi zmdi-globe on-left"></i>Web SDK</a>
                        </li>
                        <li>
                            <a href="" class="btn-outline"><i class="zmdi zmdi-github on-left"></i>view on Github</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <h2 class="heading">What’s in the package</h2>
                    <span class="divider"></span>
                </div>
                <div class="clearfix"></div>
                <div class="box-4-columns">
                    <div class="col-md-4">
                        <div class="list-type-1">
                            <div class="list-type-1__icon">
                                <img src="{{ URL::to('images/benefit/icon.png') }}" alt="">    
                            </div>
                            <div class="list-type-1__content">
                                <h3 class="sub-heading">A COMPLETED UI, CUSTOMIZABLE TO YOUR BRAND</h3>
                                <p>
                                    The bubbles of the chat, colour theme, chat fonts etc are all customisable to your preference.
                                </p>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="list-type-1">
                            <div class="list-type-1__icon">
                                <img src="{{ URL::to('images/benefit/icon.png') }}" alt="">    
                            </div>
                            <div class="list-type-1__content">
                                <h3 class="sub-heading">COMPLETE FEATURE SETS</h3>
                                <p>
                                   From voice messaging to files attaching, you can empower your apps with the features of popular chat apps like whatsapp.

                                </p>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="list-type-1">
                            <div class="list-type-1__icon">
                                <img src="{{ URL::to('images/benefit/icon.png') }}" alt="">    
                            </div>
                            <div class="list-type-1__content">
                                <h3 class="sub-heading">PRIVATE OR GROUP CHATS</h3>
                                <p>
                                   One-to-One conversations and group discussions are all possible. Admin rights can be assigned as well.
                                </p>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="list-type-1">
                            <div class="list-type-1__icon">
                                <img src="{{ URL::to('images/benefit/icon.png') }}" alt="">    
                            </div>
                            <div class="list-type-1__content">
                                <h3 class="sub-heading">INTEGRATIONWITH OTHER APPLICATIONS</h3>
                                <p>
                                    You can opt to integrate our Chat SDK with other applications, like ChatBots etc to automate processes.
                                </p>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="list-type-1">
                            <div class="list-type-1__icon">
                                <img src="{{ URL::to('images/benefit/icon.png') }}" alt="">    
                            </div>
                            <div class="list-type-1__content">
                                <h3 class="sub-heading">ADMINISTRATION DASHBOARD</h3>
                                <p>
                                    You can opt to have dashboards link to your chat app to track and understand the usage patterns.
                                </p>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="list-type-1">
                            <div class="list-type-1__icon">
                                <img src="{{ URL::to('images/benefit/icon.png') }}" alt="">    
                            </div>
                            <div class="list-type-1__content">
                                <h3 class="sub-heading">SERVER/HOSTING &amp; MAINTENANCE</h3>
                                <p>
                                   Let us handle all the technical aspects of running an app. All you have to focus on is expanding your business potential!

                                </p>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <section class="section-info">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-sm on-center">
                        <h2 class="heading">REQUEST FOR FREE ACCESS</h2>
                        <span class="divider"></span>
                        <p class="paragraph">
                           Try out our Chat SDK and experience it yourself - For FREE.
                        </p>
                        <a href="{{ URL::to('') }}" class="btn-white btn-large"> REQUEST ACCESS <i class="zmdi zmdi-arrow-right"></i> </a>
                        <a href="{{ URL::to('') }}" class="btn-white-o btn-large">CONTACT SALES <i class="zmdi zmdi-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop