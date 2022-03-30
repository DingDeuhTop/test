<div class="container-fluid" style="background-color: white">
    <div class="row clearfix">
        <!-- .col-md-6 end -->
        <div class="col-xs-12 col-sm-12 col-md-5 ">
            <div class="col-content pr-40 wow fadeInUp" data-wow-duration="1s">
                <img class="img-responsive center-block" src="{{ "storage/{$about->img}" }}" alt="ipad" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1">
            <div class="heading heading-1 mt-70 wow fadeInUp" data-wow-duration="1s">
                <h2 class="heading--title">{{ $about->title }}</h2>
                <div class="heading--divider"></div>
            </div>
            <div class="about-content wow fadeInUp" data-wow-duration="1s">
                {{ $about->desc }}
            </div>
        </div>
        <!-- .col-md-6 end -->
    </div>
    <!-- .row end -->
</div>
