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

        .btn-coba {
            transition: all 0.3s ease-in-out;
        }

        .btn-coba:hover {
            background-color: #6ba8e5 !important;
        }

        .video {
            display: none;
        }

        @media (max-width: 768px) {
            .satu {
                flex-direction: column !important;
                margin-top: 30px;
                justify-content: center !important;
            }

            .h1 {
                font-size: 45px !important;
            }

            .blob {
                display: none;
            }

            .marlef {
                margin-left: 0 !important;
                margin-top: 200px !important;
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
                margin-top: 200px !important;
            }

            .video {
                display: block;
                opacity: 1;
                transition: opacity 0.5s ease-in-out;
                margin-top: 40px;
                border-radius: 20px;
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

            .husus {
                margin-left: 0 !important;
            }

            .tiga {
                flex-direction: column !important;
            }

            .isi {
                width: 100% !important;
                margin-bottom: 30px;
            }

            .span-bergabung {
                text-align: center;
                width: 75%;
                margin-bottom: 40px !important;
            }
        }
    </style>

    {{-- konten pertama --}}
    <div class="satu bg-white w-100 vh-100 d-flex justify-content-evenly flex-row align-items-center">
        <div class="left marlef w-50 ms-5">
            <div class="mb-5 mt-5 atas">
                <span class="h1 text-black"
                    style="font-weight: 600; font-size: 4em; font-family: 'Montserrat';">@lang('vote.judul')</span><br>
            </div>
            <div class="kiri vib" style="width: 90%">
                <span>@lang('vote.deskripsi')</span>
            </div>
            <div class="tombol">
                <button onclick="window.location.href='{{ route('login') }}'"
                    class="bawah btn-coba btn shadow text-white mb-3 mt-5"
                    style="background-color: #72B5F6; font-weight: 500; border-radius: 20px; width: 250px; height: 50px"><i
                        class="fa-solid fa-rocket me-2"></i> @lang('vote.btn_coba_fitur')</button>
                <button type="button" class="bawah lihat btn btn-secondary shadow ms-4 mb-3 mt-5" data-bs-toggle="modal"
                    data-bs-target="#modalVideo" style="border-radius: 20px; width: 200px; height: 50px"><i
                        class="fa-regular fa-circle-play me-2 fs-5"></i> @lang('vote.btn_lihat_tutor')</button>
                <iframe class="video shadow-lg w-100" style="height: 190px" src="{{ __('vote.video') }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div class="modal fade" id="modalVideo" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body d-flex justify-content-center align-items-center">
                                <iframe class="w-100 h-100" src="{{ __('vote.video') }}" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="shadow-lg blob mt-5 kanan" src="{{ asset('storage/images/' . __('vote.gambar')) }}"
            style="border-radius: 20px; width: 500px; z-index: 1" alt="voting">
        <span class="kanan blob mt-5 position-absolute" style="right: 0; margin-right: 20px; overflow: hidden;">
            <img width="450" src="{{ asset('img/svg.gif') }}" alt="">
        </span>
    </div>
    {{-- end konten pertama --}}

    {{-- konten kedua --}}
    <div class="kiri dua d-flex w-100 justify-content-around flex-row align-item-center">
        <div class="w-50 d-flex fitir justify-content-center flex-column mb-5">
            <div class="kiri d-flex flex-column">
                <span class="fs-2 fw-bold" style="color: #72B5F6; font-family: 'Montserrat';">@lang('vote.judul_keunggulan')</span>
                <span class="my-4">@lang('vote.deskripsi_keunggulan')</span>

                <!-- Fitur container with custom CSS to force 2 per row -->
                <div class="fitur d-flex flex-wrap justify-content-start flex-row mt-4">
                    @foreach ($fitures->chunk(2) as $chunk)
                        <div class="d-flex w-100">
                            @foreach ($chunk as $item)
                                <div class="w-50 fitur-1 me-4">
                                    <i class="fa-solid fa-address-card fs-2 mb-4" style="color: #8854BB;"></i><br>
                                    <div class="klas">
                                        <strong class="fs-5"
                                            style="color: #72B5F6; font-family: 'Montserrat';">{{ $item->nama }}</strong>
                                        <p class="mt-2">{{ $item->deskripsi }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
        <div id="testimonialCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($fitures as $key => $feature)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img style="object-fit: cover" src="{{ asset('storage/images/' . $feature->gambar) }}"
                            width="500" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- end konten kedua --}}

    {{-- konten kelima --}}
    <div class="bg-white my-5 d-flex justify-content-center flex-column align-items-center">
        <span class="fs-2 fw-bold span-bergabung span-title"
            style="color: #72B5F6; margin-bottom: 70px; font-family: 'Montserrat';">@lang('vote.judul_join')</span>

        <div class="d-flex tiga justify-content-evenly mt-4 w-75">
            <div class="card isi kiri shadow-sm p-3" style="height: 24rem; width: 280px; border-radius: 20px">
                <div class="card-body">
                    <h6>{{ $basic->price->nama }}</h6>
                    @if ($basic->price->durasi == null && $basic->bahasa_id == 1)
                        <h4 class="fw-bold">Gratis</h4>
                    @else
                        <h4 class="fw-bold">Free</h4>
                    @endif
                    <hr>
                    @foreach ($item_basic as $item)
                        <p>{{ $item->features->fitur }}</p>
                    @endforeach
                    <a href="{{ route('login') }}" class="btn mt-5 w-100 text-white"
                        style="background-color: #8854BB; border-radius: 20px">@lang('vote.pilih_paket')</a>
                </div>
            </div>
            <div class="card isi bawah shadow-sm p-3" style="height: 24rem; width: 280px; border-radius: 20px">
                <div class="card-body">
                    <h6>{{ $month->price->nama }}</h6>
                    <div class="d-flex align-items-center mb-3">
                        <span class="fw-bold fs-4">Rp. 50.000 </span>
                        @if ($month->price->satuan_waktu == 'Bulan' && $month->bahasa_id == 1)
                            <p class="d-flex align-items-center m-0">/ Bulan</p>
                        @else
                            <p class="d-flex align-items-center m-0">/ Month</p>
                        @endif
                    </div>
                    <hr>
                    @foreach ($item_month as $item)
                        <p>{{ $item->features->fitur }}</p>
                    @endforeach
                    <a href="{{ route('login') }}" class="btn mt-5 w-100 text-white"
                        style="background-color: #8854BB; border-radius: 20px">@lang('vote.pilih_paket')</a>
                </div>
            </div>
            <div class="card isi kanan shadow-sm p-3" style="height: 24rem; width: 280px; border-radius: 20px">
                <div class="card-body">
                    <h6>{{ $year->price->nama }}</h6>
                    <div class="d-flex align-items-center mb-3">
                        <span class="fw-bold fs-4">Rp. 50.000 </span>
                        @if ($year->price->satuan_waktu)
                            @if ($year->bahasa_id == 1)
                                <p class="d-flex align-items-center m-0">/ Tahun</p>
                            @elseif ($year->bahasa_id == 2)
                                <p class="d-flex align-items-center m-0">/ Year</p>
                            @endif
                        @endif
                    </div>
                    <hr>
                    @foreach ($item_year as $item)
                        <p>{{ $item->features->fitur }}</p>
                    @endforeach
                    <a href="{{ route('login') }}" class="btn mt-5 w-100 text-white"
                        style="background-color: #8854BB; border-radius: 20px">@lang('vote.pilih_paket')</a>
                </div>
            </div>
        </div>
    </div>
    {{-- end konten kelima --}}
    {{-- footer --}}
    @include('layout.footer')
@endsection
