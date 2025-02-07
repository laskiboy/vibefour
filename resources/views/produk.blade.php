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
                <i class="fa-solid fa-lock fs-1 mb-4" style="color: #72B5F6"></i>
                <span class="fw-bold fs-5">Keamanan Voting</span>
                <span>Pembuat vote bisa menambahkan kode room </span>
            </div>
            <div class="card kanan shadow p-5" style="width: 25rem; height: 14rem; border-radius: 20px;">
                <i class="fa-solid fa-lock fs-1 mb-4" style="color: #72B5F6"></i>
                <span class="fw-bold fs-5">Keamanan Voting</span>
                <span>Pembuat vote bisa menambahkan kode room </span>
            </div>
        </div>
    </div>
    {{-- end konten pertama --}}

    {{-- konten kedua --}}
    <div class="w-100 d-flex justify-content-around flex-column align-items-center" style="background-color: #E8F4FF">
        <span class="mb-5 mt-5 fs-4 fw-bold span-sub" style="color: #000;">Panduan Voting</span>
        <div class="card bawah shadow mb-5 p-5" style="width: 90%; border-radius: 20px; ">
            <div class="head d-flex justify-content-around" style="color: #72B5F6">
                <p class="fw-bold">Memilih voting</p>
                <p class="fw-bold">Membuat voting</p>
            </div>
            <div class="maincard d-flex justify-content-around mt-5 mb-3">
                <div class="card kiri bg-secondary" style="border-radius: 20px; width: 35%; height: 13rem;"></div>
                <div class="card kanan bg-secondary" style="border-radius: 20px; width: 35%; height: 13rem;"></div>
            </div>
            <div class="step-container">
                <div class="step-connector"></div>
                <div class="row text-center">
                    <div class="step-number">1</div>
                    {{-- <div class="col-md-6">
                        <p>Masukkan terlebih dahulu kode room yang diberikan dengan link</p>
                    </div> --}}
                    <div class="step-number">2</div>
                    {{-- <div class="col-md-6">
                        <p>Pilih pilihan voting anda lalu klik tombol simpan</p>
                    </div> --}}
                </div>
            </div>
            <div class="text d-flex justify-content-around text-center flex-row">
                <p class="bawah" style="width: 35%;">Masukkan terlebih dahulu kode room yang diberikan dengan link</p>
                <p class="bawah" style="width: 35%;">Pilih pilihan voting anda lalu klik tombol simpan</p>
            </div>
        </div>
    </div>
    {{-- end konten kedua --}}
@endsection
