@extends('layout.headerAsli')
<style>
    @media (max-width: 768px) {
        .atu {
            margin-bottom: 50px !important;
        }

        .span-title {
            margin-left: 30px !important;
            margin-top: 10px !important
        }

        body .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 !important;
        }

        .berita {
            margin-top: 50px !important;
            width: 100% !important;
            flex-direction: column !important;
        }

        .berita .card {
            width: 90% !important;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 0 !important;
        }

        .card img {
            width: 100%;
        }

        .berita .isi {
            margin-top: 20px;
            width: 80% !important;
            margin-left: 0 !important;
        }

        .isi .span {
            width: 90% !important;
        }
    }
</style>
@section('konten')
    {{-- konten pertama --}}
    <div style="margin-bottom: 130px" class="atu">
        <div id="carouselExample" class="carousel slide" style="margin-top: 80px" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="{{ url('/detail-berita') }}">
                        <img style="filter: brightness(90%); width: 100%; object-fit: cover;" src="{{ asset('img/hn.jpg') }}"
                            height="600" class="d-block w-100" alt="Slide 1">
                    </a>
                </div>
                <div class="carousel-item">
                    <img style="filter: brightness(90%); width: 100%; object-fit: cover" src="{{ asset('img/nws.jpg') }}"
                        height="600" class="d-block w-100" alt="Slide 3">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{-- end konten pertama --}}

    {{-- konten kedua --}}
    <span class="fs-2 fw-bold span-title mt-5" style="color: #72B5F6; margin-left: 48px">@lang('berita.jdudl_berita')</span>
    <div class="container m-5">
        <div class="berita d-flex justify-content-center align-items-center" style="margin-top: 120px">
            <div class="card me-5 kiri" style="width: 35%; height: 15rem; border-radius: 20px">
                <img style="height: 15rem; object-fit: cover; border-radius: 20px" src="{{ asset('img/hn.jpg') }}"
                    alt="">
            </div>
            <div class="ms-5 kanan isi d-flex flex-column w-50">
                <a class="detail-berita text-dark mb-3" style="text-decoration: none" href="{{ url('/detail-berita') }}">
                    <span class="fs-5 fw-bold">Baru !!! VibeFour Kini Hadir untuk Memudahkan Pengguna</span>
                </a>
                <span class="w-50 span mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat optio neque
                    asperiores
                    id beatae aut
                    rerum repudiandae consequuntur delectus ullam.</span>
                <span class="" style="color: #ABABAB">10 Februari 2025</span>
            </div>
        </div>
    </div>

    <div class="container m-5" style="margin-bottom: 150px !important">
        <div class="berita d-flex justify-content-center align-items-center" style="margin-top: 120px">
            <div class="card me-5 kiri" style="width: 35%; height: 15rem; border-radius: 20px">
                <img style="height: 15rem; object-fit: cover; border-radius: 20px" src="{{ asset('img/nws.jpg') }}"
                    alt="">
            </div>
            <div class="ms-5 kanan isi d-flex flex-column w-50">
                <a class="detail-berita text-dark mb-3" style="text-decoration: none" href="{{ url('/detail-berita') }}">
                    <span class="fs-5 fw-bold ">VibeFour Membantu Rapat Besar Perusahaan dengan 1000+ Peserta</span>
                </a>
                <span class="w-50 span mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat optio neque
                    asperiores
                    id beatae aut
                    rerum repudiandae consequuntur delectus ullam.</span>
                <span class="" style="color: #ABABAB">10 Februari 2025</span>
            </div>
        </div>
    </div>
    {{-- end konten kedua --}}

    {{-- footer --}}
    @include('layout.footer')
@endsection
