@extends('layout.headerAsli')
<style>
    @media (max-width: 768px) {
        body .main {
            width: 90% !important;
            padding: 10px !important;
        }

        .main p {
            margin-bottom: 20px !important;
        }

        .accordion {
            margin-bottom: 50px !important;
        }
    }
</style>
@section('konten')
    <div class="container main w-75 p-5 mb-5">
        <p class="fs-2 fw-bold d-flex justify-content-center" style="color: #72B5F6; margin-top: 100px; margin-bottom: 80px">
            Kami Siap Membantu</p>
        <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
            @foreach ($faqs as $item)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapse{{ $item->id }}" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapse{{ $item->id }}">
                            <strong>{{ $item->pertanyaan }}</strong>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapse{{ $item->id }}" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            {!! $item->jawaban !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- footer --}}
    @include('layout.footer')
@endsection
