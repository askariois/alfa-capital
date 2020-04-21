<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alfa-capital
 */

?>

    <!-- Футер -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2.svg" alt="ЛОготип для футера" />
                </div>

                <div class="col-md-2">
                    <h6 class="footer_margin_top">Мы находимся</h6>
                    <div class="footer_adress">
                        <h6 class="footer_bold_heading">Бизнес центр «Avrora»</h6>
                        <h6>​Игембердиева, 1а</h6>
                    </div>
                </div>


                <div class="col-md-2">
                    <h6 class="footer_margin_top">Контактные данные </h6>
                    <div class="footer_adress">
                        <h6 class="footer_bold_heading">0 222 50 50 50</h6>
                        <h6>alfacapital.kg@gmail.com</h6>
                    </div>
                </div>

                <div class="col-md-3 text-right">
                    <ul class="footer__social__link">
                       <a href="https://www.youtube.com/channel/UChtbHAOlHqmfKbUekjfPrLQ"> <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube_logo.svg" alt="Социальные сети" /></li></a>
                        <a href="#"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook_logo.svg" alt="Социальные сети" /></li></a>
                        <a href="#"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram_logo.svg" alt="Социальные сети" /></li></a>
                        <a href="#"><li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/telegram_logo.svg" alt="Социальные сети" /></li></a>
                    </ul>
                    <div class="footer_adress">
                        <h6 class="footer_bold_heading">alfacapital.kg 2020 </h6>
                        <h6>Все права защищены</h6>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- Футер -->

<?php wp_footer(); ?>

</body>
</html>
