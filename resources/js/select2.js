//js for select 2
$('.js-placeholder-single-input').select2({
  minimumResultsForSearch: -1
});

////// Select 2 Js with checkbox
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

$(".js-example-placeholder-multiple").select2({
  placeholder: "Select a state"
});