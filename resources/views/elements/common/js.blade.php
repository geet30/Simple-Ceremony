<script type="text/javascript">
$(document).ready(function(){
    
    window.findRecipientInfo = function(url,that){        
        var id = $(that).val();
        console.log(id,'user');
        if(id !=''){
            $.ajax({
                type: 'get',
                url: url,
                data: {
                    'id': id
                },
                dataType: 'json',
                cache: false,
                success: function(response) {
                    if (response.status) {
                        var bank = <?=json_encode(config("env.bankNames"));?>;
                        var temp =  $('.commonFirstEmpty');
                        temp.val('');
                        $('.abn_number').val(response.data.abn_number); 
                        $('.bank_name').val(bank[response.data.bank]);
                        $('.bank_number').val(response.data.account_no);
                    }
                    
                },
                error: function(response) { // handle the error                  

                },
                

            })
        }
        

    
    }
    window.findCoupleInfo = function(url,that){        
        var id = $(that).val();
        
        if(id !=''){
            $.ajax({
                type: 'get',
                url: url,
                data: {
                    'id': id
                },
                dataType: 'json',
                cache: false,
                success: function(response) {
                    console.log(response);
                    if (response.status) {
                       var ceremony_type = <?=json_encode(config("ceremonyStatus.typeOfCeremony"));?>;
                       
                        $('.booking_id').val(response.data.id);    
                        var temp =  $('.commonEmpty');
                        temp.val('');
                        $('.ceremony_date').val(response.data.booking_date);                       
                        $('.ceremony_type').val(ceremony_type[response.data.ceremony_type]);
                        $('.celebrant_fee').val('$'+response.data.celebrant_details.standard_fee);
                        $('.admin_fee').val('$'+response.data.celebrant_details.admin_fee);
                    }
                    
                },
                error: function(response) { // handle the error                  

                },
                

            })
        }
        

    
    }
});
</script>