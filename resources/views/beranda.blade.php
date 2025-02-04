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

    .content-wrapper {
        position: relative;
        width: 100%;
        height: 100vh;
        padding-top: 10px;
    }
</style>

@section('konten')
    <div class="content-wrapper">
        <div class="bg-image"></div>

        <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
            <span style="color: #72B5F6" class="fw-bold fs-1">VibeFour</span> <span style="color: #8854BB"
                class="fw-bold fs-1">To Everyone</span>
        </div>
    </div>
@endsection
