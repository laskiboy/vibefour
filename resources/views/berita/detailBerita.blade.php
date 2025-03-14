@extends('layout.headerAsli')
<style>
    @media (max-width: 768px) {
        .mai .main {
            width: 90% !important;
            padding: 10px !important;
            margin: 0 !important;
        }
    }
</style>
@section('konten')
    <div class="d-flex mai justify-content-center mb-5">
        <div class="ms-5 main w-50" style="margin-top: 100px; font-size: 14px">
            <nav aria-label="breadcrumb" class="mb-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">@lang('header.beranda')</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('berita') }}">@lang('footer.berita')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $berita->judul }}</li>
                </ol>
            </nav>
            <div class="d-flex flex-column">
                <span class="fs-1 mb-4 " style="font-weight: 500">{{ $berita->judul }}</span>
                <span class="fs-5 mb-5" style="color: #ABABAB">
                    {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}
                </span>

                <img class="shadow" src="{{ asset('storage/images/' . $berita->gambar) }}"
                    style="border-radius: 20px; width: 100%; height: 25rem; object-fit: cover; margin-bottom: 50px"
                    alt="">
                {!! $berita->isi_berita !!}
            </div>
        </div>
    </div>
    @include('layout.footer')
@endsection
