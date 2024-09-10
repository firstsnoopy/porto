@extends('portofolio.base')
@section('content')
    <section id="works" class="s-works target-section">

        <div class="row">
            <div class="column xl-12">
                <div class="section-header" data-num="02">
                    <h2 class="text-display-title">my Works.</h2>
                </div> <!-- end section-header -->
            </div>
        </div>

        {{-- <div class="row folio-entries">

        <div class="column entry">
            <a href="images/folio/gallery/g-turban.jpg" class="entry__link glightbox" data-glightbox="title: White Knit Cap; description: .entry__desc-01">
                <div class="entry__thumb">
                    <img src="images/folio/white_turban.jpg" srcset="images/folio/white_turban.jpg 1x, images/folio/white_turban@2x.jpg 2x" alt="">
                </div>
                <div class="entry__info">
                    <h4 class="entry__title">White Knit Cap</h4>
                    <div class="entry__cat">Frontend Design</div>
                </div>
            </a>

            <div class="glightbox-desc entry__desc-01">
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Inventore ipsum iste soluta fugiat, impedit illum ducimus
                deleniti facilis ab, tempora non! Nisi, tempora provident.
                <a href="https://www.behance.net/">Project Link</a>.
                </p>
            </div>
        </div> <!-- entry -->

        <div class="column entry">
            <a href="images/folio/gallery/g-woodcraft.jpg" class="entry__link glightbox" data-glightbox="title: WoodCraft; description: .entry__desc-02">
                <div class="entry__thumb">
                    <img src="images/folio/woodcraft.jpg" srcset="images/folio/woodcraft.jpg 1x, images/folio/woodcraft@2x.jpg 2x" alt="">
                </div>
                <div class="entry__info">
                    <h4 class="entry__title">WoodCraft</h4>
                    <div class="entry__cat">Product Design</div>
                </div>
            </a>

            <div class="glightbox-desc entry__desc-02">
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Inventore ipsum iste soluta fugiat, impedit illum ducimus
                deleniti facilis ab, tempora non! Nisi, tempora provident.
                <a href="https://www.behance.net/">Project Link</a>.
                </p>
            </div>
        </div> <!-- entry -->

        <div class="column entry">
            <a href="images/folio/gallery/g-tulips.jpg" class="entry__link glightbox" data-glightbox="title: Caffeine & Tulips; description: .entry__desc-03">
                <div class="entry__thumb">
                    <img src="images/folio/caffeine_and_tulips.jpg" srcset="images/folio/caffeine_and_tulips.jpg 1x, images/folio/caffeine_and_tulips@2x.jpg 2x" alt="">
                </div>
                <div class="entry__info">
                    <h4 class="entry__title">Caffeine & Tulips</h4>
                    <div class="entry__cat">Brand Identity</div>
                </div>
            </a>

            <div class="glightbox-desc entry__desc-03">
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Inventore ipsum iste soluta fugiat, impedit illum ducimus
                deleniti facilis ab, tempora non! Nisi, tempora provident.
                <a href="https://www.behance.net/">Project Link</a>.
                </p>
            </div>
        </div> <!-- entry -->

        <div class="column entry">
            <a href="images/folio/gallery/g-grayscale.jpg" class="entry__link glightbox" data-glightbox="title: Grayscale; description: .entry__desc-04">
                <div class="entry__thumb">
                    <img src="images/folio/grayscale.jpg" srcset="images/folio/grayscale.jpg 1x, images/folio/grayscale@2x.jpg 2x" alt="">
                </div>
                <div class="entry__info">
                    <h4 class="entry__title">Grayscale</h4>
                    <div class="entry__cat">Product Design</div>
                </div>
            </a>

            <div class="glightbox-desc entry__desc-04">
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Inventore ipsum iste soluta fugiat, impedit illum ducimus
                deleniti facilis ab, tempora non! Nisi, tempora provident.
                <a href="https://www.behance.net/">Project Link</a>.
                </p>
            </div>
        </div> <!-- entry -->

        <div class="column entry">
            <a href="images/folio/gallery/g-lamp.jpg" class="entry__link glightbox" data-glightbox="title: The Lamp; description: .entry__desc-05">
                <div class="entry__thumb">
                    <img src="images/folio/lamp.jpg" srcset="images/folio/lamp.jpg 1x, images/folio/lamp@2x.jpg 2x" alt="">
                </div>
                <div class="entry__info">
                    <h4 class="entry__title">The Lamp</h4>
                    <div class="entry__cat">Brand Identity</div>
                </div>
            </a>

            <div class="glightbox-desc entry__desc-05">
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Inventore ipsum iste soluta fugiat, impedit illum ducimus
                deleniti facilis ab, tempora non! Nisi, tempora provident.
                <a href="https://www.behance.net/">Project Link</a>.
                </p>
            </div>
        </div> <!-- entry -->

        <div class="column entry">
            <a href="images/folio/gallery/g-tropical.jpg" class="entry__link glightbox" data-glightbox="title: Tropical; description: .entry__desc-06">
                <div class="entry__thumb">
                    <img src="images/folio/tropical.jpg" srcset="images/folio/tropical.jpg 1x, images/folio/tropical@2x.jpg 2x" alt="">
                </div>
                <div class="entry__info">
                    <h4 class="entry__title">Tropical</h4>
                    <div class="entry__cat">Frontend Design</div>
                </div>
            </a>

            <div class="glightbox-desc entry__desc-06">
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Inventore ipsum iste soluta fugiat, impedit illum ducimus
                deleniti facilis ab, tempora non! Nisi, tempora provident.
                <a href="https://www.behance.net/">Project Link</a>.
                </p>
            </div>
        </div> <!-- entry -->

    </div> <!-- folio entries --> --}}


        <div class="row s-testimonials">
            <div class="column xl-12">

                <h3 class="s-testimonials__header">Spill my Projects</h3>

                <div class="swiper-container s-testimonials__slider">

                    <div class="swiper-wrapper">
                        @forelse ($works as $item)
                            <div class="s-testimonials__slide swiper-slide">
                                <div class="s-testimonials__author">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="Author image"
                                        class="s-testimonials__avatar">
                                    <cite class="s-testimonials__cite">
                                        <strong>{{ $item->judul }}</strong>
                                        <span>{{$item->developer}}</span>
                                    </cite>
                                </div>
                                <p>
                                    {{ $item->deskripsi }}
                                </p>
                            </div>
                        @empty
                        @endforelse
                        <!-- end s-testimonials__slide -->



                    </div> <!-- end swiper-wrapper -->

                    <div class="swiper-pagination"></div>

                </div> <!-- end swiper-container -->

            </div> <!-- end column -->
        </div> <!-- end s-testimonials -->

    </section>
@endsection
