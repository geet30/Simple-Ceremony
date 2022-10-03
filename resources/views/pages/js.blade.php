<script type="text/javascript">
   
    var getcookie = getCookie('myCart');
    var count= getcookie.length;
    console.log('getCookie',getcookie );
    console.log('count',count );
    if (!getcookie) {
        localStorage.clear();
    }
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
            c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    $(document).ready(function(){
        let flag = false;
        $('.no_items').css('visibility','hidden');
        $('#basket_table').css('visibility','visible');
        
        $('.show-addon-basket-header').click(function(){
            var listing = getCartData();
            console.log('list',listing);
            if (typeof listing != "undefined" 
                        && listing != null 
                        && listing.length != null 
                        && listing.length > 0){
                $('.paynow_text').css('visibility','visible');
                appendHtml('keyCartBody', 'cart',listing);
            }else{
                $('.no_items').css('visibility','visible');
                $('#basket_table').css('visibility','hidden');  
                $('.paynow_text').css('visibility','hidden');
            }
            

        });
        $('.open-add-to-wedding').click(function(){
            var listing = getCartData();
            var cart_data = {};
            
            cart_data['price'] = parseInt($(this).data('price'));
            cart_data['package_id'] = $(this).data('id');
            cart_data['terms'] = $(this).data('terms');
            cart_data['package_name'] = $(this).data('package_name');
            console.log('listing',listing);
            flag = false;
            if (typeof listing != "undefined" 
                        && listing != null 
                        && listing.length != null 
                        && listing.length > 0){
                
                listing.forEach(el => {
                    if (el.package_id == $(this).data('id')) {
                        flag = true;
                        return false;
                    }else{
                        flag = false;
                        return false;
                    }
                })
            }
            $('.paynow_text').css('visibility','visible');

            if(flag == false){
        
                listing.push(cart_data);
                saveCartData(listing);
                appendHtml('keyCartBody', 'cart',listing);
                setCookie('myCart', JSON.stringify(listing), 7);
                
            }else{
                appendHtml('keyCartBody', 'cart',listing);
                setCookie('myCart', JSON.stringify(listing), 7);
            }
                    
          
        })
  
        function getCartData() {
            var data = localStorage.getItem('cart');
            console.log(data);
            var cart = [];
            if (typeof data != "undefined" 
                        && data != null 
                        && data.length != null 
                        && data.length > 0){
                cart = JSON.parse(data) || [];
               
            }
            return cart
            
        }
        $('.show-addon-basket').click(function(){
            var listing = getCartData();
            console.log('jj',listing.length);
            $('.show-addon-basket-header').find('.cart-item-counting').html(listing.length);
            $('#termsModal').modal('hide');
            
            $('#add_to_my_wedding').modal('hide');
            $('#basket_table').css('visibility','visible');
            $('.no_items').css('visibility','hidden');
            $("#agree_to_terms").prop("checked", false);
        
        })
        
    });
    window.saveCartData = function(data) { 
        localStorage.setItem('cart', JSON.stringify(data));
    }
    window.appendData = function(result){
       
       var data = JSON.parse(result);
       console.log(data);
       var created_date = new Date(data.created_at);
       created_date = created_date.toDateString().split(' ').slice(1).join(' ');
   
       var ceremony_type = <?php echo json_encode(config("ceremonyStatus.typeOfCeremony"));?>;
       console.log(ceremony_type[data.booking.ceremony_type],'bank');
   
        $('#tax_invoice_modal').find('.celebrant_name').html(data.recipient_name);
        $('#tax_invoice_modal').find('.date').html( created_date);
        $('#tax_invoice_modal').find('.abn_number').html(data.abn_number);
        $('#tax_invoice_modal').find('.couple').html(data.booking.first_couple_name+' & '+data.booking.second_couple_name);
        $('#tax_invoice_modal').find('.ceremony_date').html(data.booking.booking_date
           );
        $('#tax_invoice_modal').find('.ceremony_type').html(ceremony_type[data.booking.ceremony_type]);
       // $('#tax_invoice_modal').find('.celebrant_name').html(data.recipient_name);
       // $('#tax_invoice_modal').find('.celebrant_name').html(data.recipient_name);
       
   }
    
</script>