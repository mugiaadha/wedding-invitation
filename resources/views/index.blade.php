@extends('layout.main')

@section("content")
    <div id="backdrop-open" class="modal-backdrop fade show bg-backdrop animate__animated" style="opacity:100%;">
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
                        <p style="color:#6f555a; font-size:15px;">Minggu, 01 September 2024<br>Kepada Yth. Bapak/Ibu/Saudara/i</p>
                        <br>
                        <h2 style="color:#6f555a;">{{ $name ?? 'test' }}</h2>
                        <br>
                        <p style="color:#6f555a; font-size:15px;">*Mohon maaf apabila ada kesalahan penulisan nama dan gelar</p>
                        <br>
                        <button class="btn btn-default" style="border: 1px solid #6f555a;" onclick="soundOn()">
                            <i class="fa-solid fa-envelope-open pe-2"></i>
                            Buka Undangan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="about" class="pb-5 about-wrapper" data-aos="fade-down" data-aos-duration="1500">
        <div class="century-text" align="center">
            <h3 class="about-title pb-2 pt-5 century-text">─── The Wedding Of ───</h3>
        </div>
        <div class="container-fluid py-0 px-0">
            <div class="about d-flex align-items-center flex-column text-center">
                <div class="mugia-text">
                    <h1>Mugia Adha Kusumah
                        <br><sub id="nickname">Mugia</sub>
                    </h1>
                    <h7>Putra dari Bpk. Perdana Kusumah & Ibu. Nani Sumarni</h7>
                </div>
                <div class="and-text mt-3">
                    <h3>&</h3>
                </div>
                <div class="erika-text">
                    <h1>
                        Erika Karenina Rusdaya
                        <br><sub id="nickname">Karin</sub>
                    </h1>
                    <h7>Putri dari Bpk. Rusdaya & Ibu . Nurhayati AY</h7>
                </div>
            </div>
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
                                    <a class="color-milo link" target="_blank" href="https://maps.app.goo.gl/gmTYL5uJHGFxCAyS6?g_st=iw" title="see the location">
                                        <i class="fa-solid fa-location-dot pe-2"></i>(Villa Skaters) Jl. Budi no 90, Pasirkaliki, Cimahi Utara, Cimahi City, West Java 40514
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

    <section id="gallery" class="mb-5 mb-4 bg-monochrome">
        <h1 class="gallery-title my-5 py-5 color-milo" data-aos="zoom-in" data-aos-duration="1000"><strong>Gallery</strong></h1>
        <div class="container mb-3 pb-3">
            <div class="row">
                <video id="treaser" class="w-100" poster="{{ asset("img/thumbnail.jpg") }}" controls>
                    <source src="{{ asset("video/Erika & Mugi.mp4") }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <!-- Gallery -->
        <div class="container">
            <div class="row">
                @for ($i = 1; $i <= 27; $i++)
                    <div class="col-lg-4 col-md-12 mb-1 mb-lg-0">
                        <img src="{{ asset("img/gallery/"."slider-$i.jpg") }}" title="{{$i}}" class="w-100 shadow-1-strong rounded mb-4"/>
                        @if ($i < 27)
                            <img src="{{ asset("img/gallery/slider-".($i+=1).".jpg") }}" title="{{$i}}" class="w-100 shadow-1-strong rounded mb-4"/>
                        @endif
                        @if ($i < 27)
                            <img src="{{ asset("img/gallery/slider-".($i+=1).".jpg") }}" title="{{$i}}" class="w-100 shadow-1-strong rounded mb-4"/>
                        @endif
                    </div>
                @endfor
            </div>
        </div>
        <!-- Gallery -->
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

	<script>
        var snd = new Audio("{{ asset("music/music.mp3") }}");
        var treaser = document.getElementById('treaser');

        treaser.addEventListener("play", (event) => {
            snd.pause()
        });
        treaser.addEventListener("pause", (event) => {
            snd.play()
        });

        function soundOn() {
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

