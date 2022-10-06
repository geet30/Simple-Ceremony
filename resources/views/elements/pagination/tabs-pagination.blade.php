<div class="table-pagination col-12 text-right w-100">
    <div class="d-flex justify-content-end w-100 align-items-center">

        <?php $prev = $data->currentPage() - 1;
        if ($data->lastPage() > $data->currentPage()) {
            $next = $data->currentPage() + 1;
        } else {
            $next = $data->currentPage();
        }
        ?>
        <div class="align-self-center me-4 button-1">Rows per page: 10</div>
        <input class="perPage" type="hidden" value="1">

        <div class="align-self-center me-4 button-1 ">{{ $data->currentPage() }} of {{ $data->total() }}</div>

        <div class="pg-page">

            <ul class="d-flex align-items-center list-styled-none m-0 p-0">
                <li>
                    <?php if($data->currentPage()==1){ ?>
                    <a class="d-inline-flex me-4 disabled"><img src="/images/pagination/left.svg" class="img-fluid"></a>
                    <?php }else{?>
                    <a onclick="fetch_data('{{ $prev }}', '')" class="d-inline-flex me-4"><img
                            src="/images/pagination/left.svg" class="img-fluid"></a>
                    <?php }?>

                </li>
                <li>
                    <?php if($data->currentPage()==$data->lastPage()){ ?>
                    <a class="rd-inline-flex me-4 disabled"><img src="/images/pagination/right.svg"
                            class="img-fluid"></a>
                    <?php }else{?>
                    <a onclick="fetch_data('{{ $next }}', '')" class="d-inline-flex me-4"><img
                            src="/images/pagination/right.svg" class="img-fluid"></a>
                    <?php }?>
                </li>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
    function fetch_data(page, perpage) {
        if (perpage == '' || perpage == undefined) {
            perpage = $('.perPage').val();
        }
        var route = window.location.pathname + '?page=' + page;
        var data = {
            'records': perpage,
        };
        var current_url = window.location.pathname.split('/');
        $.ajax({
            method: 'GET',
            data: data,
            url: route,
            beforeSend:function(){
                // $('#loading').show();
            },
            success: function(response) {
             
                
                if (current_url[1] == 'all-enquiries' && (window.location.pathname.split('/')[2] == 'all-records-tab' || window.location.pathname
                    .split('/')[2] == 'all')) {
                    $("#all-records").html(response);
                } else if (window.location.pathname.split('/')[2] == 'booked-tab') {
                    $("#booked").html(response);
                } else if (window.location.pathname.split('/')[2] == 'follow-up-tab') {
                    $("#follow-up").html(response);
                } else if (window.location.pathname.split('/')[2] == 'no-interest-tab') {
                    $("#no-interest").html(response);
                }
                else if(current_url[1] == 'addons' && (window.location.pathname.split('/')[2]  == 'all-ads-on-tab' || window.location.pathname.split('/')[2] =='all'))
                {
                    $("#all-ads-on").html(response);
                } else if(window.location.pathname.split('/')[2]  == 'add-on-approved-tab'){
                    $("#add-on-approved").html(response);
                }  
                else if(window.location.pathname.split('/')[2]  == 'Waiting-for-approval-tab'){
                    $("#Waiting-for-approval").html(response);
                }  
                else if(window.location.pathname.split('/')[2]  == 'add-on-reject-tab'){
                    $("#add-on-reject").html(response);
                    
                } 
                if ((current_url[1] == 'upcoming' || current_url[1] == 'marriages')&& (window.location.pathname.split('/')[2] == 'all-records-tab' || window.location.pathname
                    .split('/')[2] == 'all')) {
                    $("#all-records").html(response);
                } else if (window.location.pathname.split('/')[2] == 'booked-tab') {
                    $("#booked").html(response);
                } else if (window.location.pathname.split('/')[2] == 'lodged-tab') {
                    $("#lodged").html(response);
                } else if (window.location.pathname.split('/')[2] == 'lodged-pending-tab') {
                    $("#lodged-pending").html(response);
                } 
                else if (window.location.pathname.split('/')[2] == 'non-legal-tab') {
                    $("#non-legal").html(response);
                } 
                else if (window.location.pathname.split('/')[2] == 'registered-tab') {
                    $("#lregistered").html(response);
                } 
                else if (window.location.pathname.split('/')[2] == 'finalised-tab') {
                    $("#finalised").html(response);
                } 
                else if (window.location.pathname.split('/')[2] == 'cancelled-tab') {
                    $("#cancelled").html(response);
                } 
                else if (window.location.pathname.split('/')[2] == 'settled-tab') {
                    $("#settled").html(response);
                } 

                // if (current_url[1] == 'all-payments' && (window.location.pathname.split('/')[2] == 'celebrants-invoice')) {

                // }
                // $('#loading').hide();
            },
        });
    }
</script>
