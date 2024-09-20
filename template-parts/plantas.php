<article>
    <div>
        <div class="containerplantas">
            <ul>
                <li>implantacao</li>
                <li>apartamentos</li>
            </ul>
            <h2>Do horizonte infinito ao espaco privado.<br /><strong>Bem-vindo ao seu apartamento.</strong></h2>
        </div>
    </div>
    <?php
    $args = array(
        'post_type' => 'plantas',
        'popsts_per_page' => 6,
    );
    $query = new WP_Query($args);
    while ($query->have_posts()): $query->the_post();
    ?>
        <div class="carousel-container">
            <div class="carousel-slide">
                <img src="<?php echo the_content(); ?>" alt="Imagem 1">
            </div>

        <?php endwhile; ?>
        <!-- Controles laterais -->
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
</article>