@extends('layout.headerAsli')

@section('konten')
    <style>
        body {
            overflow-x: hidden;
        }

        .kartu {
            transition: all 0.3s ease;
            cursor: default;
        }

        .kartu:hover {
            transform: translateY(-20px) !important;
        }

        .modal-dialog {
            height: 90%;
        }

        .modal-content {
            height: 65%;
        }


        #testimonialCarousel {
            max-width: 500px;
            border-radius: 20px;
            overflow: hidden;
        }

        #testimonialCarousel .carousel-inner img {
            width: 100%;
            height: 500px;
            border-radius: 20px;
        }

        .fitur-1 {
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .fitur-1:hover {
            padding: 20px;
            border-radius: 20px;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>

    {{-- konten pertama --}}
    <div class="bg-white w-100 mb-5 vh-100 d-flex justify-content-evenly flex-row align-items-center">
        <div class="left w-50 ms-5">
            <div class="w-75 mb-5 mt-5 atas">
                <span style="color: #000; font-weight: 600; font-size: 4em;">Apa Itu Sistem Penjadwalan
                    VibeFour?</span><br>
            </div>
            <div class="kiri" style="width: 90%">
                <span>VibeFour menghadirkan solusi penjadwalan digital yang efisien dan otomatis, dirancang untuk membantu
                    organisasi, komunitas, dan event dalam mengatur jadwal dengan lebih mudah, akurat, dan fleksibel. Dengan
                    fitur canggih, platform ini memungkinkan pengguna untuk membuat, mengelola, dan berbagi jadwal dengan
                    lebih terorganisir, sehingga tidak ada lagi jadwal bentrok atau miskomunikasi.</span>
            </div>
            <div class="tombol">
                <button href="{{ route('login') }}" class="bawah btn shadow mb-3 mt-5"
                    style="background-color: #72B5F6; color: #FFF; font-weight: 500; border-radius: 20px; width: 250px; height: 50px">
                    Coba Fitur</button>
                <button type="button" class="bawah btn btn-secondary shadow ms-4 mb-3 mt-5" data-bs-toggle="modal"
                    data-bs-target="#modalVideo" style="border-radius: 20px; width: 200px; height: 50px"><i
                        class="fa-regular fa-circle-play me-2 fs-5"></i> Lihat Tutorial</button>
                <div class="modal fade" id="modalVideo" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body d-flex justify-content-center align-items-center">
                                <video controls style="width: 100%" src="{{ asset('img/video.mp4') }}"></video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="shadow-lg mt-5 kanan" src="{{ asset('img/penjadwalan.png') }}"
            style="border-radius: 20px; width: 500px; z-index: 1" alt="voting">
        <span class="kanan mt-5" style="position: absolute; right: 0; margin-right: 20px; overflow: hidden;">
            <img width="450" src="{{ asset('img/svg.gif') }}" alt="">
        </span>
    </div>
    {{-- end konten pertama --}}

    {{-- konten kedua --}}
    <div class="kiri d-flex w-100 justify-content-around flex-row align-item-center">
        <div id="testimonialCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="object-fit: cover" src="{{ asset('img/vitur4.png') }}" width="500" alt="">
                </div>
                <div class="carousel-item">
                    <img style="object-fit: cover" src="{{ asset('img/vitur5.png') }}" width="500" alt="">
                </div>
            </div>
        </div>
        <div style="width: 50%" class="d-flex justify-content-center flex-column mb-5">
            <div class="kiri d-flex flex-column">
                <span class="fs-2 fw-bold" style="color: #72B5F6;">Fitur unggulan penjadwalan</span>
                <span class="my-4">Dengan VibeFour, pengelolaan jadwal jadi lebih rapi, cepat, dan efisien!</span>
                <div class="fitur d-flex justify-content-start flex-row mt-4">
                    <div class="fitur-1" style="width: 40%;">
                        <i class="fa-solid fa-lock fs-2 mb-4" style="color: #8854BB;"></i><br>
                        <strong style="color: #72B5F6">Undang temanmu yang belum punya akun</strong>
                        <p>Pada fitur penjadwalan, kamu bisa langsung mengirim undangan walapun temanmu belum punya
                            akun</p>
                    </div>
                    <div class="fitur-1 ms-4" style="width: 40%;">
                        <i class="fa-solid fa-face-smile fs-2 mb-4" style="color: #8854BB;"></i><br>
                        <strong style="color: #72B5F6">Menambahkan ketersediaan</strong>
                        <p>Anda bisa menambah ketersediaan untuk mempermudah pembuat jadwal menentukan jadwal tanpa
                            menunggu konfirmasi</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- end konten kedua --}}

    {{-- konten kelima --}}
    <div class="bg-white vh-100 d-flex justify-content-center flex-column align-items-center">
        <span class="fs-2 fw-bold  span-title" style="color: #72B5F6; margin-bottom: 70px">Bergabung Bersama
            VibeFour</span>

        <div class="d-flex justify-content-evenly mt-4 w-75">
            <div class="card kiri shadow-sm p-3" style="height: 24rem; width: 280px; border-radius: 20px">
                <div class="card-body">
                    <h6>Basic</h6>
                    <h4 class="fw-bold">Gratis</h4>
                    <hr>
                    <p>Memberikan akses trial</p>
                    <p>Penggunaan fitur sebanyak 10 kali</p>
                    <a href="#" class="btn"
                        style="width: 100%; background-color: #8854BB; color: white; border-radius: 20px">Pilih
                        Paket</a>
                </div>
            </div>
            <div class="card bawah shadow-sm p-3" style="height: 24rem; width: 280px; border-radius: 20px">
                <div class="card-body">
                    <h6>Pro Plan Monthly</h6>
                    <span class="fw-bold fs-4">Rp. 50.000 </span><span>/ Bulan</span>
                    <hr>
                    <p>Penggunaan akses full</p>
                    <p>Tanpa batasan penggunaan fitur</p>
                    <p>Langganan Bulanan</p>
                    <a href="#" class="btn"
                        style="width: 100%; background-color: #8854BB; color: white; border-radius: 20px">Pilih
                        Paket</a>
                </div>
            </div>
            <div class="card kanan shadow-sm p-3" style="height: 24rem; width: 280px; border-radius: 20px">
                <div class="card-body">
                    <h6>Pro Plan Annual</h6>
                    <span class="fw-bold fs-4">Rp. 570.000 </span><span>/ Tahun</span>
                    <hr>
                    <p>Penggunaan akses full</p>
                    <p>Tanpa batasan penggunaan fitur</p>
                    <p>Langganan Tahunan</p>
                    <a href="#" class="btn"
                        style="width: 100%; background-color: #8854BB; color: white; border-radius: 20px">Pilih
                        Paket</a>
                </div>
            </div>
        </div>
    </div>
    {{-- end konten kelima --}}
    {{-- footer --}}
    @include('layout.footer')
@endsection
