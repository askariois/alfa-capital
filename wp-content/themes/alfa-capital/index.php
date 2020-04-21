<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alfa-capital
 */

get_header();
?>

<!-- Баннер -->
<section class="baner">
	<div class="container alls_left">
		<div class="row">
			<div class="col-md-6">
				<h1>ЧАСТНЫЕ ИНВЕСТИЦИИ <br />В ДЕВЕЛОПМЕНТ НЕДВИЖИМОСТИ </h1>

				<p>Помогаем приумножить капитал и активы<br /> путем инвестирования в девелоперские проекты добавленной стоимости</p>
			</div>
		</div>
	</div>
</section>
<!-- Баннер -->

<!-- О компании -->
<section id="company" class="company">
	<div class="container alls_left">
		<h1>О компании</h1>
		<div class="row">
			<div class="col-md-5">
				<p>ОсОО Инвестиционная компания "Альфа Капитал" является управляющей компанией фонда прямых инвестиций. </p>
				<p>Ключевая специализация компании - привлечение и управление инвестициями в девелопмент жилой и коммерческой недвижимости в городе Бишкек и на Иссык-Куле.</p>
			</div>
			<div class="col-md-5 offset-md-1">
				<p class="company_text_block">Наша команда состоит из состоявшихся и проверенных профессионалов с многолетним опытом и богатым портфелем реализованных проектов в таких сферах как:</p>
				<ul>
					<li>Финансовый менеджмент</li>
					<li>Инвестиционный менеджмент</li>
					<li>Девелопмент недвижимости</li>
					<li>Маркетинг и продажи</li>
					<li>Архитектура и строительство</li>
					<li>Правовой аудит земельных участков</li>
					<li>Заказчик-Застройщик</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- О компании -->


<!-- Наша миссия   Наш основной принцип -->
<section class="our_target">
	<div class="container alls_left">
		<div class="row">
			<div class="col-md-6">
				<div class="our_target_header">
					<h1>Наша <br /> миссия</h1>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/our_target.svg" alt="Наша цель" />
				</div>
				<p>Привлекать и объединять активы и капиталы, формировать эффективные команды профессионалов для реализации амбициозных строительно-девелоперских проектов, создавая большое количество рабочих мест, тем самым способствуя развитию экономики
					Кыргызстана.
				</p>
			</div>
			<div class="col-md-6">
				<div class="our_target_header">
					<h1>Наш основной <br /> принцип
					</h1>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/our_basic_principle.svg" alt="Наш основной принцип" />
				</div>
				<p>Мы не инвестируем в проект, если нет 100% уверенности в том, что мы сможем сохранить и преумножить капитал, которым мы управляем.</p>
			</div>
		</div>

	</div>
</section>
<!-- Наша миссия   Наш основной принцип -->

<!-- Наша команда -->
<section id="comand" class="comand">
	<div class="container alls_left">
		<h1>Команда</h1>
		<div class="row">
			<div class="col-md-6">
				<div class="comand_colllumn">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partner1.png" alt="Рустам Джон" />
					<div class="comand_colllumn_name">
						<p>Ринат Кынатович</p>
						<span>Инвестиционный менеджер</span>
					</div>
				</div>

				<div class="comand_colllumn">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partner2.png" alt="Иззат Таиров" />
					<div class="comand_colllumn_name">
						<p>Шариф Ли</p>
						<span>Инвестиционный менеджер</span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="comand_colllumn">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partner3.png" alt="Нияз Гайдаров" />
					<div class="comand_colllumn_name">
						<p>Адилет Бердибеков</p>
						<span>Инвестиционный менеджер</span>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<!-- Наша команда -->


<!-- Корпоративное видео -->
<section class="video">
	<div class="container alls_left">
		<h1>Корпоративное видео</h1>

		<div class="sl_video">
			<?php $posts = get_posts("category=2&orderby=date&numberposts=100"); ?>
			<?php if ($posts) : ?>
				<?php foreach ($posts as $post) : setup_postdata($post); ?>
					<div class="sl_slide_video">
						<a href="<? the_field('ssylka_na_yutub'); ?>" class="html5lightbox effect-5" data-group="set1">
							<span>
								<div class="video_slider">
									<img src="<? the_field('izobrazhenie_dlya_yutuba'); ?>">
									<div class="video_desc">
										<h5><?php the_title(); ?></h5>
										<span><? the_field('korotkoe_opisanie_dlya_yutuba'); ?></span>
									</div>
								</div>
							</span>
						</a>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>

			<!-- <div class="sl_slide_video">
				<a href="https://www.youtube.com/watch?v=EV2BhuNhAsM" class="html5lightbox effect-5" data-group="set1">
					<span>
						<div class="video_slider">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/video.jpg">
							<div class="video_desc">
								<h5>Зарина Чекирбаева & Рустам Джон.</h5>
								<span>Что происходит с бизнесом сейчас и что будет после карантина. #2</span>
							</div>
						</div>
					</span>
				</a>
			</div>



			<div class="sl_slide_video">
				<a href="https://www.youtube.com/watch?v=EV2BhuNhAsM" class="html5lightbox effect-5" data-group="set1">
					<span>
						<div class="video_slider">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/video.jpg">
							<div class="video_desc">
								<h5>Зарина Чекирбаева & Рустам Джон.</h5>
								<span>Что происходит с бизнесом сейчас и что будет после карантина. #2</span>
							</div>
						</div>
					</span>
				</a>
			</div> -->

		</div>
