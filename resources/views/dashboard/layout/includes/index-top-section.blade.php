@if(Request::segment(2) != 'messages')

<div class="row mb-2">
    <div class="col-12 mb-3">
        <a href="{{ url(Request::segment(1) . '/' . Request::segment(2) .'/create') }}"
            class="btn btn-lg btn-primary rounded-0">
            <i class="fa-solid fa-plus"></i> Create
        </a>
    </div>
    <div class="col-12">
        <p>On this page, Admin can explore data by searching title, create new one, show detail information, move data into trash page, permanently delete data from the page of trashed data, and restore deleted data from trash page.</p>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">

        <a href="{{ url(Request::segment(1) . '/' . Request::segment(2) .'/publish') }}"
            @if(Request::segment(3) == '' || Request::segment(3) == 'publish') class="btn btn-sm btn-dark rounded-0"
            @else class="btn btn-sm btn-outline-dark rounded-0"
            @endif>
            <i class="fa-solid fa-check mr-1"></i> Publish
        </a>
        <a href="{{ url(Request::segment(1) . '/' . Request::segment(2) .'/draft') }}"
            @if(Request::segment(3) == 'draft') class="btn btn-sm btn-dark rounded-0"
            @else class="btn btn-sm btn-outline-dark rounded-0"
            @endif>
            <i class="fa-solid fa-pause mr-1"></i> Draft
        </a>

        <a href="{{ url(Request::segment(1) . '/' . Request::segment(2) .'/trash') }}"
            @if(Request::segment(3) == 'trash') class="btn btn-sm btn-dark rounded-0"
            @else class="btn btn-sm btn-outline-dark rounded-0"
            @endif>
            <i class="fa-solid fa-trash mr-1"></i> Trash
        </a>

    </div>
    <!-- .col END -->

    <div class="col-lg-6">
        <form action="{{ url(Request::segment(1) . '/' . Request::segment(2)) }}" method="get">
            <div class="input-group mb-3">
                <input type="search" name="s" class="form-control form-control-sm rounded-0" placeholder="Search {{ ucfirst(Request::segment(2)) }}" value="{{ request()->s ?? '' }}">
                <button type="submit" class="btn btn-sm btn-primary rounded-0">
                    <div class="fa-solid fa-search me-1"></div> Go!
                </button>
            </div>
        </form>
    </div>
    <!-- .col END -->
</div>

@else

<div class="row mb-2">
    <div class="col-12">
        <p>On this page, Admin can see all the inboxes from the visitor web. </p>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">

        <a href="{{ url(Request::segment(1) . '/' . Request::segment(2)) }}"
            @if(Request::segment(3) == '') class="btn btn-sm btn-dark rounded-0"
            @else class="btn btn-sm btn-outline-dark rounded-0"
            @endif>
            <i class="fa-solid fa-check mr-1"></i> Inbox
        </a>

        <a href="{{ url(Request::segment(1) . '/' . Request::segment(2) .'/trash') }}"
            @if(Request::segment(3) == 'trash') class="btn btn-sm btn-dark rounded-0"
            @else class="btn btn-sm btn-outline-dark rounded-0"
            @endif>
            <i class="fa-solid fa-trash mr-1"></i> Trash
        </a>

    </div>
    <!-- .col END -->

    <div class="col-lg-6">
        <form action="{{ url(Request::segment(1) . '/' . Request::segment(2)) }}" method="get">
            <div class="input-group mb-3">
                <input type="search" name="s" class="form-control form-control-sm rounded-0" placeholder="Search {{ ucfirst(Request::segment(2)) }}" value="{{ request()->s ?? '' }}">
                <button type="submit" class="btn btn-sm btn-primary rounded-0">
                    <div class="fa-solid fa-search me-1"></div> Go!
                </button>
            </div>
        </form>
    </div>
    <!-- .col END -->
</div>

@endif
