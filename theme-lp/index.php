<?php get_header(); ?>

<div class="base-menu-mobile">
    <div id="botao-menu">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="mobile-menu" id="mobile-menu">
        <div class="conteudo-menu-mobile">
            <div class="content main">
                <section class="intro">
                    <div id="logo-orla" class="theme-switch">
                         <img class="logo-dia" src="<?php echo get_template_directory_uri(); ?>/images/logo-orla-dia.svg" alt="Global Realty" /> 
                        <img class="logo-noite" src="<?php echo get_template_directory_uri(); ?>/images/logo-orla-noite.svg" alt="Global Realty" />
                    </div>
                    <div class="intro-text">
                        <div class="etiqueta-status">
                            <h2>Breve Lançamento <span class="destaque-bairro">Itaim</span></h2>
                        </div>
                        
                         <div class="descritivo-apto">
                            <h3>Apartamentos com <strong>vista livre</strong><br> para os Jardins.</h3>
                        </div>
                        
                        <div class="opcoes-menu-mobile">
                             <div class="endereco">
                                <div class="pin"></div>Rua Itacema, 22 - Itaim - São Paulo
                            </div>
                            <div class="google-maps">
                                <a href="https://maps.app.goo.gl/nfUASRUxbyD3pzSo7" target="_blank">Ver no Google Maps</a>
                            </div>
                            
                            <div class="opcoes">
                                <p><a href="https://wa.me/5511966182169">Fale com um especialista</a></p>
                                <p><a href="https://wa.me/5511998046758">Parcerias</a></p>
                            </div>
            
                        </div>
                        <div>
                        
                        
                </section>
                 <div class="content content-logo-footer">
                    <div class="logo-footer">
                         <img class="logo-footer-dia" src="<?php echo get_template_directory_uri(); ?>/images/logo-global-realty-dia.svg" alt="Global Realty" /> 
                        <img class="logo-footer-noite" src="<?php echo get_template_directory_uri(); ?>/images/logo-global-realty-noite.svg" alt="Global Realty" />
                    </div>
                    <div class="nav-footer">
                        Todos os direitos reservados | <a href="https://www.globalrealtybrasil.com.br" target="_blank">Global Realty © 2024</a>
                    </div>
                </div>
            </div>
                
        </div>
    </div>
</div>

<!-- INÍCIO - HEADER -->
<header>
    <div class="top-bar">
        <div class="endereco">
            <div class="pin"></div>Rua Itacema, 22 - Itaim - São Paulo
        </div>
        <div class="google-maps">
            <a href="https://maps.app.goo.gl/nfUASRUxbyD3pzSo7" target="_blank">Ver no Google Maps</a>
        </div>
        <nav>
            <ul>
                <li><a href="https://wa.me/5511998046758" target="_blank">Parcerias</a></li>
                <li><a href="https://wa.me/5511966182169">Fale com um especialista</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="content main">
    <section class="intro">
        <div id="logo-orla" class="theme-switch">
             <img class="logo-dia" src="<?php echo get_template_directory_uri(); ?>/images/logo-orla-dia.svg" alt="Global Realty" /> 
            <img class="logo-noite" src="<?php echo get_template_directory_uri(); ?>/images/logo-orla-noite.svg" alt="Global Realty" />
        </div>
        <div class="intro-text">
            <div class="etiqueta-status">
                <h2>Breve Lançamento <span class="destaque-bairro">Itaim</span></h2>
            </div>
            <div class="descritivo-apto">
                <h3>Apartamentos com <strong>vista livre</strong><br> para os Jardins.</h3>
                <ul class="info">
                    <li>3 Suítes</li>
                    <li>200 <span class="m2">m²</span></li>
                    <li>3 Vagas</li>
                    <li>1 por andar</li>
                </ul>
            </div>
        </div>
    </section>
    
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
</div>
<section class="base-panoramica">
    <div class="textura-panoramica_topo-dia svg-background"></div>
    <div class="textura-panoramica_topo-noite svg-background"></div>
    <div class="texto-banner">
        <h2 class="texto-banner-dia">Um <strong>legado infinito</strong> com vista para o mar verde de São Paulo.</h2>
        <h2 class="texto-banner-noite">Um horizonte que inspira nossas vidas.</h2>
        <h3>Visão panorâmica <strong>real</strong> do edifício.</h3>
    </div>
    <div class="panoramica-container">
        <div class="panoramica">
            <img class="foto-panoramica foto-panoramica-dia" src="<?php echo get_template_directory_uri(); ?>/images/panoramica/panoramica-dia.jpg?v=nocompression" alt="Vista panorâmica">
            <img class="foto-panoramica foto-panoramica-noite" src="<?php echo get_template_directory_uri(); ?>/images/panoramica/panoramica-noite.jpg?v=nocompression" alt="Vista panorâmica">
        </div>
    </div>
    <div class="textura-panoramica_baixo-dia svg-background"></div>
    <div class="textura-panoramica_baixo-noite svg-background"></div>
</section>
<hr id="breakpoint" />

<div class="content">
    <section class="descricao">
        <div class="col-1">
            <h3><strong>Ícone da <br>arquitetura</strong><br>debruçado<br> sobre o mar<br> verde de<br> São Paulo.</h3>
            <p>Na linha de frente do Itaim, surge Orla Paulistana. São apenas 16 apartamentos e <br>1 cobertura exclusiva, onde o Itaim abraça os Jardins e o olhar se perde no infinito.</p>
        </div>
        <div class="col-2">
            <p><strong>Arquitetura</strong><br>Aflalo/Gasperini</p>
            <p><strong>Decoração</strong><br>Carlos Rossi</p>
            <p><strong>Paisagismo</strong><br>Rodrigo Oliveira</p>
            <p><strong>Lighting Design</strong><br>Foco Luz e Desenho</p>
        </div>
		<div class="col-3">
			<img src="<?php echo get_template_directory_uri(); ?>/images/fachada-detalhe.jpg" alt="Perspectiva ilustrada da fachada" /><br />
			<span class="legenda-fachada">Imagem preliminar sujeita a alterações</span>
		</div>
    </section>
</div>




<?php get_footer(); ?>
