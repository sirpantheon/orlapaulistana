<article>
    <div class="img-fundo1">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/background/fundo-meio1.png'); ?>">
    </div>
    <div class="tour-virtual-topo">
        <div>
            <button class="btn-tour">IMPLANTACAO</button>
            <button class="btn-tour">APARTAMENTOS</button>
        </div>
        <h2>Do horizonte infinito ao espaco privado.
            <br /> <strong>Bem-vindo ao seu apartamento.</strong>
        </h2>
    </div>
    <div class="container-div">
        <div class="carousel-container-div">
            <div class="carousel">
                <div class="carousel-item active">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tour-virtual.png'); ?>">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tour-virtual.png'); ?>">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tour-virtual.png'); ?>">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/tour-virtual.png'); ?>">
                </div>
                <!-- Add more images as needed -->
            </div>

            <!-- Side Controls -->
            <button class="control prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="control next" onclick="moveSlide(1)">&#10095;</button>

            <!-- Bottom Controls -->
            <div class="carousel-indicators">
                <span class="dot" onclick="setSlide(0)">LAYOUT 1</span>
                <span class="dot" onclick="setSlide(1)">LAYOUT 2</span>
                <span class="dot" onclick="setSlide(2)">LAYOUT 3</span>
                <span class="dot" onclick="setSlide(3)">DUPLEX</span>
                <!-- Add more dots as needed -->
            </div>
        </div>
    </div>
</article>