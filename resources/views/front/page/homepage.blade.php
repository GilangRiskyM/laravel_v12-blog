@extends('front.layout')
@section('title', 'Halaman Awal')
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url({{ asset('/front/img/cover-homepage.jpg') }})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Selamat Datang</h1>
                        <span class="subheading">di website resmi Elmuna Kebumen</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Elmuna Kebumen adalah lembaga pelatihan kerja di Kebumen, Jawa Tengah, yang berkomitmen memberikan
                        keterampilan praktis dan profesional untuk mendukung pengembangan sumber daya manusia. Lembaga ini
                        menawarkan berbagai kursus pelatihan yang dirancang untuk memenuhi kebutuhan dunia kerja dan
                        membantu peserta meningkatkan daya saing mereka. Program pelatihan yang tersedia meliputi:</p>

                    <ul>
                        <li><strong>Kursus Microsoft Office</strong>: Pelatihan penggunaan aplikasi Microsoft Office seperti
                            Word, Excel, dan PowerPoint untuk meningkatkan produktivitas kerja.</li>
                        <li><strong>Kursus Bahasa Inggris</strong>: Pembelajaran Bahasa Inggris mulai dari dasar hingga
                            lanjutan untuk keperluan komunikasi profesional dan akademik.</li>
                        <li><strong>Kursus Mengemudi</strong>: Pelatihan mengemudi yang profesional dan aman, disertai
                            pemahaman aturan lalu lintas.</li>
                        <li><strong>Kursus Desain Grafis</strong>: Mengajarkan teknik desain menggunakan software seperti
                            Adobe Photoshop dan Illustrator untuk kebutuhan kreatif dan profesional.</li>
                        <li><strong>Kursus Video Editing</strong>: Pelatihan pengeditan video dengan perangkat lunak seperti
                            Adobe Premiere Pro, cocok untuk pembuatan konten kreatif.</li>
                        <li><strong>Kursus Public Speaking</strong>: Meningkatkan keterampilan berbicara di depan umum
                            dengan percaya diri dan efektif.</li>
                        <li><strong>Kursus Pemrograman Web</strong>: Membekali peserta dengan kemampuan membuat dan
                            mengelola website menggunakan HTML, CSS, JavaScript, dan framework lainnya.</li>
                        <li><strong>Kursus Digital Marketing</strong>: Pelatihan strategi pemasaran digital, termasuk SEO,
                            media sosial, dan iklan online, untuk mendukung bisnis di era digital.</li>
                    </ul>

                    <p>Dengan pendekatan pembelajaran yang interaktif dan instruktur berpengalaman, Elmuna Kebumen bertujuan
                        mencetak individu yang siap bersaing di dunia kerja dan mendukung transformasi digital di berbagai
                        sektor.</p>
                </div>
            </div>
        </div>
    </main>
@endsection
