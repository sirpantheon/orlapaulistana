<?php get_header(); ?>

<div id="conteudo">

    <header>
        <!---------------------------- INÍCIO #menu ------------------------------>
        <section id="menu">
            <?php get_template_part('template-parts/menu'); ?>
        </section>
    </header>

    <div class="container-img container-fluid">
        <img src="<?php echo get_template_directory_uri(); ?>/images/privateevents.png" class=" img-fluid w-100" alt="" />
    </div>

</div>

<?php get_footer(); ?>