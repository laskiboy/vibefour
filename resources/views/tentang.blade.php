@extends('layout.headerAsli')
<style>
    body {
        overflow-x: hidden;
    }

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

    .collapse-trigger {
        position: relative;
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .btn {
        transition: all 0.3s ease-in-out;
    }

    .btn:hover {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    }

    .vm {
        transition: all 0.3s ease-in-out;
    }

    .vm:hover {
        transform: translateY(-10px) !important;
    }

    .collapse-trigger.active::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 0px;
        width: 70%;
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
            width: 70%;
            opacity: 1;
        }
    }

    .keunggulan-card {
        transition: 0.3s;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        border: 1px solid #ddd;
    }

    .keunggulan-card:hover {
        background: #f8f9fa;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
        body {
            width: 100% !important;
        }

        .satu {
            margin-top: 90px;
            width: 100% !important;
        }

        .h1 {
            font-size: 45px !important;
        }

        .hadir {
            width: 100% !important;
        }

        .masyuk {
            width: 300px !important;
        }

        .visi {
            flex-direction: column !important;
        }

        .cisi {
            width: 80% !important;
            margin-bottom: 40px;
        }

        .keunggulan {
            margin-bottom: 50px;
        }
    }
</style>
@section('konten')
    {{-- konten pertama --}}
    <div class="bg-white satu vh-100 w-100 d-flex justify-content-around flex-column align-items-center">
        <div class="text w-75 d-flex justify-content-around flex-column align-items-center">
            <span class="atas px-2 py-1 rounded-pill text-primary"
                style="background-color: rgba(114, 181, 246, 0.4);">@lang('about.judul')</span>
            <h1 class="atas h1 mt-4 text-center" style="font-weight: 600; font-size: 4em; font-family: 'Montserrat';">
                @lang('about.slogan')</h1>
            <p class="bawah hadir text-center mt-5" style="width: 45rem">@lang('about.deskripsi')</p style="width: 40rem">
            <a href="{{ route('login') }}">
                <button class="bawah btn masyuk mt-4"
                    style="background-color: #72B5F6; color: #FFF; font-weight: 500; border-radius: 20px; width: 415px; height: 50px"><i
                        class="fa-solid fa-door-open me-2"></i> @lang('about.masuk')</button>
            </a>
        </div>
    </div>
    {{-- end konten pertama --}}

    {{-- konten kedua --}}
    <div class="bg-white atas w-100 d-flex justify-content-around flex-column align-items-center"
        style="margin-bottom: 150px;">
        <span class="fs-1 fw-bold mb-4" style="color: #000; font-family: 'Montserrat';">@lang('about.judul_tentang')</span>
        <span class="fs-5 w-75 text-center">@lang('about.desk_tentang')</span>
    </div>
    {{-- end konten kedua --}}

    {{-- konten ketiga --}}
    <div class="bg-white visi d-flex justify-content-around flex-row align-items-center" style="margin-bottom: 150px">
        <div class="kiri cisi d-flex flex-column text-center" style="width: 500px">
            <span class="fs-3 fw-bold mb-4" style="color: #000; font-family: 'Montserrat';">@lang('about.vote')</span>
            <span class="fs-5">@lang('about.desk_vote')</span>
        </div>
        <div class="kanan cisi d-flex flex-column text-center" style="width: 500px">
            <span class="fs-3 fw-bold mb-4" style="color: #000; font-family: 'Montserrat';">@lang('about.jadwal')</span>
            <span class="fs-5">@lang('about.desk_jadwal')</span>
        </div>
    </div>
    {{-- end konten ketiga --}}

    {{-- konten keempat --}}
    <div class="bg-light w-100 mt-5 d-flex justify-content-around flex-column align-items-center" style="padding: 80px 0">
        <h2 class="fw-bold mb-4 atas" style="font-family: 'Montserrat';">@lang('about.judul_visi_misi')</h2>
        <div class="w-75 text-center">
            <div class="atas bg-white vm p-4 shadow rounded bg-white text-dark">
                <h4 class="fw-bold" style="font-family: 'Montserrat';">@lang('about.judul_visi')</h4>
                <p>@lang('about.desk_visi')
                </p>
            </div>
        </div>
        <div class="d-flex w-75 justify-content-between mt-4 text-center">
            @foreach ($missions as $mission)
                <div style="width: 49%" class="kiri p-3 vm border rounded shadow-sm bg-white">
                    <h5 class="mt-2" style="font-family: 'Montserrat';">{{ $mission->nama }}</h5>
                    <p>{{ $mission->isi }}</p>
                </div>
            @endforeach
        </div>
    </div>
    {{-- end konten keempat --}}

    {{-- konten kelima --}}
    <section class="keunggulan-section text-center" style="padding: 80px 0">
        <div class="container">
            <h2 class="atas fw-bold mb-5" style="font-family: 'Montserrat';">@lang('about.judul_keunggulan')</h2>
            <div class="row">
                @foreach ($advantages as $advantage)
                    <div class="kiri keunggulan col-md-4">
                        <div class="keunggulan-card">
                            {!! $advantage->ikon !!}
                            <h5 class="mt-3" style="font-family: 'Montserrat';">{{ $advantage->nama }}</h5>
                            <p>{{ $advantage->isi }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- end konten kelima --}}

    {{-- footer --}}
    @include('layout.footer')
@endsection
