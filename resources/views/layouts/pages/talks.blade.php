@extends('layouts.master')

@section('main-content')
    <header class="header-page" id="talks">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-header">
                        <h1 class="heading">Techtalk</h1>
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
                <div class="col-md-8">
                    <div class="list-event">
                        <figure class="banner-event">
                            <img src="{{ URL::to('images/event.jpg') }}" alt="">
                        </figure>
                        <div class="info-event">
                            <h3>#Techtalk Front-End Technology</h3>
                            <label>MON, 14 Januari 2017</label>
                            <hr>
                            <span><strong>Jogja Digital Valley</strong> Jalan Kartini No. 7, Yogyakarta 55223</span>
                        </div>
                    </div>
                     <div class="list-event">
                        <figure class="banner-event">
                            <img src="{{ URL::to('images/event.jpg') }}" alt="">
                        </figure>
                        <div class="info-event">
                            <h3>#Techtalk Front-End Technology</h3>
                            <label>MON, 14 Januari 2017</label>
                            <hr>
                            <span><strong>Jogja Digital Valley</strong> Jalan Kartini No. 7, Yogyakarta 55223</span>
                        </div>
                    </div>
                     <div class="list-event">
                        <figure class="banner-event">
                            <img src="{{ URL::to('images/event.jpg') }}" alt="">
                        </figure>
                        <div class="info-event">
                            <h3>#Techtalk Front-End Technology</h3>
                            <label>MON, 14 Januari 2017</label>
                            <hr>
                            <span><strong>Jogja Digital Valley</strong> Jalan Kartini No. 7, Yogyakarta 55223</span>
                        </div>
                    </div>
                     <div class="list-event">
                        <figure class="banner-event">
                            <img src="{{ URL::to('images/event.jpg') }}" alt="">
                        </figure>
                        <div class="info-event">
                            <h3>#Techtalk Front-End Technology</h3>
                            <label>MON, 14 Januari 2017</label>
                            <hr>
                            <span><strong>Jogja Digital Valley</strong> Jalan Kartini No. 7, Yogyakarta 55223</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 offset-md-1">
                    <h2>Request a Qiscus Expert</h2>
                    <span>To request a speaker for your next event, please contact :</span>
                    <a href="" class="link">contact@qiscus.com</a>
                    
                    <div class="list-speaker">
                        <div class="avatar">
                            <img src="{{ URL::to('images/John_Doe.jpg') }}" alt="">
                        </div>
                        <div class="content-speaker">
                            <h4>Rijarul Fikri</h4>
                            <span>Front End Engineer</span>
                        </div>
                    </div>
                    <div class="list-speaker">
                        <div class="avatar">
                            <img src="{{ URL::to('images/John_Doe.jpg') }}" alt="">
                        </div>
                        <div class="content-speaker">
                            <h4>Rijarul Fikri</h4>
                            <span>Front End Engineer</span>
                        </div>
                    </div>
                     <div class="list-speaker">
                        <div class="avatar">
                            <img src="{{ URL::to('images/John_Doe.jpg') }}" alt="">
                        </div>
                        <div class="content-speaker">
                            <h4>Rijarul Fikri</h4>
                            <span>Front End Engineer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop