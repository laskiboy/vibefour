@extends('layout.headerAsli')

@section('konten')
    {{-- konten pertama --}}
    <div style="margin-bottom: 130px">
        <div id="carouselExample" class="carousel slide" style="margin-top: 80px" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="{{ url('/detail-berita') }}">
                        <img style="filter: brightness(90%); width: 100%; object-fit: cover;"
                            src="{{ asset('img/nice.webp') }}" height="600" class="d-block w-100" alt="Slide 1">
                    </a>
                </div>
                <div class="carousel-item">
                    <img style="filter: brightness(90%); width: 100%; object-fit: cover"
                        src="{{ asset('img/motionime.webp') }}" height="600" class="d-block w-100" alt="Slide 3">
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
    <div class="container m-5">
        <span class="fs-2 fw-bold span-title mt-5" style="color: #72B5F6; margin-left: 48px">Berita Utama</span>
        <div class="berita d-flex justify-content-center align-items-center" style="margin-top: 120px">
            <div class="card me-5 kiri" style="width: 35%; height: 15rem; border-radius: 20px">
                <img style="height: 15rem; object-fit: cover; border-radius: 20px" src="{{ asset('img/nice.webp') }}"
                    alt="">
            </div>
            <div class="ms-5 kanan isi d-flex flex-column w-50">
                <a class="detail-berita text-dark mb-3" style="text-decoration: none" href="{{ url('/detail-berita') }}">
                    <span class="fs-5 fw-bold">Pernikahan terbaik tahun ini</span>
                </a>
                <span class="w-50 mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat optio neque
                    asperiores
                    id beatae aut
                    rerum repudiandae consequuntur delectus ullam.</span>
                <span class="" style="color: #ABABAB">10 Februari 2025</span>
            </div>
        </div>
    </div>

    <div class="container m-5">
        <div class="berita d-flex justify-content-center align-items-center" style="margin-top: 120px">
            <div class="card me-5 kiri" style="width: 35%; height: 15rem; border-radius: 20px">
                <img style="height: 15rem; object-fit: cover; border-radius: 20px" src="{{ asset('img/motionime.webp') }}"
                    alt="">
            </div>
            <div class="ms-5 kanan isi d-flex flex-column w-50">
                <a class="detail-berita text-dark mb-3" style="text-decoration: none" href="{{ url('/detail-berita') }}">
                    <span class="fs-5 fw-bold ">Motion Ime Event Terbaik</span>
                </a>
                <span class="w-50 mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat optio neque
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
