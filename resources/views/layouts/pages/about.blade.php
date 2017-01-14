@extends('layouts.master')

@section('main-content')
    <header class="header-page" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-header">
                        <h1 class="heading">WE’RE VIRTUALIZING PHYSICAL SERVICES.</h1>
                        <span class="divider"></span>
                        <p>
                            Qiscus started as a digital agency in Singapore, where there is a strong push towards automation and leveraging on emerging technologies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-profile">
                        <p class="paragraph">
                            Qiscus started as a digital agency in Singapore, where there is a strong push towards automation and leveraging on emerging technologies. We developed a huge range of enterprise systems on multiple platforms for companies in various industries.
                        </p>
                        <p class="paragraph">
                            With the breadth of experience we had, we saw the need to help businesses expand their business potential in the virtual world via web and mobile applications, particularly for service-based businesses.
                        </p>
                        <p class="paragraph">
                            And this is made possible with the advent of the leading real-time communication standard - WebRTC.
                        </p>                    
                    </div>
                </div>
                <div class="clearfix"></div>
                {{-- rct box --}}
                <div class="box-rtc">
                    <div class="col-md-4">
                        <img src="https://webrtc.org/assets/images/webrtc-logo-vert-retro-255x305.png" alt="" width="175px">
                    </div>
                    <div class="col-md-8">
                        <h2 class="heading">
                            WebRTC has been built into over a billion devices throughout the world.
                        </h2>
                        <div class="divider"></div>
                        <p class="paragraph">
                            WebRTC is a standard that enables plugin-free, Real Time Communications (RTC) in the browser (audio, video and voice). WebRTC offers significantly better video quality than predecessor technologies, up to 6x faster connection times, reduced audio/video latency and complete customizability.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-page section-team">
        <div class="container">
            <div class="row">
                <div class="col-md-9 offset-md-1">
                    <div class="section-delta">
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, aut quos explicabo ipsum molestias ratione. Quod dignissimos doloremque et odio eius nemo, obcaecati laboriosam voluptate. Nostrum provident, necessitatibus quasi maxime.
                        </p>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptate, quod repellat fugiat sequi corrupti assumenda dolorem.
                        </p>
                        <div class="box-delta">
                            <div class="card-teamate">
                                <figure class="avatar-team">
                                    <img src="{{ URL::to('images/John_Doe.jpg') }}" alt="" class="img-cover">
                                </figure>
                                <h3>Delta</h3>
                                <span>CEO &amp; Founder Qiscus</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="celarix"></div>

            <div class="boxed-teamate">
                <div class="col-md-12 on-center">
                    <div class="row">
                        <h2 class="heading">Our Heads &amp; Associate Partners</h2>
                        <span class="divider"></span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="list-team">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card-teamate">
                                <figure class="avatar-team">
                                    <img src="{{ URL::to('images/John_Doe.jpg') }}" alt="" class="img-cover">
                                </figure>
                                <h3>Delta</h3>
                                <span>CEO &amp; Founder Qiscus</span>
                            </div>  
                        </div> 
                        <div class="col-md-3">
                            <div class="card-teamate">
                                <figure class="avatar-team">
                                    <img src="{{ URL::to('images/John_Doe.jpg') }}" alt="" class="img-cover">
                                </figure>
                                <h3>Delta</h3>
                                <span>CEO &amp; Founder Qiscus</span>
                            </div>  
                        </div> 
                        <div class="col-md-3">
                            <div class="card-teamate">
                                <figure class="avatar-team">
                                    <img src="{{ URL::to('images/John_Doe.jpg') }}" alt="" class="img-cover">
                                </figure>
                                <h3>Delta</h3>
                                <span>CEO &amp; Founder Qiscus</span>
                            </div>  
                        </div> 
                        <div class="col-md-3">
                            <div class="card-teamate">
                                <figure class="avatar-team">
                                    <img src="{{ URL::to('images/John_Doe.jpg') }}" alt="" class="img-cover">
                                </figure>
                                <h3>Delta</h3>
                                <span>CEO &amp; Founder Qiscus</span>
                            </div>  
                        </div> 
                        <div class="col-md-3">
                            <div class="card-teamate">
                                <figure class="avatar-team">
                                    <img src="{{ URL::to('images/John_Doe.jpg') }}" alt="" class="img-cover">
                                </figure>
                                <h3>Delta</h3>
                                <span>CEO &amp; Founder Qiscus</span>
                            </div>  
                        </div>
                        <div class="col-md-3">
                            <div class="card-teamate">
                                <figure class="avatar-team">
                                    <img src="{{ URL::to('images/John_Doe.jpg') }}" alt="" class="img-cover">
                                </figure>
                                <h3>Delta</h3>
                                <span>CEO &amp; Founder Qiscus</span>
                            </div>  
                        </div> 
                        <div class="col-md-3">
                            <div class="card-teamate">
                                <figure class="avatar-team">
                                    <img src="{{ URL::to('images/John_Doe.jpg') }}" alt="" class="img-cover">
                                </figure>
                                <h3>Delta</h3>
                                <span>CEO &amp; Founder Qiscus</span>
                            </div>  
                        </div> 
                        <div class="col-md-3">
                            <div class="card-teamate">
                                <figure class="avatar-team">
                                    <img src="{{ URL::to('images/John_Doe.jpg') }}" alt="" class="img-cover">
                                </figure>
                                <h3>Delta</h3>
                                <span>CEO &amp; Founder Qiscus</span>
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
                        <h2 class="heading">Join Us</h2>
                        <span class="divider"></span>
                        <p class="paragraph">
                            We are passionate about enriching lives using real-time communication technology. We are a Singapore-based company with a global vision of virtualising services and with work culture of a startup. Cross-border collaborations is a norm in our everyday work and we hope to form a team of passionate professionals with a global mindset.
                        </p>
                        <h3>
                            Sounds good to you? <br>Browse our available positions and apply today!
                        </h3>
                        <a href="{{ URL::to('') }}" class="btn-large btn-white"> JOIN US </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop