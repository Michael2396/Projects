<?php
/*
Plugin Name: Contacts Settings
*/

//require_once plugin_dir_path(__FILE__) . 'includes/cs-functions.php';

// create custom plugin settings menu
add_action('admin_menu', 'baw_create_menu');

function baw_create_menu() {

    //create new top-level menu
    add_menu_page('Контакты', 'Контакты', 'administrator', __FILE__, 'baw_settings_page',plugins_url('/images/icon.png', __FILE__));

    //call register settings function
    add_action( 'admin_init', 'register_mysettings' );
}


function register_mysettings() {
    //register our settings
    register_setting( 'baw-settings-group', 'phone_1' );
    register_setting( 'baw-settings-group', 'phone_2' );
    register_setting( 'baw-settings-group', 'phone_3' );
    register_setting( 'baw-settings-group', 'email' );
    register_setting( 'baw-settings-group', 'country' );
    register_setting( 'baw-settings-group', 'district' );
    register_setting( 'baw-settings-group', 'city' );
    register_setting( 'baw-settings-group', 'street' );
    register_setting( 'baw-settings-group', 'post' );
}

function baw_settings_page() {
    ?>
    <div class="wrap">
        <h2>Контактные данные</h2>

        <form method="post" action="options.php">
            <?php settings_fields( 'baw-settings-group' ); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Телефон №1</th>
                    <td><input type="tel" name="phone_1" value="<?php echo get_option('phone_1'); ?>" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Телефон №2</th>
                    <td><input type="tel" name="phone_2" value="<?php echo get_option('phone_2'); ?>" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Телефон №3</th>
                    <td><input type="tel" name="phone_3" value="<?php echo get_option('phone_3'); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Почта</th>
                    <td><input type="email" name="email" value="<?php echo get_option('email'); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Страна</th>
                    <td><input type="text" name="country" value="<?php echo get_option('country'); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Область</th>
                    <td><input type="text" name="district" value="<?php echo get_option('district'); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Город</th>
                    <td><input type="text" name="city" value="<?php echo get_option('city'); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Улица</th>
                    <td><input type="text" name="street" value="<?php echo get_option('street'); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Почтовый индекс</th>
                    <td><input type="text" name="post" value="<?php echo get_option('post'); ?>" /></td>
                </tr>


            </table>

            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>

        </form>
    </div>
<?php } ?>