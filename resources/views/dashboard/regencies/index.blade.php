
@extends('dashboard.layout.app')

@section('content')

@include('dashboard.layout.includes.breadcrumb2')

<!-- .row START -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                @include('dashboard.layout.includes.index-top-section')

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Image/Icon</th>
                                <th>Name</th>
                                <th>Coordinates</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($datas as $data)
                            <tr>
                                <td width="1">{{ ++$i }}</td>

                                <td width="100px">
                                    @if($data->image)
                                        <img src="{{ asset('images/regencies/' . $data->image) }}" alt="regency image" width="100%" class="border shadow" />
                                    @else 
                                        <img src="{{ asset('images/regencies/00.png') }}" alt="regency image" width="100%" class="border shadow" />
                                    @endif
                                </td>
                                <td>{{ $data->name ?? '' }}</td>
                                <td>{{ $data->coordinates ?? '' }}</td>
                                @if (Request::segment(3) == 'trash')
                                <td class="d-flex">

                                    <form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.restore', $data->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-success rounded-0 mx-1">
                                        <i class="fa-solid fa-reply"></i> Restore
                                    </button>
                                    </form>

                                    <form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.delete', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-0 mx-1 show_confirm">
                                        <i class="fa-solid fa-times-square" data-toggle="tooltip" title='Delete'></i> Delete Permanently
                                    </button>
                                    </form>

                                </td>
                                @else
                                <td class="d-flex">
                                    {{-- <a href="{{ route(Request::segment(1).'.'.Request::segment(2).'.show', $data->id) }}" class="btn btn-sm btn-dark rounded-0 mx-1">
                                        <i class="fa-solid fa-eye"></i>
                                    </a> --}}
                                    <a href="{{ route(Request::segment(1).'.'.Request::segment(2).'.edit', $data->id) }}" class="btn btn-sm btn-light rounded-0 mx-1">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>

                                    <form action="{{ route(Request::segment(1).'.'.Request::segment(2).'.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-light rounded-0 mx-1">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- .table-responsive END -->

                <div class="d-flex justify-content-center">
                    {{ $datas->links() }}
                </div>

            </div>
            <!-- .card-body END -->
        </div>
        <!-- .card END -->
    </div>
    <!-- .col END -->
</div>
<!-- .row END -->

@endsection

@include('dashboard.layout.includes.index-script-footer')
