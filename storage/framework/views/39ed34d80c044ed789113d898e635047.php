
<div class="bg-light d-flex justify-content-center flex-column align-items-center" style="padding: 100px">
    <span class="fs-2 mb-3 fw-bold  span-title" style="color: #72B5F6; font-family: 'Montserrat';">Pencapaian
        Kami</span>
    <span class="w-50 span-title text-center" style="margin-bottom: 100px">Kami bangga telah membantu banyak pengguna
        dalam pengambilan
        keputusan dan manajemen jadwal
        yang lebih efektif.</span>
    <div class="d-flex justify-content-around">
        <div class="w-25 kiri d-flex flex-column text-center">
            <i style="color: #8854BB" class="fa-solid fa-person fs-1 mb-4"></i>
            <strong class="fs-5 mb-3" style="font-family: 'Montserrat';">Ribuan Pengguna Aktif</strong>
            <span>VibeFour telah digunakan oleh lebih dari 5.000 pengguna untuk membantu mereka dalam pengambilan
                keputusan
                melalui voting digital dan pengelolaan jadwal yang efisien. Kami terus berkembang untuk memberikan
                layanan
                yang lebih baik.</span>
        </div>
        <div class="w-25 bawah d-flex flex-column text-center">
            <i style="color: #8854BB" class="fa-solid fa-check-to-slot fs-1 mb-4"></i>
            <strong class="fs-5 mb-3" style="font-family: 'Montserrat';">Dipercaya oleh Berbagai Komunitas &
                Organisasi</strong>
            <span>Dari acara kecil hingga event besar, VibeFour telah dipercaya oleh komunitas, perusahaan, dan
                institusi pendidikan dalam mengatur pemungutan suara serta penjadwalan acara secara transparan dan
                mudah.</span>
        </div>
        <div class="w-25 kanan d-flex flex-column text-center">
            <i style="color: #8854BB" class="fa-solid fa-shield fs-1 mb-4"></i>
            <strong class="fs-5 mb-3" style="font-family: 'Montserrat';">Teknologi yang Aman & Andal</strong>
            <span>Dengan sistem yang terus diperbarui, VibeFour memastikan keamanan data dan keakuratan hasil voting.
                Kami menggunakan enkripsi data dan sistem autentikasi yang kuat untuk melindungi informasi
                pengguna.</span>
        </div>
    </div>
</div>



<div class="container d-flex justify-content-center flex-column align-item-center" style="height: 30rem">
    <span class="fs-2 fw-bold text-center span-title"
        style="color: #72B5F6; margin-top: 50px; margin-bottom: 30px; font-family: 'Montserrat';">Apa Kata
        Mereka?</span>
    <section class="py-5 bawah">
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="testimonial-content text-center">
                                <img src="<?php echo e(asset('img/jempol.png')); ?>" width="50" height="50"
                                    alt="Budi Santoso" class="avatar mb-3 border border-2 rounded-circle">
                                <div class="ratings mb-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="lead">
                                    "Fitur sangat mudah difahami, top markotop"
                                </p>
                                <p class="font-weight-bold text-primary">- Budi Santoso</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="testimonial-content text-center">
                                <img src="<?php echo e(asset('img/jempol.png')); ?>" width="50" height="50" alt="Dewi Kusuma"
                                    class="avatar mb-3 border border-2 rounded-circle">
                                <div class="ratings mb-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <p class="lead">
                                    "Mantap, mungkin untuk fitur oke, lengkap, dan juga sangat mudah digunakan."
                                </p>
                                <p class="font-weight-bold text-primary">- Dewi Kusuma</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="testimonial-content text-center">
                                <img src="<?php echo e(asset('img/jempol.png')); ?>" width="50" height="50"
                                    alt="PT Maju Bersama" class="avatar mb-3 border border-2 rounded-circle">
                                <div class="ratings mb-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="lead">
                                    "Tidak pernah mengecewakan, hasil dari vote akurat, dan dengan adanya fitur avalible
                                    mempercepat penjadwalan."
                                </p>
                                <p class="font-weight-bold text-primary">- PT Maju Bersama</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" class="btn-dark" data-bs-target="#testimonialCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</div>





