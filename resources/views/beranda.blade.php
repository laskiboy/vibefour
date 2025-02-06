@extends('layout.header')
<style>
    .bg-image {
        background: url('img/aleksandr-popov-hTv8aaPziOQ-unsplash.jpg') center/cover no-repeat;
        width: 100%;
        height: 100vh;
        filter: brightness(50%);
        position: relative;
        top: 0;
        left: 0;
    }

    .conten-satu {
        -webkit-mask-image: linear-gradient(rgba(0, 0, 0, 1) 70%, rgba(0, 0, 0, 0));
        position: relative;
    }

    .content-wrapper {
        width: 100%;
        height: 100vh;
        /* padding-top: 10px; */
    }

    .tulisan {
        margin-top: -30px;
    }
</style>

@section('konten')
    {{-- konten pertama --}}
    <div class="conten-satu">
        <div class="content-wrapper">
            <div class="bg-image"></div>

            <div class="position-fixed top-50 oi start-50 translate-middle text-white text-center tulisan">
                <span style="color: #72B5F6" class="fw-bold fs-1">VibeFour</span> <span style="color: #8854BB"
                    class="fw-bold fs-1">To Everyone</span>
            </div>
        </div>
    </div>
    {{-- end konten pertama --}}

    {{-- konten kedua --}}
    <div class="d-flex flex-column align-items-center bg-dark vh-100 m-5">
        <span class="fs-2 fw-bold span-title" style="color: #72B5F6;">Fitur Unggulan</span>
        <span class="mb-5 span-sub" style="color: #dbdbdb;">Kami menyediakan dua fitur unggulan dari produk kami</span>
        <div class="satu d-flex w-100 align-items-center mt-5 justify-content-around">
            <div class="fitur">
                <span style="color: #8854BB" class="fw-bold fs-5">Fitur Voting</span>
                <ul>
                    <li style="color: #dbdbdb;">Keamanan vote terjamin</li>
                    <li style="color: #dbdbdb;">Penggunaan kurun waktu</li>
                    <li style="color: #dbdbdb;">Penggunaan filterisasi</li>
                </ul>
            </div>
            <div class="card"
                style="width: 30rem; height: 15rem; margin: 20px; border-radius: 20px; background-color: #adadad">
            </div>
        </div>
        <div class="dua d-flex w-100 align-items-center mt-5 justify-content-around ">
            <div class="card-2"
                style="width: 30rem; height: 15rem; margin: 20px; border-radius: 20px; background-color: #adadad">
            </div>
            <div class="fitur-2 text-end">
                <span style="color: #8854BB" class="fw-bold fs-5">Fitur Penjadwalan</span>
                <ul style="direction: rtl;">
                    <li style="color: #dbdbdb;">Terdapat fitur membuat group</li>
                    <li style="color: #dbdbdb;">Pemilihan jadwal secara flexible</li>
                    <li style="color: #dbdbdb;">Tidak ada bentrokan jadwal</li>
                </ul>
            </div>
        </div>
    </div>
    {{-- end konten kedua --}}

    {{-- konten ketiga --}}
    <div class="bg-light vh-100 d-flex justify-content-center flex-column align-items-center">
        <span class="fs-2 fw-bold  span-title" style="color: #72B5F6; margin-bottom: 70px">Pencapaian Kami</span>
        <div class="cart w-100 d-flex justify-content-evenly">
            <div class="card-1 shadow d-flex justify-content-center align-items-center"
                style="width: 17rem; height: 20rem; margin: 20px; border-radius: 20px; background-color: #72B5F6">
                <img src="{{ asset('img/phone.png') }}" class="position-absolute" style="margin-top: -250px" width="350px">
                <div class="d-flex flex-column mt-auto">
                    <p class="fs-4 fw-bold">123 ribu+</p>
                    <p class="fs-5 mb-5">Pengunjung Website</p>
                </div>
            </div>
            <div class="card-duwa shadow d-flex justify-content-center flex-row align-items-center"
                style="width: 17rem; height: 20rem; margin: 20px; border-radius: 20px; background-color: #8854BB">
                <img src="{{ asset('img/party.png') }}" class="position-absolute" style="margin-top: -250" width="230px">
                <div class="d-flex flex-column mt-auto">
                    <p class="fs-4 text-light fw-bold">100+</p>
                    <p class="fs-5 text-light mb-5">Penggunaan Fitur</p>
                </div>
            </div>
            <div class="card-3 shadow d-flex justify-content-center align-items-center"
                style="width: 17rem; height: 20rem; margin: 20px; border-radius: 20px; background-color: #72B5F6">
                <img src="{{ asset('img/laptop.png') }}" class="position-absolute" style="margin-top: -200px"
                    width="350px">
                <div class="d-flex flex-column mt-auto">
                    <p class="fs-4 fw-bold">100 ribu+</p>
                    <p class="fs-5 mb-5">Member Aktif</p>
                </div>
            </div>
        </div>
    </div>
    {{-- end konten ketiga --}}

    {{-- konten keempat --}}
    <div class="bg-light vh-100 d-flex justify-content-center flex-column align-items-center pb-5">
        <span class="fs-2 fw-bold  span-title" style="color: #72B5F6; margin-bottom: 70px">Dokumentasi</span>
        <div class="container mt-5">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="border-radius: 20px; object-fit: cover"
                            src="{{ asset('img/dc3ac80641ce03d85fffcb9e0f96396a-ezgif.com-optiwebp.webp') }}" width="900"
                            height="550" class="d-block w-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img style="border-radius: 20px; object-fit: cover"
                            src="{{ asset('img/Mobile-Legends_Stage-Playoff-MPL-ID-S11.jpeg') }}" width="900"
                            height="550" class="d-block w-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img style="border-radius: 20px; object-fit: cover" src="{{ asset('img/CAP01310.jpg') }}"
                            width="900" height="550" class="d-block w-100" alt="Slide 3">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    {{-- end konten keempat --}}

    {{-- footer --}}
    @include('layout.footer')

@endsection
