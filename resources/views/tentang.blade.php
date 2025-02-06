@extends('layout.header')
@section('konten')
    <style>
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
    </style>

    {{-- konten pertama --}}
    <div class="conten-satu">
        <div class="content-wrapper vh-100 w-100">
            <div class="bg-image"></div>

            <div class="position-fixed top-50 oi start-50 translate-middle text-white text-center tulisan">
                <span style="color: #72B5F6" class="fw-bold fs-1">VibeFour</span><br><span style="color: #FFF"
                    class="fw-bold fs-4">Mengubah Setiap Mimpi dan Ide Menjadi Perayaan Tak Terlupakan yang Penuh
                    Makna</span>
            </div>
        </div>
    </div>
    {{-- end konten pertama --}}

    {{-- konten kedua --}}
    <div class="bg-dark vh-100 w-100 d-flex justify-content-around flex-row align-items-center">
        <div class="kiri-1 d-flex w-50 flex-column">
            <span class="fs-1 fw-bold mb-4" style="color: #fff">Tentang Kami</span>
            <span class="fs-5 text-light w-75">Selamat datang di VibeFour, platform inovatif yang menghadirkan solusi cerdas
                dalam
                pengaplikasian voting dan penjadwalan. Kami hadir untuk memberikan pengalaman yang lebih efisien,
                transparan,
                dan mudah digunakan dalam berbagai kebutuhan, mulai dari event organizer, komunitas, hingga
                perusahaan.</span>
        </div>
        <img class="gambar-1" src="{{ asset('img/building-3d-render-icon-illustration-png.webp') }}" alt="">
    </div>
    {{-- end konten kedua --}}

    {{-- konten ketiga --}}
    <div class="bg-light vh-100 d-flex justify-content-around flex-row align-items-center">
        <img class="gambar-2"
            src="{{ asset('img/to-do-list-3d-icon-download-in-png-blend-fbx-gltf-file-formats--clipboard-report-document-business-management-pack-icons-4056642.webp') }}"
            alt="">
        <div class="kiri-2 d-flex  flex-column" style="width: 500px">
            <span class="fs-1 fw-bold mb-4" style="color: #000">Siapa Kami?</span>
            <span class="fs-5">VibeFour adalah brand yang didedikasikan untuk menciptakan sistem voting dan penjadwalan
                yang modern dan praktis. Dengan teknologi yang canggih dan user-friendly, kami membantu mempermudah
                pengambilan keputusan dan pengelolaan jadwal secara lebih terorganisir.</span>
        </div>
    </div>
    {{-- end konten ketiga --}}

    {{-- konten keempat --}}
    <div class="bg-light vh-100 w-100 d-flex justify-content-around flex-row align-items-center">
        <div class="kiri-1 d-flex w-50 flex-column">
            <span class="fs-1 fw-bold mb-4" style="color: #000">Mengapa Memilih VibeFour?</span>
            <div class="d-flex">
                <button style="color: #000" data-bs-toggle="collapse" href="#multiCollapseExample1"
                    class="fs-3 badge me-5 fw-bold mb-4" role="button" aria-expanded="true"
                    aria-controls="multiCollapseExample1">1</button>
                <button style="color: #000" data-bs-toggle="collapse" href="#multiCollapseExample2"
                    class="fs-3 badge me-5 fw-bold mb-4" role="button" aria-expanded="false"
                    aria-controls="multiCollapseExample2">2</button>
                <button style="color: #000" data-bs-toggle="collapse" href="#multiCollapseExample3"
                    class="fs-3 badge me-5 fw-bold mb-4" role="button" aria-expanded="false"
                    aria-controls="multiCollapseExample3">3</button>
            </div>

            <div id="collapseGroup">
                <div class="collapse multi-collapse show" id="multiCollapseExample1" data-bs-parent="#collapseGroup">
                    <span class="fs-5 w-75">Mudah Digunakan : Antarmuka yang intuitif untuk pengalaman pengguna yang lebih
                        baik.</span>
                </div>
                <div class="collapse multi-collapse" id="multiCollapseExample2" data-bs-parent="#collapseGroup">
                    <span class="fs-5 w-75">Akurat & Transparan : Data yang valid dan terpercaya untuk proses yang
                        adil.</span>
                </div>
                <div class="collapse multi-collapse" id="multiCollapseExample3" data-bs-parent="#collapseGroup">
                    <span class="fs-5 w-75">Fleksibel & Adaptif : Cocok untuk berbagai kebutuhan, baik personal maupun
                        profesional.</span>
                </div>
            </div>
        </div>

        <img class="gambar-1" src="{{ asset('img/image.png') }}" width="300" alt="">
    </div>
    {{-- end konten keempat --}}

    {{-- footer --}}
    @include('layout.footer')
@endsection
