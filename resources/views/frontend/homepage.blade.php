@extends('frontend.layouts.app')

@section('title', 'Proffessional Photographer')

@section('content')
<!-- Inspiro Slider -->
<div id="slider" class="inspiro-slider slider-fullscreen arrows-large arrows-creative dots-creative" data-height-xs="360">

    <!-- Slide 1 -->
    <div class="slide background-overlay-one kenburns" style="background-image:url({{ asset('assets/images/banner.jpg') }});">
        <div class="container-wide">
            <div class="slide-captions">
                <!-- Captions -->
                <p class="lead" data-animation="fadeIn" data-animation-delay="500" class="text-large"><span class="text-rotator" data-rotate-effect="fadeIn" data-rotate-speed="4000" data-rotate-separator="|">Hello there. Nice to see you, finally. | I am Gerrie Turksma, proffessional Photographer | I’m here to capture the beauty of the moment | Hope you like my work and Take a look around | And let me know if you need me :)</span></p>
              </div>
               <!-- end: Captions -->
        </div>
    </div>
    <!-- end: Slide 1 -->
</div>
<!--end: Inspiro Slider -->

<!-- GALLERY -->
<section id="section-gallery" class="no-padding" style="background-color:#454A43;">

    <!-- Portfolio -->
    <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0" data-lightbox="gallery">

        <!-- portfolio item -->
        <div class="portfolio-item img-zoom">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="{{ asset('assets/images/portfolio/1.jpg') }}" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Paper Pouch!" data-lightbox="gallery-item" href="{{ asset('assets/images/portfolio/1.jpg') }}" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
        <!-- end: portfolio item -->

        <!-- portfolio item -->
        <div class="portfolio-item img-zoom">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="{{ asset('assets/images/portfolio/2.jpg') }}" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Paper Pouch!" data-lightbox="gallery-item" href="{{ asset('assets/images/portfolio/2.jpg') }}" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
        <!-- end: portfolio item -->

        <!-- portfolio item -->
        <div class="portfolio-item img-zoom">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="{{ asset('assets/images/portfolio/3.jpg') }}" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Paper Pouch!" data-lightbox="gallery-item" href="{{ asset('assets/images/portfolio/3.jpg') }}" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
        <!-- end: portfolio item -->
        <!-- portfolio item -->
        <div class="portfolio-item img-zoom">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="{{ asset('assets/images/portfolio/4.jpg') }}" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Paper Pouch!" data-lightbox="gallery-item" href="{{ asset('assets/images/portfolio/4.jpg') }}" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
        <!-- end: portfolio item -->
        <!-- portfolio item -->
        <div class="portfolio-item img-zoom">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="{{ asset('assets/images/portfolio/5.jpg') }}" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Paper Pouch!" data-lightbox="gallery-item" href="{{ asset('assets/images/portfolio/5.jpg') }}" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
        <!-- end: portfolio item -->
        <!-- portfolio item -->
        <div class="portfolio-item img-zoom">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="{{ asset('assets/images/portfolio/6.jpg') }}" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Paper Pouch!" data-lightbox="gallery-item" href="{{ asset('assets/images/portfolio/6.jpg') }}" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
        <!-- end: portfolio item -->

        <!-- portfolio item -->
        <div class="portfolio-item img-zoom">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="{{ asset('assets/images/portfolio/7.jpg') }}" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Paper Pouch!" data-lightbox="gallery-item" href="{{ asset('assets/images/portfolio/7.jpg') }}" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
        <!-- end: portfolio item -->


        <!-- portfolio item -->
        <div class="portfolio-item img-zoom">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="{{ asset('assets/images/portfolio/8.jpg') }}" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Paper Pouch!" data-lightbox="gallery-item" href="{{ asset('assets/images/portfolio/8.jpg') }}" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
        <!-- end: portfolio item -->

                        <!-- portfolio item -->
        <div class="portfolio-item img-zoom">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="{{ asset('assets/images/portfolio/9.jpg') }}" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Paper Pouch!" data-lightbox="gallery-item" href="{{ asset('assets/images/portfolio/9.jpg') }}" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
        <!-- end: portfolio item -->

                        <!-- portfolio item -->
        <div class="portfolio-item img-zoom">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="{{ asset('assets/images/portfolio/10.jpg') }}" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Paper Pouch!" data-lightbox="gallery-item" href="{{ asset('assets/images/portfolio/10.jpg') }}" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
        <!-- end: portfolio item -->

             <!-- portfolio item -->
        <div class="portfolio-item img-zoom">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="{{ asset('assets/images/portfolio/11.jpg') }}" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Paper Pouch!" data-lightbox="gallery-item" href="{{ asset('assets/images/portfolio/11.jpg') }}" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
        <!-- end: portfolio item -->

        <!-- portfolio item -->
        <div class="portfolio-item img-zoom">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="{{ asset('assets/images/portfolio/12.jpg') }}" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Paper Pouch!" data-lightbox="gallery-item" href="{{ asset('assets/images/portfolio/12.jpg') }}" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
        <!-- end: portfolio item -->

        <!-- portfolio item -->
        <div class="portfolio-item img-zoom">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="{{ asset('assets/images/portfolio/13.jpg') }}" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Paper Pouch!" data-lightbox="gallery-item" href="{{ asset('assets/images/portfolio/13.jpg') }}" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
        <!-- end: portfolio item -->
        <!-- portfolio item -->
        <div class="portfolio-item img-zoom">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#"><img src="{{ asset('assets/images/portfolio/14.jpg') }}" alt=""></a>
                </div>
                <div class="portfolio-description">
                    <a title="Paper Pouch!" data-lightbox="gallery-item" href="{{ asset('assets/images/portfolio/14.jpg') }}" class="btn btn-light btn-rounded">Zoom</a>
                </div>
            </div>
        </div>
        <!-- end: portfolio item -->



    </div>
    <!-- end: Portfolio -->

             <!-- Load next portfolio items -->
        <div id="pagination" class="infinite-scroll">
            <a href="home-portfolio-v10-infinite-scroll-2.html"></a>
        </div>
        <!-- end:Load next portfolio items -->

</section>
<!-- end: GALLERY -->
@endsection
