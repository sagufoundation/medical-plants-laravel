@extends('visitor.layout.user-app')
    @section('title')
    The Plants - Traditional Medicinal Plants in Papua
    @endsection
@section('content')

  <section>
      <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <h1 class="fw-bolder font-satu text-success"> The Plants</h1>
                <p>Discover the traditional medicinal plants recognized by Indigenous Papuans in Papua, Indonesia. Our comprehensive database includes information on their traditional uses, chemical properties, and potential health benefits.</p>
            </div>
        </div>
      </div>
  </section>

  <!-- SEARCH START -->
  @include('visitor.include.sections.search')

  <section>
    <div class="container py-5">
        <div class="row">

            <!-- col start -->
            @foreach ($datas as $data )
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <a href="{{ route('visitor.thePlants.detail',$data->slug) }}">
                      @if (!$data->cover_picture)
                      <img src="{{ asset('plants/sample/image-single.jpg') }}" alt="Image" class="card-img-top">
                      @else
                      <img src="{{ asset($data->cover_picture) }}" alt="Image" class="card-img-top">
                      @endif
                    </a>

                  <div class="card-body">
                    <h3>
                      <a href="{{ route('visitor.thePlants.detail',$data->slug) }}" class="fw-bold text-decoration-none link-success">
                            {!! $data->local_name !!}
                      </a>
                    </h3>
                    <p>
                      {!! $data->latin_name !!}
                    </p>
                    <div class="my-3 d-flex gap-3">
                      <a href="{{ url('plants/province/papua') }}" class="text-decoration-none link-secondary">
                        <i class="fa-solid fa-map-marker"></i> {{ $data->province->name ?? '' }}
                      </a>
                    </div>
                  </div>
                </div>
            </div>
            @endforeach
            <!-- col end -->

        </div>
    </div>
</section>

@stop
