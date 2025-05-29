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
    <div class="container">
        <div class="row">

          <div class="mb-5 text-center">
            @empty(request()->s)
            @else
            <div>
                <i>
                    <span class="text-muted">Searching for</span> <b>"{{ request()->s ?? '' }}"</b>. Found <b>{{ $datas->count() }}</b>.
                </i>
            </div>
            @endempty

            @if (Request::segment(2) == 'regency')
            <div>
                <i>
                    <span class="text-muted">All plants in <b>"{{ $regencyDetail->name ?? '-' }}"</b>. Found <b>{{ $datas->count() }}</b>.
                </i>
            </div>
            @endif

          </div>

            <!-- col start -->
            @forelse ($datas as $data )
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <a href="{{ route('visitor.plants.detail',$data->id ?? '') }}">
                      @if (!$data->image_cover)
                      <img src="{{ asset('images/plants/image-single.jpg') }}" alt="Image" class="card-img-top">
                      @else
                      <img src="{{ asset('images/plants/'. $data->id.'/'.$data->image_cover ?? '') }}" alt="cover picture" class="card-img-top">
                      @endif
                    </a>

                  <div class="card-body">
                    <h3>
                      <a href="{{ route('visitor.plants.detail',$data->id ?? '') }}" class="fw-bold text-decoration-none link-success">
                            {!! $data->latin_name !!} 
                      </a>
                    </h3>
                    <div class="plant-info">
                      <span class="d-flex">English Name: <span class="plant-info-space">{!! $data->english_name ?? '<span class="text-muted">Not yet provided</span>' !!}</span></span>
                      <span class="d-flex">Indonesian Name: <span class="plant-info-space"> {!! $data->indonesian_name ?? '<span class="text-muted">Not yet provided</span>' !!}</span></span>
                      <span class="d-flex">Local Name: <span class="plant-info-space"> {!! $data->local_name ?? '<span class="text-muted">Not yet provided</span>' !!}</span></span>

                    </div>
                    <div class="my-3 d-flex gap-3">
                      @if (Request::segment(2) == 'regency')
                      <div class="text-decoration-none link-secondary">
                        <i class="fa-solid fa-map-marker"></i> {{ $regencyDetail->name ?? '' }}
                      </div>
                      @else     
                      <a href="{{ url('plants/regency', $data->regency->slug ?? '') }}" class="text-decoration-none link-secondary">
                        <i class="fa-solid fa-map-marker"></i> {{ $data->regency->name ?? '' }}
                      </a>
                      @endif
                    </div>
                  </div>
                </div>
            </div>

            @empty 
            <div class="text-center">
              <p>
                Not found!
              </p>
            </div>
            @endforelse

            <!-- col end -->

            <div class="mb-5 text-center">
              {{ $datas->links() }}
            </div>

        </div>
    </div>
</section>

@stop
