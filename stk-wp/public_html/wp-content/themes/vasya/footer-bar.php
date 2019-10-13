<div class="block-footer">
    <div class="container container-mobile">
        <div class="content-footer content-contacts d-flex">
            <div class="bolt bolt-footer bolt-block-1">
                <img class="bolt-img" src="../../../assets/img/header-footer-fix.svg" alt="">
            </div>
            <div class="block-footer-2">

                <div class="logo order-lg-1 order-sm-2 order-xs-3">
                    <?php
                        echo get_custom_logo();
                    ?></div>
            </div>
            <div class="bolt bolt-block-2 bolt-footer">
                <img class="bolt-img bolt-img-2" src="../../../assets/img/header-footer-fix.svg" alt="">
            </div>
            <div class="block-footer-3 ml-auto">
                <div class="order-lg-2 order-sm-3 order-xs-3 ml-auto">
                    <div class="email-block ml-auto">
                        <div class="email-icon-container">
                            <div class="email-icon"><i class="fas fa-envelope"></i></div>
                        </div>
                        <div class="emails">
                            <a class="content-item" href="mailto:<?php echo get_option('email_1'); ?>"><?php echo get_option('email_1'); ?></a>
                            <a class="content-item" href="mailto:<?php echo get_option('email_2'); ?>"><?php echo get_option('email_2'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-footer-1">
                <div class="order-lg-3 order-sm-1 order-xs-1">
                    <div class="phone-block">
                        <div class="phone-icon-container">
                            <div class="phone-icon"><i class="fas fa-phone"></i></div>
                        </div>
                        <div class="phones">
                            <a class="content-item" href="tel:<?php echo get_option('phone_1'); ?>"><?php echo get_option('phone_1'); ?></a>
                            <a class="content-item" href="tel:<?php echo get_option('phone_2'); ?>"><?php echo get_option('phone_2'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bolt bolt-block-3 bolt-footer bolt-phone">
                <img class="bolt-img" src="../../../assets/img/header-footer-fix.svg" alt="">
            </div>

        </div>
        <p class="text-center adress"><?php echo get_option('address'); ?></p>
    </div>
</div>