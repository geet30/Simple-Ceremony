// $(document).ready(function(){
//    var advantage = '<div class="row "><div class="col-10 col-sm-8 col-md-6"><input type="text" placeholder="Type here" class="form-control body-1 netural-100" name="advantages[]" id="Key"></div><div class="col-2 col-sm-4 col-md-6"><label for="InputName" class="form-label small-text2 d-block">&nbsp;</label><a class="cross-icon"><img src="/images/icons/cross.svg" class="img-fluid"></a></div></div>';
   
//    function appendHtml(parentClass, type) {
//       var htmlCode = '';
//       if(type=='advantage'){
//          htmlCode=advantage
//       }
//       $(parentClass).append(htmlCode); 
//    }

// });
$(document).ready(function(){
   var advantage = '<div class="row mt-2 keyDiv"><div class="col-10 col-sm-8 col-md-6"><input type="text" placeholder="Type here" class="form-control body-1 netural-100" name="advantages[]" id="Key"></div><div class="col-2 col-sm-4 col-md-6"><a class="cross-icon" onclick="remove(`keyDiv`,this)"><img src="/images/icons/cross.svg" class="img-fluid"></a></div></div>';
   
   //function to append elements
   window.appendHtml = function(parentClass, type) { 
      var htmlCode = '';
      if(type=='advantage'){
         htmlCode=advantage
      }
      $('.'+parentClass).append(htmlCode); 
   }

   //function to remove the elements
   window.remove = function(parentClass, el) { 
      $(el).closest('.'+parentClass).remove()
   }
});