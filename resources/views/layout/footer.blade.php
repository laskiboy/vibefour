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
                        @lang('footer.alamat')
                    </p>
                    <div class="social-links mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="contact-info mt-4">
                        <i class="fab fa-whatsapp contact-icon"></i>
                        @lang('footer.wa')
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-headphones contact-icon"></i>
                        @lang('footer.telp')
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <h5 class="mb-4">@lang('footer.judul_produk')</h5>
                    <a href="{{ route('produk-voting') }}" class="footer-link">@lang('footer.voting')</a>
                    <a href="{{ route('produk-penjadwalan') }}" class="footer-link">@lang('footer.penjadwalan')</a>
                </div>

                <div class="col-md-2 mb-4 ms-0">
                    <h5 class="mb-4">@lang('footer.judul_menu')</h5>
                    <a href="{{ route('tentang') }}" class="footer-link">@lang('footer.tentang')</a>
                    <a href="{{ route('kontak') }}" class="footer-link">@lang('footer.kontak')</a>
                    <a href="{{ route('berita') }}" class="footer-link">@lang('footer.berita')</a>
                    <a href="{{ route('tnc') }}" class="footer-link">@lang('footer.tnc')</a>
                    <a href="{{ route('privasi') }}" class="footer-link">@lang('footer.privasi')</a>
                    <a href="{{ route('faq') }}" class="footer-link">@lang('footer.faq')</a>
                </div>
            </div>
        </div>
    </footer>
</body>
