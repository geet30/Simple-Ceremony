var counter =0;
var package_count = 1;

$(document).ready(function(){
   // ImgUpload();
   var advantage = '<div class="row mt-2 keyDiv"><div class="col-10 col-sm-8 col-md-6"><input type="text" placeholder="Type here" class="form-control body-1 netural-100" name="key_advantages[]" id="Key"></div><div class="col-2 col-sm-4 col-md-6"><a class="cross-icon" onclick="remove(`keyDiv`,this)"><img src="/images/icons/cross.svg" class="img-fluid"></a></div></div>';
   var html = "";
   var total_fee = 0;

   function cart(data){
      html = '';total_fee =0;
      $('#basket_table').find('tbody').empty();
      
     
      $.each(data, function(key, value) {
         total_fee += parseInt(value.price);
         html +=  `<tr class="keyCart">
         <td><input type="text" class="form-control body-1 netural-100" name="name"
            id="package_name" value="${value.package_name}" readonly></td>
         <td><input type="text" value="1" class="form-control body-1 netural-100" name="quantity" id="InputName"
            readonly></td>
         <td><input type="text" value="$ ${value.price}" class="form-control body-1 netural-100" name="prce" id="InputName"
            readonly></td>
         <td><input type="text" value="$ ${value.price}" class="form-control body-1 netural-100" name="name" id="InputName"
            readonly></td>
         <td data-id="${value.package_id}" onclick="remove('keyCart',this,'keyCartBody','cart')">
            <img src="/images/item-delete.svg" class="img-fluid" alt="Delete">
         </td>
         </tr>`;

      });
      // console.log(total_fee);
      html +=  `<tr id="grand-total">
                  <td><span>&nbsp;</span></td>
                  <td colspan="2" class="total text-end">Grand total</td>
                  <td class="h4 neutral-100"><span id="total_fee">$ ${total_fee}</span></td>
                  <td>&nbsp;</td>
               </tr>`;
      return html;    
   }
   function package(counter,package_count){
      return `<div class="row mt-2 packageDiv">
                  <div class="col-md-12 mb-4 mt-4 add-ons-detail">
                     <div class="d-flex">
                        <div class="numberCircle align-self-center"><span class="packCount">${package_count}</span></div>
                        <p class="subheader-3 neutral-100 align-self-center mb-0 ms-2">Packages <span class="packCount">${package_count}</span> <a role="button" class="cross-icon ms-2 top-0" onclick="remove('packageDiv',this, 'packageContainer')"><img src="/images/icons/cross.svg" class="img-fluid"></a></p>
                     </div>
                  </div>
                  <div class="col-md-6 mb-4">
                     <label for="InputName" class="form-label small-text2">Package name</label>
                     <input type="text" placeholder="Add name package here" class="form-control body-1 netural-100" name="partner_packages[${counter}][package_name]" id="InputName" required>
                     <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Package name is required</div>
                  </div>
                  <div class="col-md-6 mb-4">
                     <div class="row">
                        <div class="col-md-4">
                           <label for="InputName" class="form-label small-text2">Partner fee</label>
                           <input type="text" placeholder="$" class="form-control body-1 netural-100" name="partner_packages[${counter}][partner_fee]" id="InputName" required>
                           <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Partner fee is required</div>
                        </div>
                        <div class="col-md-4">
                           <label for="InputName" class="form-label small-text2">SC admin fee</label>
                           <input type="text" placeholder="$ 120" class="form-control body-1 netural-100" name="partner_packages[${counter}][admin_fee]" id="InputName" required>
                           <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>SC admin fee is required</div>
                        </div>
                        <div class="col-md-4">
                           <label for="InputName" class="form-label small-text2">Total fee</label>
                           <input type="text" placeholder="$ 120" class="form-control body-1 netural-100" name="partner_packages[${counter}][total_fee]" id="InputName" required>
                           <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Total fee is required</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 mb-4">
                     <label for="InputName" class="form-label small-text2">Deposit (optional)</label>
                     <input type="text" placeholder="%" class="form-control body-1 netural-100" name="partner_packages[${counter}][deposit]" id="InputName">
                  </div>
                  <div class="col-md-3 mb-4">
                     <label for="InputName" class="form-label small-text2">Simulation partner fee</label>
                     <input type="text" placeholder="$" class="form-control body-1 netural-100" name="partner_packages[${counter}][simulation_partner_fee]" id="InputName" required>
                     <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Simulation partner fee is required</div>
                  </div>
                  <div class="col-md-3 mb-4">
                     <label for="InputName" class="form-label small-text2">Simulation admin fee</label>
                     <input type="text" placeholder="$" class="form-control body-1 netural-100" name="partner_packages[${counter}][simulation_admin_fee]" id="InputName" required>
                     <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Simulation admin fee is required</div>
                  </div>
                  <div class="col-md-3 mb-4">
                     <label for="InputName" class="form-label small-text2">Total fee</label>
                     <div class="d-flex align-items-center">
                        <input type="text" placeholder="$" class="form-control body-1 netural-100" name="partner_packages[${counter}][simulation_total_fee]" id="InputName" required>
                        <span class="d-inline-block ms-2" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Fill the deposit field first, after that simulation total deposit can appear">
                        <img src="/images/booking-form/information.svg" alt="Information Icon" style="width:13px;">
                        </span>
                     </div>
                     <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Total fee is required</div>
                  </div>
                  <div class="col-md-12 mb-4">
                     <label class="form-label small-text2">Location description</label>
                     <textarea name="partner_packages[${counter}][location_description]" placeholder="Type here" class="form-control body-1 netural-100" rows="12" required></textarea>
                     <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Location Description is required</div>
                  </div>
                  <div class="col-md-12 mb-4">
                     <label class="form-label small-text2">Title term (*optional)</label>
                     <textarea placeholder="Type title term here" name="partner_packages[${counter}][title_term]" class="form-control body-1 netural-100" rows="2"></textarea>
                  </div>
                  <div class="col-md-12 mb-4">
                     <label class="form-label small-text2">Terms (*optional)</label>
                     <textarea name="partner_packages[${counter}][terms]" placeholder="Type terms here" class="form-control body-1 netural-100" rows="8"></textarea>
                  </div>
                  <div class="col-md-12 mb-4 partner-gallery-upload-box position-relative">
                     <label for="gallery" class="form-label small-text2 mb-20">Upload gallery photos</label>
                     <div class="upload__box">
                        <div class="upload__btn-box">
                           <label class="theme-btn primary-btn ">
                              <p class="mb-0"> <img src="/images/icons/photo.svg"  class="img-fluid me-2">Upload images</p>
                              <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="upload__inputfile-${counter}" name="partner_packages[${counter}][package_images][image_name][]" required>
                              <div class="invalid-feedback" style="position: absolute;bottom: -24px;left: 40px;text-align: left;z-index: 1;"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Images are required</div>
                           </label>
                        </div>
                        <div class="upload__img-wrap">                          
                        </div>
                     </div>
                  </div>
               </div>`;
     
   }
   window.appendHtml = function(parentClass, type,data=Array()) { 
      var htmlCode = '';
      if(type=='cart'){  
         htmlCode=cart(data);
         // console.log(htmlCode);
      }
      if(type=='advantage'){
         htmlCode=advantage
      }
      if(type=='package'){
         counter++;
         package_count++;
         htmlCode=package(counter,package_count);
         
      }
      $('.'+parentClass).append(htmlCode); 
      
      ImgUpload(counter);
   }
  
   function showTotals () {
      total_fee =0;
     
      var listing = JSON.parse(localStorage.getItem('cart')) || [];
     

      console.log(listing);
      $.each(listing, function(key, value) {
         total_fee += parseInt(value.price);
      });
      $('#total_fee').html('$ '+total_fee.toFixed(2));
      
    }

   //function to remove the elements
   window.remove = function(parentClass, el, packageContainer,type) { 

     
      if(packageContainer!=''){
         if($('.'+packageContainer).find('.'+parentClass).length == 1)
         return false;
         $(el).closest('.'+parentClass).remove()
         if(type=='cart'){
            
            let storageProducts = JSON.parse(localStorage.getItem('cart'));
            let products = storageProducts.filter(product => product.package_id !== $(el).data('id') );
            localStorage.setItem('cart', JSON.stringify(products));
            let cart_count= JSON.parse(localStorage.getItem('cart')).length;
            console.log('after delete',cart_count);
            showTotals();
            
            if(cart_count == 0){
               $('#grand-total').html(`
               <td><span>&nbsp;</span></td>
               <td colspan="2" class="total text-end">cart is empty</td>
               <td class="h4 neutral-100"></td>
               <td>&nbsp;</td>`)
               $('.paynow_text').css('visibility','hidden');
            }
         }
         package_count= $('.'+packageContainer).find('.'+parentClass).length
         
         $("."+parentClass).each(function(index,el) {
            var packCount= index+1;
            $(el).find('.packCount').text(packCount)
         });
      }else{
         $(el).closest('.'+parentClass).remove()
      }
   }


});