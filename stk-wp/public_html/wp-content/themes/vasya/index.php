<?php
get_header();
get_header('bar');

$items = array(
    ['product_name' => 'asdasdasd', 'product_count' => '12/2', 'product_price' => 12],
    ['product_name' => 'dfgdfg', 'product_count' => '12/2', 'product_price' => 3453453],
    ['product_name' => 'ghrtfhgfh', 'product_count' => '12/2', 'product_price' => 45],
    ['product_name' => 'gfhgfhgfhgfh', 'product_count' => '12/2', 'product_price' => 45353]

);


//settings_fields( 'baw-settings-group' );


?>

<div class="block-content">
    <div class="all">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <input id="search" class="forma search" type="search" placeholder="Наименование товара">
                    <div id="button-cancel" class="cancel">
                        <i class="fas fa-times"></i>
                    </div>
                </div>

                <div class="col-3">
                    <button class="button" type="submit">Поиск</button>
                </div>
            </div>
        </div>
    </div>
    <div class="block-table">
        <div class="container">
            <div class="nothing">
                <p class="nothing-text">Совпадений не найдено</p>
            </div>
        </div>
        <?php

if ( have_posts() ) :

    /* Start the Loop */
    while ( have_posts() ) :
        the_post();
    $ACF =  get_field_object('product_fields');
    $image = get_field_object('image');
    $images = get_field_object('images');
//    $logo = get_custom_logo();
//    $mail = wp_get_nav_menu_object('qwerty');
//    var_dump($mail);

    ?>
        <div class="block-table-product">

            <div class="container">

                <div class="search-list">
                    <h2><?php the_title();?></h2>
                    <div class="block-content-product">
                        <div class="bolt2">
                            <img  src="../../../assets/img/block-fix.svg" alt="" class="bolt-img">
                        </div>
                        <div class="bolt3">
                            <img src="../../../assets/img/block-fix.svg" alt="" class="bolt-img">
                        </div>
                        <div class="bolt4">
                            <img src="../../../assets/img/block-fix.svg" alt="" class="bolt-img bolt-img-2">
                        </div>
                        <div class="bolt5">
                            <img src="../../../assets/img/block-fix.svg" alt="" class="bolt-img bolt-img-2">
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-12">
                                <div class="content-img">
                                    <?php if($images['value'][0]['url']){ ?>

                                    <a class="eye-block" href="<?php echo $images['value'][0]['url']?$images['value'][0]['url']:'#';?>" data-lightbox="img-<?php the_ID() ?>" data-title="My caption">
                                        <?php }
                                        $image_id   = attachment_url_to_postid( $image['value'] );
                                        ?>
                                        <img src="<?php echo  ($image['value'] && $image_id)?wp_get_attachment_image_url($image_id, 'spec_thumb'):'/assets/img/logo.png' ?>" class="table-image">
                                        <i class="fas fa-eye"></i>
                                        <?php if($images['value'][0]['url']){ ?>
                                    </a>
                                <?php } ?>
                                    <?php
                                    if ( is_array($images['value']) && count($images['value']) > 0) {
                                        foreach ($images['value'] as $item_key => $item) {
                                            if ($item_key === 0) continue;
                                            $image_id   = attachment_url_to_postid( $item['url'] );
                                            ?>
                                            <a href="<?php echo ($item['url'] && $image_id)?wp_get_attachment_image_url($image_id, 'gallery'):null ?>" data-lightbox="img-<?php the_ID() ?>" data-title="My caption"></a>
                                        <?php }
                                    }
                                    ?>

                                </div>
                            </div>

                            <div class="col-xl-8 col-md-12">
                                <div class="table-content-info">

                                    <?php if(get_the_content() ){ ?>
                                        <div class="the-content"><?php the_content() ?></div>
                                    <?php }?>

                                    <?php if ( is_array($ACF['value']) && count($ACF['value']) > 0) {  ?>
                                        <table>
                                            <thead>
                                            <tr>
                                                <?php
                                                $fields = array('product_name', 'product_count', 'product_price');
                                                foreach ($ACF['sub_fields'] as $item) {
                                                    $th = array_shift($fields);
                                                    ?>
                                                    <th class="th"><?php echo ($item['name'] === $th)?$item['label']:null  ?></th>
                                                <?php } ?>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php

                                            foreach ($ACF['value'] as $item) { ?>
                                                <tr>
                                                    <td class="td td-1"><?php echo $item['product_name'];?></td>
                                                    <td class="td td-2"><?php echo $item['product_count'];?></td>
                                                    <td class="td td-2"><?php echo $english_format_number = number_format($item['product_price'], 2, '.', '');?></td>
                                                </tr>
                                            <?php } ?>

                                            </tbody>
                                        </table>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    <?php endwhile; ?>

<?php endif; ?>



    </div>
</div>
<?php
get_footer('bar');
get_footer();
?>