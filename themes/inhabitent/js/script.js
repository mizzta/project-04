// IIFE immeditaley envoked function expression
(function ($) {
    $(function () {
    // alert('hello');
    // // all of your code goes
    // $('body').append('hello world');
    // $('.documents').always(function () {
        $('.header-search .search-field').hide();

        $('.icon-search').on('load', function(){
            event.preventDefault();
        });

        $('.icon-search').click(function() {
            event.preventDefault();
          $('.search-field').show();
          $('.search-field').focus();

        });

        $('.search-field').blur(function(){
            $('.search-field').hide();
        });
    //   });

});//end of doc ready
    
}) (jQuery); //end of js file


