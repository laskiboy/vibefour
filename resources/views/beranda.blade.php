<style>
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

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: rgba(255, 255, 255, 1);transform: ;msFilter:;'%3E%3Cpath d='M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z'%3E%3C/path%3E%3C/svg%3E") !important;
        background-size: 24px;
        background-color: transparent;
        padding: 1rem;
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: rgba(255, 255, 255, 1);transform: ;msFilter:;'%3E%3Cpath d='M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z'%3E%3C/path%3E%3C/svg%3E") !important;
        background-size: 24px;
        background-color: transparent;
        padding: 1rem;
    }

    .btn {
        transition: all 0.3s ease-in-out;
    }

    .btn:hover {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    }

    .carousel-control-next,
    .carousel-control-prev {
        background-color: #72B5F6 !important;
        width: 40px !important;
        height: 40px !important;
        border-radius: 50%;
        top: calc(50% - 20px) !important;
        opacity: 0.8 !important;
    }

    .carousel-control-next {
        right: 20px;
    }

    .carousel-control-prev {
        left: 20px;
    }

    .carousel-control-next:hover,
    .carousel-control-prev:hover {
        opacity: 1;
        background-color: #48a4ff;
    }

    @media (max-width: 576px) {
        body .satu {
            width: 100%;
            flex-direction: column !important;
            margin-top: 30px;
            margin-left: 0;
            margin-right: 0;
        }

        .h1 {
            font-size: 45px !important;
            text-align: center !important;
        }

        .satu .slogan,
        .twp .slogan,
        .tihZa .slogan,
        .empat .slogan {
            font-size: 17px !important;
            margin: 50% 0;
        }

        .giv-blob {
            display: none !important;
        }

        .a-masuk {
            text-decoration: none !important;
            display: flex !important;
            justify-content: center !important;
        }

        .a-masuk button {
            width: 90% !important;
            font-size: 20px !important;
        }

        #featureAccordion1 {
            display: none;
        }

        #featureAccordion2 {
            display: block !important;
        }

        #carousel1,
        .span-blob {
            display: none !important;
        }

        .custom-accordion {
            width: 100% !important;
        }

        .span-kami {
            margin-bottom: 0 !important;
            text-align: center !important;
        }

        .tiha .span-bangga {
            width: 85% !important;
        }

        .pencapaian {
            flex-direction: column;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }

        .tiha .poin {
            width: 85% !important;
            margin-bottom: 50px;
        }

        .butin {
            margin-top: 100px;
        }

        .accordion-collapse {
            width: 100% !important;
        }

        .accordion-item .yoi {
            width: 100% !important;
        }

        .slides {
            margin-top: 30px;
            width: 90% !important;
            border-radius: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
    }

    .slides {
        position: relative;
        z-index: 1;
        max-width: 600px;
        border-radius: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }
