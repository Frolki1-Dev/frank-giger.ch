<section id="about" class="about pt-100 pb-70">
    <div class="container">

        <div class="row">

            <div class="col-lg-6">
                <div class="about-img">
                    <div class="box-img">
                        <img src="/images/me.jpg" alt="Das bin ich">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="info-about">
                    <!-- Title Of Section Left -->
                    <div class="section-title-left">
                        <h2>Über mich</h2>
                        <div class="line"><span><i class="fas fa-angle-double-right"></i> 01.</span></div>
                        <h3>Mein Name ist Frank und ich bin gelernter Kaufmann mit Weiterbildungen in der Informatik</h3>
                    </div>


                    <h4>Ich {{ $age }} alt und komme aus der Schweiz</h4>
                    {{--<p class="mb-30">--}}
                        {{--Seit ich 12 Jahre alt bin, programmiere ich aus Leidenschaft Webseiten.--}}
                        {{----}}
                    {{--</p>--}}


                    {{--<a href="cv.pdf" class="btn-one">Mein Lebenslauf</a>--}}
                </div>
            </div>

        </div>

    </div>


    <div class="statistics pt-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="overlay"></div>
                        <div class="inner-stat">
                            <div class="count" data-from="1" data-to="20" data-speed="3000"></div>
                            <p class="text"><i class="fal fa-folder"></i> Projekte</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="overlay"></div>
                        <div class="inner-stat">
                            <div class="count" data-from="1" data-to="15" data-speed="3000"></div>
                            <p class="text"><i class="fal fa-smile"></i> Zufridene Kunden</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="overlay"></div>
                        <div class="inner-stat">
                            <div class="count" data-from="1" data-to="{{ rand(100000, 999999) }}" data-speed="3000"></div>
                            <p class="text"><i class="fal fa-terminal"></i> Codezeile</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="overlay"></div>
                        <div class="inner-stat">
                            <div class="count" data-from="1" data-to="{{ rand(200, 600) }}" data-speed="3000"></div>
                            <p class="text"><i class="fal fa-coffee"></i> Kaffee</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>