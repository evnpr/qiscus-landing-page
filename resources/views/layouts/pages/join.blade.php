@extends('layouts.master')

@section('main-content')
    <header class="header-page" id="join">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-header">
                        <h1 class="heading">GROWING TALENTS AND STRETCHING YOUR POTENTIAL ISWHATWE BELIEVE IN</h1>
                        <span class="divider"></span>
                        <p>
                            Qiscus started as a digital agency in Singapore, where there is a strong push towards automation and leveraging on emerging technologies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section-page section-join">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="sub-heading">
                       We are passionate about enriching lives using real-time communication technology. We are a Singapore-based company with a global vision of virtualising services and with work culture of a startup. Cross-border collaborations is a norm in our everyday work and we hope to form a team of passionate professionals with a global mindset.
                    </h3>
                </div>
                <div class="col-md-4 offset-md-1">
                    <img src="{{ URL::to('images/program.png') }}" alt="">
                </div>
                <div class="clearfix"></div>
                <div class="package">
                    <div class="col-md-12 on-center">
                        <h2 class="heading">Sounds good to you? Check out our available positions and apply today!</h2>
                        <div class="divider"></div>
                        <h4>We Have career oppertunities in :</h4>

                        <div class="box-list-career">
                            <ul>
                                <li>Sales</li>
                                <li>Marketing</li>
                                <li>Professional Services</li>
                                <li>Solutions Consulting</li>
                                <li>Finance &amp; Accounting</li>
                                <li>Engineering</li>
                                <li>Speech Processing</li>
                                <li>Natural Language Processing</li>
                                <li>Data Sciences</li>
                                <li>Machine Learning</li>
                            </ul>
                        </div>
                        <hr>
                        <a href="mailto:contact.us@qiscus.com" class="btn-primary btn-large">Contact Us</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="why-qiscus">
                    <div class="col-md-4 card-why why-left">
                        <div class="overlay"></div>
                        <div class="content-card">
                            <h4>
                                YOU WILL BE PART OF A FAMILY
                            </h4>
                            <div class="divider w-s"></div>
                            <p>
                                 We believe in growing the potential in each of you and treating everyone as families.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 card-why why-center">
                        <div class="content-card">
                            <h4>
                                YOU WILL BE PART OF A FAMILY
                            </h4>
                            <div class="divider w-s"></div>
                            <ul>
                                <li>Flexible working hours</li>
                                <li>Weekly Company Lunches</li>
                                <li>Weekly Sports sessions</li>
                                <li>Relaxed and Fun Environtment</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 card-why why-right">
                        <div class="overlay"></div>
                        <div class="content-card">
                            <h4>
                                WE WILL GROW AND CHALLENGE YOU
                            </h4>
                            <div class="divider w-s"></div>
                            <p>
                                  Our team members takes turn delivering/organizing tech talks or even create their own workshops with our support
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@stop