</section>

<!-- Корпоративное видео -->



<!-- О нас -->
<section class="about_us">
	<div class="container alls_left">
		<div class="sl">

			<div class="sl_slide">
				<div class="about_us_slider">
					<p>Что мы делаем?</p>
					<span>Помогаем инвесторам разместить капиталы в строительнодевелоперской сфере, которая в настоящее время бурными темпами развивается в Кыргызстане.</span>
				</div>
			</div>

			<div class="sl_slide">
				<div class="about_us_slider">
					<p>Что такое фонд?</p>
					<span>Фонд - это совокупность денежных средств, принадлежащих разным инвесторам. Иначе говоря это "общий котел", куда разные люди вносят свои деньги с целью совместных инвестиций. Зачем они инвестируют совместно? Потому что девелопмент недвижимости это очень капиталоемкий
						бизнес.</span>
				</div>
			</div>


			<div class="sl_slide">
				<div class="about_us_slider">
					<p>Что такое прямые инвестиции?
					</p>
					<span>Прямые инвестиции (private equity) это покупка доли в частной компании/проекте, в размере от 10%. Таким образом инвестор становится соучредителем компании/проекта с возможностью участвовать в стратегическом и операционном управлении.</span>
				</div>
			</div>

			<div class="sl_slide">
				<div class="about_us_slider">
					<p>Что такое прямые инвестиции?
					</p>
					<span>Прямые инвестиции (private equity) это покупка доли в частной компании/проекте, в размере от 10%. Таким образом инвестор становится соучредителем компании/проекта с возможностью участвовать в стратегическом и операционном управлении.</span>
				</div>
			</div>


			<div class="sl_slide">
				<div class="about_us_slider">
					<p>Что такое прямые инвестиции?
					</p>
					<span>Прямые инвестиции (private equity) это покупка доли в частной компании/проекте, в размере от 10%. Таким образом инвестор становится соучредителем компании/проекта с возможностью участвовать в стратегическом и операционном управлении.</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- О нас -->


<!-- Факторы успеха -->
<section id="factory" class="factory">
	<div class="container alls_left">
		<h1>Факторы успеха</h1>
		<div class="row">
			<div class="col-md-6">
				<div class="our_target_header factory_otstup">
					<p>Специализация</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/specialization.svg" alt="Наша цель" />
				</div>
				<span>Мы фокусируемся только на инвестициях в строительно-девелоперскую отрасль экономики города Бишкека и курортной зоны Иссык-Куля, то есть, на рынках, которые компания понимает лучше всего.
				</span>
			</div>

			<div class="col-md-6">
				<div class="our_target_header factory_otstup">
					<p>Профессиональная <br /> экспертиза
					</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/profesional.svg" alt="Наш основной принцип" />
				</div>
				<span>Прежде чем будет принято решение об инвестировании в проект, проводится тщательная юридическая экспертиза, просчитывается финансовая модель, проводится оценка инвестиционных рисков. </span>
			</div>



			<div class="col-md-6">
				<div class="our_target_header factory_otstup">
					<p>Знание рынка <br /> и опыт</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/market.svg" alt="Наша цель" />
				</div>
				<span>Рынок недвижимости - это всегда "местный" рынок, т.е. принципы, которые работают в одном районе могут не работать в другом, здесь присутствует огромное количество специфичных деталей. Совокупный опыт нашей команды в строительстве жилой и коммерческой недвижимости - более 200 000 м2, что позволяет нам видеть перспективный проект "насквозь".
				</span>
			</div>

			<div class="col-md-6">
				<div class="our_target_header factory_otstup">
					<p>Активное участие <br /> в управлении проектом</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/active.svg" alt="Наша цель" />
				</div>
				<span>Наша команда жестко контролирует все ключевые процессы: юридический, финансовый и архитектурно-строительный контроль, стратегический маркетинг, управление рисками, контроль целевого использования денежных средств.
				</span>
			</div>



			<div class="col-md-6">
				<div class="our_target_header factory_otstup">
					<p>Партнерство <br /> с проверенными <br /> строительными компаниями</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/quality.svg" alt="Наша цель" />
				</div>
				<span>Девелопмент недвижимости - это один из самых сложных, но и самых выгодных видов бизнеса. "Случайных людей" здесь нет. Мы инвестируем только в строительные компании с большим положительным опытом и безупречной
					деловой репутацией.
				</span>
			</div>


			<div class="col-md-6">
				<div class="our_target_header factory_otstup">
					<p>Высокое качество <br /> строительства
					</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partnerstvo.svg" alt="Наша цель" />
				</div>
				<span>Продукт - это основа любого бизнеса, если продукт некачественный, то не помогут никакие стратегии и технологии управления. Мы с партнерами стремимся делать продукт такого качества, чтобы его с уверенностью рекомендовали друзьям.
				</span>
			</div>


		</div>
	</div>