</style>
@extends('layout.headerAsli')
@section('konten')
    {{-- konten pertama --}}
    <div class="satu bg-white vh-100 d-flex justify-content-evenly flex-row align-items-center">
        <div class="span d-flex flex-column">
            <h1 class="atas h1 text-black fw-bold" style="font-family: 'Montserrat'; font-size: 4em">
                {{ __('home.judul_satu') }}
            </h1>
            <h1 class="kiri to-everyone h1 text-black fw-bold"
                style="font-family: 'Montserrat'; margin-bottom: 30px; font-size: 4em">
                {{ __('home.judul_dua') }}
            </h1>
            <span class="slogan text-center fs-5 kanan">{{ __('home.slogan') }}</span>
            <a href="{{ route('login') }}" class="a-masuk">
                <button class="bawah slogan btn mb-3 mt-5 text-white"
                    style="background-color: #72B5F6; border-radius: 20px; width: 415px; height: 50px"><i
                        class="fa-solid fa-door-open me-2"></i> {{ __('home.masuk') }}</button>
            </a>
        </div>
        <img class="slides" src="{{ asset('img/penjadwalan.png') }}" alt="">
        <span class="kanan giv-blob position-absolute" style="right: 0; margin-right: 100px">
            <img width="500" src="{{ asset('img/svg.gif') }}" alt="">
        </span>
    </div>
    {{-- end konten pertama --}}

    {{-- konten kedua --}}
    <div class="two d-flex flex-column align-items-center m-5">
        <span class="fs-2 fw-bold span-title"
            style="color: #72B5F6; font-family: 'Montserrat';">{{ __('home.judul_fitur') }}</span>
        <span class="mb-5 span-kami span-sub">{{ __('home.ket_fitur') }}</span>
        <div class="w-100 dua d-flex align-items-center mt-5 justify-content-around">
            <span class="kiri span-blob position-absolute" style="left: 0; margin-left: -350px; z-index: -1">
                <svg width="500px" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#E8F4FF"
                        d="M43.1,-75.1C56.1,-67.2,67,-56.1,74.2,-43C81.4,-30,84.9,-15,84.9,0C85,15.1,81.7,30.1,74.4,43.1C67.2,56.1,56.1,67,43,75.2C30,83.5,15,89.1,-0.2,89.4C-15.4,89.7,-30.7,84.8,-44.3,76.8C-57.8,68.8,-69.5,57.9,-76.5,44.6C-83.5,31.3,-85.8,15.6,-86.5,-0.4C-87.2,-16.5,-86.4,-32.9,-79.8,-47C-73.3,-61.1,-61,-72.8,-46.8,-79.9C-32.5,-87.1,-16.3,-89.7,-0.6,-88.6C15.1,-87.6,30.2,-83,43.1,-75.1Z"
                        transform="translate(100 100)" />
                </svg>
            </span>
            <div class="kiri">
                <div class="accordion custom-accordion" style="max-width: 100%;" id="featureAccordion1">
                    @foreach ($fitur as $items)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $items->id }}">
                                <button class="accordion-button collapsed" style="font-family: 'Montserrat';" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $items->id }}"
                                    aria-expanded="false" aria-controls="collapse{{ $items->id }}">
                                    {{ $items->nama }}
                                </button>
                            </h2>
                            <div id="collapse{{ $items->id }}" class="accordion-collapse collapse"
                                aria-labelledby="heading{{ $items->id }}" data-bs-parent="#featureAccordion1">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        {{ $items->deskripsi }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="accordion d-none custom-accordion" id="featureAccordion2">
                    @foreach ($fitur as $items)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $items->id }}">
                                <button class="accordion-button collapsed" style="font-family: 'Montserrat';" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $items->id }}"
                                    aria-expanded="false" aria-controls="collapse{{ $items->id }}">
                                    {{ $items->nama }}
                                </button>
                            </h2>
                            <div id="collapse{{ $items->id }}" class="accordion-collapse collapse"
                                aria-labelledby="heading{{ $items->id }}" data-bs-parent="#featureAccordion1">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        {{ $items->deskripsi }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="image-carousel kanan shadow-lg" id="carousel1">
                @foreach ($fitur as $itemss)
                    <img src="{{ asset('storage/images/' . $itemss->gambar) }}" alt="Voting Feature $"
                        class="carousel-image" />
                @endforeach
            </div>
        </div>
    </div>
    {{-- end konten kedua --}}

    {{-- konten ketiga --}}
    <div class="bg-light tiha d-flex justify-content-center flex-column align-items-center"
        style="padding-top: 100px; padding-bottom: 100px;">
        <span class="fs-2 mb-3 fw-bold span-title"
            style="color: #72B5F6; font-family: 'Montserrat';">{{ __('home.judul_pencapaian') }}</span>
        <span class="span-title span-bangga w-50 text-center"
            style="margin-bottom: 100px">{{ __('home.ket_pencapaian') }}</span>
        <div class="d-flex justify-content-around pencapaian">
            @foreach ($isi_pencapaian as $item)
                <div class="w-25 poin kiri d-flex flex-column text-center">
                    {!! $item->icon !!}
                    <strong class="fs-5 mb-3" style="font-family: 'Montserrat';">{{ $item->judul }}</strong>
                    <span>{{ $item->deskripsi }}</span>
                </div>
            @endforeach
        </div>
    </div>
    {{-- end konten ketiga --}}

    {{-- konten keempat --}}
    <div class="empat container d-flex justify-content-center flex-column align-item-center" style="height: 30rem">
        <span class="fs-2 fw-bold text-center span-title"
            style="color: #72B5F6; margin-top: 50px; margin-bottom: 30px; font-family: 'Montserrat';">{{ __('home.judul_testimoni') }}</span>
        <section class="py-5 bawah">
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($testimoni as $key => $item)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="testimonial-content text-center">
                                        @php
                                            $initial = strtoupper(substr($item->rating->user->nama, 0, 1));
                                        @endphp

                                        <div class="mx-auto mb-4 d-flex align-items-center justify-content-center rounded-circle text-white"
                                            style="width: 48px; height: 48px; font-size: 18px; background-color: #8854BB">
                                            {{ $initial }}
                                        </div>

                                        <div class="ratings mb-2">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $item->rating->rating)
                                                    <i class="fas fa-star"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                        </div>

                                        <p class="lead slogan">
                                            {{ $item->rating->pesan }}
                                        </p>
                                        <p class="slogan font-weight-bold text-primary">- {{ $item->rating->user->nama }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev butin" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next butin" type="button" class="btn-dark"
                    data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </div>
    {{-- end konten keempat --}}

    {{-- footer --}}
    @include('layout.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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

        let slideIndex = 0;
        const slides = document.querySelectorAll(".slides");

        function showSlides() {
            slides.forEach((slide, index) => {
                slide.style.display = "none";
            });
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000);
        }

        showSlides();
    </script>
@endsection
