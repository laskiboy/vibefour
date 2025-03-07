@extends('layout.headerAsli')
<style>
    @media (max-width: 768px) {
        body .main {
            width: 90% !important;
            padding: 10px !important;
            margin-top: 50px;
        }
    }
</style>
@section('konten')
    <div class="container main w-75 p-5">
        <p class="fs-2 fw-bold" style="color: #72B5F6; margin-top: 60px">{{ __('tnc.judul') }}</p>
        <p class="mt-4" style="color: #ABABAB">{{ __('tnc.update') }}</p>
        <p class="mt-4">
            {{ __('tnc.keterangan') }}
        </p>
        {!! __('tnc.value') !!}
    </div>
    {{-- footer --}}
    @include('layout.footer')
@endsection
