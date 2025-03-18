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
                @foreach ($news as $key => $item)
                    <div class="carousel-item  {{ $key == 0 ? 'active' : '' }}">
                        <a href="{{ route('detail-berita', $item->id) }}">
                            <img style="filter: brightness(90%); width: 100%; object-fit: cover;"
                                src="{{ asset('storage/images/' . $item->gambar) }}" height="600" class="d-block w-100"
                                alt="Slide 1">
                        </a>
                    </div>
                @endforeach
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
    @foreach ($news as $items)
        <div class="container m-5">
            <div class="berita d-flex justify-content-center align-items-center" style="margin-top: 120px">
                <div class="card me-5 kiri" style="width: 35%; height: 15rem; border-radius: 20px">
                    <img style="height: 15rem; object-fit: cover; border-radius: 20px"
                        src="{{ asset('storage/images/' . $items->gambar) }}" alt="">
                </div>
                <div class="ms-5 kanan isi d-flex flex-column w-50">
                    <a class="detail-berita text-dark mb-3" style="text-decoration: none"
                        href="{{ route('detail-berita', $items->id) }}">
                        <span class="fs-5 fw-bold">{{ $items->judul }}</span>
                    </a>
                    <span class="w-50 span mb-3">{!! Str::words($items->isi_berita, 29, '...') !!}</span><br><br>
                    <span class="mt-3" style="color: #ABABAB">
                        {{ \Carbon\Carbon::parse($items->created_at)->translatedFormat('d F Y') }}
                    </span>
                </div>
            </div>
        </div>
    @endforeach
    {{-- end konten kedua --}}

    {{-- footer --}}
    @include('layout.footer')
@endsection
