<div class="d-block  text-center d-md-none">
    <div class="dropdown show">
        <a class="btn dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @if ($selected_filter)
                <i class="fas fa-filter"></i> &nbsp;Id: {{$selected_filter->id}}
            @else
                Choose Filter
            @endif
        </a>

        <div  class="dropdown-menu filter-dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item @if(!$filter_id) active @endif"  href="{{route('index')}}">
                All Car Owners
            </a>
            @foreach ($filters as $key => $filter)
                <a class="dropdown-item @if($filter_id == $filter->id) active @endif"  href="{{route('filter',['filter_id'=>$filter->id])}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fas fa-filter"></i>
                            </div>
                            <div class="col">
                                <h5> {{$filter->start_year}} - {{$filter->end_year}}</h5>
                                <p><span>Gender:</span> {{$filter->gender}}</p>
                                <p>
                                    <span>Countries:</span>
                                    [@foreach ($filter->countries as $item) {{$item}}, @endforeach]
                                </p>
                                <p>
                                    <span>Colors:</span>
                                    [@foreach ($filter->colors as $item) {{$item}}, @endforeach]
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
