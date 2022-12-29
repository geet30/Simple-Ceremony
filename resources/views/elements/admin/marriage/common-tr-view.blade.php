<tr class='clickable-row' data-href="{{route('marriage.detail',$result->id)}}">
    <td style="min-width:160px" class="body-2">{{$result->first_couple_name}} & {{$result->second_couple_name}}</td>
    <td style="min-width:130px" class="body-2">{{config('ceremonyStatus.typeOfCeremony.'.$result->ceremony_type) }}</td>
    <td style="min-width:130px" class="body-2">{{date('M d, Y',strtotime($result->created_at))}}</td>
    <td style="min-width:50px" class="body-2">{{config('ceremonyStatus.booking_progress.'.$result->status) }} <span class="align-self-center ms-1 info-icon">
            <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">New booking</span></a>
        </span>
    </td>
    <td class="body-2 neutral-100" style="min-width:140px;">

        @if(isset($result->celebrant->first_name) && $result->celebrant->first_name!=null)
        {{ $result->celebrant->first_name}}
        @else
        <a href="" data-bs-toggle="offcanvas" data-bs-target="#marriage-celebrant" class="text-decoration-underline  add-link assign_celebrant" data-id="{{$result->id}}"> Assign marriage celebrant</a>
        @endif


    </td>
    <td class="body-2 neutral-100" style="min-width:130px;">
        {{$result->location->name}}
    </td>
    <td class="body-2 neutral-100" style="min-width:130px;">{{date('M d,Y',strtotime($result->booking_date))}}</td>
    <td>{{count($result->booking_addons)}}</td>
    <td style="min-width:120px;">
        <span class="text-nowrap cursor-pointer  status {{strtolower(config('ceremonyStatus.booking_status.'.$result->status) )}}"> <a role="button" data-bs-toggle="modal" data-bs-target="#change_status_modal" onclick="appendId('{{$result->id}}','id')">{{config('ceremonyStatus.booking_status.'.$result->status) }} </a></span>
    </td>


    <td style="min-width:60px;" class="body-2 neutral-100">
        <?php

        $to = date_create(date('Y-m-d'));
        $from = date_create($result->booking_date);
        $diff = date_diff($to, $from);
        echo $diff->format('%a days');
        ?>
    </td>
    <td></td>
    <td style="min-width:150px;" class="text-end">
        <a href="{{route('marriage.detail',$result->id)}}" class="table-link">View info</a>
    </td>
</tr>