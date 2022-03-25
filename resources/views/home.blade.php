<x-layout>
    @extends('partial.nav')

    @section('nav')
        <header id="navbar-spy" class="header header-1 header-transparent header-fixed ">

            <nav id="primary-menu" class="navbar navbar-fixed-top col-md-12">
                @foreach ($navs as $nav)
                    @include('partial.nav', ['nav' => $nav])
                @endforeach
            </nav>
            {{-- <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="logo" href="index-2.html">
                            <img class="logo-dark" src="assets/images/logo/logo-dark.png" alt="appy Logo">
                            <img class="logo-light" src="assets/images/logo/logo-light.png" alt="appy Logo">
                        </a>
                    </div>
                    <!--/.nav-collapse -->
                </div> --}}

        </header>
    @endsection
    <!-- Slider #1
    === === === === === === === === === === === === === === -->
    {{-- <section id="slider" class="section slider">
        <div class="slide--item bg-overlay bg-overlay-dark">
            <div class="bg-section">
                <img src="assets/images/slider/slide-1.jpg" alt="bg">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center wow fadeInUp" data-wow-duration="1s">
                        <div class="slide--headline">Welcome to {{ setting('site.title') }}</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 text-center wow fadeInUp"
                        data-wow-duration="1s">
                        <div class="slide--bio">This should be used to tell a story and let your users know a
                            little more about your service.</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 text-center wow fadeInUp"
                        data-wow-duration="1s">

                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- .slide-item end -->
    </section> --}}
    <!-- #slider end -->


    {{-- About
    === === === === === === === === === === === === === === --> --}}
    <section id="home" class="section about pb-0">
        <div class="container-fluid">
            <div class="row">
                <!-- .col-md-6 end -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1">
                    <div class="heading heading-1 mt-70 wow fadeInUp" data-wow-duration="1s">
                        <h2 class="heading--title">{{ setting('site.title') }}</h2>
                        <div class="heading--divider"></div>
                    </div>
                    <div class="about-content wow fadeInUp" data-wow-duration="1s">
                        {{ setting('site.description') }}

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-content wow">
                    <img class="img-responsive center-block" src="assets/images/background/images.jpg" alt="ipad" />
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #feature2 end -->
    <!-- Feature #2
    === === === === === === === === === === === === === === -->
    {{-- About
    === === === === === === === === === === === === === === --> --}}
    <section id="about" class="section about pb-0">
        @foreach ($abouts as $about)
            @include('partial.about', ['about' => $about])
        @endforeach
        <!-- .container end -->
    </section>
    <!-- #feature2 end -->
    <!-- Banner
    === === === === === === === === === === === === === === -->
    <section id="contact" class="section cta pt-0 pb-0 ">
        @foreach ($contacts as $contact)
            @include('partial.contact', ['contact' => $contact])
        @endforeach
        <!-- .container end -->
    </section>
    <!-- #banner2 end -->

    <!-- Banner #3
    === === === === === === === === === === === === === === -->
    <section id="trust" class="bg-white pt-0 pb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 pr-4 pl-4">
                    <div class=" col-content  bg-overlay">
                        {{-- <div class="bg-section"> --}}
                        <img src="assets/images/background/images.jpg" alt="Background" />
                        {{-- </div> --}}
                    </div>
                </div>
                <!-- .col-md-6 end-->
                <div class="col-xs-12 col-sm-12 col-md-7 col-content pl-100">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading heading-1 wow fadeInUp" data-wow-duration="1s">
                                <h2 class="heading--title">Why Us?</h2>
                                <p class="heading--desc">Lorem ipsum dolor amet, consectetur adipisice elite sede
                                    eiusmod tempor incidide labeore dolore magna.</p>
                            </div>
                        </div>
                        <!-- .col-md-6 end -->
                    </div>
                    <div class="row mb-50">
                        @foreach ($trusts as $trust)
                            @include('partial.trust', ['trust' => $trust])
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>

    {{-- <section id="clients" class="clients clients-carousel bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="carousel carousel-dots" data-slide="5" data-slide-res="2" data-autoplay="false"
                        data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">
                        <!-- Client #1 -->
                        <div class="client">
                            <img class="center-block" src="assets/images/clients/1.jpg" alt="client">
                        </div>
    
                        <!-- Client #2 -->
                        <div class="client">
                            <img class="center-block" src="assets/images/clients/2.jpg" alt="client">
                        </div>
    
                        <!-- Client #3 -->
                        <div class="client">
                            <img class="center-block" src="assets/images/clients/3.jpg" alt="client">
                        </div>
    
                        <!-- Client #4 -->
                        <div class="client">
                            <img class="center-block" src="assets/images/clients/4.jpg" alt="client">
                        </div>
    
                        <!-- Client #5 -->
                        <div class="client">
                            <img class="center-block" src="assets/images/clients/5.jpg" alt="client">
                        </div>
                        <!-- Client #3 -->
                        <div class="client">
                            <img class="center-block" src="assets/images/clients/3.jpg" alt="client">
                        </div>
    
                        <!-- Client #4 -->
                        <div class="client">
                            <img class="center-block" src="assets/images/clients/4.jpg" alt="client">
                        </div>
                    </div>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section> --}}
    <!-- #clients end -->


    <!-- #feature2 end -->
    <!-- Team #1
    === === === === === === === === === === === === === === -->
    <section id="gallery" class="team team-1">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-1 text--center wow fadeInUp" data-wow-duration="1s">
                        <h2 class="heading--title">Gallery</h2>
                        <p class="heading--desc">Lorem ipsum dolor amet, consectetur adipisice elitesede eiusmod
                            tempor incidide labeore dolore magna.</p>
                        {{-- <div class="heading--divider mb-80 heading--center"></div> --}}
                    </div>
                </div>
                <!-- .col-md-6 end -->
            </div>
            <div class="row">
                @foreach ($pics as $pic)
                    @include('partial.pic', ['pic' => $pic])
                @endforeach
            </div>
            <div class="row card" style="width: 18rem">
                <a href="album">
                    <img src="assets\images\team\img.jpg" alt="card image cap" />
                    <h6 class="text-center">Album</h6>
                </a>
            </div>
        </div>

    </section>
</x-layout>
