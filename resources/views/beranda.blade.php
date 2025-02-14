@extends('layout.headerAsli')

@section('konten')
    {{-- konten pertama --}}
    <div class="bg-white vh-100 d-flex justify-content-evenly flex-row align-items-center">
        <div class="span d-flex flex-column">
            <h1 class="atas" style="color: #000; font-weight: 600; font-size: 4em">VibeFour</h1>
            <h1 class="kiri" style="color: #000; margin-bottom: 30px; font-weight: 600; font-size: 4em">To Everyone
            </h1>
            <span class="fs-5 kanan">Solusi Voting & Penjadwalan Tanpa Ribet!</span>
            <button class="bawah btn shadow mb-3 mt-5"
                style="background-color: #72B5F6; color: #FFF; font-weight: 500; border-radius: 20px; width: 415px; height: 50px">
                Masuk</button>
        </div>
        @include('layout.slideshowHome')
        <span class="kanan" style="position: absolute; right: 0; margin-right: 100px">
            <img width="500" src="{{ asset('img/svg.gif') }}" alt="">
        </span>
    </div>
    {{-- end konten pertama --}}

    {{-- konten kedua --}}
    <style>
        body {
            overflow-x: hidden;
        }

        .custom-accordion {
            width: 500px !important;
            margin: 20px auto;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .accordion-button {
            font-size: 0.95rem;
            padding: 0.8rem 1rem;
        }

        .accordion-button:not(.collapsed) {
            background-color: #f8f9fa;
        }

        .accordion-body {
            font-size: 0.9rem;
            padding: 1rem;
            background-color: #ffffff;
        }

        .accordion-body ul {
            margin-top: 0.5rem;
            padding-left: 1.5rem;
        }

        .accordion-body li {
            margin-bottom: 0.3rem;
        }

        .image-carousel {
            width: 30rem;
            height: 17rem;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
        }

        .carousel-image {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .carousel-image.active {
            opacity: 1;
        }

        @media (max-width: 576px) {
            .custom-accordion {
                width: 500px !important;
                margin: 20px auto;
            }
        }
    </style>
    <div class="d-flex flex-column align-items-center m-5">
        <span class="fs-2 fw-bold span-title" style="color: #72B5F6;">Fitur Unggulan</span>
        <span class="mb-5 span-sub">Kami menyediakan dua fitur unggulan dari produk kami</span>

        <div class="satu w-75 d-flex w-100 align-items-center mt-5 justify-content-around">
            <span class="kiri" style="position: absolute; left: 0; margin-left: -350px; z-index: -1">
                <svg width="500px" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#E8F4FF"
                        d="M43.1,-75.1C56.1,-67.2,67,-56.1,74.2,-43C81.4,-30,84.9,-15,84.9,0C85,15.1,81.7,30.1,74.4,43.1C67.2,56.1,56.1,67,43,75.2C30,83.5,15,89.1,-0.2,89.4C-15.4,89.7,-30.7,84.8,-44.3,76.8C-57.8,68.8,-69.5,57.9,-76.5,44.6C-83.5,31.3,-85.8,15.6,-86.5,-0.4C-87.2,-16.5,-86.4,-32.9,-79.8,-47C-73.3,-61.1,-61,-72.8,-46.8,-79.9C-32.5,-87.1,-16.3,-89.7,-0.6,-88.6C15.1,-87.6,30.2,-83,43.1,-75.1Z"
                        transform="translate(100 100)" />
                </svg>
            </span>
            <div class="fitur kiri">
                <span style="color: #72B5F6" class="fw-bold fs-5">Fitur Voting</span>
                <div class="accordion custom-accordion" id="featureAccordion1">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                Keamanan vote terjamin
                            </button>
                        </h2>
                        <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1"
                            data-bs-parent="#featureAccordion1">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    Vote bisa menjadi general ataupun privat menggunakan kode room yang dibuat secara
                                    otomatis
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                Pengaturan anonimus
                            </button>
                        </h2>
                        <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1"
                            data-bs-parent="#featureAccordion1">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    Pembuat voting bisa melakukan kostumisasi siapa saja yang bisa memilih voting, atau
                                    pembuat voting juga bisa menyamarkan pemilih
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                                Kostumisasi hasil vote
                            </button>
                        </h2>
                        <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1"
                            data-bs-parent="#featureAccordion1">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    Hasil voting bisa dikostumisasi, public untuk hasil vote yang bisa dilihat
                                    pemilih, dan private untuk hasil yang hanya bisa dilihat pembuat voting
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
                                Undang temanmu yang belum punya akun
                            </button>
                        </h2>
                        <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour1"
                            data-bs-parent="#featureAccordion1">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    Pada fitur penjadwalan, kamu bisa langsung mengirim undangan walapun temanmu belum punya
                                    akun
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive1" aria-expanded="false" aria-controls="collapseFive1">
                                Menambahkan ketersediaan
                            </button>
                        </h2>
                        <div id="collapseFive1" class="accordion-collapse collapse" aria-labelledby="headingFive1"
                            data-bs-parent="#featureAccordion1">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    Anda bisa menambah ketersediaan untuk mempermudah pembuat jadwal menentukan jadwal tanpa
                                    menunggu konfirmasi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-carousel kanan shadow-lg" id="carousel1">
                <img src="{{ asset('img/Screenshot (77).png') }}" alt="Voting Feature 1" class="carousel-image" />
                <img src="{{ asset('img/Screenshot (78).png') }}" alt="Voting Feature 2" class="carousel-image" />
                <img src="{{ asset('img/Screenshot (79).png') }}" alt="Voting Feature 3" class="carousel-image" />
                <img src="{{ asset('img/Screenshot (78).png') }}" alt="Voting Feature 4" class="carousel-image" />
                <img src="{{ asset('img/Screenshot (77).png') }}" alt="Voting Feature 5" class="carousel-image" />
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const delay = 10000;

            function updateCarousel(carouselId, index) {
                const images = document.querySelectorAll(`#${carouselId} .carousel-image`);
                images.forEach(img => img.classList.remove('active'));
                images[index % images.length].classList.add('active');
            }

            function openAccordion(accordionId, carouselId, index) {
                const accordionItems = document.querySelectorAll(`#${accordionId} .accordion-item`);

                if (index < accordionItems.length) {
                    if (index > 0) {
                        const prevButton = accordionItems[index - 1].querySelector('.accordion-button');
                        const prevCollapse = bootstrap.Collapse.getInstance(accordionItems[index - 1].querySelector(
                            '.accordion-collapse'));
                        if (prevCollapse) prevCollapse.hide();
                        prevButton.classList.add('collapsed');
                        prevButton.setAttribute('aria-expanded', 'false');
                    }

                    const button = accordionItems[index].querySelector('.accordion-button');
                    button.classList.remove('collapsed');
                    button.setAttribute('aria-expanded', 'true');
                    const collapseEl = accordionItems[index].querySelector('.accordion-collapse');
                    const collapse = bootstrap.Collapse.getInstance(collapseEl) || new bootstrap.Collapse(
                        collapseEl, {
                            toggle: false
                        });
                    collapse.show();

                    updateCarousel(carouselId, index);

                    setTimeout(() => openAccordion(accordionId, carouselId, index + 1), delay);
                } else {
                    setTimeout(() => {
                        const lastButton = accordionItems[accordionItems.length - 1].querySelector(
                            '.accordion-button');
                        const lastCollapse = bootstrap.Collapse.getInstance(accordionItems[accordionItems
                            .length - 1].querySelector('.accordion-collapse'));
                        if (lastCollapse) lastCollapse.hide();
                        lastButton.classList.add('collapsed');
                        lastButton.setAttribute('aria-expanded', 'false');

                        openAccordion(accordionId, carouselId, 0);
                    }, delay);
                }
            }

            setTimeout(() => {
                updateCarousel('carousel1', 0);

                openAccordion('featureAccordion1', 'carousel1', 0);
            }, 0);
        });
    </script>

    {{-- end konten kedua --}}

    {{-- konten ketiga --}}
    <div class="bg-light d-flex justify-content-center flex-column align-items-center"
        style="margin:200px 0; padding: 100px">
        <span class="fs-2 mb-3 fw-bold  span-title" style="color: #72B5F6;">Pencapaian Kami</span>
        <span class="fs-5 w-75 span-title text-center" style="margin-bottom: 100px">Kami bangga telah membantu banyak pengguna dalam pengambilan
            keputusan dan manajemen jadwal
            yang lebih efektif.</span>
        <div class="d-flex justify-content-around">
            <div class="w-25 kiri d-flex flex-column text-center">
                <i style="color: #8854BB" class="fa-solid fa-person fs-1 mb-4"></i>
                <strong class="fs-5 mb-3">Ribuan Pengguna Aktif</strong>
                <span>VibeFour telah digunakan oleh lebih dari 5.000 pengguna untuk membantu mereka dalam pengambilan
                    keputusan
                    melalui voting digital dan pengelolaan jadwal yang efisien. Kami terus berkembang untuk memberikan
                    layanan
                    yang lebih baik.</span>
            </div>
            <div class="w-25 bawah d-flex flex-column text-center">
                <i style="color: #8854BB" class="fa-solid fa-check-to-slot fs-1 mb-4"></i>
                <strong class="fs-5 mb-3">Dipercaya oleh Berbagai Komunitas & Organisasi</strong>
                <span>Dari acara kecil hingga event besar, VibeFour telah dipercaya oleh komunitas, perusahaan, dan
                    institusi pendidikan dalam mengatur pemungutan suara serta penjadwalan acara secara transparan dan
                    mudah.</span>
            </div>
            <div class="w-25 kanan d-flex flex-column text-center">
                <i style="color: #8854BB" class="fa-solid fa-shield fs-1 mb-4"></i>
                <strong class="fs-5 mb-3">Teknologi yang Aman & Andal</strong>
                <span>Dengan sistem yang terus diperbarui, VibeFour memastikan keamanan data dan keakuratan hasil voting.
                    Kami menggunakan enkripsi data dan sistem autentikasi yang kuat untuk melindungi informasi
                    pengguna.</span>
            </div>
        </div>
    </div>
    {{-- end konten ketiga --}}

    {{-- konten keempat --}}
    <div class="bg-white vh-100 d-flex justify-content-center flex-column align-items-center pb-5">
        <span class="fs-2 fw-bold  span-title" style="color: #72B5F6; margin-bottom: 70px">Dokumentasi</span>
        <div class="container slide mt-5">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0"
                        class="active"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="border-radius: 20px; object-fit: cover"
                            src="{{ asset('img/dc3ac80641ce03d85fffcb9e0f96396a-ezgif.com-optiwebp.webp') }}"
                            width="900" height="550" class="d-block w-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img style="border-radius: 20px; object-fit: cover"
                            src="{{ asset('img/Mobile-Legends_Stage-Playoff-MPL-ID-S11.jpeg') }}" width="900"
                            height="550" class="d-block w-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img style="border-radius: 20px; object-fit: cover" src="{{ asset('img/CAP01310.jpg') }}"
                            width="900" height="550" class="d-block w-100" alt="Slide 3">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    {{-- end konten keempat --}}

    {{-- footer --}}
    @include('layout.footer')
@endsection
