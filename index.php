<?php
    require_once("func/db_connection.php");
    require_once("func/page_data.php");

    $link = connect_to_db();

    $template = file_get_contents("structure/header.php");
    $template .= file_get_contents("structure/navigation.php");
    $template .= file_get_contents("contents/main.php");
    $template .= file_get_contents("structure/footer.php");

    $header = get_data_row($link, 'header');
    $template = preg_replace('/{TITLE}/', $header['title'], $template);
    $template = preg_replace('/{STYLE}/', $header["style"], $template);
    $template = preg_replace('/{LOGIN}/', $header["login"], $template);
    $template = preg_replace('/{SLOGAN}/', $header['slogan'], $template);
    $template = preg_replace('/{LOGIN_PHRASE}/', $header['login_phrase'], $template);
    $template = preg_replace('/{ICON}/', $header['icon'], $template);
 
    $add_elements = get_data_row($link, 'additional_elements');
    $template = preg_replace('/{NAV_TITLE_MOBILE}/', $add_elements['nav_title_mobile'], $template);
    $template = preg_replace('/{FOOTER_TITLE_SLOGAN}/', $add_elements['footer_title_slogan'], $template);
    $template = preg_replace('/{MAIN_SLOGAN}/', $add_elements['main_slogan'], $template);

    $elements = get_data_array($link, 'navigation');

    $pictures = get_data_array($link, 'main_first');
    $sections = get_data_array($link, 'main_second');

    $expressions = get_data_array($link, 'footer');

    file_put_contents("temp", $template);
    include "temp";
    unlink("temp");
?>