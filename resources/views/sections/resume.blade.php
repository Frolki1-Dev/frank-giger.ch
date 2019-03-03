<section class="resume pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="section-title">
                    <div class="row ">
                        <div class="col-lg-5">
                            <!-- Title Of Section Center -->
                            <div class="section-title-left">
                                <h2>Erfahrungen</h2>
                                <div class="line"><span><i class="fas fa-angle-double-right"></i> 03.</span></div>
                                <h3>Arbeitserfahrung & Weiterbildung</h3>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <p>Der Mensch hat dreierlei Wege klug zu handeln: durch Nachdenken ist der edelste, durch
                                Nachahmen der einfachste, durch Erfahrung der bitterste.
                                <small> - Konfuzius</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="my-resume">
                    @foreach($experience as $e)
                        @if(empty($e['to']))
                            <div class="history-top"> {{ \Carbon\Carbon::parse($e['from'])->format('m.Y') }} - heute</div>
                        @else
                            <div class="history-top"> {{ \Carbon\Carbon::parse($e['from'])->format('m.Y') }} - {{ \Carbon\Carbon::parse($e['to'])->format('m.Y') }}</div>
                        @endif
                        <div class="resume-item">
                            <div class="resume-head">
                                <span class="fal fa-{{ $e['icon'] }}"></span>
                                <div class="content-exper">
                                    <h4>{{ $e['title'] }}</h4>
                                    <div class="history"><a href="{{ $e['url'] }}" target="_blank">{{ $e['company'] }}</a> | {{ $e['place'] }}</div>
                                </div>
                            </div>
                            <div class="resume-footer">
                                <div class="icon-bg"><i class="fal fa-briefcase"></i></div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>


            <div class="col-lg-6">
                <div class="my-resume">
                    @foreach($edu as $e)
                        @if(empty($e['to']))
                            <div class="history-top"> {{ \Carbon\Carbon::parse($e['from'])->format('m.Y') }}</div>
                        @else
                            <div class="history-top"> {{ \Carbon\Carbon::parse($e['from'])->format('m.Y') }} - {{ \Carbon\Carbon::parse($e['to'])->format('m.Y') }}</div>
                        @endif
                        <div class="resume-item">
                            <div class="resume-head">
                                <span class="fal fa-{{ $e['icon'] }}"></span>
                                <div class="content-exper">
                                    <h4>{{ $e['title'] }}</h4>
                                    <div class="history"><a href="{{ $e['url'] }}" target="_blank">{{ $e['school'] }}</a> | {{ $e['place'] }}</div>
                                </div>
                            </div>
                            <div class="resume-footer">
                                <div class="icon-bg"><i class="fal fa-graduation-cap"></i></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>