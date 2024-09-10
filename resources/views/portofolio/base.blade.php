<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Khoirzady's Page</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('profiles_/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('profiles_/css/styles.css') }}">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="{{ asset('profiles_/site.webmanifest') }}">

</head>


<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


        <!-- # site header
        ================================================== -->
        <header class="s-header">
            <div class="row s-header__inner">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="{{ url('about') }}">
                            @php
                                use App\Models\Profile;
                                $gambar = Profile::first();
                            @endphp
                            <img src="{{ asset('storage/' . $gambar->gambar) }}" class="rounded" alt="Homepage"
                                style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">

                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">
                    <ul class="s-header__menu-links">
                        <li class="current"><a href="/intro">Intro</a></li>
                        <li><a href="{{ url('about') }}">About</a></li>
                        <li><a href="{{ url('works') }}">Works</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul> <!-- s-header__menu-links -->
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->
        </header> <!-- end s-header -->
        @yield('content')

        <!-- # intro
        ================================================== -->
        <!-- end s-intro -->


        <!-- # about
        ================================================== -->



        <!-- # works
        ================================================== -->
        <!-- end s-works -->


        <!-- # numbers
        ================================================== -->
        {{-- <section id="numbers" class="s-numbers">

            <div class="row counter-items">

                <div class="column counter-items__item">
                    <div class="num">
                        80
                        <span>+</span>
                    </div>
                    <h5>Happy Customers</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Vel harum magni quae voluptate error quo repellendus inventore
                        laborum ex veniam.
                    </p>
                </div> <!-- end counter-items__item -->

                <div class="column counter-items__item">
                    <div class="num">
                        120
                        <span>+</span>
                    </div>
                    <h5>Projects Completed</h5>
                    <p>
                        Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue.
                        Fusce vel dui. In ac felis
                        quis tortor malesuada pretium
                    </p>
                </div> <!-- end counter-items__item -->

                <div class="column counter-items__item">
                    <div class="num">
                        23k
                        <span>+</span>
                    </div>
                    <h5>Lines of Code</h5>
                    <p>
                        Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi
                        adipisci.
                        Nisi eaque consequatur. Voluptatem dignissimos ut ducimus
                    </p>
                </div> <!-- end counter-items__item -->

                <div class="column counter-items__item">
                    <div class="num">
                        85
                        <span>+</span>
                    </div>
                    <h5>Positive Feedback</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel harum magni quae voluptate error
                        quo repellendus inventore laborum ex veniam.
                    </p>
                </div> <!-- end counter-items__item -->

            </div> <!-- end counter-items -->

        </section> <!-- end s-numbers --> --}}


        <!-- # footer
        ================================================== -->
        <!-- end s-footer -->

    </div> <!-- end page-wrap -->


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('profiles_/js/plugins.js') }}"></script>
    <script src="{{ asset('profiles_/js/main.js') }}"></script>

</body>

</html>
