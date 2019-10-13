jQuery(document).ready(function($) {


    $(".wpcf7-form").submit(function() {
        var str = $(this).serialize();
        // $.ajax({
        //     type: "POST",
        //     url: "http://team.wp-ukrelectro.codevery.work/#wpcf7-f5-o1",
        //     data: str,
        //     success: function() {
        //         // console.log(123)
        //     }
        // });
        // return false;
        $.ajax({
            type: 'POST',
            url: "/#wpcf7-f5-o1",
            data: str,
        }).always(function () {
            $('.contact-form-content').fadeOut(100);
            $('.contact-success').fadeIn(300);
            setTimeout(function () {
                $('.contact-form-content').fadeIn(300);
                $('.contact-success').fadeOut(100);
            }, 4000)

        });
        return false;
    });

});