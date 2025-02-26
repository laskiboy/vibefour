@extends('layout.headerAsli')
@section('konten')
    <style>
        body {
            overflow-x: hidden;

        }

        .bg-image {
            background: url('img/wedding-decoration-Listing-and-Top-image123.jpg') center/cover no-repeat;
            width: 100%;
            height: 100vh;
            position: relative;
            top: 0;
            left: 0;
        }

        .conten-satu {
            -webkit-mask-image: linear-gradient(rgba(0, 0, 0, 1) 70%, rgba(0, 0, 0, 0));
            position: relative;
        }

        .tulisan {
            margin-top: -30px;
        }

        .collapse-trigger {
            position: relative;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .collapse-trigger.active::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0px;
            width: 70%;
            height: 5px;
            background-color: #8854BB;
            transform: translateX(-50%);
            opacity: 0;
            animation: underline-fade-slide 0.3s ease-in-out forwards;
        }

        @keyframes underline-fade-slide {
            0% {
                width: 0;
                opacity: 0;
            }

            100% {
                width: 70%;
                opacity: 1;
            }
        }

        .keunggulan-card {
            transition: 0.3s;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #ddd;
        }

        .keunggulan-card:hover {
            background: #f8f9fa;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .satu {
                margin-top: 90px;
            }

            .h1 {
                font-size: 45px !important;
            }

            .hadir {
                width: 100% !important;
            }

            .masyuk {
                width: 300px !important;
            }

            .visi {
                flex-direction: column !important;
            }

            .cisi {
                width: 80% !important;
                margin-bottom: 40px;
            }

            .keunggulan {
                margin-bottom: 50px;
            }
        }
    </style>

    {{-- konten pertama --}}
    <div class="bg-white satu vh-100 w-100 d-flex justify-content-around flex-column align-items-center">
        <div class="text w-75 d-flex justify-content-around flex-column align-items-center">
            <span class="atas px-2 py-1 rounded-pill text-primary" style="background-color: rgba(114, 181, 246, 0.4);">Tentang
                Kami
                VibeFour</span>
            <h1 class="atas h1 mt-4 text-center" style="font-weight: 600; font-size: 4em; font-family: 'Montserrat';">
                Memudahkan
                voting dan penjadwalan</h1>
            <p class="bawah hadir text-center mt-5" style="width: 45rem">VibeFour hadir sebagai solusi modern dalam
                pengelolaan
                voting
                digital dan penjadwalan
                acara.
                Dengan
                teknologi canggih dan sistem yang aman, kami membantu individu, komunitas, dan organisasi dalam membuat
                keputusan yang lebih efisien.</p style="width: 40rem">
            <a href="{{ route('login') }}">
                <button class="bawah btn masyuk shadow mt-4"
                    style="background-color: #72B5F6; color: #FFF; font-weight: 500; border-radius: 20px; width: 415px; height: 50px"><i
                        class="fa-solid fa-door-open me-2"></i> Masuk</button>
            </a>
        </div>
    </div>
    {{-- end konten pertama --}}

    {{-- konten kedua --}}
    <div class="bg-white atas w-100 d-flex justify-content-around flex-column align-items-center"
        style="margin-bottom: 150px;">
        <span class="fs-1 fw-bold mb-4" style="color: #000; font-family: 'Montserrat';">Tentang Kami</span>
        <span class="fs-5 w-75 text-center">VibeFour adalah platform digital yang menyediakan sistem voting dan penjadwalan
            otomatis
            untuk memudahkan organisasi dan komunitas dalam mengambil keputusan dan mengelola acara.</span>
    </div>
    {{-- end konten kedua --}}

    {{-- konten ketiga --}}
    <div class="bg-white visi d-flex justify-content-around flex-row align-items-center" style="margin-bottom: 150px">
        <div class="kiri cisi d-flex flex-column text-center" style="width: 500px">
            <span class="fs-3 fw-bold mb-4" style="color: #000; font-family: 'Montserrat';">Voting Digital</span>
            <span class="fs-5">Sistem voting yang efisien, aman, dan ramah lingkungan!</span>
        </div>
        <div class="kanan cisi d-flex flex-column text-center" style="width: 500px">
            <span class="fs-3 fw-bold mb-4" style="color: #000; font-family: 'Montserrat';">Penjadwalan Cerdas</span>
            <span class="fs-5">Sistem pengelolaan jadwal yang lebih rapi, cepat, dan efisien!</span>
        </div>
    </div>
    {{-- end konten ketiga --}}

    {{-- konten keempat --}}
    <div class="bg-light w-100 mt-5 d-flex justify-content-around flex-column align-items-center" style="padding: 80px 0">
        <h2 class="fw-bold mb-4 atas" style="font-family: 'Montserrat';">Visi & Misi Kami</h2>
        <div class="w-75 text-center">
            <div class="atas bg-white p-4 shadow rounded bg-white text-dark">
                <h4 class="fw-bold" style="font-family: 'Montserrat';">Visi</h4>
                <p>Menjadi platform digital terdepan dalam voting dan penjadwalan yang efisien dan transparan.
                </p>
            </div>
        </div>
        <div class="d-flex w-75 justify-content-between mt-4 text-center">
            <div style="width: 49%" class="kiri p-3 border rounded shadow-sm bg-white">
                <h5 class="mt-2" style="font-family: 'Montserrat';">Kolaboratif</h5>
                <p>Meningkatkan efisiensi kerja dengan teknologi modern.</p>
            </div>
            <div style="width: 49%" class="kanan p-3 border rounded shadow-sm bg-white">
                <h5 class="mt-2" style="font-family: 'Montserrat';">Keamanan</h5>
                <p>Menjamin data pengguna tetap aman dan terlindungi.</p>
            </div>
        </div>
    </div>
    {{-- end konten keempat --}}

    {{-- konten kelima --}}
    <section class="keunggulan-section text-center" style="padding: 80px 0">
        <div class="container">
            <h2 class="atas fw-bold mb-5" style="font-family: 'Montserrat';">Keunggulan VibeFour</h2>
            <div class="row">
                <div class="kiri keunggulan col-md-4">
                    <div class="keunggulan-card">
                        <i class="fas fa-clock fa-3x"></i>
                        <h5 class="mt-3" style="font-family: 'Montserrat';">Cepat & Mudah</h5>
                        <p>Proses voting dan penjadwalan hanya dalam hitungan detik.</p>
                    </div>
                </div>
                <div class="bawah keunggulan col-md-4">
                    <div class="keunggulan-card">
                        <i class="fas fa-user-lock fa-3x"></i>
                        <h5 class="mt-3" style="font-family: 'Montserrat';">Aman & Transparan</h5>
                        <p>Data terlindungi dengan enkripsi tingkat tinggi.</p>
                    </div>
                </div>
                <div class="kanan keunggulan col-md-4">
                    <div class="keunggulan-card">
                        <i class="fas fa-thumbs-up fa-3x"></i>
                        <h5 class="mt-3" style="font-family: 'Montserrat';">Terpercaya</h5>
                        <p>Dipercaya oleh berbagai organisasi dan komunitas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end konten kelima --}}

    {{-- footer --}}
    @include('layout.footer')
@endsection
