<?php
/*
 * Добавляем новое меню в Админ Консоль
 */

// Добавляем новую ссылку в меню Админ Консоли

// Хук событие 'admin_menu', запуск функции 'mfp_Add_My_Admin_Link()'
add_action( 'admin_menu', 'cs_add_my_admin_link' );


function cs_add_my_admin_link()
{
    add_settings_field( 'myprefix_setting-id',
        'This is the setting title',
        'myprefix_setting_callback_function',
        'general',
        'myprefix_settings-section-name',
        array( 'label_for' => 'myprefix_setting-id' ) );

    add_settings_section( 'our_first_section', 'My First Section Title', array( $this, 'section_callback' ), 'smashing_fields' );

    add_menu_page(
        'My First Page', // Название страниц (Title)
        'My First Plugin', // Текст ссылки в меню
        'manage_options', // Требование к возможности видеть ссылку
        'contacts-settings/includes/cs-first-page.php'); // 'slug' - файл отобразится по нажатию на ссылку


}
