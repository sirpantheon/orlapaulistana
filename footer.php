    <?php wp_footer(); ?>
    <section class="conteudo-footer container-fluid d-flex">
        <div class="container d-flex">

            <div class="container-menu col-4">

                <ul class="d-flex menu-footer ">
                    <li>
                        <span>Our History</span>
                    </li>
                    <li>
                        <span>Contact Us</span>
                    </li>
                    <li>
                        <span>Media</span>
                    </li>
                    <li>
                        <span>FAQ</span>
                    </li>
                </ul>

                <div class="d-flex termos-footer">
                    <span>Privacy Policy<br> Terms and Conditions<br> Accessibillity</span>
                    <i class="fa-brands fa-facebook item-social"></i>
                    <i class="fa-brands fa-instagram item-social"></i>
                    <i class="fa-brands fa-tiktok item-social"></i>
                </div>
            </div>

            <div class="logo-footer col-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/LogoFooter.png" class=" img-fluid " alt="logo menu" />
            </div>
            <div class="direitos-footer col-4 "><span>@2024 Music City San Francisco</span></div>
        </div>
    </section>







    <script>
        // Adicionar animação de exibição e ocultação no dropdown
        var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
        dropdownElementList.map(function(dropdownToggleEl) {
            dropdownToggleEl.addEventListener('click', function() {
                var dropdownMenu = dropdownToggleEl.nextElementSibling;

                if (dropdownMenu.classList.contains('show')) {
                    dropdownMenu.classList.remove('show');
                    setTimeout(function() {
                        dropdownMenu.style.display = 'none';
                    }, 300); // Corresponde ao tempo da animação CSS
                } else {
                    dropdownMenu.style.display = 'block';
                    setTimeout(function() {
                        dropdownMenu.classList.add('show');
                    }, 1); // Pequeno atraso para ativar a animação após exibir
                }
            });
        });
    </script>

    </body>

    </html>