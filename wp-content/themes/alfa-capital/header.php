<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alfa-capital
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Хедер -->
    <header id="top_nav" class="menu ">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <img class="header_logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Логотип" />
                <img class="header_logo_fixed" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2.svg" alt="Логотип" />
                <ul class="header_menu">
                    <li><a href="#company">О КОМПАНИИ </a></li>
                    <li><a href="#comand">КОМАНДА</a></li>
                    <li><a href="#factory">ФАКТОРЫ</a></li>
                    <!--<li><a href="#news">НОВОСТИ</a></li>-->
                    <li><a href="#contact">КОНТАКТЫ</a></li>
                </ul>
                <div class="header_second_block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mob.svg" alt="мобильная иконка" />
                    <p><a href="tel:0 222 50 50 50">0 222 50 50 50</a></p>
                    <select>
                            <option>RU</option>
                            <option>KG</option>
                            <option>中文</option>
                          </select>
                </div>
                <div class="header_burger">
                    <span></span>
                </div>
            </div>
        </div>

    </header>
    <!-- Хедер -->
