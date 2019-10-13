<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ukrelectro
 * @since ukrelectro 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=0.7, width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/wp-content/themes/ukrelectro/bootstrap.css">
    <link rel="stylesheet" href="/wp-content/themes/ukrelectro/style.css">
    <link rel="stylesheet" href="/wp-content/themes/ukrelectro/fonts.css">
    <link rel="shortcut icon" href="wp-content/themes/ukrelectro/assets/images/bolt.png" type="image/x-icon">
    <script
            src="//code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <title>ukrelectro</title></head>
<?php wp_head(); ?>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="header-content">
                    <nav class="navbar navbar-expand-lg navbar-light"><a class="navbar-brand" href="#">
                            <div class="logo-img"><img alt="logo" class="logo" src="wp-content/themes/ukrelectro/assets/images/logo.png"></div>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation"><span
                                    class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="#about">О нас</a></li>
                                <li class="nav-item"><a class="nav-link" href="#helpers">Оборудование</a></li>
                                <li class="nav-item"><a class="nav-link" href="#contact">Контакты</a></li>
                                <li class="nav-item"><a class="nav-link">
                                        <div class="button-connection" data-toggle="modal" data-target="#exampleModal">
                                            <div class="button-connection-text">Связаться с нами</div>
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                    </nav>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="contact-form-popup"></div>
                                <div class="contact-border"></div>
                                <div class="contact-form">
                                    <div class="contact-form-content">
                                        <div class="form-head text-center">Напишите нам</div>
                                        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
                                    </div>

                                    <div class="contact-success" style="display: none;">
                                        <div class="success-form">
                                            <div class="h4">Спасибо за заявку</div>
                                            <p>
                                                С вами свяжутся в близжайшее время
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block1">
        <div class="container"><h1 class="h1-block1">Высоковольтное и низковольтное оборудование “УкрЭлектро”</h1>
            <div class="block-like">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="wrapper-like">
                            <div class="like"><h4 class="h4-block-like">Гарантия качества</h4><img class="img-block-like"
                                                                                                   src="wp-content/themes/ukrelectro/assets/images/like.png"
                                                                                                   alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="wrapper-like">
                            <div class="like"><h4 class="h4-block-like">Индивидуальный подход</h4><img class="img-block-like"
                                                                                                       src="wp-content/themes/ukrelectro/assets/images/customer.svg"
                                                                                                       alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="wrapper-like">
                            <div class="like"><h4 class="h4-block-like">Быстрая доставка</h4><img class="img-block-like"
                                                                                                  src="wp-content/themes/ukrelectro/assets/images/shipped.svg"
                                                                                                  alt=""></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="advantage">
        <div class="container"><h4 class="h4-advantage">Наши преимущества</h4>
            <div class="description">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="advantages"><h5 class="h5-description">15</h5>
                            <p class="p-description">лет опыта</p></div>
                    </div>
                    <div class="col-lg-3">
                        <div class="advantages"><h5 class="h5-description">120</h5>
                            <p class="p-description">экспертов</p></div>
                    </div>
                    <div class="col-lg-3">
                        <div class="advantages"><h5 class="h5-description">200</h5>
                            <p class="p-description">проектов в год</p></div>
                    </div>
                    <div class="col-lg-3">
                        <div class="advantages"><h5 class="h5-description">20820</h5>
                            <p class="p-description">клиентов</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="container about_us">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">

                <div class="about" id="about">О нас</div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="about_text">
                    <p>Вся продукция предлагаемая нами, обладает высоким качеством. На все электро товары предоставляется гарантия.Мы готовы к различным формам сотрудничества, готовы рассматривать различные условия оплаты и поставки товаров. Мы организуем доставку товара до объекта в любом регионе Украины.</p><p>Большой ассортимент сопутствующих товаров необходимых для работы высоковольтных энергосистем: Разрядники серии РВО, РВС (цена, описание, характеристики) Ограничители перенапряжений, полимерные на 6 кВ, 10 кВ, 35 кВ, 110 кВ, 150 кВ. (цена, описание, характеристики)
                    </p></div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="about-image" style="margin-top: 77px;background-image: url('wp-content/themes/ukrelectro/assets/images/artprod-3.jpg');  height:400px;background-repeat:no-repeat; background-position:center;"></div>
            </div>
        </div>
        <div class="vertical-line"></div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div id="helpers" class="about">Оборудование
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="all">
                                <div class="row">
                                    <?php
                                    //                                var_dump($ACF)
                                    ?>
                                    <?php
                                    if ( have_posts() ) :
                                    while ( have_posts() ) :
                                    the_post();
                                    $ACF =  get_field_object('product_fields');
                                    $first = $ACF["value"][0]['first_select'];
                                    $first = substr($first, 0, 35);
                                        ?>
                                    <div class="col-lg-6 col-sm-12 col-md-9">
                                        <div class="all-block">
                                            <div class="name-txt"><?php the_title()?></div>
                                        <div class="block">
                                            <div class="product" style="background-position:center; background-size:contain; background-image: url('<?php echo $ACF["value"][0]["image"] ?>'); height:100%;background-repeat:no-repeat;"></div>
                                            <div class="save">
                                                <div data-select="<?php $e= explode(',', $ACF["value"][0]["select"] );
                                                $i = 0;
                                                foreach ($e as $key){
                                                    if ($e[$i] !== null){
                                                        echo $e[$i],",";
                                                        $i++;
                                                    }
                                                }
                                                ?>" data-text="<?php echo $ACF["value"][0]["discription"] ?>" data-name="<?php the_title();?>" class="info" style="display:inline-block;margin-right:30px;"><a href=""><img alt="info" class="foto" src="wp-content/themes/ukrelectro/assets/images/information.png"/></a><img alt="info-white" class="hover" data-toggle="modal" data-target="#exampleModalCenter" src="wp-content/themes/ukrelectro/assets/images/infor.png" /></div>
                                                <div class="pdf" style="display:inline-block;"><a href="<?php echo $ACF["value"][0]["pdf_file"] ?>"><img alt="pdf" class="foto" src="wp-content/themes/ukrelectro/assets/images/pdf-file.png"/><img alt="pdf-white" class="hover" src="wp-content/themes/ukrelectro/assets/images/pdf.png"/></a></div>
                                            </div>
                                        </div>
                                            <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="buy">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-md-8 col-lg-8">
                                                            <select class="input classic" name="carlist">
                                                                <option value="all"><?php echo $first ?></option>
                                                                <?php $e= explode(',', $ACF["value"][0]["select"] );
                                                                $i = 0;
                                                                foreach ($e as $key){
                                                                    if ($e[$i] !== null){
                                                                        echo '<option value="400">',$e[$i];'</option>';
                                                                        $i++;
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4 col-md-4 col-lg-4"><button class="button" type="button" data-toggle="modal" data-target="#exampleModal">Заказать</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="abouttext"><?php echo $ACF["value"][0]["discription"] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"></h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="margin-top: -46px;position: absolute;color:white;">&times;</span></button></div>
                        <div class="modal-body">
                            <div class="mod"><select class="input-modal" name="carlist"><option value="all">Все разъединители</option></select></div>
                            <div class="textt"></div>
                        </div>
                        <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal" data-toggle="modal" data-target="#exampleModal"><a class="n">Связаться с нами</a></button><button class="btn btn-primary" type="button"><a class="b" href="<?php echo $ACF["value"][0]["pdf_file"] ?>">Получить прайс</a></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="contacts" id="contact">
        <div class="contacts-content">
            <div class="container">
                <div class="contacts-header text-center">
                    <div class="contacts-header-text">Контакты</div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="contacts-1">
                            <div class="contact-address">
                                <div class="contact-logo"><img alt="logo" src="/wp-content/themes/ukrelectro/assets/images/contacts-logo-1.png"></div>
                                <div class="contact-text"><?php echo get_option('country'); ?><br><?php echo get_option('district'); ?><br><?php echo get_option('city'); ?><br><?php echo get_option('street'); ?><br><?php echo get_option('post'); ?>
                                </div>
                            </div>
                            <div class="contact-phones">
                                <div class="contact-logo"><img alt="logo" src="/wp-content/themes/ukrelectro/assets/images/contacts-logo-2.png"></div>
                                <div class="contact-text"><a href="tel:<?php echo get_option('phone_1'); ?>"><?php echo get_option('phone_1'); ?></a><a
                                            href="tel:<?php echo get_option('phone_2'); ?>"><?php echo get_option('phone_2'); ?></a><a href="tel:<?php echo get_option('phone_3'); ?>">
                                        <?php echo get_option('phone_3'); ?></a></div>
                            </div>
                            <div class="contact-email">
                                <div class="contact-logo"><img alt="logo" src="wp-content/themes/ukrelectro/assets/images/contacts-logo-3.png"></div>
                                <div class="contact-text"><a href="mailto:<?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="contact-form-popup">
                            <div class="contact-border"></div>
                            <div class="contact-form">
                                <div class="contact-form-content">
                                    <div class="form-head text-center">Напишите нам</div>
                                    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>


                                </div>
                                <div class="contact-success" style="display: none;">
                                    <div class="success-form">
                                        <div class="h4">Спасибо за заявку</div>
                                        <p>
                                            С вами свяжутся в близжайшее время
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <iframe src="//www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d669.4133222528446!2d35.143390896740655!3d47.84630978572373!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDfCsDUwJzQ2LjciTiAzNcKwMDgnMzYuNiJF!5e0!3m2!1sru!2sua!4v1544623630403"
            width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    <div class="footer">
        <div class="container">
            <div class="footer-content-1">
                <div class="logo-content">
                    <div class="logo-img"><img alt="logo" class="logo" src="wp-content/themes/ukrelectro/assets/images/logo.png"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="footer-menu"><div><a class="topLink" href="#about">О нас</a></div><div class="padd"><a href="#helpers">Оборудование</a></div><div><a href="#contact">Контакты</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer-content-2">
                        <div class="footer-address"><?php echo get_option('country'); ?><br><?php echo get_option('district'); ?><br><?php echo get_option('city'); ?><br><?php echo get_option('street'); ?><br><?php echo get_option('post'); ?></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer-content-3">
                        <div class="footer-numbers"><a href="tel:<?php echo get_option('phone_1'); ?>"><?php echo get_option('phone_1'); ?></a><a
                                    href="tel:<?php echo get_option('phone_2'); ?>"><?php echo get_option('phone_2'); ?></a><a href="tel:<?php echo get_option('phone_3'); ?>">
                                <?php echo get_option('phone_3'); ?></a></div>
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                <div class="copyright-text"><?php echo date ('Y'); ?></div>
            </div>
        </div>
    </div>

    <script src="/wp-content/themes/ukrelectro/assets/js/animation.js"></script>
    <script src="/wp-content/themes/ukrelectro/assets/js/ajax.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <?php wp_footer(); ?>

</body>
</html>



