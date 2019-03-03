<section id="portfolio" class="portfolio pt-100 pb-70">
    <div class="container">
        <div class="row">


            <div class="col-lg-10">
                <div class="section-title">
                    <div class="row ">
                        <div class="col-lg-5">
                            <!-- Title Of Section Center -->
                            <div class="section-title-left">
                                <h2>Mein Portfolio</h2>
                                <div class="line"><span><i class="fas fa-angle-double-right"></i> 04.</span></div>
                                <h3>Was ich erschaffen habe</h3>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <p>Ich habe keine besondere Begabung, sondern bin nur leidenschaftlich neugierig. <small> - Albert Einstein</small></p>
                        </div>

                    </div>


                </div>
                {{--<div class="filter-group">--}}
                    {{--<!-- Control List -->--}}
                    {{--<ul id="control" class="list-control">--}}
                        {{--<li class="active" data-filter="all">All</li>--}}
                        {{--<li data-filter="1">Web Desing</li>--}}
                        {{--<li data-filter="2">Graphic Desing</li>--}}
                        {{--<li data-filter="3">Branding</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>


        </div>


        <!-- End Row 1 Column -->
        <!-- Start Row 2 Column -->
        <div id="filtr-container" class="row">


            <!-- Column Image -->
            @foreach($portfolio as $p)
            <div class="col-md-6 col-lg-4 filtr-item">
                <div class="my-work">
                    <div class="image">
                        <img class="img-fliud" src="/{{ $p['image'] }}" alt="my-work">
                        <a class="overlay" href="{{ $p['url'] }}" target="_blank">
                            <span class="icon-img"><i class="fal fa-link"></i></span>
                        </a>
                    </div>

                    <div class="footer-work">
                        <h4>{{ $p['title'] }}</h4>
                        <div class="content-work">{{ $p['description'] }}</div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>