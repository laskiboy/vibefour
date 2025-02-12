@extends('layout.headerAsli')
@section('konten')
    <div class="container w-75 p-5">
        <p class="fs-2 fw-bold d-flex justify-content-center" style="color: #72B5F6; margin-top: 100px; margin-bottom: 80px">
            Kami Siap Membantu</p>
        <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseOne">
                        <strong>1. Apa itu VibeFour?</strong>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        VibeFour adalah platform inovatif yang menyediakan layanan voting dan penjadwalan untuk berbagai
                        acara, pemungutan suara, dan pengambilan keputusan secara digital. Kami membantu pengguna mengelola
                        pemilihan dan agenda dengan lebih mudah, cepat, dan transparan.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        <strong>2. Bagaimana cara mendaftar di VibeFour?</strong>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Untuk mendaftar, kunjungi situs web resmi VibeFour dan klik tombol "Daftar". Isi informasi yang
                        diperlukan, seperti nama, alamat email, dan kata sandi. Setelah itu, konfirmasi akun melalui email
                        yang dikirimkan ke kotak masuk Anda.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFour">
                        <strong>3. Apakah VibeFour gratis digunakan?</strong>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        VibeFour menawarkan paket gratis dengan fitur dasar untuk voting dan penjadwalan. Namun, kami juga
                        menyediakan paket premium dengan fitur tambahan seperti laporan mendetail, keamanan tingkat lanjut,
                        dan integrasi dengan layanan lainnya.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFive">
                        <strong>4. Bagaimana cara membuat voting baru?</strong>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <p>Setelah masuk ke akun Anda:</p>
                        <ol type="1">
                            <li>Pilih opsi "Buat Voting Baru".</li>
                            <li>Masukkan judul, deskripsi, dan opsi yang tersedia.</li>
                            <li>Tentukan durasi voting dan aturan pemungutan suara.</li>
                            <li>Bagikan tautan voting kepada peserta.</li>
                            <li>Pantau hasil secara real-time dari dashboard Anda.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseSix">
                        <strong>5. Bagaimana cara menjadwalkan sebuah acara?</strong>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <p>Untuk membuat jadwal acara:</p>
                        <ol type="1">
                            <li>Klik "Buat Jadwal Baru".</li>
                            <li>Masukkan detail acara seperti nama, tanggal, waktu, dan anggota.</li>
                            <li>Tambahkan peserta yang akan diundang.</li>
                            <li>Kirimkan notifikasi dan konfirmasi ke peserta.</li>
                            <li>Pantau respons dan lakukan perubahan jika diperlukan.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseSeven">
                        <strong>6. Apakah VibeFour aman digunakan?</strong>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Ya, kami menerapkan berbagai langkah keamanan untuk melindungi data pengguna, termasuk enkripsi
                        data, otentikasi dua faktor (2FA), dan kebijakan privasi yang ketat. Data Anda tidak akan dijual
                        atau dibagikan kepada pihak ketiga tanpa persetujuan Anda.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseEight">
                        <strong>7. Bagaimana cara melihat hasil voting?</strong>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Hasil voting bisa di lihat jika pembuat voting mempublikasi hasilnya, tapi pembuat voting selalu
                        bisa melihat hasil
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseNine">
                        <strong>8. Apakah saya bisa mengedit voting atau jadwal setelah dibuat?</strong>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Untuk voting tidak bisa melakukan pengeditan setelah menyimpan subjek vote, tapi untuk penjadwalan
                        bisa dilakukan pengeditan
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTen">
                        <strong>9. Bagaimana jika saya lupa kata sandi?</strong>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <p>Jika anda lupa kata sandi:</p>
                        <ol type="1">
                            <li>Klik "Lupa Kata Sandi" di halaman masuk.</li>
                            <li>Masukkan email yang Anda gunakan saat mendaftar.</li>
                            <li>Masukkan kode otp yang dikirim melalui email.</li>
                            <li>Buat kata sandi baru dan masuk kembali ke akun Anda.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- footer --}}
    @include('layout.footer')
@endsection
