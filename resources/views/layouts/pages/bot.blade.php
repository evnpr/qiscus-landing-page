@extends('layouts.master')

@section('main-content')
    <header class="header-page" id="bot">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-header">
                        <h1 class="heading">AUTOMATE PROCESSESWITH CHATBOT</h1>
                        <span class="divider"></span>
                        <p>
                            Making your services instantly available for your customers.
                        </p>
                        <p>
                        ChatBot is an application which performs an automated tasks by interacting with users via text messaging. From users perspective, it is almost like talking to a real person! Some uses of ChatBots includes:
                            
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
                        <h3 class="sub-heading">CUSTOMER SERVICE</h3>
                        <div class="divider w-s"></div>
                        <p class="paragraph">
                            ChatBots are able to help your officers gather information/feedback from users automatically without the need for a real-person to do the job. With this, your officers’ jobs are made easier and they are able to focus on fast follow-ups.
                        </p>
                        <h3>Increase customer satisfaction.</h3>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ URL::to('images/icon-large.png') }}" alt="">  
                        <h3 class="sub-heading">PUSH UPDATES / INFO</h3>
                        <div class="divider w-s"></div>
                        <p class="paragraph">
                           ChatBots are useful in sending your latest news, updates, information and etc to all your users/members. Users are able to also request for information and the ChatBots will get to work to meet those requests.
                        </p>
                        <h3>
                            Increase access to important data.
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ URL::to('images/icon-large.png') }}" alt="">  
                        <h3 class="sub-heading">APPOINTMENTMANAGEMENT</h3>
                        <div class="divider w-s"></div>
                        <p class="paragraph">
                            ChatBots are also useful in facilitating bookings, meetings and other seemingly simple tasks but may be overwhelming if it comes in volume. This frees up your admin staff from such non-core tasks.
                        </p>
                        <h3>Increase productivity</h3>
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
                                    <h3 class="sub-heading">GIVE YOUR BOT A NAME</h3>
                                    <p>
                                        Customize your own ChatBot. We will work with you to create an intelligent bot that meets the needs of your customers.
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
                                    <h3 class="sub-heading">DEPLOY THE BOT TO CHAT</h3>
                                    <p>
                                       We will integrate with our chat system for FREE or you can also opt to integrate with other chat platforms such as FB Messenger etc
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
                                    <h3 class="sub-heading">INTEGRATEWITH OTHER APPLICATIONS</h3>
                                    <p>
                                       You can opt to integrate your ChatBots with other external or internal applications, such as your CRM etc.

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
                                    <h3 class="sub-heading">WEB CHAT FOR ADMIN</h3>
                                    <p>
                                        Admin will be able to see the conversations LIVE between your ChatBots and your customers and interject, if necessary.

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
                           BTry out Qiscus ChatBot demo on FB Messenger and experience it yourself - For FREE.
                        </p>
                        <a href="{{ URL::to('') }}" class="btn-white btn-large"> REQUEST ACCESS <i class="zmdi zmdi-arrow-right"></i> </a> 
                        <a href="{{ URL::to('') }}" class="btn-white-o btn-large"> CONTACT SALES <i class="zmdi zmdi-arrow-right"></i> </a> 
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop