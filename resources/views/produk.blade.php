@extends('layout.headerAsli')

@section('konten')
    <style>
        .step-number {
            width: 40px;
            height: 40px;
            background-color: #5DA9FF;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin: 0 auto 1rem;
            position: relative;
            z-index: 1;
        }

        .step-container {
            position: relative;
        }

        .step-connector {
            position: absolute;
            top: 20px;
            left: 25%;
            right: 25%;
            height: 4px;
            background-color: #5DA9FF;
            z-index: 0;
        }

        .step-number2 {
            width: 40px;
            height: 40px;
            background-color: #8854BB;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin: 0 auto 1rem;
            position: relative;
            z-index: 1;
        }

        .step-container2 {
            position: relative;
        }

        .step-connector2 {
            position: absolute;
            top: 20px;
            left: 15%;
            right: 15%;
            height: 4px;
            background-color: #8854BB;
            z-index: 0;
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
            bottom: -10px;
            width: 300%;
            height: 5px;
            background-color: #72B5F6;
            transform: translateX(-50%);
            opacity: 0;
            animation: underline-fade-slide 0.3s ease-in-out forwards;
        }

        .collapse-trigger-2 {
            position: relative;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .collapse-trigger-2.active::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -10px;
            width: 300%;
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
                width: 300%;
                opacity: 1;
            }
        }
    </style>

    {{-- konten pertama --}}
    <div class="bg-light w-100 d-flex justify-content-around flex-column align-items-center">
        <span class="fs-2 fw-bold  span-title" style="color: #72B5F6; margin-bottom: 20px; margin-top: 140px;">Voting</span>
        <span class="mb-5 fs-4 fw-bold span-sub" style="color: #000;">Keunggulan Produk Kami</span>
        <div class="d-flex flex-row justify-content-evenly w-100" style="margin-bottom: 7rem">
            <div class="card kiri shadow p-5" style="width: 25rem; height: 14rem; border-radius: 20px;">
                <i class="fa-solid fa-lock fs-1 mb-4" style="color: #72B5F6"></i>
                <span class="fw-bold fs-5">Keamanan Voting</span>
                <span>Pembuat vote bisa menambahkan kode room </span>
            </div>
            <div class="card bawah shadow p-5" style="width: 25rem; height: 14rem; border-radius: 20px;">
                <i class="fa-solid fa-clock fs-1 mb-4" style="color: #72B5F6"></i>
                <span class="fw-bold fs-5">Kurun Waktu</span>
                <span>Dengan adanya fitur ini pembuat voting bisa membatasi waktu voting</span>
            </div>
            <div class="card kanan shadow p-5" style="width: 25rem; height: 14rem; border-radius: 20px;">
                <i class="fa-solid fa-filter fs-1 mb-4" style="color: #72B5F6"></i>
                <span class="fw-bold fs-5">Filterisasi Vote</span>
                <span>Fitur ini memudahkan pembuat vote menyeleksi vote</span>
            </div>
        </div>
    </div>
    {{-- end konten pertama --}}

    {{-- konten kedua --}}
    <div class="w-100 d-flex justify-content-around flex-column align-items-center" style="background-color: #E8F4FF">
        <span class="mb-5 mt-5 fs-4 fw-bold span-sub" style="color: #000;">Panduan Voting</span>
        <div class="card bawah shadow mb-5 p-5" style="width: 90%; border-radius: 20px; ">
            <div class="head d-flex justify-content-around" style="color: #72B5F6">
                <p class="fw-bold collapse-trigger active" data-bs-toggle="collapse" href="#multiCollapseExample1"
                    role="button" aria-expanded="true" aria-controls="multiCollapseExample1">Memilih voting</p>
                <p class="fw-bold collapse-trigger" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button"
                    aria-expanded="false" aria-controls="multiCollapseExample2">Membuat voting</p>
            </div>
            <div id="collapseGroup">
                <div class="collapse multi-collapse show" id="multiCollapseExample1" data-bs-parent="#collapseGroup">
                    <div class="maincard d-flex justify-content-around mt-5 mb-3">
                        <div class="card kiri" style="border-radius: 20px; width: 35%; height: 13rem;">
                            <img style="border-radius: 20px; width: 100%; height: 13rem;"
                                src="{{ asset('img/milih1.PNG') }}" alt="">
                        </div>
                        <div class="card kanan" style="border-radius: 20px; width: 35%; height: 13rem;">
                            <img style="border-radius: 20px; width: 100%; height: 13rem;"
                                src="{{ asset('img/milih2.PNG') }}" alt="">
                        </div>
                    </div>
                    <div class="step-container">
                        <div class="step-connector"></div>
                        <div class="row text-center">
                            <div class="step-number">1</div>
                            <div class="step-number">2</div>
                        </div>
                    </div>
                    <div class="text d-flex justify-content-around text-center flex-row">
                        <p class="bawah" style="width: 35%;">Masukkan kode room jika diperlukan
                        </p>
                        <p class="bawah" style="width: 35%;">Pilih pilihan voting anda lalu klik tombol simpan</p>
                    </div>
                </div>
                <div class="collapse multi-collapse" id="multiCollapseExample2" data-bs-parent="#collapseGroup">
                    <div class="maincard d-flex justify-content-around mt-5 mb-3">
                        <div class="card shadow-sm" style="border-radius: 20px; width: 35%; height: 13rem;">
                            <img style="border-radius: 20px; width: 100%; height: 13rem;" src="{{ asset('img/buat1.PNG') }}"
                                alt="">
                        </div>
                        <div class="card shadow-sm" style="border-radius: 20px; width: 35%; height: 13rem;">
                            <img style="border-radius: 20px; width: 100%; height: 13rem;" src="{{ asset('img/buat2.PNG') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="step-container">
                        <div class="step-connector"></div>
                        <div class="row text-center">
                            <div class="step-number">1</div>
                            <div class="step-number">2</div>
                        </div>
                    </div>
                    <div class="text d-flex justify-content-around text-center flex-row">
                        <p style="width: 35%;">Login jika sudah punya akun</p>
                        <p style="width: 35%;">Buat pertanyaan vote dan opsi pilihannya, sesuaikan dengan
                            kebutuhan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end konten kedua --}}

    {{-- konten ketiga --}}
    <div class="bg-light w-100 d-flex justify-content-around flex-column align-items-center">
        <span class="fs-2 fw-bold  span-title"
            style="color: #8854BB; margin-bottom: 20px; margin-top: 140px;">Penjadwalan</span>
        <span class="mb-5 fs-4 fw-bold span-sub" style="color: #000;">Keunggulan Produk Kami</span>
        <div class="d-flex flex-row justify-content-evenly w-100" style="margin-bottom: 7rem">
            <div class="card kiri shadow p-5" style="width: 25rem; height: 14rem; border-radius: 20px;">
                <i class="fa-solid fa-users fs-1 mb-4" style="color: #8854BB"></i>
                <span class="fw-bold fs-5">Pembuatan Group</span>
                <span>Fitur ini memudahkan komunikasi antara pembuat jadwal dan anggota</span>
            </div>
            <div class="card bawah shadow p-5" style="width: 25rem; height: 14rem; border-radius: 20px;">
                <i class="fa-solid fa-gears  fs-1 mb-4" style="color: #8854BB"></i>
                <span class="fw-bold fs-5">Fleksibelitas</span>
                <span>Pembuat jadwal bisa menentukan jadwal mulai dari jam</span>
            </div>
            <div class="card kanan shadow p-5" style="width: 25rem; height: 14rem; border-radius: 20px;">
                <i class="fa-solid fa-check-to-slot fs-1 mb-4" style="color: #8854BB"></i>
                <span class="fw-bold fs-5">Konfirmasi Cepat</span>
                <span>Pembuat jadwal bisa membuat pertemuan tanpa menunggu</span>
            </div>
        </div>
    </div>
    {{-- end konten ketiga --}}

    {{-- konten keempat --}}
    <div class="w-100 d-flex justify-content-around flex-column align-items-center" style="background-color: #F7EFFF">
        <span class="mb-5 mt-5 fs-4 fw-bold span-sub" style="color: #000;">Panduan Voting</span>
        <div class="card bawah shadow mb-5 p-5" style="width: 90%; border-radius: 20px; ">
            <div class="head d-flex justify-content-around" style="color: #8854BB">
                <p class="fw-bold">Membuat Penjadwalan</p>
            </div>
            <div class="maincard d-flex justify-content-around mt-5 mb-3">
                <div class="card kiri" style="border-radius: 20px; width: 20%; height: 13rem;">
                    <img style="border-radius: 20px; width: 100%; height: 13rem;" src="{{ asset('img/jadwal1.PNG') }}"
                        alt="">
                </div>
                <div class="card bawah" style="border-radius: 20px; width: 20%; height: 13rem;">
                    <img style="border-radius: 20px; width: 100%; height: 13rem;" src="{{ asset('img/jadwal2.PNG') }}"
                        alt="">
                </div>
                <div class="card kanan" style="border-radius: 20px; width: 20%; height: 13rem;">
                    <img style="border-radius: 20px; width: 100%; height: 13rem;" src="{{ asset('img/jadwal3.PNG') }}"
                        alt="">
                </div>
            </div>
            <div class="step-container2">
                <div class="step-connector2"></div>
                <div class="row text-center">
                    <div class="step-number2">1</div>
                    <div class="step-number2">2</div>
                    <div class="step-number2">3</div>
                </div>
            </div>
            <div class="text d-flex justify-content-around text-center flex-row">
                <p class="bawah" style="width: 20%;">Pengguna membuat grup terlebih dahulu</p>
                <p class="bawah" style="width: 20%;">Setelah itu buat jadwal ketersediaan</p>
                <p class="bawah" style="width: 20%;">Lalu pilih jadwal yang tersedia, lalu konfirmasikan</p>
            </div>
        </div>
    </div>
    {{-- end konten keempat --}}

    {{-- konten kelima --}}
    <div class="bg-light vh-100 d-flex justify-content-center flex-column align-items-center">
        <span class="fs-2 fw-bold  span-title" style="color: #72B5F6; margin-bottom: 70px">Bergabung Bersama VibeFour</span>

        <div class="row justify-content-center mt-4">
            <div class="kiri col-md-3 mx-3 mb-4">
                <div class="card shadow-sm p-3" style="height: 24rem; border-radius: 20px">
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
            </div>
            <div class="bawah col-md-3 mx-3 mb-4">
                <div class="card shadow-sm p-3" style="height: 24rem; border-radius: 20px">
                    <div class="card-body">
                        <h6>Pro Plan Monthly</h6>
                        <h4 class="fw-bold">Rp. 50.000 / Bulan</h4>
                        <hr>
                        <p>Penggunaan akses full</p>
                        <p>Tanpa batasan penggunaan fitur</p>
                        <p>Langganan Bulanan</p>
                        <a href="#" class="btn"
                            style="width: 100%; background-color: #8854BB; color: white; border-radius: 20px">Pilih
                            Paket</a>
                    </div>
                </div>
            </div>
            <div class="kanan col-md-3 mx-3 mb-4">
                <div class="card shadow-sm p-3" style="height: 24rem; border-radius: 20px">
                    <div class="card-body">
                        <h6>Pro Plan Annual</h6>
                        <h4 class="fw-bold">Rp. 570.000 / Tahun</h4>
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
    </div>
    {{-- end konten kelima --}}
    {{-- footer --}}
    @include('layout.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const triggers = document.querySelectorAll('.collapse-trigger');

            triggers.forEach(trigger => {
                trigger.addEventListener('click', function() {
                    triggers.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>
@endsection
