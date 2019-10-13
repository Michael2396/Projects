<div class="block-header">
    <div class="container content-contacts container-mobile">
        <nav class="navbar navbar-expand-lg">

            <div class="bolt bolt-block-1">
                <img class="bolt-img" src="../../../assets/img/header-footer-fix.svg" alt="">
            </div>
            <div class="logo">
                <?php
//                    $mail = wp_nav_menu('2');
//                    var_dump( $mail );
//                    add_image_size( '$custom_logo', 100, 100 );
//                    $mails = wp_nav_menu();
                    echo get_custom_logo();
                ?>
<!--                <img class="logo" src=" --><?php //echo get_custom_logo()?><!--" alt="">-->
            </div>
            <a id="tel-header" href="tel:<?php echo get_option('phone_1'); ?>"><?php echo get_option('phone_1'); ?></a>
            <div class="bolt bolt-block-2">
                <img class="bolt-img bolt-img-2" src="../../../assets/img/header-footer-fix.svg" alt="">
            </div>
            <button class="navbar-toggler navbar-light collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="list-inline navbar-nav ml-auto navbar-nav-mobile">
                    <li class="nav-item">
                        <div class="navbar-text">
                            <div class="email-block ml-auto">
                                <div class="email-icon-container">
                                    <div class="email-icon"><i class="fas fa-envelope"></i></div>
                                </div>
                                <div class="emails">
                                    <a href="mailto:<?php echo get_option('email_1'); ?>"><?php echo get_option('email_1'); ?></a>
                                    <a href="mailto:<?php echo get_option('email_2'); ?>"><?php echo get_option('email_2'); ?></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="navbar-text">
                            <div class="phone-block">
                                <div class="phone-icon-container">
                                    <div class="phone-icon"><i class="fas fa-phone"></i></div>
                                </div>

                                <div class="phones">
                                    <a href="tel:<?php echo get_option('phone_1'); ?>"><?php echo get_option('phone_1'); ?></a>
                                    <a href="tel:<?php echo get_option('phone_2'); ?>"><?php echo get_option('phone_2'); ?></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="bolt bolt-phone bolt-block-3">
                    <img class="bolt-img" src="../../../assets/img/header-footer-fix.svg" alt="">
                </div>
            </div>
        </nav>
    </div>
</div>