<x-layout>
    <header id="navbar-spy" class="header header-1 header-transparent header-fixed">
        <nav id="primary-menu" class="navbar navbar-fixed-top ">
            <div class="container">
                <div class="navbar-header">
                    {{-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> --}}

                    <div class="row">
                        <a class="logo" href="/">
                            <img class="logo-dark" src="assets/images/logo/img.png"
                                style="max-width: 60px; min-width: 20px;" alt="appy Logo">

                            <span style="padding-top: 40px; padding-left: 20px;">
                                <strong>Adelphos Car Rental</strong>
                            </span>
                        </a>
                    </div>
                </div>
                {{-- <div class="collapse navbar-collapse pull-right " id="navbar-collapse-1">
                    @foreach ($navs as $nav)
                        @include('partial.nav', ['nav' => $nav])
                    @endforeach
                </div> --}}
            </div>
            <!--/.nav-collapse -->
        </nav>

    </header>

    <body class="body-scroll">
        <section id="blog" class="blog blog-grid">
            <div class="container">
                <div class="row">
                    <p class="text-center"> <strong>Album</strong> </p>
                    <!-- Blog Entry #1 -->
                    @foreach ($albums as $album)
                        @include('partial.album', ['album' => $album])
                    @endforeach
                    <!-- .col-md-4 end -->
                </div><!-- .row end -->

            </div><!-- .col-md-8 end -->
        </section><!-- #blog end -->
        </div> <!-- .widget-categories end -->

        <script src="/assets/js/jquery-2.2.4.min.js"></script>
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/functions.js"></script>
    </body>
</x-layout>
