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

// Form validation JS
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        $(".submitBtn").attr("disabled", false);
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


// popover JS
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})

//js for select 2
$('.js-placeholder-single-input').select2({
  minimumResultsForSearch: -1
});

//////// Select 2 Js with checkbox
$(".js-select2").select2({
  closeOnSelect : false,
  placeholder : "Placeholder",
  // allowHtml: true,
  allowClear: false,
  tags: true 
});
$(document).ready(function() {
  $('.js-example-basic-multiple').select2();
});
//////// Select 2 Js with search
$(".js-example-placeholder-single").select2({
  placeholder: "Insert name of location",
  allowClear: false
});

$('.js-example-placeholder-single').select2().on('select2:open', function(e){
  $('.select2-search__field').attr('placeholder', 'Type here....');
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

/////// top navbar
$('.navbar-nav a').removeClass('active')
var current = location.pathname;
if(current=='/'){
  $('.navbar-nav a').first().addClass('active');
}else{
  $('.navbar-nav a').each(function(){
    var $this = $(this);
    // if the current path is like this link, make it active
    if($this.attr('href').indexOf(current) !== -1){
        $this.addClass('active');
    }
})
}
 