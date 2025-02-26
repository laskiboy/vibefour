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

        /* .fitur-1:hover {
                        padding: 20px;
                        border-radius: 20px;
                        transform: scale(1.05);
                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                    } */

        .video {
            display: none;
        }

        @media (max-width: 768px) {
            .satu {
                flex-direction: column !important;
                margin-top: 50px;
                justify-content: center !important;
                height: 100% !important;
            }

            .h1 {
                font-size: 45px !important;
            }

            .blob {
                display: none;
            }

            .marlef {
                margin-left: 0 !important;
                /* margin-top: 200px !important; */
                width: 83% !important;
                text-align: center !important;
                align-items: center !important;
            }

            .vib {
                width: 100% !important;
            }

            .lihat {
                display: none !important;
            }

            .dua {
                margin-top: 50px !important;
            }

            .video {
                display: block;
                opacity: 1;
                transition: opacity 0.5s ease-in-out;
                margin-top: 40px;
                border-radius: 20px;
            }

            .ketiga {
                height: 100% !important;
            }

            .dua {
                justify-content: center !important;
                align-items: center !important;
                flex-direction: column !important;
            }

            #testimonialCarousel {
                width: 300px;
            }

            #testimonialCarousel .carousel-inner img {
                width: 100%;
                height: 300px;
                margin-bottom: 50px;
            }

            .fitir {
                width: 80% !important;
                display: flex;
                justify-content: center !important;
                align-items: center !important;
                text-align: center !important;
                margin-top: 30px;
                margin-bottom: 0 !important;
            }

            .fitur {
                flex-direction: column !important;
                display: flex;
                justify-content: center !important;
                align-items: center !important;
            }

            .husus {
                margin-left: 0 !important;
            }

            .tiga {
                flex-direction: column !important;
            }

            .isi {
                margin-bottom: 30px;
            }

            .fitur-1 {
                display: flex;
                flex-direction: row;
                align-items: center;
                width: 100% !important;
                margin-bottom: 30px !important;
            }

            .fitur-1 i {
                margin-right: 20px;
            }

            .fitur-1 .klas {
                display: flex;
                text-align: start;
                flex-direction: column;
            }

            .span-bergabung {
                text-align: center;
                margin-bottom: 40px !important;
            }

            .kiri .unggul {
                width: 100% !important;
            }
        }
    </style>

    {{-- konten pertama --}}
    <div class="satu bg-white w-100 vh-100 d-flex justify-content-evenly flex-row align-items-center">
        <div class="left marlef w-50 ms-5">
            <div class="mb-5 mt-5 atas">
                <span class="h1" style="color: #000; font-family: 'Montserrat'; font-weight: 600; font-size: 4em;">Apa Itu
                    Sistem
                    Penjadwalan
                    VibeFour?</span><br>
            </div>
            <div class="kiri vib" style="width: 90%">
                <span>VibeFour menghadirkan solusi penjadwalan digital yang efisien dan otomatis, dirancang untuk membantu
                    organisasi, komunitas, dan event dalam mengatur jadwal dengan lebih mudah, akurat, dan fleksibel. Dengan
                    fitur canggih, platform ini memungkinkan pengguna untuk membuat, mengelola, dan berbagi jadwal dengan
                    lebih terorganisir, sehingga tidak ada lagi jadwal bentrok atau miskomunikasi.</span>
            </div>
            <div class="tombol">
                <button onclick="window.location.href='{{ route('login') }}'" class="bawah btn shadow mb-3 mt-5"
                    style="background-color: #72B5F6; color: #FFF; font-weight: 500; border-radius: 20px; width: 250px; height: 50px"><i
                        class="fa-solid fa-rocket me-2"></i> Coba Fitur</button>
                <button type="button" class="bawah lihat btn btn-secondary shadow ms-4 mb-3 mt-5" data-bs-toggle="modal"
                    data-bs-target="#modalVideo" style="border-radius: 20px; width: 200px; height: 50px"><i
                        class="fa-regular fa-circle-play me-2 fs-5"></i> Lihat Tutorial</button>
                <video controls class="video shadow-lg" style="width: 100%;" preload="auto">
                    <source src="{{ asset('img/video.mp4') }}" type="video/mp4">
                </video>
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
        <img class="shadow-lg blob mt-5 kanan" src="{{ asset('img/penjadwalan.png') }}"
            style="border-radius: 20px; width: 500px; z-index: 1" alt="voting">
        <span class="kanan blob mt-5" style="position: absolute; right: 0; margin-right: 20px; overflow: hidden;">
            <img width="450" src="{{ asset('img/svg.gif') }}" alt="">
        </span>
    </div>
    {{-- end konten pertama --}}

    {{-- konten kedua --}}
    <div class="kiri dua d-flex w-100 justify-content-around flex-row align-item-center">

        <div style="width: 50%" class="d-flex fitir justify-content-center flex-column mb-5">
            <div class="kiri d-flex flex-column">
                <span class="fs-2 unggul fw-bold" style="color: #72B5F6; font-family: 'Montserrat';">Fitur unggulan
                    penjadwalan</span>
                <span class="my-4">Dengan VibeFour, pengelolaan jadwal jadi lebih rapi, cepat, dan efisien!</span>
                <div class="fitur d-flex justify-content-start flex-row mt-4">
                    <div class="fitur-1" style="width: 40%;">
                        <i class="fa-solid fa-address-card fs-2 mb-4" style="color: #8854BB;"></i><br>
                        <div class="klas">
                            <strong class="fs-5" style="color: #72B5F6; font-family: 'Montserrat';">Undang
                                temanmu</strong>
                            <p class="mt-2">Pada fitur penjadwalan, kamu bisa langsung mengirim undangan walapun temanmu
                                belum
                                punya
                                akun</p>
                        </div>
                    </div>
                    <div class="fitur-1 husus ms-4" style="width: 40%;">
                        <i class="fa-solid fa-square-check fs-2 mb-4" style="color: #8854BB;"></i>
                        <div class="klas">
                            <strong class="fs-5" style="color: #72B5F6; font-family: 'Montserrat';">Menambahkan
                                ketersediaan</strong>
                            <p class="mt-2">Anda bisa menambah ketersediaan untuk mempermudah pembuat jadwal menentukan
                                jadwal
                                tanpa
                                menunggu konfirmasi</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
    </div>
    {{-- end konten kedua --}}

    {{-- konten kelima --}}
    <div class="bg-white ketiga vh-100 d-flex justify-content-center flex-column align-items-center">
        <span class="fs-2 fw-bold span-bergabung span-title"
            style="color: #72B5F6; margin-bottom: 70px; font-family: 'Montserrat';">Bergabung Bersama
            VibeFour</span>

        <div class="d-flex tiga justify-content-evenly mt-4 w-75">
            <div class="card isi kiri shadow-sm p-3" style="height: 24rem; width: 280px; border-radius: 20px">
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
            <div class="card isi bawah shadow-sm p-3" style="height: 24rem; width: 280px; border-radius: 20px">
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
            <div class="card isi kanan shadow-sm p-3" style="height: 24rem; width: 280px; border-radius: 20px">
                <div class="card-body">
                    <h6>Pro Plan Annual</h6>
                    <span class="fw-bold fs-4">Rp. 570.000 </span><span>/ Tahun</span>
                    <hr>
                    <p>Penggunaan akses full</p>
                    <p>Tanpa batasan penggunaan fi<i class="fa-solid fa-address-card"></i>tur</p>
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
