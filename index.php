<?php get_header(); ?>

<div id="conteudo">

	<div class="fake-testes">
		<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/fakes/1.jpg" alt="Imagem 1">
    <img src="<?php echo get_template_directory_uri(); ?>/images/fakes/2.jpg" alt="Imagem 2">
    <img src="<?php echo get_template_directory_uri(); ?>/images/fakes/3.jpg" alt="Imagem 3">
    <img src="<?php echo get_template_directory_uri(); ?>/images/fakes/4.jpg" alt="Imagem 4">
    <img src="<?php echo get_template_directory_uri(); ?>/images/fakes/5.jpg" alt="Imagem 5"> -->
	</div>

	<!-- INÍCIO #start-panoramicas-->
	<header>


		<div class="base-endereco-header">
			<div class="endereco dia">
				<div class="pin"></div>Rua Itacema, 22 - Itaim - São Paulo
			</div>
			<div class="google-maps">
				<a href="https://maps.app.goo.gl/nfUASRUxbyD3pzSo7" target="_blank">Ver no Google Maps</a>
			</div>
		</div>


		<div class="logo-header">
			<?php
			// Definindo o ID do post para o Logo Orla (ID 23)
			$post_id = 23;

			// Pegando as imagens dos campos personalizados para o Logo Orla - Header (dia e noite)
			$logo_dia = CFS()->get('logo_orla_header_dia', $post_id);
			$logo_noite = CFS()->get('logo_orla_header_noite', $post_id);
			?>

			<div class="logo-orla-header dia">
				<?php if ($logo_dia) : ?>
					<img class="logo-orla logo-orla-dia" src="<?php echo esc_url($logo_dia); ?>" alt="Orla Paulistana">
				<?php endif; ?>

				<?php if ($logo_noite) : ?>
					<img class="logo-orla logo-orla-noite" src="<?php echo esc_url($logo_noite); ?>" alt="Orla Paulistana">
				<?php endif; ?>
			</div>
		</div>


		<div class="base-botao-dia-noite">
			<div class="label-botao-dia-noite label-dia">
				VER PANORÂMICA À NOITE
			</div>
			<div class="label-botao-dia-noite label-noite">
				VER PANORÂMICA DE DIA
			</div>
			<div class="toggle-switch">
				<input type="checkbox" id="toggle" class="toggle-checkbox">
				<label for="toggle" class="toggle-label">
					<div class="toggle-inner"></div>
					<div class="toggle-switch-handle"></div>
				</label>
			</div>
		</div>

		<!-- Menu Sanduíche -->
		<div class="menu-sanduiche dia">
			<button id="menu-toggle" aria-label="Abrir menu">
				<span></span><span></span><span></span>
			</button>
			<nav id="menu">
				<a href="#">Opção 1</a>
				<a href="#">Opção 2</a>
			</nav>
		</div>

		<script>
			document.getElementById('menu-toggle').addEventListener('click', function() {
				const menu = document.querySelector('.menu-sanduiche');
				menu.classList.toggle('ativo'); // Alterna a classe 'ativo'
			});
		</script>

		<!-- fim Menu Sanduíche -->

	</header>

	<section class="base-panoramica">
		<div class="texto-banner">
			<h1 class="texto-banner-dia">Apartamentos com <strong>vista livre</strong> para o mar verde de São Paulo.</h1>
			<h1 class="texto-banner-noite">Um horizonte que inspira nossas vidas.</h1>
		</div>

		<div class="textura-panoramica_baixo svg-background"></div>

		<div class="panoramica-container">


			<?php
			// Definindo o ID do post, se necessário. Por exemplo, o post com ID 19.
			$post_id = 19;

			// Pegando as imagens dos campos personalizados via CFS
			$imagem_dia = CFS()->get('panoramica_dia', $post_id);
			$imagem_noite = CFS()->get('panoramica_noite', $post_id);
			?>

			<div class="panoramica">
				<?php if ($imagem_dia) : ?>
					<img class="foto-panoramica foto-panoramica-dia" src="<?php echo esc_url($imagem_dia); ?>" alt="Vista panorâmica - Dia">
				<?php endif; ?>

				<?php if ($imagem_noite) : ?>
					<img class="foto-panoramica foto-panoramica-noite" src="<?php echo esc_url($imagem_noite); ?>" alt="Vista panorâmica - Noite">
				<?php endif; ?>
			</div>

		</div>

	</section>

	<!-- FIM #start-perspectiva -->

	<!-- INÍCIO #informacoes -->

	<?php
	// Definindo o ID do post, se necessário. Por exemplo, o post com ID 19.
	$post_id = 28;

	// Pegando as imagens dos campos personalizados via CFS
	$fachada_dia = CFS()->get('imagem_perspectiva_conceito_dia', $post_id);
	$fachada_noite = CFS()->get('imagem_perspectiva_conceito_noite', $post_id);
	?>

	<section id="informacoes">
		<!-- Conteúdo da seção Informações aqui -->

		<div class="base-info">
			<ul class="info">
				<li>3 Suítes</li>
				<li>200 <span class="m2">m²</span></li>
				<li>3 Vagas</li>
				<li>1 por andar</li>
			</ul>
		</div>

		<?php if ($fachada_dia) : ?>
			<img class="foto-fachada foto-fachada-dia" src="<?php echo esc_url($fachada_dia); ?>" alt="Fachada">
		<?php endif; ?>

		<?php if ($fachada_noite) : ?>
			<img class="foto-fachada foto-fachada-noite" src="<?php echo esc_url($fachada_noite); ?>" alt="Fachada">
		<?php endif; ?>

	</section>
	<!-- FIM #informacoes -->

	<!-- INÍCIO #legado -->
	<section id="legado">
		<!-- Carrossel ou outro conteúdo para Legado aqui -->
		<?php get_template_part( 'template-parts/legado' ); ?>
	</section>
	<!-- FIM #legado -->

	<!-- INÍCIO #video-arquitetura -->
	<section id="video-arquitetura">
		<!-- Vídeo ou descrição de arquitetura aqui -->

		<?php get_template_part( 'template-parts/video' ); ?>
	</section>
	<!-- FIM #video-arquitetura -->

	<!-- INÍCIO #implantacao -->
	<section id="implantacao">
		<!-- Detalhes da Implantação aqui -->
		<?php get_template_part( 'template-parts/implantacao' ); ?>
	</section>
	<!-- FIM #implantacao -->

	<!-- INÍCIO #perspectivas -->
	<section id="perspectivas">
		<!-- Perspectivas de Lançamento aqui -->
		<?php get_template_part( 'template-parts/perspectivas' ); ?>
	</section>
	<!-- FIM #perspectivas -->

	<!-- INÍCIO #plantas -->
	<section id="plantas">
		<!-- Carrossel de plantas de 1 Dorm aqui -->
		<?php get_template_part( 'template-parts/plantas' ); ?>
	</section>
	<!-- FIM #plantas -->

	<!-- INÍCIO #tour-virtual -->
	<section id="tour-virtual">
		<!-- Conteúdo do Tour Virtual aqui -->
		<?php get_template_part( 'template-parts/tour-virtual' ); ?>
	</section>
	<!-- FIM #tour-virtual -->

	<!-- INÍCIO #regiao-mapa -->
	<section id="regiao-mapa">
		<!-- Mapa da Região aqui -->
		<?php get_template_part( 'template-parts/regiao-mapa' ); ?>
	</section>
	<!-- FIM #regiao-mapa -->

	<!-- INÍCIO #galeria-1900 -->
	<section id="galeria-1900">
		<!-- Galeria de imagens do lançamento às 19:00 aqui -->
		<?php get_template_part( 'template-parts/galeria' ); ?>
	</section>
	<!-- FIM #galeria-1900 -->

	<!-- INÍCIO #arquitetura-carrossel -->
	<section id="arquitetura-carrossel">
		<!-- Carrossel de arquitetura aqui -->
		<?php get_template_part( 'template-parts/carrossel' ); ?>
	</section>
	<!-- FIM #arquitetura-carrossel -->

	<!-- INÍCIO #video-revit5 -->
	<section id="video-revit5">
		<!-- Vídeo Revit 5 aqui -->
		<?php get_template_part( 'template-parts/video-revit5' ); ?>
	</section>
	<!-- FIM #video-revit5 -->

	<!-- INÍCIO #diferenciais -->
	<section id="diferenciais">
		<!-- Diferenciais do projeto aqui -->
		<?php get_template_part( 'template-parts/diferenciais' ); ?>
	</section>
	<!-- FIM #diferenciais -->

	<!-- INÍCIO #institucional-cgr -->
	<section id="institucional-cgr">
		<!-- Informações institucionais da CGR Consultoria aqui -->
		<?php get_template_part( 'template-parts/institucional-cgr' ); ?>
	</section>
	<!-- FIM #institucional-cgr -->

	<!-- INÍCIO #contato-form-lp -->
	<section id="contato-form-lp">
		<!-- Formulário de contato e landing page aqui -->
		<?php get_template_part( 'template-parts/contato-form-lp' ); ?>
	</section>
	<!-- FIM #contato-form-lp -->

	<!-- INÍCIO #footer -->
	<footer id="footer">
		<!-- Conteúdo do footer aqui -->
		<?php get_template_part( 'template-parts/footer-part' ); ?>
	</footer>
	<!-- FIM #footer -->


</div>

<?php get_footer(); ?>