<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tunggu sampai Bootstrap sepenuhnya dimuat
        function waitForBootstrap(callback) {
            if (typeof bootstrap !== 'undefined') {
                callback();
            } else {
                setTimeout(() => waitForBootstrap(callback), 100);
            }
        }

        const delay = 10000; // 10 detik

        function updateCarousel(carouselId, index) {
            const images = document.querySelectorAll(`#${carouselId} .carousel-image`);
            if (images.length > 0) {
                images.forEach(img => img.classList.remove('active'));
                images[index % images.length].classList.add('active');
            }
        }

        function openAccordion(accordionId, carouselId, index) {
            const accordion = document.getElementById(accordionId);
            if (!accordion) return;

            const accordionItems = accordion.querySelectorAll('.accordion-item');
            if (index >= accordionItems.length) {
                // Reset ke awal jika sudah sampai akhir
                setTimeout(() => {
                    closeAllItems(accordionItems);
                    openAccordion(accordionId, carouselId, 0);
                }, delay);
                return;
            }

            // Tutup item sebelumnya
            if (index > 0) {
                const prevItem = accordionItems[index - 1];
                const prevCollapse = prevItem.querySelector('.accordion-collapse');
                if (prevCollapse) {
                    const bsCollapse = bootstrap.Collapse.getInstance(prevCollapse);
                    if (bsCollapse) bsCollapse.hide();
                }
                const prevButton = prevItem.querySelector('.accordion-button');
                if (prevButton) {
                    prevButton.classList.add('collapsed');
                    prevButton.setAttribute('aria-expanded', 'false');
                }
            }

            // Buka item saat ini
            const currentItem = accordionItems[index];
            const button = currentItem.querySelector('.accordion-button');
            const collapseEl = currentItem.querySelector('.accordion-collapse');

            if (button && collapseEl) {
                button.classList.remove('collapsed');
                button.setAttribute('aria-expanded', 'true');

                // Gunakan Bootstrap Collapse
                const collapse = bootstrap.Collapse.getInstance(collapseEl) ||
                    new bootstrap.Collapse(collapseEl, {
                        toggle: false
                    });
                collapse.show();

                // Update carousel jika ada
                updateCarousel(carouselId, index);

                // Lanjut ke item berikutnya setelah delay
                setTimeout(() => openAccordion(accordionId, carouselId, index + 1), delay);
            }
        }

        function closeAllItems(items) {
            items.forEach(item => {
                const button = item.querySelector('.accordion-button');
                const collapseEl = item.querySelector('.accordion-collapse');
                if (button && collapseEl) {
                    button.classList.add('collapsed');
                    button.setAttribute('aria-expanded', 'false');
                    const collapse = bootstrap.Collapse.getInstance(collapseEl);
                    if (collapse) collapse.hide();
                }
            });
        }

        // Mulai setelah Bootstrap dimuat
        waitForBootstrap(() => {
            // Inisialisasi untuk accordion pertama
            setTimeout(() => {
                updateCarousel('carousel1', 0);
                openAccordion('featureAccordion1', 'carousel1', 0);
            }, 500);

            // Inisialisasi untuk accordion kedua
            setTimeout(() => {
                updateCarousel('carousel2', 0);
                openAccordion('featureAccordion2', 'carousel2', 0);
            }, 500);
        });
    });

    // Inisialisasi carousel testimonial jika ada
    if (document.getElementById('testimonialCarousel')) {
        var testimonialCarousel = new bootstrap.Carousel(document.getElementById('testimonialCarousel'), {
            interval: 5000
        });
    }
</script>
<?php /**PATH D:\VibeFourWebsite\resources\views/Untitled-1.blade.php ENDPATH**/ ?>