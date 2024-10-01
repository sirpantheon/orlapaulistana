<section>
    <div class="container-fluid ">
        <div class="conatiner-menu row ">
            <section class="logo col-md-1 col-1 text-center d-flex">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-fluid" alt="logo menu" />
            </section>
            <section class="col-10 col-md-10 d-flex justify-content-between">

                <button class="btn-callendar">VIEW FULL CALLENDAR</button>

                <div class="d-flex justify-content-between">

                    <button class="btn-get">GET TICKETS</button>
                    <div class="dropdown col-1 d-flex flex-row-reverse">
                        <button class="btn dropdown-toggle " type="button" id="dropdownbook" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            BOOK NOW
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownbook">
                            <ul>
                                <li class="menu col-md-10 text-right dropdown-item"></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </section>

            <div class="dropdown col-1 d-flex flex-row-reverse">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <nav class="menu col-md-10 text-right dropdown-item"><?php wp_nav_menu(array('theme_location' => "main_menu")); ?></nav>
                </div>
            </div>
        </div>
    </div>
</section>