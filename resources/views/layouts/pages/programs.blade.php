@extends('layouts.master')

@section('main-content')
    <header class="header-page" id="program">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-header">
                        <h1 class="heading">QISCUS PARTNER PROGRAM</h1>
                        <span class="divider"></span>
                        <p>
                            If you are a systems integrator, development agency, or solutions provider, we hope to help you leverage on our solutions to empower your clients’ applications with video, voice, messaging and/ or bots
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section-page">
        <div class="container">
            <div class="row">
                <div class="become-partner">
                    
                    <div class="col-md-4">
                        <img src="{{ URL::to('images/program.png') }}" alt="">
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <h3 class="sub-heading">
                            We want to form long-term relationships with you. As such, we are looking for partners who meet the following:
                        </h3> 
                        <div class="divider"></div>
                        <ul class="listing">
                            <li>
                                <i class="zmdi zmdi-check"></i>
                                <span>Have at least 1 client app which will require any of Qiscus’ solutions</span>
                            </li>
                            <li>
                                <i class="zmdi zmdi-check"></i>
                                <span>Have good track records in servicing clients.</span>
                            </li>
                            <li>
                                <i class="zmdi zmdi-check"></i>
                                <span>Based in South East Asia with the core development team in this region.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 on-center">
                    <h2 class="heading">
                        As your partner, these are our commitments to you:
                    </h2>
                    <div class="divider"></div>
                </div>
                <div class="box-4-columns on-center">
                    <div class="col-md-4">
                        <div class="list-type-1">
                            <div class="list-type-1__icon">
                                <img src="{{ URL::to('images/benefit/icon.png') }}" alt="">    
                            </div>
                            <div class="list-type-1__content">
                                <h3 class="sub-heading">Priority Technical Support</h3>
                                <p>
                                    Gain access to our roadmap, beta programs as well as access to test accounts.
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
                                <h3 class="sub-heading">Marketing Support</h3>
                                <p>
                                   You can leverage on our blog (guest posts) and our social media presence, as well as gain relevant sales leads from us.
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
                                <h3 class="sub-heading">Monetary Rewards</h3>
                                <p>
                                   When your clients use our solutions, we will give a cut of the revenue to you as well.
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
                         <div class="row">
                            <div class="col-md-6">
                                <h4>
                                   Interested becoming apartner ?
                                </h4>
                                <a href="{{ URL::to('') }}" class="btn-large btn-white"> Apply Here </a>
                            </div>
                             <div class="col-md-6">
                                <h4>
                                  Looking for a partner to help you build?
                                </h4>
                                <a href="{{ URL::to('') }}" class="btn-large btn-white-o"> See Oficial Partners </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>              
@stop