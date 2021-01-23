<div class="row">

    @if ($selected_filter)
        <div class="col-md-6 filter-div">
            <h5> {{$selected_filter->start_year}} - {{$selected_filter->end_year}}</h5>
            <p><span>Gender:</span> {{$selected_filter->gender}}</p>
            <p>
                <span>Countries:</span>
                [@foreach ($selected_filter->countries as $item) {{$item}}, @endforeach]
            </p>
            <p>
                <span>Colors:</span>
                [@foreach ($selected_filter->colors as $item) {{$item}}, @endforeach]
            </p>
            <p class="font-bold">
                found {{$car_owners->total()}} Car Owners for this filter
            </p>
        </div>
        <div class="col-md-6">
            Showing {{$car_owners->count()}} results out of {{$car_owners->total()}} Car Owners for this filter
        </div>
    @else
        <div class="col-md-12">
            Showing {{$car_owners->count()}} results out of {{$car_owners->total()}} Car Owners
        </div>
    @endif
</div>
