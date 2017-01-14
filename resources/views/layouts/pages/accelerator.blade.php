@extends('layouts.master')

@section('main-content')
    <header class="header-page" id="accelerator">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-header">
                        <h1 class="heading">ACCELERATOR PACKAGE</h1>
                        <span class="divider"></span>
                        <p>
                            Providing you with everything you need to virtualize your business without having to start from scratch - including technical maintenance.
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
                        <h3 class="sub-heading">INCREASE ACCESSIBILITY TO YOUR CONSULTANTS</h3>
                        <div class="divider w-s"></div>
                        <p class="paragraph">
                            With this solution, users from anywhere are able to browse the profile of your credible consultants and seek consultations without the need to spend hours travelling for physical meetings.

                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ URL::to('images/icon-large.png') }}" alt="">  
                        <h3 class="sub-heading">INCREASE ENGAGEMENT THROUGH EVENTS</h3>
                        <div class="divider w-s"></div>
                        <p class="paragraph">
                            You can organize online meetings/events (eg webinars) or even group engagements via calls/chats. Registrations and payments are all done hassle-free via your application.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ URL::to('images/icon-large.png') }}" alt="">  
                        <h3 class="sub-heading">INCREASE VIRTUAL NETWORKING / INTERACTIONS</h3>
                        <div class="divider w-s"></div>
                        <p class="paragraph">
                            With this solution, you can have control over the discussions and interactions that happen between the members of your organization - You can be the ’overall admin’ of the different chat groups.

                        </p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="package">
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
                                        You don’t have to build your app from scratch. We have User-Interfaces (UI) ready to be imprinted with your logo/brand.
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
                                    <h3 class="sub-heading">ALL-IN: VOICE, VIDEO,WEBINAR,MESSAGING etc</h3>
                                    <p>
                                       Your app will have in-built multi-channel communication capabilities which are built using the latest WebRTC.
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
                                    <h3 class="sub-heading">IN-BUILT CASHLESS CHARGINGMECHANISM</h3>
                                    <p>
                                       Collecting payments is now a breeze. Your app will be equipped with a secure payment gateway enabling multiple online/offline payment methods.
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
                                    <h3 class="sub-heading">MULTI-PLATFORM APPLICATION</h3>
                                    <p>
                                        Your app comes with Android, iOS and Web-Applications. Thus no one should be left out from getting the value that your organization offers.
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
                                    <h3 class="sub-heading">ADMINISTRATION DASHBOARD</h3>
                                    <p>
                                        You are able to administer/manage the users, track transactions, observe usage patterns/reports and track other key activities happening on the app.

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
                                       It’s a hassle-free all-inclusive package. Let us handle all the technical aspects of running an app. All you have to focus on is expanding your business potential! and many others.

                                    </p>
                                </div>    
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
                        <h2 class="heading">MONTH IS ALL YOU NEED!</h2>
                        <span class="divider"></span>
                        <p class="paragraph">
                           BEFORE YOU CAN START HIT THE ROADS WITH ALL THE ABOVE.
                        </p>
                        <a href="{{ URL::to('') }}" class="btn-white btn-large"> CONTACT SALES <i class="zmdi zmdi-arrow-right"></i> </a> 
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop