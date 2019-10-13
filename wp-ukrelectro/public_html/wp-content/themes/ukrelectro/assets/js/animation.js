$(document).ready(function () {
    var target = $('.contacts');
    var targetPos = target.offset().top;
    var winHeight = $(window).height();
    var scrollToElem = targetPos - winHeight;
    $(window).scroll(function(){
        var winScrollTop = $(this).scrollTop();
        if(winScrollTop > scrollToElem){
            $('.contact-form-popup').addClass('fade1').addClass('show1')
        }
    });
    $(".navbar-nav").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href');
        var top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
    $(".footer-menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
    // собираем все якоря; устанавливаем время анимации и количество кадров
    const anchors = [].slice.call(document.querySelectorAll('a[href*="#"]')),
        animationTime = 1500,
        framesCount = 90;

    // anchors.forEach(function(item) {
    //     // каждому якорю присваиваем обработчик события
    //     item.addEventListener('click', function(e) {
    //         // убираем стандартное поведение
    //         e.preventDefault();
    //
    //         // для каждого якоря берем соответствующий ему элемент и определяем его координату Y
    //         let coordY = document.querySelector(item.getAttribute('href')).getBoundingClientRect().top;
    //
    //         // запускаем интервал, в котором
    //         let scroller = setInterval(function() {
    //             // считаем на сколько скроллить за 1 такт
    //             let scrollBy = coordY / framesCount;
    //
    //             // если к-во пикселей для скролла за 1 такт больше расстояния до элемента
    //             // и дно страницы не достигнуто
    //             if(scrollBy > window.pageYOffset - coordY && window.innerHeight + window.pageYOffset < document.body.offsetHeight) {
    //                 // то скроллим на к-во пикселей, которое соответствует одному такту
    //                 window.scrollBy(0, scrollBy);
    //             } else {
    //                 // иначе добираемся до элемента и выходим из интервала
    //                 window.scrollTo(0, coordY);
    //                 clearInterval(scroller);
    //             }
    //             // время интервала равняется частному от времени анимации и к-ва кадров
    //         }, animationTime / framesCount);
    //     });
    // });
    $(".info").click(
        function () {
            var $name = $(this).data('name');
            $(".modal-title").html( $name );
            var $text = $(this).data('text');
            $(".textt").html( $text );
            var $select = $(this).data('select');
            var arr = $select.split(',');
            for (var i = 0; i < arr.length; i++) {
                var c = arr.filter(arr => arr.length > 1);
            }
            $(".qwe").remove();
            for (var q = 0; q < c.length; q++) {
                $(".input-modal").append('<option class="qwe" value="400">'+c[q]+'</option>');
            }
            //  const result = words.filter(word => word.length > 6);
        }
    );


    // $("#submits").click(
    //     function a () {
    //         location.reload()
    //     })
    //     setTimeout(a, 1000)
    // )


    // $(".modal-title").append(bname);

    // $(".modal-title").html( $bname );
});