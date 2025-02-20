@extends('layout.headerAsli')
@section('konten')
    <div class="bg-light d-flex justify-content-center align-items-center flex-column pb-5">
        <span class="fs-2 fw-bold  span-title"
            style="color: #72B5F6; margin-bottom: 70px; margin-top: 140px; font-family: 'Montserrat';">Kontak
            Kami</span>
        <iframe class="mb-5 map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3934360938374!2d107.5553798!3d-6.9628289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ef236eb19e97%3A0x93da0f0cfa5d199c!2sGoldstep%20Indonesia!5e0!3m2!1sid!2sid!4v1738832113717!5m2!1sid!2sid"
            width="1200" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <div class="d-flex flex-row w-100 justify-content-evenly">
            <div class="kiri" style="width: 350px">
                <span class="fs-5 fw-bold" style="font-family: 'Montserrat';">Hubungi Kami</span>
                <p class="">Jika Anda memiliki pertanyaan, ingin bekerja sama,
                    atau
                    membutuhkan informasi lebih lanjut mengenai layanan kami, jangan ragu untuk menghubungi kami</p>
                <div class="alamat">
                    <i class="fa-solid fa-location-dot" style="margin-right: 4px"></i>
                    <span class="ms-2">Alamat : Taman Kopo Indah 3, Ruko</span><br><span style="margin-left: 28px">
                        D35Bandung</span>
                </div>
                <div class="telp">
                    <i class="fa-solid fa-phone"></i>
                    <span class="ms-2">Kontak : (+62) 8953-7919-2958</span>
                </div>
                <div class="email">
                    <i class="fa-solid fa-envelope"></i>
                    <span class="ms-2">Email : blablabla@gmail.com</span>
                </div>
            </div>
            <div class="kanan" style="width: 700px;">
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
                            style="background-color: #72B5F6; color: #FFF; border-radius: 20px;"">Kirim</button>
                    </div>
                </form>
                {{-- <h1>p</h1> --}}
            </div>
        </div>
    </div>
    {{-- footer --}}
    @include('layout.footer')
@endsection
