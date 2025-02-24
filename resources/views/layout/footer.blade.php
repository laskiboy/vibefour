<style>
    .social-icon {
        color: #8854BB;
        font-size: 24px;
        margin-right: 20px;
    }

    .footer-link {
        color: #333;
        text-decoration: none;
        display: block;
        margin-bottom: 10px;
    }

    .footer-link:hover {
        color: #8854BB;
    }

    .contact-info {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .contact-icon {
        margin-right: 10px;
    }

    @media (max-width: 768px) {
        footer {
            padding: 20px;
        }
    }
</style>

<body>
    <footer class="py-5 shadow" style="background-color: #f4f4f4">
        <div class="container">
            <div class="row">
                <div class="col mb-4">
                    <h4 class="mb-4" style="color: #72B5F6">VibeFour</h4>
                    <p class="text-muted">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        Taman Kopo Indah 3, Ruko D35Bandung
                    </p>
                    <div class="social-links mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="contact-info mt-4">
                        <i class="fab fa-whatsapp contact-icon"></i>
                        0895 3791 9295
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-headphones contact-icon"></i>
                        0837 1237 1247
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <h5 class="mb-4">Produk</h5>
                    <a href="{{ route('produk-voting') }}" class="footer-link">Voting</a>
                    <a href="{{ route('produk-penjadwalan') }}" class="footer-link">Penjadwalan</a>
                </div>

                <div class="col-md-2 mb-4 ms-0">
                    <h5 class="mb-4">Perusahaan</h5>
                    <a href="{{ route('tentang') }}" class="footer-link">Tentang</a>
                    <a href="{{ route('kontak') }}" class="footer-link">Kontak</a>
                    <a href="{{ route('berita') }}" class="footer-link">Berita</a>
                    <a href="{{ route('tnc') }}" class="footer-link">Syarat & Ketentuan</a>
                    <a href="{{ route('privasi') }}" class="footer-link">Kebijakan & Privasi</a>
                    <a href="{{ route('faq') }}" class="footer-link">F.A.Q</a>
                </div>
            </div>
        </div>
    </footer>
</body>
