//js for select 2
$('.js-placeholder-single-input').select2({
  minimumResultsForSearch: -1
});


var filter= `<div class="search-location"><a onclick="SearchResults('search-location')" class="theme-btn primary-btn d-inline-flex px-5">Filter</a></div>`;
$(".select2-drop").append(filter);

$(".location_categories_button").select2()
    .on('select2:open', function () {
         let a = $(this).data('select2');
         if (!$('.search-location').length) {
             a.$results.parents('.select2-results')
                 .append(filter)
                 .on('click', function (b) {
                 });
         }
  });

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