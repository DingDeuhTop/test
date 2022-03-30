<x-layout>
    <header id="navbar-spy" class="header header-1 header-transparent header-fixed">
        <nav id="primary-menu" class="navbar navbar-fixed-top ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="row">
                        <a class="logo" href="/">
                            <img class="logo-dark" src="assets/images/logo/img.png"
                                style="max-width: 60px; min-width: 20px;" alt="appy Logo">

                            <span style="padding-top: 40px; padding-left: 20px;">
                                <strong>{{ setting('site.title') }}</strong>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="collapse navbar-collapse pull-right " id="navbar-collapse-1">
                    @foreach ($navs as $nav)
                        @include('partial.nav', ['nav' => $nav])
                    @endforeach
                </div>
            </div>
            <!--/.nav-collapse -->
        </nav>

    </header>


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
                <div class="col-xs-12 col-sm-12 col-md-5 col-content wow fadeInUp" data-wow-duration="1s">
                    <img class="img-responsive center-block" src="assets/images/background/images.jpg" alt="ipad" />
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>

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
                <div class="col-xs-12 col-sm-12 col-md-5 pr-4 pl-4" style="padding-top: 130px">
                    <div class=" col-content  bg-overlay wow fadeInUp" data-wow-duration="1s">
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
                                <div class="heading--divider"></div>
                                <p class="heading--desc">Lorem ipsum dolor amet, consectetur
                                    adipisice elite sede
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


    <!-- #feature2 end -->
    <!-- Team #1
=== === === === === === === === === === === === === === -->
    <section id="gallery" class="team team-1">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 " style="padding-top: 60px; ">

                <div class="heading heading-1 text--center wow fadeInUp" data-wow-duration="1s">
                    <h2 class="heading--title">Gallery</h2>
                    <p class="heading--desc">Lorem ipsum dolor amet, consectetur adipisice
                        elitesede eiusmod
                        tempor incidide labeore dolore magna.</p>
                    {{-- <div class="heading--divider mb-80 heading--center"></div> --}}

                    <div class="row" style="padding-left: 40px">
                        {{-- @foreach ($pics as $pic)
                            @include('partial.pic', ['pic' => $pic])
                        @endforeach --}}
                        @for ($i = 0; $i <= 1; $i++)
                            @include('partial.pic', ['pic' => $pics[$i]])
                        @endfor
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
    </section>
</x-layout>
