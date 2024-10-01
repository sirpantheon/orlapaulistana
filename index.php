<?php get_header(); ?>

<div id="conteudo">

	<header>
		<!---------------------------- INÍCIO #menu ------------------------------>
		<section id="menu">
			<?php get_template_part('template-parts/home-parts/menu'); ?>
		</section>
	</header>


	<!---------------------------- INÍCIO #hero ------------------------------>
	<section id="hero">
		<?php get_template_part('template-parts/home-parts/hero'); ?>
	</section>


	<!---------------------------- INÍCIO #hero ------------------------------>
	<section id="hero" class="bg-danger">
		<?php get_template_part('template-parts/home-parts/hero-content'); ?>
	</section>






</div>

<?php get_footer(); ?>