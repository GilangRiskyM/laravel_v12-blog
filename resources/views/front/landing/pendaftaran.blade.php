@extends('front.layout')
@section('title', 'Pendaftaran')
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ asset('img/landing/bg-elmuna.png') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Daftar Kursus Elmuna</h1>
                        <span class="subheading">dibawah ini merupakan informasi <br> pendaftaran kursus di Elmuna
                            Kebumen</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content-->
    <div class="container">
        <center>
            <div class="container bg-info rounded mb-3 shadow">
                <div class="container p-2 p-md-2 p-sm-3 g-2">
                    <div class="row d-flex g-7 align-items-center">
                        <div class="col-md-4 p-1 align-self-end">
                            <img src="{{ asset('img/landing/gambar-atas-1.png') }}" class="card-img" style="width: 20rem"
                                alt="" />
                        </div>
                        <div class="col-md-4 p-1 align-self-center">
                            <div class="container">
                                <div id="carouselExampleInterval"
                                    class="carousel slide carousel-fade d-flex align-items-center" data-bs-ride="carousel"
                                    style="width: 20rem; height: 10rem">
                                    <div class="carousel-inner text-white">
                                        <div class="carousel-item active" data-bs-interval="2000">
                                            <h2>
                                                Ingin menghabiskan masa liburan dengan kegiatan yang
                                                bermanfaat
                                            </h2>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="200">
                                            <h2>&nbsp;</h2>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <h2>Ingin nambah skill di waktu luang</h2>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="200">
                                            <h2>&nbsp;</h2>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <h2>Bingung Cari tempat kursus yang tepat?</h2>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="200">
                                            <h2>&nbsp;</h2>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <h2>Ayo daftar di elmuna</h2>
                                            <button class="btn btn-primary">Daftar Sekarang</button>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="200">
                                            <h2>&nbsp;</h2>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-1 align-self-end">
                            <img src="{{ asset('img/landing/gambar-atas-2.png') }}" class="card-img" style="width: 20rem"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </center>

        <div class="container shadow rounded soft-blue p-3 mb-3">
            <div class="col align-items-center justify-content-center p-md-5 p-sm-1 m-3 text-center">
                <h2>Ayo Daftar Kursus di Elmuna</h2>
                <h2>Apa saja kursus yang ada di Elmuna</h2>
            </div>
        </div>

        <!-- Mengemudi -->
        <div class="container card-mengemudi rounded shadow-card-mengemudi mb-3">
            <div class="card mb-3 border border-0 card-mengemudi">
                <div class="row g-0 d-flex align-items-center pt-3">
                    <div class="col-md-6">
                        <div id="Mengemudi" class="carousel slide carousel-container shadow rounded"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/mengemudi-1.webp') }}" class="d-block w-100 img-fluid"
                                        alt="..." />
                                </div>
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/mengemudi-2.jpg') }}" class="d-block w-100 img-fluid"
                                        alt="..." />
                                </div>
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/mengemudi-3.webp') }}" class="d-block w-100 img-fluid"
                                        alt="..." />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#Mengemudi"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#Mengemudi"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body text-center p-md-5 p-sm-1">
                            <h2 class="card-title">"Siap Jadi Pengemudi Handal?"</h2>
                            <h5 class="card-text">
                                Siap jalan-jalan dengan percaya diri? Daftar kursus mengemudi
                                sekarang dan pelajari teknik mengemudi yang aman dan nyaman
                                bersama instruktur berpengalaman. Daftar sekarang, kuasai
                                teknik mengemudi aman, dan raih SIM impianmu. 🚗✨<br />
                            </h5>
                            <h4>Mulai Perjalanan Anda Sekarang!</h4>
                            <h5>
                                Dari pemula hingga yang ingin memperbaiki keterampilan, kami
                                siap membantu Anda menguasai jalan raya. 🚗💨
                            </h5>
                            <p>
                                <button class="btn btn-bd-blue">Daftar Sekarang</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Digital Marketing -->
        <div class="container card-digital-marketing rounded shadow-card-digital-marketing mb-3">
            <div class="card mb-3 border border-0 card-digital-marketing">
                <div class="row g-0 d-flex flex-row-reverse align-items-center pt-3 pe-md-1">
                    <div class="col-md-6">
                        <div id="DigitalMarketing" class="carousel slide carousel-container shadow rounded"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/digital-marketing-1.jpg') }}"
                                        class="d-block w-100 img-fluid bg-none" alt="..." />
                                </div>
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/digital-marketing-2.png') }}"
                                        class="d-block w-100 img-fluid bg-none" alt="..." />
                                </div>
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/digital-marketing-3.jpeg') }}"
                                        class="d-block w-100 img-fluid bg-none" alt="..." />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#DigitalMarketing"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#DigitalMarketing"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card-body text-center p-md-5 p-sm-1">
                            <h2 class="card-title">
                                "Raih Kesuksesan Bisnis Anda dengan Kursus Digital Marketing!"
                            </h2>
                            <h5 class="card-text">
                                Ingin menguasai dunia digital? Daftar sekarang untuk kursus
                                digital marketing dan pelajari strategi terbaik untuk
                                meningkatkan penjualan, membangun brand, dan mencapai audiens
                                yang lebih luas.
                                <br />
                            </h5>
                            <h4>Mulai Karier Digital Anda Hari Ini!</h4>
                            <h5>
                                Dapatkan teknik-teknik terbaru langsung dari pakar, dan bawa
                                bisnis Anda ke level berikutnya. 🚀📈
                            </h5>
                            <p>
                                <button class="btn btn-bd-orange">Daftar Sekarang</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bahasa Inggris -->
        <div class="container card-bahasa-inggris rounded shadow-card-bahasa-inggris mb-3">
            <div class="card mb-3 border border-0 card-bahasa-inggris">
                <div class="row g-0 d-flex align-items-center pt-3">
                    <div class="col-md-6">
                        <div id="BahasaInggris" class="carousel slide carousel-container shadow rounded"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/bahasa-inggris-1.jpeg') }}"
                                        class="d-block w-100 img-fluid" alt="..." />
                                </div>
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/bahasa-inggris-2.jpg') }}"
                                        class="d-block w-100 img-fluid" alt="..." />
                                </div>
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/bahasa-inggris-3.jpg') }}"
                                        class="d-block w-100 img-fluid" alt="..." />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#BahasaInggris"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#BahasaInggris"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body text-center p-md-5 p-sm-1">
                            <h2 class="card-title">
                                "Buka Pintu Kesempatan dengan Menguasai Bahasa Inggris!"
                            </h2>
                            <h5 class="card-text">
                                Ingin lancar berbicara dan menulis dalam bahasa Inggris?
                                Daftar kursus kami sekarang dan belajar dari pengajar
                                berpengalaman dengan metode yang mudah dipahami.
                                <br />
                            </h5>
                            <h4>Mulai Perjalanan Belajar Anda Hari Ini!</h4>
                            <h5>
                                Dari pemula hingga mahir, kami siap membantu Anda mencapai
                                tujuan bahasa Inggris dengan cara yang menyenangkan dan
                                efektif. 🌍📚
                            </h5>
                            <p>
                                <button class="btn btn-bd-green">Daftar Sekarang</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container shadow rounded soft-blue p-3 mb-3">
            <div class="col align-items-center justify-content-center p-md-5 p-sm-1 m-3 text-center">
                <h2>Kursus? Di Elmuna aja</h2>
            </div>
        </div>

        <!-- Desain Grafis -->
        <div class="container card-desain-grafis rounded shadow-card-desain-grafis mb-3">
            <div class="card mb-3 border border-0 card-desain-grafis">
                <div class="row g-0 d-flex flex-row-reverse align-items-center pt-3 pe-md-1">
                    <div class="col-md-6">
                        <div id="DesainGrafis" class="carousel slide carousel-container shadow rounded"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/desain-grafis-1.jpg') }}"
                                        class="d-block w-100 img-fluid" alt="..." />
                                </div>
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/desain-grafis-2.jpeg') }}"
                                        class="d-block w-100 img-fluid" alt="..." />
                                </div>
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/desain-grafis-3.jpeg') }}"
                                        class="d-block w-100 img-fluid" alt="..." />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#DesainGrafis"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#DesainGrafis"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body text-center p-md-5 p-sm-1">
                            <h2 class="card-title">
                                "Buat Karya Visual Menakjubkan dengan Kursus Desain Grafis!"
                            </h2>
                            <h5 class="card-text">
                                Tingkatkan keterampilan desain Anda dan buat karya yang
                                memukau dengan teknik terbaru! Daftar sekarang untuk kursus
                                desain grafis yang praktis dan menyenangkan, langsung dari
                                para profesional.
                                <br />
                            </h5>
                            <h4>Mulai Kreasikan Dunia Visual Anda Hari Ini!</h4>
                            <h5>
                                Pelajari alat desain terbaik, tips & trik industri, dan bangun
                                portofolio yang menonjol. 🎨💻
                            </h5>
                            <p>
                                <button class="btn btn-bd-green-teal">Daftar Sekarang</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Komputer -->
        <div class="container card-komputer rounded shadow-card-komputer mb-3">
            <div class="card mb-3 border border-0 card-komputer">
                <div class="row g-0 d-flex align-items-center pt-3">
                    <div class="col-md-6">
                        <div id="Komputer" class="carousel slide carousel-container shadow rounded"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/komputer-1.jpg') }}" class="d-block w-100 img-fluid"
                                        alt="..." />
                                </div>
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/komputer-2.jpg') }}" class="d-block w-100 img-fluid"
                                        alt="..." />
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/landing/komputer-3.jpg') }}" class="d-block w-100 img-fluid"
                                        alt="..." />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#Komputer"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#Komputer"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body text-center p-md-5 p-sm-1">
                            <h2 class="card-title">
                                "Kuasai MS Office dan Tingkatkan Produktivitas Anda!"
                            </h2>
                            <h5 class="card-text">
                                Mau jadi lebih efisien dengan Microsoft Office? Daftar kursus
                                kami sekarang dan pelajari cara memaksimalkan Word, Excel,
                                PowerPoint, dan lainnya dengan mudah dan cepat.
                                <br />
                            </h5>
                            <h4>Mulai Belajar Sekarang dan Jadi Ahli MS Office!</h4>
                            <h5>
                                Bergabunglah dengan kursus kami untuk menguasai tools yang
                                akan mendukung kesuksesan karier dan pekerjaan Anda. 💻📊
                            </h5>
                            <p>
                                <button class="btn btn-bd-blue">Daftar Sekarang</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pemrograman -->
        <div class="container card-pemrograman rounded shadow-card-pemrograman mb-3">
            <div class="card mb-3 border border-0 card-pemrograman">
                <div class="row g-0 d-flex flex-row-reverse align-items-center pt-3 pe-md-1">
                    <div class="col-md-6">
                        <div id="Pemrograman" class="carousel slide carousel-container shadow rounded"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/pemrograman-1.jpg') }}"
                                        class="d-block w-100 img-fluid" alt="..." />
                                </div>
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/pemrograman-2.jpg') }}"
                                        class="d-block w-100 img-fluid" alt="..." />
                                </div>
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/pemrograman-3.webp') }}"
                                        class="d-block w-100 img-fluid" alt="..." />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#Pemrograman"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#Pemrograman"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body text-center p-md-5 p-sm-1">
                            <h2 class="card-title">
                                "Buat Website Keren dengan Kursus Pemrograman Web!"
                            </h2>
                            <h5 class="card-text">
                                Ingin belajar membuat website sendiri? Daftar sekarang dan
                                pelajari HTML, CSS, JavaScript, dan framework terbaik untuk
                                membangun situs web yang fungsional dan menarik.
                                <br />
                            </h5>
                            <h4>Mulai Bangun Dunia Web Anda Hari Ini!</h4>
                            <h5>
                                Dapatkan keterampilan praktis yang dapat langsung diterapkan
                                untuk menciptakan website profesional. 🌐💻
                            </h5>
                            <p>
                                <button class="btn btn-bd-purple">Daftar Sekarang</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container shadow rounded soft-blue p-3 mb-3">
            <div class="col align-items-center justify-content-center p-md-5 p-sm-1 m-3 text-center">
                <h2>Menuju Indonesia Emas Bersama Elmuna</h2>
            </div>
        </div>

        <!-- Video Editing dan Fotografi -->
        <div class="container card-video-editing-fotografi rounded shadow-card-video-editing-fotografi mb-3">
            <div class="card mb-3 border border-0 card-video-editing-fotografi">
                <div class="row g-0 d-flex align-items-center pt-3">
                    <div class="col-md-6">
                        <div id="VideoEditingFotografi" class="carousel slide carousel-container shadow rounded"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/video-foto-1.jpg') }}"
                                        class="d-block w-100 img-fluid" alt="..." />
                                </div>
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/video-foto-2.png') }}"
                                        class="d-block w-100 img-fluid" alt="..." />
                                </div>
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="{{ asset('img/landing/video-foto-3.jpg') }}"
                                        class="d-block w-100 img-fluid" alt="..." />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#VideoEditingFotografi"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#VideoEditingFotografi"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body text-center p-md-5 p-sm-1">
                            <h2 class="card-title">
                                "Kuasai Seni Video Editing dan Fotografi!"
                            </h2>
                            <h5 class="card-text">
                                Ingin membuat video dan foto yang memukau? Daftar kursus kami
                                dan pelajari teknik editing video, pengambilan gambar, serta
                                tips fotografi dari para ahli.
                                <br />
                            </h5>
                            <h4>Mulai Kreasikan Karya Visual Anda Hari Ini!</h4>
                            <h5>
                                Tingkatkan keterampilan Anda dan buat konten yang
                                menginspirasi, dari pemula hingga profesional. 🎥📸
                            </h5>
                            <p>
                                <button class="btn btn-bd-orange-red">Daftar Sekarang</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    @push('css')
        <style>
            :root {
                --soft-blue: #eaf4fe;
                --soft-blue-2: #76d5fe;
                --dark-blue: #007bff;
                --light-blue: #e3f2fd;
                --light-grey: #f8f9fa;
                --light-cream: #fff9db;
                --teal-pastel: #d1f2eb;
                --soft-purple: #f3e5f5;
                --soft-peach: #fff2e0;
                --midnight-blue: #2c3e50;
                --light-stell-blue: #b0c4de;
                --medium-grey: #d6d8db;
                --very-soft-orange: #fad7a0;
                --soft-teal: #a3e4d7;
                --light-grey-2: #d6e9f5;
                --light-purple: #d7bde2;
                --peach: #f5cba7;

                --bs-white: #ffffff;
                --bs-black: #000000;
                --bd-orange: #ffa500;
                --bd-blue: #007bff;
                --bd-green: #28a745;
                --bd-green-teal: #16a085;
                --bd-purple: #8e44ad;
                --bd-orange-red: #ff5733;
            }

            .soft-blue {
                background-color: var(--soft-blue);
            }

            .midnight-blue {
                background-color: var(--midnight-blue);
            }

            .card-mengemudi {
                background-color: var(--soft-blue);
            }

            .card-digital-marketing {
                background-color: var(--light-grey);
            }

            .card-bahasa-inggris {
                background-color: var(--light-cream);
            }

            .card-desain-grafis {
                background-color: var(--teal-pastel);
            }

            .card-komputer {
                background-color: var(--light-blue);
            }

            .card-pemrograman {
                background-color: var(--soft-purple);
            }

            .card-video-editing-fotografi {
                background-color: var(--soft-peach);
            }

            .shadow-card-mengemudi {
                box-shadow: 5px 5px 5px var(--light-stell-blue) !important;
            }

            .shadow-card-digital-marketing {
                box-shadow: 5px 5px 5px var(--medium-grey) !important;
            }

            .shadow-card-bahasa-inggris {
                box-shadow: 5px 5px 5px var(--very-soft-orange) !important;
            }

            .shadow-card-desain-grafis {
                box-shadow: 5px 5px 5px var(--soft-teal) !important;
            }

            .shadow-card-komputer {
                box-shadow: 5px 5px 5px var(--light-grey-2) !important;
            }

            .shadow-card-pemrograman {
                box-shadow: 5px 5px 5px var(--light-purple) !important;
            }

            .shadow-card-video-editing-fotografi {
                box-shadow: 5px 5px 5px var(--peach) !important;
            }

            .btn-bd-blue {
                --bs-btn-font-weight: 600;
                --bs-btn-color: var(--bs-white);
                --bs-btn-bg: var(--bd-blue);
                --bs-btn-border-color: var(--bd-blue);
                --bs-btn-border-radius: 0.5rem;
                --bs-btn-hover-color: var(--bd-blue);
                --bs-btn-hover-bg: #{shade-color($bd-blue, 10%)};
                --bs-btn-hover-border-color: #{shade-color($bd-blue, 10%)};
                --bs-btn-focus-shadow-rgb: var(--bd-blue-rgb);
                --bs-btn-active-color: var(--bs-btn-hover-color);
                --bs-btn-active-bg: #{shade-color($bd-blue, 20%)};
                --bs-btn-active-border-color: #{shade-color($bd-blue, 20%)};
            }

            .btn-bd-orange {
                --bs-btn-font-weight: 600;
                --bs-btn-color: var(--bs-white);
                --bs-btn-bg: var(--bd-orange);
                --bs-btn-border-color: var(--bd-orange);
                --bs-btn-border-radius: 0.5rem;
                --bs-btn-hover-color: var(--bd-orange);
                --bs-btn-hover-bg: #{shade-color($bd-orange, 10%)};
                --bs-btn-hover-border-color: #{shade-color($bd-orange, 10%)};
                --bs-btn-focus-shadow-rgb: var(--bd-orange-rgb);
                --bs-btn-active-color: var(--bs-btn-hover-color);
                --bs-btn-active-bg: #{shade-color($bd-orange, 20%)};
                --bs-btn-active-border-color: #{shade-color($bd-orange, 20%)};
            }

            .btn-bd-green {
                --bs-btn-font-weight: 600;
                --bs-btn-color: var(--bs-white);
                --bs-btn-bg: var(--bd-green);
                --bs-btn-border-color: var(--bd-green);
                --bs-btn-border-radius: 0.5rem;
                --bs-btn-hover-color: var(--bd-green);
                --bs-btn-hover-bg: #{shade-color($bd-green, 10%)};
                --bs-btn-hover-border-color: #{shade-color($bd-green, 10%)};
                --bs-btn-focus-shadow-rgb: var(--bd-green-rgb);
                --bs-btn-active-color: var(--bs-btn-hover-color);
                --bs-btn-active-bg: #{shade-color($bd-green, 20%)};
                --bs-btn-active-border-color: #{shade-color($bd-green, 20%)};
            }

            .btn-bd-green-teal {
                --bs-btn-font-weight: 600;
                --bs-btn-color: var(--bs-white);
                --bs-btn-bg: var(--bd-green-teal);
                --bs-btn-border-color: var(--bd-green-teal);
                --bs-btn-border-radius: 0.5rem;
                --bs-btn-hover-color: var(--bd-green-teal);
                --bs-btn-hover-bg: #{shade-color($bd-gree--bd-green-teal, 10%)};
                --bs-btn-hover-border-color: #{shade-color($bd-gree--bd-green-teal, 10%)};
                --bs-btn-focus-shadow-rgb: var(--bd-green-teal-rgb);
                --bs-btn-active-color: var(--bs-btn-hover-color);
                --bs-btn-active-bg: #{shade-color($bd-gree--bd-green-teal, 20%)};
                --bs-btn-active-border-color: #{shade-color(
     $bd-gree--bd-green-teal,
                20%)
            }

            ;
            }

            .btn-bd-purple {
                --bs-btn-font-weight: 600;
                --bs-btn-color: var(--bs-white);
                --bs-btn-bg: var(--bd-purple);
                --bs-btn-border-color: var(--bd-purple);
                --bs-btn-border-radius: 0.5rem;
                --bs-btn-hover-color: var(--bd-purple);
                --bs-btn-hover-bg: #{shade-color($bd-gree--bd-purple, 10%)};
                --bs-btn-hover-border-color: #{shade-color($bd-gree--bd-purple, 10%)};
                --bs-btn-focus-shadow-rgb: var(--bd-purple-rgb);
                --bs-btn-active-color: var(--bs-btn-hover-color);
                --bs-btn-active-bg: #{shade-color($bd-gree--bd-purple, 20%)};
                --bs-btn-active-border-color: #{shade-color($bd-gree--bd-purple, 20%)};
            }

            .btn-bd-orange-red {
                --bs-btn-font-weight: 600;
                --bs-btn-color: var(--bs-white);
                --bs-btn-bg: var(--bd-orange-red);
                --bs-btn-border-color: var(--bd-orange-red);
                --bs-btn-border-radius: 0.5rem;
                --bs-btn-hover-color: var(--bd-orange-red);
                --bs-btn-hover-bg: #{shade-color($bd-gree--bd-orange-red, 10%)};
                --bs-btn-hover-border-color: #{shade-color($bd-gree--bd-orange-red, 10%)};
                --bs-btn-focus-shadow-rgb: var(--bd-orange-red-rgb);
                --bs-btn-active-color: var(--bs-btn-hover-color);
                --bs-btn-active-bg: #{shade-color($bd-gree--bd-orange-red, 20%)};
                --bs-btn-active-border-color: #{shade-color(
     $bd-gree--bd-orange-red,
                20%)
            }

            ;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            p {
                font-family: "Poppins", sans-serif;
            }

            h2 {
                font-weight: 600;
            }

            h4 {
                font-weight: 500;
            }

            p {
                font-weight: 400;
            }

            .carousel-inner img {
                object-fit: contain;
            }

            .carousel-container {
                height: 20rem;
                width: 100%;
                overflow: hidden;
            }

            /* Carousel Size for Medium Screens (tablet) */
            @media (max-width: 992px) {
                .carousel-container {
                    width: 100%;
                    /* Lebar Carousel untuk tablet */
                    height: 15rem;
                    /* Tinggi Carousel untuk tablet */
                }
            }

            /* Carousel Size for Small Screens (mobile) */
            @media (max-width: 576px) {
                .carousel-container {
                    width: 100%;
                    /* Lebar Carousel otomatis untuk perangkat mobile */
                    height: 10rem;
                    /* Tinggi Carousel untuk perangkat mobile */
                }
            }

            .carousel-control-prev,
            .carousel-control-next {
                display: none;
            }
        </style>
    @endpush
