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
                                <th>Picture</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datas as $data)
                            <tr>
                                <td width="1">{{ ++$i }}</td>
                                <td width="100px">
                                    @if (!$data->photo)
                                    <img src="{{ asset('images/00.png') }}" alt="contributor image" width="100%" class="border shadow">
                                    @else
                                    <img src="{{ asset('images/team/' . $data->photo) }}" alt="contributor image" width="100%" class="border shadow">
                                    @endif
                                </td>
                                <td>{{ $data->full_name ?? '' }} </td>
                                <td>{{ $data->email ?? '' }} </td>
                                <td>{{Str::limit($data->address,90)}} </td>

                                @if (Request::segment(3) == 'trash')
                                <td class="d-flex">
                                    <x-restore-button :id="$data->id" />
                                    <x-delete-permanent-button :id="$data->id" />
                                </td>
                                @else
                                <td class="d-flex justify-content-end gap-2">
                                    <x-show-button :id="$data->id" />
                                    <x-edit-button :id="$data->id" />
                                    <x-delete-button :id="$data->id" />
                                </td>
                                @endif
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7"> empty</td>
                            </tr>
                            @endforelse
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
