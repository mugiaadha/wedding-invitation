@extends('layout.main')

@section("content")
    <div id="backdrop-open" class="modal-backdrop fade show bg-leaf-repeat animate__animated" style="opacity:100%;">
        <div class="container">
            <div class="row">
                <div class="col-12 my-5 py-5" align="center">
                    <div class="erika-text">
                        <br>
                        <br>
                        <br>
                        <p style="color:#6f555a;">The Wedding Of</p>
                        <br>
                        <h1 style="color:#6f555a;">Erika & Mugia</h1>
                        <br>
                        <p style="color:#6f555a; font-size:15px;">Minggu, 08 September 2024<br>Kepada Yth. Bapak/Ibu/Saudara/i</p>
                        <br>
                        <h2 style="color:#6f555a;">{{ $name ?? 'test' }}</h2>
                        <br>
                        <p style="color:#6f555a; font-size:15px;">*Mohon maaf apabila ada kesalahan penulisan nama dan gelar</p>
                        <br>
                        <button class="btn btn-default" style="border: 1px solid #6f555a;" onclick="soundOn()">Buka Undangan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="about" class="py-5 about-wrapper" data-aos="fade-down" data-aos-duration="1500">
        <div class="century-text" align="center">
            <h3 class="about-title py-3 century-text">─── The Wedding Of ───</h3>
        </div>
        <div class="container-fluid py-0 px-0">
            <div class="about d-flex align-items-center flex-column text-center">
                <div class="erika-text">
                    <h1>Erika Karenina Rusdaya <sub id="nickname">Karin</sub></h1>
                    <h7>Putri dari Bpk. Rusdaya & Ibu . Nurhayati AY</h7>
                </div>
                <div class="and-text my-3">
                    <h3>&</h3>
                </div>
                <div class="mugia-text">
                    <h1>Mugia Adha Kusumah <sub id="nickname">Mugia</sub></h1>
                    <h7>Putra dari Bpk. Perdana Kusumah & Ibu. Nani Sumarni</h7>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="container-fluid d-flex justify-content-center py-4 uppernav bg-black-transparent d-block d-md-none" style="position: relative; bottom: -40px;" align="center">
                <p class="m-0">
                mobile
                بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ
                <br>Maha suci Allah yang telah menciptakan makhluk-Nya berpasang-pasangan.
                <br>Ya Allah, perkenankanlah kami merangkaikan kasih sayang yang Kau ciptakan diantara kami
                </p>
            </div>
        </div>
        <div class="container-fluid d-flex justify-content-center py-4 uppernav bg-black-transparent d-none d-md-block" style="position: relative; bottom: -85px;" align="center">
            <p class="m-0">
            desktop
            بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ
            <br>Maha suci Allah yang telah menciptakan makhluk-Nya berpasang-pasangan.
            <br>Ya Allah, perkenankanlah kami merangkaikan kasih sayang yang Kau ciptakan diantara kami
            </p>
        </div>
    </section>
    <section id="schedule">
        <div data-aos="zoom-in" data-aos-duration="1000" class="py-5">
            <h1 class="schedule-title color-milo" style="font-family: 'BrandonText';">Assalamualaikum wr.wb. </h1>
            <p class="color-milo" align="center">Dengan segala kerendahan hati,
                <br>kami mengundang Bapak/Ibu/Saudara/i <br>untuk menghadiri pernikahan kami
            </p>
            <br>
            <br>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="box-milo shadow mt-2 bg-leaf">
                            <div class="venue-wrapper p-4">
                                <h4 class="color-milo">Tempat</h4>
                                <p>
                                    <a class="color-milo link" target="_blank" href="https://www.google.com/maps/dir//Jl.+Kolonel+Masturi+No.Km.+3,+Cipageran,+Kec.+Cimahi+Utara,+Kota+Cimahi,+Jawa+Barat+40511/@-6.8481992,107.466372,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e68e38a9e165101:0x47ba4cab976c7751!2m2!1d107.5487739!2d-6.8482062?entry=ttu" title="see the location">
                                        <i class="fa-solid fa-location-dot pe-2"></i>(Kabuci) kampung Buyut Cipageran Asih Putera, <br>Jl. Kolonel Masturi No.Km. 3, Cipageran, Cimahi Utara, <br>Cimahi City, West Java 40511
                                    </a>
                                </p>
                            </div>
                            <div class="invitation container-fluid text-center" data-aos="fade" data-aos-duration="1000">
                                <div class="qr-code pb-4">
                                    {!! QrCode::size(250)->generate($uniqid ?? 'test') !!}
                                </div>
                                <h6 class="color-milo pb-2">Scan QR Code<br>Sebelum masuk tempat pernikahan</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="box-milo shadow mt-2 bg-leaf">
                            <div class="date-wrapper p-4 m-5">
                                <h4 class="color-milo">Akad</h4>
                                <p>
                                    <a target="_blank" class="color-milo link" target="_blank" href="https://calendar.app.google/a7nprxFxuMoxTKV77" title="save the date">
                                        <i class="fa-solid fa-calendar-day pe-2"></i>Sunday, 01 September 2024
                                        <br><i class="fa-solid fa-clock pe-2"></i>08:00 AM - 09:00 AM
                                    </a>
                                </p>
                            </div>
                            <p class="my-2 color-milo">────────────────────</p>
                            <div class="date-wrapper p-4 m-5">
                                <h4 class="color-milo">Resepsi</h4>
                                <p>
                                    <a target="_blank" class="color-milo link" target="_blank" href="https://calendar.app.google/a7nprxFxuMoxTKV77" title="save the date">
                                        <i class="fa-solid fa-calendar-day pe-2"></i>Sunday, 01 September 2024
                                        <br><i class="fa-solid fa-clock pe-2"></i>11:00 AM - 14:00 PM
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <section id="gallery" class="mt-5 mb-4">
        <br>
        <br>
        <h1 class="gallery-title my-3 color-milo" data-aos="zoom-in" data-aos-duration="1000"><strong>Gallery</strong></h1>
        <div class="container py-5">
            <div class="row">
                
                <div class="flicker-example my-3 shadow">
                    <ul>

                        <li data-background="{{ asset("img/gallery/slider4.png") }}">
                            <div class="flick-title"></div>
                            <div class="flick-sub-text"></div>
                        </li>
                        
                        <li data-background="{{ asset("img/gallery/slider8.png") }}">
                            <div class="flick-title"></div>
                            <div class="flick-sub-text"></div>
                        </li>
                        
                        <li data-background="{{ asset("img/gallery/slider9.png") }}">
                            <div class="flick-title"></div>
                            <div class="flick-sub-text"></div>
                        </li>

                        <li data-background="{{ asset("img/gallery/slider10.png") }}">
                            <div class="flick-title"></div>
                            <div class="flick-sub-text"></div>
                        </li>
                        
                        <li data-background="{{ asset("img/gallery/slider12.png") }}">
                            <div class="flick-title"></div>
                            <div class="flick-sub-text"></div>
                        </li>

                        <li data-background="{{ asset("img/gallery/slider13.png") }}">
                            <div class="flick-title"></div>
                            <div class="flick-sub-text"></div>
                        </li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                    <img
                        src="{{ asset("img/gallery/slider1.png") }}"
                        class="w-100 shadow  rounded mb-4"
                        alt="Boat on Calm Water"
                        data-aos="fade"
                        data-aos-duration="1000"
                        />
                </div>

                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                    <img
                        src="{{ asset("img/gallery/slider4.png") }}"
                        class="w-100 shadow  rounded mb-4"
                        alt="Boat on Calm Water"
                        data-aos="fade"
                        data-aos-duration="1000"
                        />
                </div>

                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                    <img
                        src="{{ asset("img/gallery/slider10.png") }}"
                        class="w-100 shadow  rounded mb-4"
                        alt="Boat on Calm Water"
                        data-aos="fade"
                        data-aos-duration="1000"
                        />
                </div>

                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                    <img
                        src="{{ asset("img/gallery/slider13.png") }}"
                        class="w-100 shadow  rounded mb-4"
                        alt="Boat on Calm Water"
                        data-aos="fade"
                        data-aos-duration="1000"
                        />
                </div>
            </div>
        </div>
    </section>

    <section id="others">
        <div class="my-5" data-aos="fade" data-aos-duration="1000">
            <livewire:wish 
                :uniqueId="$uniqid ?? 'test'"
                :name="$name ?? 'test'"
                :message="$message ?? 'test'"
                :response="$response ?? 'test'">
            </livewire:wish>
        </div>
    </section>

	<script src="{{ asset("js/hammer-v2.0.3.js") }}"></script>
	<script src="{{ asset("js/flickerplate.js") }}"></script>
	<script>
		new flickerplate('.flicker-example');

        function soundOn() {
            var snd = new Audio("{{ asset("music/music.mp3") }}");
                snd.play();

            const element = document.querySelector('#backdrop-open');
                  element.style.setProperty('--animate-duration', '4s');
                  element.classList.add('animate__animated', 'animate__slideOutUp', 'animate-duration-5s');
        }

        function copy(copyText) {
            navigator.clipboard.writeText(copyText);
            alert("nomor rekening berhasil disalin");
        }
	</script>
@endsection

