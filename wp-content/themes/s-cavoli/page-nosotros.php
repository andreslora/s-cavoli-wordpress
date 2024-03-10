<?php
get_header();
?>
<main id="content">
    <section class="content-our-manifest">
        <div class="container-fluid">
            <div class="block">
                <h4><i class="icon icon-arrow-down-right"></i>Nuestro Manifesto</h4>
                <div class="description">
                    <h1>Somos disruptores del status quo y de la comunicacion estrategica.</h1>
                    <p>Le aportamos alma y corazón a las marcas, creando una conexión auténtica con todo el que la experimenta. Así inspiramos una generación de pensadores e innovadores que se atreven a crear marcas más humanas.</p>
                    <div class="flex flex-col md:flex-row md:justify-end md:items-center gap-4 md:gap-9">
                        <a href="<?php echo get_permalink(21); ?>" class="btn btn-large btn-cuaternarios"><i class="icon icon-arrow-right"></i><span>agenda una cita</span> </a>
                        <a href="#!" class="btn btn-large btn-tertiary"><span>descubre los servicios</span></a>
                    </div>
                </div>
                <div class="galery-our-manifest">
                    <img src="<?php echo get_theme_image_path('img-about-2.jpg'); ?>" class="img-medium-top" alt="Imagen sobre nosotros">
                    <img src="<?php echo get_theme_image_path('img-about-1.jpg'); ?>" class="img-center" alt="Imagen sobre nosotros">
                    <img src="<?php echo get_theme_image_path('img-about-3.jpg'); ?>" class="img-medium-bottom" alt="Imagen sobre nosotros">
                </div>
            </div>
        </div>
    </section>
    <section class="content-artist-business">
        <div class="container-fluid">
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-16 xl:gap-[100px] xxxl:gap-[160px]">
                <div class="flex flex-col md:flex-row lg:flex-col gap-6">
                    <h2>Somos artistas en un mundo de negocios</h2>
                    <i class="icon icon-arrow-up-right text-[34px] text-semantic-black"></i>
                </div>
                <div class="table-business">
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    <h4><i class="icon icon-office"></i><strong>THE</strong> OFFICE</h4>
                                </th>
                                <th>
                                    <h4><i class="icon icon-ray"></i><strong>THE</strong> STUDIO</h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Estrategia</td>
                                <td>Creatividad</td>
                            </tr>
                            <tr>
                                <td>Marketing Digital</td>
                                <td>Diseño</td>
                            </tr>
                            <tr>
                                <td class="!border-0">Relaciones Publicas y Comunicacion Corporativa</td>
                                <td class="!border-0">Marketing Experiencial y Sensorial</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="content-office-about" style="background-image: url('<?php echo get_theme_image_path('bg-about-office.jpg'); ?>');">
        <div class="container">
            <div class="description">
                <h2><i class="icon icon-office"></i><strong>THE</strong> OFFICE</h2>
                <p>Un espacio integral donde se llevan a cabo servicios especializados en estrategia, relaciones públicas y marketing digital. Nuestros profesionales altamente capacitados colaboran para planificar, ejecutar y optimizar eventos y comunicaciones con el objetivo de maximizar la visibilidad, la participación y el impacto de su empresa en su audiencia objetivo. </p>
            </div>
        </div>
    </section>
    <section class="content-office-services">
        <div class="container-fluid">
            <div class="description">
                <h3><i class="icon icon-arrow-down-right"></i>SERVICIOS</h3>
                <div class="detail-services">
                    <table>
                        <caption class="caption-top">
                            Marketing digital
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <p><i class="icon icon-office"></i>Influencer marketing</p>
                                </td>
                                <td>
                                    <p><i class="icon icon-office"></i>Estrategias de contenido</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="icon icon-office"></i>Influencer platform</p>
                                </td>
                                <td>
                                    <p><i class="icon icon-office"></i>Planes estrategicos especializados</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="icon icon-office"></i>SEO SEM</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-semantic-black2 pt-[60px] !align-bottom">
                                    <h5>ESTRATEGIA</h5>
                                </td>
                                <td class="border-b border-semantic-black2 pt-[60px]">
                                    <h5>Relaciones públicas y comunicación corporativa</h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="pt-4">
                                    <p><i class="icon icon-office"></i>Consultoria y asesoramiento</p>
                                </td>
                                <td class="pt-4">
                                    <p><i class="icon icon-office"></i>Brand PR strategy</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="icon icon-office"></i>Planes estrategicos de marca</p>
                                </td>
                                <td>
                                    <p><i class="icon icon-office"></i>Digital PR</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="icon icon-office"></i>Construccion de marca</p>
                                </td>
                                <td>
                                    <p><i class="icon icon-office"></i>Media Tour</p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <p><i class="icon icon-office"></i>Comunicacion corporativa</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end lg:pr-10">
                <a href="<?php echo get_permalink(19); ?>" class="btn btn-large btn-cuaternarios"><i class="icon icon-arrow-right"></i><span>nuestros proyectos</span></a>
            </div>
        </div>
    </section>
    <section class="content-office-about" style="background-image: url('<?php echo get_theme_image_path('bg-about-studio.jpg'); ?>');">
        <div class="container">
            <div class="description">
                <h2><i class="icon icon-ray"></i><strong>THE</strong> studio</h2>
                <p>Es el corazón creativo donde la innovación y la originalidad convergen. Aquí, la creatividad impulsa la generación de ideas únicas, mientras que el diseño las materializa en experiencias visuales cautivadoras. Generamos un impacto positivo elevando la calidad y la experiencia de sus proyectos. </p>
            </div>
        </div>
    </section>
    <section class="content-office-services">
        <div class="container-fluid">
            <div class="description">
                <h3><i class="icon icon-arrow-down-right"></i>SERVICIOS</h3>
                <div class="detail-services">
                    <table>
                        <caption class="caption-top">
                            marketing experiencial y sensorial
                        </caption>
                        <tbody>
                            <tr>
                                <td>
                                    <p><i class="icon icon-ray"></i>Conceptualizacion, diseno y ejecucion de eventos</p>
                                </td>
                                <td>
                                    <p><i class="icon icon-ray"></i>Diseno y produccion de packaging y/o gifting</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="icon icon-ray"></i>Diseno y produccion de activaciones</p>
                                </td>
                                <td>
                                    <p><i class="icon icon-ray"></i>Estrategias de experiencia de consumidor</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-semantic-black2 pt-[54px]">
                                    <h5>Creatividad</h5>
                                </td>
                                <td class="border-b border-semantic-black2 pt-[54px]">
                                    <h5>Diseño</h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="pt-4">
                                    <p><i class="icon icon-ray"></i>Conceptualizacion creativa</p>
                                </td>
                                <td class="pt-4">
                                    <p><i class="icon icon-ray"></i>Diseno grafico</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="icon icon-ray"></i>Desarrollo y/o ejecucion de campanas publicitarias</p>
                                </td>
                                <td>
                                    <p><i class="icon icon-ray"></i>Diseno editorial</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="icon icon-ray"></i>Conceptualizacion y creacion de contenido multiplataforma</p>
                                </td>
                                <td>
                                    <p><i class="icon icon-ray"></i>Diseno web</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="icon icon-ray"></i>Contenido de marca</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end lg:pr-10">
                <a href="<?php echo get_permalink(19); ?>" class="btn btn-large btn-cuaternarios"><i class="icon icon-arrow-right"></i><span>nuestros proyectos</span></a>
            </div>
        </div>
    </section>
    <section class="banner-home" style="background-image: url('<?php echo get_theme_image_path('img-banner-about-1.jpg'); ?>');"></section>
    <section class="content-dream-home">
        <div class="container">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-10">
                <div class="description">
                    <h2>QUEREMOS SOÑAR <br class="hidden md:block"> <span>CONTIGO</span></h2>
                    <a href="#!" class="btn btn-large btn-secondary"><span>seamos disruptivos</span></a>
                </div>
                <i class="icon icon-arrow-up-left text-[32px] text-semantic-black hidden md:block"></i>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>