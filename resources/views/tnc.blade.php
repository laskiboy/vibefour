@extends('layout.headerAsli')
@section('konten')
    <div class="container">
        <p class="fs-2 fw-bold" style="color: #72B5F6; margin-top: 120px">Syarat & Ketentuan</p>
        <p class="mt-4" style="color: #ABABAB">Terakhir diperbarui 10 Februari 2025</p>
        <p class="mt-4">
            Selamat datang di VibeFour! Dengan menggunakan layanan kami, Anda menyetujui Syarat & Ketentuan
            berikut. Mohon
            baca dengan seksama sebelum menggunakan platform kami.
        </p>
        <p class="mt-5 fw-bold fs-5" style="color: #8854BB">A. Ketentuan Umum</p>
        <ol type="1">
            <li style="margin-left: -10px; margin-bottom: 10px">Pengguna harus berusia minimal 18 tahun atau mendapatkan izin
                dari orang tua/wali.
                Hal ini bertujuan untuk memastikan bahwa setiap pengguna yang mengakses layanan kami memiliki pemahaman yang
                cukup tentang konsekuensi hukum dan tanggung jawab dalam menggunakan platform ini.
            </li>
            <li style="margin-left: -10px; margin-bottom: 10px">Dengan menggunakan layanan VibeFour, Anda setuju untuk
                mematuhi semua hukum dan
                peraturan yang berlaku, termasuk namun tidak terbatas pada peraturan tentang hak cipta, perlindungan data,
                dan transaksi digital. Kami tidak bertanggung jawab atas pelanggaran hukum yang dilakukan oleh pengguna
                dalam menggunakan layanan kami.</li>
        </ol>
        <p class="mt-5 fw-bold fs-5" style="color: #8854BB">B. Penggunaan Layanan</p>
        <ol type="1">
            <li style="margin-left: -10px; margin-bottom: 10px">Layanan VibeFour hanya boleh digunakan untuk tujuan yang sah
                dan tidak boleh disalahgunakan untuk kegiatan ilegal. Kami melarang penggunaan layanan ini untuk tindakan
                yang dapat merugikan pihak lain, seperti penyebaran informasi palsu, penipuan, atau aktivitas yang melanggar
                hukum negara setempat.</li>
            <li style="margin-left: -10px; margin-bottom: 10px">Pengguna dilarang keras untuk mengunggah, membagikan, atau
                menyebarkan konten yang bersifat pornografi, kekerasan, ujaran kebencian, atau segala bentuk konten yang
                bertentangan dengan nilai-nilai etika dan hukum yang berlaku. Jika ditemukan pelanggaran, akun pengguna
                dapat langsung diblokir tanpa pemberitahuan sebelumnya.</li>
        </ol>
        <p class="mt-5 fw-bold fs-5" style="color: #8854BB">C. Privasi & Keamanan</p>
        <ol type="1">
            <li style="margin-left: -10px; margin-bottom: 10px">Kami berkomitmen untuk melindungi data pribadi pengguna
                sesuai dengan Kebijakan Privasi kami. Setiap informasi yang dikumpulkan akan digunakan dengan tujuan untuk
                meningkatkan layanan kami, dan tidak akan dijual atau dibagikan kepada pihak ketiga tanpa persetujuan
                pengguna, kecuali diwajibkan oleh hukum.</li>
            <li style="margin-left: -10px; margin-bottom: 10px">Pengguna bertanggung jawab menjaga kerahasiaan akun mereka
                dan tidak membagikan informasi login kepada pihak lain. Keamanan akun adalah tanggung jawab pengguna, dan
                jika terdapat indikasi penyalahgunaan, harap segera menghubungi tim dukungan kami agar dapat dilakukan
                tindakan yang sesuai.</li>
        </ol>
        <p class="mt-5 fw-bold fs-5" style="color: #8854BB">D. Pembatasan Tanggung Jawab</p>
        <ol type="1">
            <li style="margin-left: -10px; margin-bottom: 10px">VibeFour tidak bertanggung jawab atas kerugian atau
                kerusakan yang timbul akibat penggunaan layanan, baik secara langsung maupun tidak langsung. Kami tidak
                dapat menjamin bahwa layanan kami akan selalu tersedia tanpa gangguan atau kesalahan teknis, dan pengguna
                disarankan untuk selalu memiliki cadangan data yang diperlukan. </li>
            <li style="margin-left: -10px; margin-bottom: 10px">Kami berhak mengubah atau menghentikan layanan kapan saja
                tanpa pemberitahuan sebelumnya. Hal ini dilakukan untuk meningkatkan kualitas layanan dan menyesuaikan
                dengan perubahan regulasi atau kebutuhan teknologi. Jika ada perubahan signifikan, kami akan berusaha
                memberikan pemberitahuan kepada pengguna melalui kanal komunikasi yang tersedia.</li>
        </ol>
        <p class="mt-5 fw-bold fs-5" style="color: #8854BB">E. Perubahan Syarat & Ketentuan</p>
        <ol type="1">
            <li style="margin-left: -10px; margin-bottom: 10px">Syarat & Ketentuan ini dapat berubah sewaktu-waktu. Pengguna
                disarankan untuk selalu memeriksa pembaruan terbaru melalui situs resmi kami atau email yang dikirimkan
                kepada pengguna terdaftar. Dengan terus menggunakan layanan kami setelah perubahan dilakukan, pengguna
                dianggap telah menyetujui ketentuan yang diperbarui.</li>
        </ol>
        <p class="mt-4 mb-5">
            Dengan menggunakan layanan VibeFour, Anda telah membaca, memahami, dan menyetujui Syarat & Ketentuan ini. Jika
            Anda memiliki pertanyaan, silakan hubungi kami di <a href="{{url('kontak')}}">Kontak VibeFour</a>
        </p>
    </div>
    {{-- footer --}}
    @include('layout.footer')
@endsection
