<div class="list-group d-none d-md-block" id="list-tab" role="tablist">
    <li class="list-group-item disabled gallery-nav-header">
        Filters ({{count($filters)}} filters)
        <p class="filter-subtitle">Scroll and choose a Filter</p>
    </li>
    <div class="list-group-scroll" id="scroll">
        <a  class="filter-container list-group-item list-group-item-action @if(!$filter_id) active @endif"  href="{{route('index')}}" role="tab">
            All Car Owners
        </a>
        @foreach ($filters as $key => $filter)
            <a  class="container filter-container list-group-item list-group-item-action @if($filter_id == $filter->id) @if($key >= 2) scrollTo @endif active @endif"  href="{{route('filter',['filter_id'=>$filter->id])}}" role="tab">
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
            </a>
        @endforeach
    </div>
</div>
