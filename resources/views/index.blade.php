@extends("layout.main")

@section("content")
    <section id="about" class="my-5" data-aos="fade-down" data-aos-duration="1500">
        <h1 class="about-title my-3 century-text">───&nbsp;&nbsp;The Wedding Of&nbsp;&nbsp;───</h1>
        <div class="container-fluid about-wrapper py-5">
            <div class="about d-flex align-items-center flex-column text-center">
                <div class="mugia-text">
                    <h1>Mugia Adha Kusumah <sub id="nickname">Mugia</sub></h1>
                    <p>Son of Mr. Perdana Kusumah & Mrs. Nani Sumarni</p>
                </div>
                <div class="and-text my-3">
                    <h1>&</h1>
                </div>
                <div class="erika-text">
                    <h1>Erika Karenina Rusdaya <sub id="nickname">Karin</sub></h1>
                    <p>Daughter of Mr. Rusdaya & Mrs. Nurhayati AY</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        @include("partials.navbar.uppernav")
    </section>
    <section id="schedule" class="mt-5">
        <br>
        <br>
        <br>
        <div data-aos="zoom-in" data-aos-duration="1000">
            <h1 class="schedule-title pt-5 pb-4 m-0">•&nbsp;&nbsp;Schedule&nbsp;&nbsp;•</h1>
            <div class="container text-center pb-5">
                <div class="date-wrapper">
                    <h4>Date</h4>
                    <p><i class="fa-solid fa-calendar-day pe-2"></i>Friday, 19 February 2121</p>
                    <p><i class="fa-solid fa-clock pe-2"></i></i>All Day</p>
                </div>
                <p class="my-2">───────────────</p>
                <div class="venue-wrapper">
                    <h4>Venue</h4>
                    <p><i class="fa-solid fa-location-dot pe-2"></i>Prince Melon Hotel, Japan</p>
                </div>
            </div>
        </div>
    </section>
    <section class="quote container-fluid text-center mb-5 py-3">
        <h5 data-aos="fade" data-aos-duration="1000">"Marriage is always together and remains in the same goal, although in different ways"</h5>
    </section>
    <section id="gallery" class="mt-5 mb-4">
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 class="gallery-title my-3" data-aos="zoom-in" data-aos-duration="1000">•&nbsp;&nbsp;Gallery&nbsp;&nbsp;•</h1>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <img
                    src="{{ asset("img/photo.jpg") }}"
                    class="w-100 shadow  rounded mb-4"
                    alt="Boat on Calm Water"
                    data-aos="fade"
                    data-aos-duration="1000"
                    />
                <img
                    src="{{ asset("img/photo2.jpg") }}"
                    class="w-100 shadow  rounded mb-4"
                    alt="Wintry Mountain Landscape"
                    data-aos="fade"
                    data-aos-duration="1000"
                />
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0">
                <img
                    src="{{ asset("img/photo3.jpg") }}"
                    class="w-100 shadow  rounded mb-4"
                    alt="Waves at Sea"
                    data-aos="fade"
                    data-aos-duration="1000"
                />
                <img
                    src="{{ asset("img/photo4.jpg") }}"
                    class="w-100 shadow  rounded mb-4"
                    alt="Yosemite National Park"
                    data-aos="fade"
                    data-aos-duration="1000"
                />
                </div>
            </div>
        </div>
    </section>
    <section id="others">
        <div class="my-5" data-aos="fade" data-aos-duration="1000">
            <livewire:wish></livewire:wish>
        </div>
    </section>
@endsection