@extends('layout.headerAsli')
@section('konten')
    <div class="d-flex justify-content-center mb-5">
        <div class="ms-5 w-50" style="margin-top: 100px; font-size: 14px">
            <nav aria-label="breadcrumb" class="mb-5 atas">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('beranda') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('berita') }}">Berita</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Perniahan terbaik tahun ini</li>
                </ol>
            </nav>
            <div class="d-flex flex-column">
                <span class="fs-1 mb-4 kiri" style="font-weight: 500">Perniahan terbaik tahun ini</span>
                <span class="fs-5 mb-5 kiri" style="color: #ABABAB">10 Februari 2025</span>
                <img class="shadow kanan" src="{{ asset('img/nice.webp') }}"
                    style="border-radius: 20px; width: 100%; height: 25rem; object-fit: cover; margin-bottom: 50px"
                    alt="">
                <span class="kiri">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum deserunt, voluptas autem similique
                    inventore ipsam aliquid unde nulla sint molestiae laudantium officiis dicta itaque hic fuga delectus
                    alias! Numquam corrupti voluptate placeat quibusdam sequi, sed molestiae corporis consequuntur quod amet
                    possimus necessitatibus reiciendis incidunt, labore, ipsa facere ex odio distinctio.
                </span>
                <br>
                <span class="kiri">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic qui quasi commodi eius. Recusandae ullam
                    tempore porro accusamus, voluptate ipsum excepturi natus. Porro eum voluptates id, rem nostrum ad odit
                    harum quos possimus nihil unde repudiandae amet perferendis deleniti excepturi vero aut delectus. Rem
                    sit sunt obcaecati maiores tempore natus. Autem magnam dicta modi sint deserunt harum vitae consectetur
                    asperiores?
                </span>
                <br>
                <span class="kiri">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae facilis incidunt ratione. Impedit,
                    voluptates? Eos reiciendis sequi libero dolorem explicabo saepe odit fugiat placeat blanditiis!
                    Temporibus iusto doloribus sapiente illo.
                </span>
                <br>
                <span class="kiri">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus magni rerum consectetur similique
                    delectus deleniti, quisquam nobis dolorem inventore. Quas assumenda nihil maiores eos animi, deleniti
                    laboriosam obcaecati tenetur earum iste id et harum voluptate qui tempore, dolorem nam? Laudantium unde,
                    delectus incidunt quis exercitationem harum minus asperiores rem aliquid, corporis perferendis qui
                    voluptatum quo numquam natus accusamus laborum. Iusto, fuga ullam architecto in quos fugiat iste
                    inventore quas odio unde deserunt nihil, dolorem id quaerat tenetur adipisci reiciendis! Ad repellat
                    atque ut expedita! Laudantium, quod necessitatibus ipsam sunt doloremque labore quia cupiditate? Officia
                    unde, ab ex hic necessitatibus consequatur.
                </span>
                <br>
                <span class="kiri">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum deserunt, voluptas autem similique
                    inventore ipsam aliquid unde nulla sint molestiae laudantium officiis dicta itaque hic fuga delectus
                    alias! Numquam corrupti voluptate placeat quibusdam sequi, sed molestiae corporis consequuntur quod amet
                    possimus necessitatibus reiciendis incidunt, labore, ipsa facere ex odio distinctio.
                </span>
            </div>
        </div>
    </div>
    @include('layout.footer')
@endsection
