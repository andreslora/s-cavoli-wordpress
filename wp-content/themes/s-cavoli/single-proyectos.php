<?php get_header(); ?>

<main id="content">
    <?php while (have_posts()) : the_post(); ?>
        <section class="content-project-banner" style="background-image: url('./img/img-banner-project.jpg');"></section>
        <section class="content-detail-project">
            <div class="container-fluid">
                <div class="flex items-center gap-3 pb-6 md:pb-16 xxl:pb-[84px]">
                    <i class="icon icon-arrow-up-left text-[18px]"></i>
                    <a href="#!">RECIENTEs <b>/ ARTÍCULOS</b> </a>
                </div>
                <div class="block space-y-4 pb-12">
                    <h3>Una noche en la Toscana</h3>
                    <ul class="grid grid-cols-1 md:grid-cols-12 gap-3">
                        <li class="col-span-1 md:col-span-3">
                            <figure class="w-full h-[240px] md:h-[300px]">
                                <img src="img/img-detail-project-1.jpg" class="w-full h-full object-cover" alt="Imagen detalle proyecto">
                            </figure>
                        </li>
                        <li class="col-span-1 md:col-span-3">
                            <figure class="w-full h-[240px] md:h-[300px]">
                                <img src="img/img-detail-project-2.jpg" class="w-full h-full object-cover" alt="Imagen detalle proyecto">
                            </figure>
                        </li>
                        <li class="col-span-1 md:col-span-6">
                            <figure class="w-full h-[240px] md:h-[300px]">
                                <img src="img/img-detail-project-3.jpg" class="w-full h-full object-cover" alt="Imagen detalle proyecto">
                            </figure>
                        </li>
                    </ul>
                </div>
                <div class="block space-y-8 pb-20">
                    <blockquote>
                        <h5>“Lorem ipsum</h5>
                        <h5 class="text-right">dolor sit amet”</h5>
                    </blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat veniam, quis nostrud exercitation ullamco laboris.</p>
                </div>
                <div class="galery">
                    <img src="img/img-galery-detail-1.jpg" class="w-full xl:w-[530px] h-[300px] xl:h-[340px] xl:top-0 xl:left-0" alt="Imagen detalle proyecto">
                    <img src="img/img-galery-detail-2.jpg" class="w-full xl:w-[560px] h-[300px] xl:h-[560px] xl:top-20 xl:right-0" alt="Imagen detalle proyecto">
                    <img src="img/img-galery-detail-3.jpg" class="w-full xl:w-[530px] h-[300px] xl:h-[340px] xl:bottom-0 xl:left-12 xxl:left-20" alt="Imagen detalle proyecto">
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-20 3xl:gap-[110px] pb-[100px]">
                    <div class="block space-y-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
                        <p>enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                    <div class="block space-y-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
                        <p>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit </p>
                    </div>
                </div>
                <div class="flex gap-2 md:gap-4 items-center justify-center border-b border-semantic-black2 pb-1">
                    <i class="icon icon-arrow-down-right text-[16px] md:text-[20px]"></i>
                    <h6>MÁS <span>Proyectos</span></h6>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>