<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-7 col-content pl-100">
            <div class="heading heading-1 wow fadeInUp" data-wow-duration="1s">
                <h2 class="heading--title">{{ $contact->title }} </h2>
                <div class="heading--divider"></div>
                <p class="heading--desc">Lorem ipsum dolor amet, consectetur adipisice elite sede eiusmod
                    tempor incidide labeore dolore magna.</p>
            </div>
            <div class="form-request">
                <div class="row">
                    <form class="mb-0">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            {{-- <input type="text" class="form-control" name="your-name" placeholder="Your Name"> --}}
                            <p>Name: {{ $contact->name }}</p>
                        </div>
                        <!-- .col-md-6 end -->
                        {{-- <div class="col-xs-12 col-sm-12 col-md-6">
                            <input type="email" class="form-control" name="your-email" placeholder="Your Email">
                        </div> --}}
                        <!-- .col-md-6 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            {{-- <input type="number" class="form-control" name="your-number" placeholder="Phone No."> --}}
                            <p>Phone No. {{ $contact->phone }}</p>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            {{-- <textarea class="form-control" name="your-message" rows="3" placeholder="Your Message"></textarea> --}}
                            <p>Email: {{ $contact->mail }}</p>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            {{-- <input type="submit" class="btn btn--primary" value="send"> --}}
                            <p>Address: {{ $contact->address }}</p>
                        </div>
                        <!-- .col-md-6 end -->
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 pr-0 pl-0 col-content wow fadeInUp" data-wow-duration="1s"
            style="text-align: center">
            {{-- <div class="col-img"> --}}
            {{-- <div class="bg-section"> --}}
            <img src="{{ "storage/{$contact->img}" }}" />
            {{-- </div> --}}
            {{-- </div> --}}
        </div>
        <!-- .col-md-6 end-->
    </div>
    <!-- .row end -->
</div>
