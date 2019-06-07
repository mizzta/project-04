// IIFE immeditaley envoked function expression
(function ($) {
    $(function () {
    // alert('hello');
    // // all of your code goes
    // $('body').append('hello world');
    // $('.documents').always(function () {

        const searchField = $('.header-search .search-field');
        const iconSearch = $('.header-search .icon-search');

        searchField.hide();

        /**
         * Events
         */
        iconSearch.click(function(event) {
            event.preventDefault();
            searchInputFocus();
        });
        
        searchField.blur(searchInputBlur);

        /**
         * Functions
         */
        function searchInputFocus(){
            searchField.show(500);
            searchField.focus();
        }

        function searchInputBlur(){
            // check if the search-field is empty
            if(searchField.val() === ''){
                // if the search field is empty than we can hide it
                searchField.hide(300);
            }
            else {
                // the search field is not empty so do not hide
                console.log("input has a value so do not hide");
            }
        }
        
    //   });

});//end of doc ready
    
}) (jQuery); //end of js file


