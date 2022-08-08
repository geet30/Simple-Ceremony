
<div class="table-pagination col-12 text-right w-100">
    <div class="d-flex justify-content-end w-100 align-items-center">
        {{--@if(!empty($data))--}}
        <?php 
       
            $prev = $data->currentPage() - 1;
            if($data->lastPage() > $data->currentPage()){
            $next = $data->currentPage() + 1;
            }else{
            $next = $data->currentPage();
            }
            ?>
            <div class="align-self-center me-4 button-1">Rows per page: 10</div>
            <input class="perPage" type="hidden" value="1">
            
            <div class="align-self-center me-4 button-1 ">{{$data->currentPage()}} of {{$data->total()}}</div>
            
            <div class="pg-page">
            
                <ul class="d-flex align-items-center list-styled-none m-0 p-0">  
                        <li>
                        <?php if($data->currentPage()==1){ ?>
                            <a class="d-inline-flex me-4 disabled"><img src="/images/pagination/left.svg" class="img-fluid"></a>
                        <?php }else{?>
                            <a  onclick="fetch_data('{{$prev}}', '')"  class="d-inline-flex me-4"><img src="/images/pagination/left.svg" class="img-fluid"></a>
                        <?php }?>

                        </li>
                        <li>
                        <?php if($data->currentPage()==$data->lastPage()){ ?>
                            <a class="rd-inline-flex me-4 disabled"><img src="/images/pagination/right.svg" class="img-fluid"></a>
                        <?php }else{?>
                            <a  onclick="fetch_data('{{$next}}', '')"  class="d-inline-flex me-4"><img src="/images/pagination/right.svg" class="img-fluid"></a>
                        <?php }?>
                        </li>
                </ul>
            </div>  
           {{-- @endif--}} 
    </div>
</div>
<script type="text/javascript">

function fetch_data(page, perpage) {
    
    if(perpage=='' || perpage==undefined){
        perpage= $('.perPage').val();
    }
    
    var route = window.location.pathname+'?page='+page;
    var data = {'records':perpage};
    $.ajax({
        method:'GET',
        data:data,
        url:route,
        success:function(response){
            $('#request').html(response);
            // if(window.location.pathname.split('/')[2]  == 'all-ads-on-tab' || window.location.pathname.split('/')[2] =='all')
            // {
            //     $("#all-ads-on").html(response);
            // } else if(window.location.pathname.split('/')[2]  == 'add-on-approved-tab'){
            //     $("#add-on-approved").html(response);
            // }  
            // else if(window.location.pathname.split('/')[2]  == 'Waiting-for-approval-tab'){
            //     $("#Waiting-for-approval").html(response);
            // }  
            // else if(window.location.pathname.split('/')[2]  == 'add-on-reject-tab'){
            //     $("#add-on-reject").html(response);
                
            // }      
            
            
            // $('.perPage').val(perpage);
        },
    });
}

</script>