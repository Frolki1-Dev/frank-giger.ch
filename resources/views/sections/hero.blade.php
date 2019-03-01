<section id="home" class="home">
    <div class="home-typed">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner display-table">
                <div class="info-header table-cell">
                    <ul class="banner-meta">
                        <li>Entwickler</li>
                        <li>Supporter</li>
                        <li>And more</li>
                    </ul>

                    <!-- Heading Title For Header -->
                    <h1>Heyo - Ich bin <span>Frank</span> & <br>Lebe in der Schweiz <br> <span class="typed"
                                                                                               id="type"></span></h1>


                    <!-- Button Banner -->
                    <div class="banner-btn">
                        <a href="#" class="btn-one">My Portfolio</a>
                    </div>

                    <a href="#about" class="down">
                        <span class="down-one"><i class="fas fa-angle-double-down"></i></span>
                        <span class="down-three"><i class="fas fa-angle-double-down"></i></span>
                    </a>


                    <div class="follow-me">
                        <p>Folge mir</p>
                        <ul class="social-media-about">
                            @foreach($social as $i => $opt)
                                @if($opt['hero'])
                                    <li>
                                        <a href="{{ $opt['url'] }}" target="_blank">
                                            <i class="fab {{ $opt['icon'] }}"></i>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>