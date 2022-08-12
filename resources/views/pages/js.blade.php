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
      
        // localStorage.clear();
        let flag = false;
       
        
        $('.show-addon-basket-header').click(function(){
            var listing = getCartData();
            if (typeof listing != "undefined" 
                        && listing != null 
                        && listing.length != null 
                        && listing.length > 0){
                $('.paynow_text').css('visibility','visible');
            }else{
                $('.paynow_text').css('visibility','hidden');
            }
            appendHtml('keyCartBody', 'cart',listing);

        });
        $('.open-add-to-wedding').click(function(){
            var listing = getCartData();
            var cart_data = {};
            
            cart_data['price'] = $(this).data('price');
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
            $('#termsModal').modal('hide');
            
            $("#agree_to_terms").prop("checked", false);
        
        })
    });
    window.saveCartData = function(data) { 
        localStorage.setItem('cart', JSON.stringify(data));
    }
    
</script>