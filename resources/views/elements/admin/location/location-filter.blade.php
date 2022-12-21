
<a href="#" class="theme-btn primary-btn d-inline-block mb-4" data-bs-toggle="offcanvas" data-bs-target="#offcanvaslocationfilters" aria-controls="offcanvaslocationfilters"><img class="me-2" src="/images/admin/add-ons/white-plus.svg" alt="Add">Create new filter</a>
<div class="card panel-card">
    <div class="card-body">
        <ul class="add-on-setting-ul list-unstyled p-0 m-0" id="location_filter_list">
       @if(count($filters)>0)
            @foreach($filters as $counter=>$filter)
                <li class="d-flex flex-wrap mb-4">
                    <label class="small-text2">Filter {{ $counter+1}}</label>
                    <span class="body-1 neutral-100 me-4 mb-3">{{ ucfirst($filter->name) }}</span>
                    <div class="d-flex">
                        <a href="{{ route('filters.destroy', $filter->id) }}" class="me-2"><img src="/images/admin/add-ons/add-on-delete.svg" alt="Delete"></a>
                        <a class="edit-filter" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvaseditlocationfilter" data-name="{{$filter->name }}" data-id="{{$filter->id}}" aria-controls="offcanvaseditlocationfilter"><img src="/images/admin/add-ons/add-on-edit.svg" alt="Edit"></a>
                    
                    
                    </div>
                </li>
            @endforeach
        @else
        <li><center>No record found </center></li>
        @endIf
        
        
        </ul>
    </div>
</div>
            