</section>
<!-- Факторы успеха -->


<!-- Инвестируем в объекты -->
<section class="object">
	<div class="container alls_left">
		<h1>Инвестируем в объекты</h1>
		<div class="row">

			<div class="col-lg-3 col-md-6">
				<a href="https://kok-jar.kg/">
					<div class="about_us_slider">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kok.svg" alt="" />
					</div>
				</a>
			</div>

			<div class="col-lg-3  col-md-6">
				<a href="https://raduga-premium.kg/">
					<div class="about_us_slider">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/raduga.svg" alt="" />
					</div>
				</a>
			</div>


			<div class="col-lg-3  col-md-6">
				<a href="https://elles.kg/">
					<div class="about_us_slider">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/elles.svg" alt="" /> </div>
				</a>
			</div>

			<div class="col-lg-3  col-md-6">
				<a href="http://alfa-stroy.kg/aura/">
					<div class="about_us_slider">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/aura.svg" alt="" /> </div>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- Инвестируем в объекты -->

<!-- Новости -->
<!--<section id="news" class="news">-->
<!--    <div class="container alls_left">-->

<!--        <h1>Новости</h1>-->
<!--        <div class="sl">-->

<!--            <div class="sl_slide">-->
<!--                <div class="about_us_slider">-->
<!--                    <p>Что мы делаем?</p>-->
<!--                    <span>Помогаем инвесторам разместить капиталы в строительнодевелоперской сфере, которая в настоящее время бурными темпами развивается в Кыргызстане.</span>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="sl_slide">-->
<!--                <div class="about_us_slider">-->
<!--                    <p>Что такое фонд?</p>-->
<!--                    <span>Фонд - это совокупность денежных средств, принадлежащих разным инвесторам. Иначе говоря это "общий котел", куда разные люди вносят свои деньги с целью совместных инвестиций. Зачем они инвестируют совместно? Потому что девелопмент недвижимости это очень капиталоемкий (требующий больших денежных вложений) бизнес, и один инвестор как правило его "не потянет", поэтому группа инвесторов "скидывается", образуя фонд. Сам по себе-->
<!--                    фонд не является юридическим лицом, это просто деньги.</span>-->
<!--                </div>-->
<!--            </div>-->


<!--            <div class="sl_slide">-->
<!--                <div class="about_us_slider">-->
<!--                    <p>Что такое прямые инвестиции?-->
<!--                    </p>-->
<!--                    <span>Прямые инвестиции (private equity) это покупка доли в частной компании/проекте, в размере от 10%. Таким образом инвестор становится соучредителем компании/проекта с возможностью участвовать в стратегическом и операционном управлении.</span>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="sl_slide">-->
<!--                <div class="about_us_slider">-->
<!--                    <p>Что такое прямые инвестиции?-->
<!--                    </p>-->
<!--                    <span>Прямые инвестиции (private equity) это покупка доли в частной компании/проекте, в размере от 10%. Таким образом инвестор становится соучредителем компании/проекта с возможностью участвовать в стратегическом и операционном управлении.</span>-->
<!--                </div>-->
<!--            </div>-->


<!--            <div class="sl_slide">-->
<!--                <div class="about_us_slider">-->
<!--                    <p>Что такое прямые инвестиции?-->
<!--                    </p>-->
<!--                    <span>Прямые инвестиции (private equity) это покупка доли в частной компании/проекте, в размере от 10%. Таким образом инвестор становится соучредителем компании/проекта с возможностью участвовать в стратегическом и операционном управлении.</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- Новости -->

<!-- Контакты -->
<section id="contact" class="contact">
	<div class="container alls_left">
		<h1>Контакты</h1>
		<div class="row">
			<div class="col-md-6">
				<p>Адрес:</p>
				<p class="contact_bold_heading">Бизнес центр «Avrora», Игембердиева, 1а</p>
				<div class="contact_phone_mail">
					<div>
						<p>Телефон:</p>
						<p class="contact_bold_heading">0 222 50 50 50</p>
					</div>
					<div>
						<p>Email:</p>
						<p class="contact_bold_heading">alfacapital.kg@gmail.com</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<form action="https://elles.kg/send1.php" method="post" id="new-form">
					<input name="user_name" type="text" placeholder="Ваше имя" required="">
					<div class="contact_form">
						<input name="user_email" type="text" placeholder="Ваш email" required="">
						<input name="user_phone" type="text" placeholder="Ваш телефон" required="">
					</div>

					<input type="submit" name="submit" class="btn send-btn" value="Получить!">
				</form>
			</div>
		</div>
	</div>
</section>
<!-- Контакты -->


<!-- Карта -->
<section class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4257.122142232464!2d74.59908370938167!3d42.8613551668179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb7d2de83de0d%3A0x3a984d0e15016f09!2z0JHQuNC30L3QtdGBINGG0LXQvdGC0YAgItCQ0JLQoNCe0KDQkCI!5e0!3m2!1sru!2skg!4v1581776494324!5m2!1sru!2skg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
<!-- Карта -->

<?php
get_footer();
