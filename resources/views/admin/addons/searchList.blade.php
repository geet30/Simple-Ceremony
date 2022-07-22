@if(count($addons)>0)
@foreach($addons as $counter=>$addon)
    <li class="d-flex flex-wrap mb-4">
        <label class="small-text2">Add-on {{ $counter+1}}</label>
        <span class="body-1 neutral-100 me-4 mb-3">{{ ucfirst($addon->name) }}</span>
        <div class="d-flex">
            <a href="{{ route('addons.destroy', $addon->id) }}" class=""><img src="/images/admin/add-ons/add-on-delete.svg" alt="Delete"></a>
            <a class="edit-addon" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvaseditaddons" data-name="{{$addon->name }}" data-id="{{$addon->id}}" aria-controls="offcanvaseditaddons"><img src="/images/admin/add-ons/add-on-edit.svg" alt="Edit"></a>
        
        
        </div>
    </li>
@endforeach
@else
<li>
   
    <center>No record found </center>
    
</li>
@endIf