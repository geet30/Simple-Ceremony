$(window).on('load', function () {
   
    $('ul.add-on-list-nav').find('li button').removeClass('active').removeClass('show');
    if (window.location.href.indexOf("all") > -1) {     
        $('ul.add-on-list-nav').find('li button#all-ads-on-tab').click();
    }
    if (window.location.href.indexOf("add-on-approved-tab") > -1) {
        $('ul.add-on-list-nav').find('li button#add-on-approved-tab').click();
    }
    if (window.location.href.indexOf("Waiting-for-approval-tab") > -1) {
        $('ul.add-on-list-nav').find('li button#Waiting-for-approval-tab').click();
    } 
    if (window.location.href.indexOf("all-ads-on-tab") > -1) {
        $('ul.add-on-list-nav').find('li button#all-ads-on-tab').click();
    
    } 
    if (window.location.href.indexOf("add-on-reject-tab") > -1) {
         $('ul.add-on-list-nav').find('li button#add-on-reject-tab').click();
    
    } 
});
$(document).ready(function(){
  
    //add-ons top tab//
  
    $('ul.add-on-list-nav').click(function(){
        var tab_id = $(this).find('li').find('button.active').attr("id");
        history.pushState('', '', [tab_id])
    
    });
    //booking steps tab//
    $('.list-group a').click(function(e) {      
        e.preventDefault();
        $(this).tab('show');
    });   
    // store the currently selected tab in the hash value
    $(".list-group > a").on("shown.bs.tab", function(e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });
    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('.list-group a[href="' + hash + '"]').tab('show');

    //locations tab //
    $('ul.location-tabs').click(function(){

        var tab_id = $(this).find('li').find('a.active').attr("id");
        // var url = '/locations-listing/' +tab_id;
        var url = '/locations/' +tab_id;
        history.pushState('', '', [url])
    
    });
     // add on inner tabs////
    $('.theme-tabs >li > a').click(function(e) {     
        e.preventDefault();
        $(this).tab('show');
    });  
    $(".theme-tabs > li > a").on("shown.bs.tab", function(e) {        
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });
    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('.theme-tabs  > li > a[href="' + hash + '"]').tab('show'); 
    

});