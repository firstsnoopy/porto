@extends('portofolio.base')
@section('content')
    <section id="about" class="s-about target-section">

        <div class="row s-about__content">
            <div class="column xl-12">

                <div class="section-header" data-num="01">
                    <h2 class="text-display-title">About Me.</h2>
                </div> <!-- end section-header -->

                <p class="attention-getter">
                    {{ $desk->deskripsi }}
                </p>

                <div class="grid-list-items s-about__blocks">

                    <div class="grid-list-items__item s-about__block">
                        <h4 class="s-about__block-title">Experience</h4>
                        <div class="s-about__list">
                            @foreach ($about as $item)
                                <p>
                                    {{ $item->pengalaman }}
                                </p>
                            @endforeach
                        </div>
                    </div> <!--end s-about__block -->

                    <div class="grid-list-items__item s-about__block">
                        <h4 class="s-about__block-title">Education</h4>
                        <div class="s-about__list">
                            @foreach ($about as $item)
                                <p>
                                    {{ $item->pendidikan }}
                                </p>
                            @endforeach
                        </div>
                    </div>

                    {{-- <div class="grid-list-items__item s-about__block">
                    <h4 class="s-about__block-title">Awards</h4>

                    <ul class="s-about__list">
                        <li>
                            <a href="#0">
                                Site Of The Month
                                <span>Awwwards — 2023</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                Site Of The Day
                                <span>Awwwards — 2023</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                Agency of The Year
                                <span>Awwwards — 2022</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                FWA of The Month
                                <span>FWA — 2022</span>
                            </a>
                        </li><li>
                            <a href="#0">
                                Site Of The Month
                                <span>Awwwards — 2022</span>
                            </a>
                        </li>
                    </ul>
                </div> <!--end s-about__block --> --}}

                    <div class="grid-list-items__item s-about__block">
                        <h4 class="s-about__block-title">Skills</h4>
                        <div class="s-about__list">
                            @foreach ($about as $item)
                                <p>
                                    {{ $item->skills }}
                                </p>
                            @endforeach
                        </div>
                    </div> <!--end s-about__block -->

                </div> <!-- grid-list-items -->

            </div> <!--end column -->
        </div> <!--end s-about__content -->

    </section> <!-- end s-about -->
@endsection
