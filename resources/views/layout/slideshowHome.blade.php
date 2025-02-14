<style>
    .slideshow-container {
        position: relative;
        z-index: 1;
        max-width: 600px;
    }

    .slides {
        display: none;
        width: 100%;
        border-radius: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    .active {
        display: block;
    }

</style>
<div class="slideshow-container kanan">
    <img class="slides active" src="{{ asset('img/penjadwalan.png') }}" alt="">
    <img class="slides" src="{{ asset('img/votingan.png') }}" alt="">
</div>
<script>
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
