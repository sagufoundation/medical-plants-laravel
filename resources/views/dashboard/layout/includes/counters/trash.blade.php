<span class="badge badge-light border badge-pill">
    @if(Request::segment(2) == 'plants') 
        {{ $plants_total_trash ?? '' }} 

    @elseif(Request::segment(2) == 'locations') 
        {{ $locations_total_trash ?? '' }} 

    @elseif(Request::segment(2) == 'regencies') 
        {{ $regencies_total_trash ?? '' }} 

    @elseif(Request::segment(2) == 'provinces') 
        {{ $provinces_total_trash ?? '' }} 

    @elseif(Request::segment(2) == 'icons') 
        {{ $icons_total_trash ?? '' }} 

    @elseif(Request::segment(2) == 'contributors') 
        {{ $contributors_total_trash ?? '' }} 

    @elseif(Request::segment(2) == 'users') 
        {{ $users_total_trash ?? '' }} 
    @else
        {{ '' }}
    @endif
</span>
