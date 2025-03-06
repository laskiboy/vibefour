@extends('layout.headerAsli')
<style>
    @media (max-width: 768px) {
        .map {
            width: 90% !important;
        }

        .satu .dua {
            flex-direction: column !important;
            width: 90% !important;
        }

        .dua .tulis {
            margin-bottom: 30px;
        }

        .foem {
            width: 100% !important;
        }
    }
</style>
@section('konten')
    <div class="bg-light satu d-flex justify-content-center align-items-center flex-column pb-5">
        <span class="fs-2 fw-bold span-title"
            style="color: #72B5F6; margin-bottom: 70px; margin-top: 140px; font-family: 'Montserrat';">{{ $judul->isi }}</span>
        <div class="mb-5 map">
            {!! $map->isi !!}
        </div>
        <div class="d-flex dua flex-row w-100 justify-content-evenly">
            <div class="kiri tulis" style="width: 350px">
                <span class="fs-5 fw-bold" style="font-family: 'Montserrat';">{{ $subjudul->isi }}</span>
                <p class="">{{ $ket->isi }}</p>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td><i class="mt-1 fa-solid fa-location-dot"></i></td>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $alamat->isi }}</td>
                        </tr>
                        <tr>
                            <td ><i class="mt-1 fa-solid fa-phone"></i></td>
                            <td>Kontak</td>
                            <td>:</td>
                            <td>{{ $telp->isi }}</td>
                        </tr>
                        <tr>
                            <td ><i class="mt-1 fa-solid fa-envelope"></i></td>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ $email->isi }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="kanan foem" style="width: 700px;">
                <form class="row g-3">
                    <div class="col-md-6">
                        <input type="text" placeholder="Nama" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="No. Telp" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                        <input type="email" placeholder="Email" class="form-control" id="inputAddress"
                            placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" placeholder="Pesan" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn w-100"
                            style="background-color: #72B5F6; color: #FFF; border-radius: 20px;""><i
                                class="fa-solid fa-paper-plane me-2"></i> Kirim</button>
                    </div>
                </form>
                {{-- <h1>p</h1> --}}
            </div>
        </div>
    </div>
    {{-- footer --}}
    @include('layout.footer')
@endsection
