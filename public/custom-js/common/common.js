//sidebar menu active
// $(window).on('load', function () { 
//   $("#sidebarMenu li a").each(function() {  
// 	  var pageUrl = window.location.href.split(/[?#]/)[0];
//     console.log('pageUrl',pageUrl);
//     console.log('href',this.href);
// 		if (this.href == pageUrl) {     
// 			$(this).addClass("active");	
// 		}
// 	});
// });

// slick slider js
$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  focusOnSelect: true
});

// popover JS
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})


/////// calander Js
function selectDate(date) {
  $('#calendar-wrapper').updateCalendarOptions({
    date: date
  });
  console.log(calendar.getSelectedDate());
}

var defaultConfig = {
  weekDayLength: 2,
  date: '08/05/2021',
  onClickDate: selectDate,
  showYearDropdown: true,
  startOnMonday: true,
};

var calendar = $('#calendar-wrapper').calendar(defaultConfig);
console.log(calendar.getSelectedDate());


/////// user sidebar
$("#sidebarMenu li a").click(function() {
  
  $("#sidebarMenu li a").removeClass('active')
  $(this).addClass('active');
});

///// image uploader Js

document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();
    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}
// 
let imgId = '.upload__inputfile';
$(document).ready(function () {
  
  if($(".alert").is(":visible")){
    //  $('html, body').animate({ scrollTop: $('.alert:first').offset().top - 10 }, 500);
     $(".alert").slideDown(300).delay(3000).slideUp(300);
  }
  // $(".alert").slideDown(300).delay(3000).slideUp(300);
 
  ImgUpload();
});

function ImgUpload(counter=null) {
  
  var imgWrap = "";
  var imgArray = [];
 
  if(counter != null){
    imgId = '#upload__inputfile-' +counter;

  }
  console.log(imgId);
  $(imgId).each(function () {
   
    $(this).on('change', function (e) {
      
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {
        if (!f.type.match('image.*') && !f.type.match('video.*')) {
          // if (!f.type.match('image.*')) {
          return;
        }
        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              if(f.type.match('video.*')){              
                var html = `<div class='upload__img-box'>
                                <div class="video-container" id="video-container" data-number='${$(".upload__img-close").length}' data-file='${f.name}'> 
                                    <video controls width="100%" data-number='${$(".upload__img-close").length}' data-file='${f.name}' class=''  id="video" preload="metadata" poster="${e.target.result}">
                                      <source src="${e.target.result}" type="video/mp4">
                                    </video>
                                    <div class="upload__img-close" style="right:20px"></div>
                                  </div>
                            </div>`;
                
                
              }else{
                var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              }
              
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  
  var image_id_array = [];
  var x = 0;
  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    image_id_array[x] = $(this).parent().data("image_id");

    var length_outer =$(this).closest('.upload__box').find('.upload__img-wrap').find('.upload__img-box').length;
    console.log(length_outer);
    if(length_outer ==1 ){
      // $(this).parents('.images_outer_div').find('.images_required').addClass('d-block');
      $(this).parents('.images_outer_div').find('.upload__inputfile').prop('required',true);
    }
    
    x++;
    $('#image_id').val(image_id_array);
    $('.image_id').val(image_id_array);
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}
// 


(function( $ ) {
  $(document).find('.offcanvasCommonClass').click(function(){
    
    $('.offcanvas_add_select2_class').addClass('addSelect2');
    $('body').addClass('addSelect2');
  })
  $(document).find('.closeCanvas').click(function(){
    $('body').removeClass('addSelect2');
    $('.offcanvas_add_select2_class').removeClass('addSelect2');
  })
  $('#information-tab').click(function(){
      $('.addmarriage').addClass("d-none");
      $('.addmarriage').removeClass("d-block");
      $('.editinformation').addClass("d-block");
      $('.editinformation').removeClass("d-none");
     
  });
  $('#celebrants-tab').click(function(){
      $('.addmarriage').removeClass("d-none");
      $('.editinformation').removeClass("d-block");
      $('.editinformation').addClass("d-none");
      $('.addmarriage').addClass("d-block");
     
  });
})(jQuery);

$('.eyeIcon').click(function(){
      if($(this).hasClass('fa-eye-slash')){   
        $(this).removeClass('fa-eye-slash');          
        $(this).addClass('fa-eye');         
        $('.passwordInput').attr('type','text');          
      }else{
        $(this).removeClass('fa-eye');
        $(this).addClass('fa-eye-slash');  
        $('.passwordInput').attr('type','password');
      }
});
$(".heart.fa-heart").click(function() {
  $(this).toggleClass(" fa-regular fa-solid ");
});

$(document).ready(function() {
  $('.show-footer').click(function() {
    $('.hidden-footer').slideToggle("slow");
  });
});
function selectDateClass(date) {
  $('.calendar-wrapper').updateCalendarOptions({
    date: date
  });
  console.log(calendar.getSelectedDate());
}

var defaultConfigClass = {
  weekDayLength: 2,
  date: '08/05/2021',
  onClickDate: selectDateClass,
  showYearDropdown: true,
  startOnMonday: true,
};

var calendar = $('.calendar-wrapper').calendar(defaultConfigClass);
// console.log(calendar.getSelectedDate());



(function( $ ) {
  $('.reply-btn').click(function(){
      $('.reply-content').addClass("d-block");
      $('.reply-btn').addClass("d-none");
  });
  $('.cancel-btn').click(function(){
    $('.reply-content').removeClass("d-block");
    $('.reply-btn').removeClass("d-none");
});
 
})(jQuery);

(function( $ ) {
  $('#reply-text').click(function(){
      $('.hidden-tree').addClass("d-block");
      $('.hidden-tree').removeClass("d-none");
      $('.reply-text').addClass("d-none");
  });
})(jQuery);

(function( $ ) {
  $('.reschedule-btn').click(function(){
      $('.change-reschedule-1').addClass("d-none");
      $('.change-reschedule-2').addClass("d-block");
      $('.change-reschedule-2').removeClass("d-none");
      $('.reschedulecancel-btn').addClass("d-block");
      $('.reschedulecancel-btn').removeClass("d-none");
      $('.reschedule-btn').addClass("d-none");
  });
  $('.reschedulecancel-btn').click(function(){
    $('.change-reschedule-1').addClass("d-block");
    $('.change-reschedule-1').removeClass("d-none");
    $('.change-reschedule-2').addClass("d-none");
    $('.change-reschedule-2').removeClass("d-block");
    $('.reschedulecancel-btn').addClass("d-none");
    $('.reschedulecancel-btn').removeClass("d-block");
    $('.reschedule-btn').addClass("d-block");
    $('.reschedule-btn').removeClass("d-none");
});
 
 
})(jQuery);

$(function(){
  $('.theme-datepicker').datepicker({
    format: 'D, MM d, yyyy',
    keyboardNavigation: false,
       autoclose: true
   });
});