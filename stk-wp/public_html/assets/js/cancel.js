jQuery(document).ready(function($){

        $('#button-cancel').click(function (){
            document.getElementById("search").value='';
            $('.search-list').show();
            $(".nothing").hide();

        }
    );
});
