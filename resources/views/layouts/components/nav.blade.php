<nav class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ URL::to('/') }}" class="logo">
                    <img src="{{ URL::to('images/logo.png') }}" alt="">
                </a>
                <ul class="menu">
                    <li>
                        <a href="{{ URL::to('/') }}" {!! empty(Request::segment(1))  ? 'class="active"' : '' !!}>
                            Home
                        </a>
                    </li>
                    <li class="tree-menu">
                        <a href="{{ URL::to('/solutions') }}" {!! Request::segment(1) == "solutions"  ? 'class="active"' : '' !!}>
                            Solutions
                            <i class="zmdi zmdi-chevron-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ URL::to('/solutions/accelerator') }}" {!! Request::segment(2) == "accelerator"  ? 'class="active"' : '' !!}>
                                    Accelerator Package
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/solutions/sdk') }}" {!! Request::segment(2) == "sdk"  ? 'class="active"' : '' !!}>
                                    SDK for Chat
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/solutions/bot') }}" {!! Request::segment(2) == "bot"  ? 'class="active"' : '' !!}>
                                    Chat Bot
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/soon') }}">Consultation</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ URL::to('/pricing') }}" {!! Request::segment(1) == "pricing"  ? 'class="active"' : '' !!}>
                            Pricing
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/programs') }}" {!! Request::segment(1) == "programs"  ? 'class="active"' : '' !!}>
                            Partner Program
                        </a>
                    </li>
                    <li class="tree-menu">
                        <a href="{{ URL::to('/resources') }}" {!! Request::segment(1) == "resources"  ? 'class="active"' : '' !!}>
                            Resources
                            <i class="zmdi zmdi-chevron-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ URL::to('/resources/talks') }}">Talks</a></li>
                            <li><a href="http://blog.qisc.us/" target="_blank">Blog</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ URL::to('/sales') }}" class="btn-primary sales">
                            Contact Sales
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>