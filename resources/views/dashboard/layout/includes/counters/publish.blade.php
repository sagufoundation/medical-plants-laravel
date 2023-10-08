<span class="badge badge-light border badge-pill">
    @if(Request::segment(2) == 'plants') 
        {{ $plants_total_publish ?? '' }} 

    @elseif(Request::segment(2) == 'locations') 
        {{ $locations_total_publish ?? '' }} 

    @elseif(Request::segment(2) == 'provinces') 
        {{ $provinces_total_publish ?? '' }} 

    @elseif(Request::segment(2) == 'icons') 
        {{ $icons_total_publish ?? '' }} 

    @elseif(Request::segment(2) == 'contributors') 
        {{ $contributors_total_publish ?? '' }} 

    @elseif(Request::segment(2) == 'users') 
        {{ $users_total_publish ?? '' }} 
    @else
        {{ '' }}
    @endif
</span>