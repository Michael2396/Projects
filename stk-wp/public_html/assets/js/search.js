jQuery(document).ready(function($){
var a = 0;
var b = 0;
    function red(){
        var a = 0;
        var b = 0;

        $('.search').each( function(){

            var searchTerm = $(this).val().toLowerCase();
            $('.search-list ').each(function(){
                if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
                    $(this).show();
                    $(".nothing").hide();
                    b++;
                } else {
                    $(this).hide();
                    a++;
                    b++;
                }
                if (a === b){
                    $(".nothing").show();
                }
            });

        });

    }
    $('.search-list  ').each(function(){
        $(this).attr('data-search-term', $(this).text().toLowerCase());
    });

    $('.button').click(function () {
        red();
    });
    $(document).ready(function() {
        $('input').keydown(function(e) {
            if(e.keyCode === 13) {
                red();
            }
        });
    });


});
