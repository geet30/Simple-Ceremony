$(window).on('load', function () {
    $('ul.add-on-list-nav').find('li button').removeClass('active').removeClass('show');
    var current_url = window.location.pathname.split('/');
    if(current_url[2]){
        
        $('ul.add-on-list-nav').find('li button#'+current_url[2]).click();   
    }
   
});

$(document).ready(function(){
    window.addTabToUrl = function(e,url){
        var tab_id = $(e.target).attr("id");
        $('.filter_tab').css('display','block');
        if(tab_id == 'couple-invoice'){
            $('.filter_tab').css('display','none');
        }
        var url = url +tab_id;
        history.pushState('', '', [url])
    }
    // window.addHistoryToUrl = function(e){
    //     var tab_id = $(e.target).find('button.active').attr("id");
    //     alert(tab_id);
    //     history.pushState('', '', [tab_id])
    // }
    
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
    var current_url = window.location.pathname.split('/');
    // console.log(current_url[2]);
    if(current_url[2]){
        $('ul.theme-tabs').find('li a#'+current_url[2]).click();    
    }

});
