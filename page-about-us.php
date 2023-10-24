<?php get_header() ;?>
<?php
    $top = esc_url( home_url( '/' ) );
    $campaign = esc_url( home_url( '/campaign/' ) );
    $about = esc_url( home_url( '/about/' ) );
    $information = esc_url( home_url( '/information/' ) );
    $blog = esc_url( home_url( '/blog/' ) );
    $voice = esc_url( home_url( '/voice/' ) );
    $price = esc_url( home_url( '/price/' ) );
    $faq = esc_url( home_url( '/faq/' ) );
    $privacy = esc_url( home_url( '/privacy/' ) );
    $termsofservise = esc_url( home_url( '/terms-of-service/' ) );
    $contact = esc_url( home_url( '/contact/' ) );
    $sitemap = esc_url( home_url( '/sitemap/' ) );
?> 


    <!-- sub-fv -->
    <section class="about-fv sub-fv">
        <div class="sub-fv__inner">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about_fv_pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about_fv_sp.jpg" alt="浜辺">
            </picture>
            <div class="sub-fv__heading">
                <h1 class="sub-fv__text">About</h1>
            </div>
        </div>
    </section>



    <!-- breadcrumb -->
    <div class="top-breadcrumb breadcrumb" >
        <div class="breadcrumb__inner inner">
            <?php get_template_part('parts/breadcrumb') ?>
        </div>
    </div>
    
    
    
    <section class="top-page-about page-about fish-logo">
        <div class="page-about__inner inner">

            <div class="page-about__img-block">
                <div class="page-about__right-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about2.jpg" alt="" />
                </div>
                <div class="page-about__left-block u-desktop">
                    <div class="page-about__left-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/about1.jpg" alt="シーサー" />
                    </div>
                </div>

                <div class="page-about__text-block">
                    <h3 class="page-about__title">
                        Dive into<br />the Ocean
                    </h3>
                    <div class="page-about__text-wrap u-desktop">
                        <p class="page-about__pc-text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                    </div>
                </div>
                <p class="page-about__sp-text u-mobile">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                </p>
            </div>
        </div>
    </section>


    
    <section class="top-gallery gallery">
        <div class="gallery__inner inner">

            <div class="gallery__title section-title">
                <p class="section-title__en">Gallery</p>
                <h2 class="section-title__jp">フォト</h2>
            </div>

            <div class="gallery__box">
                <div class="gallery__modal js-modal-window"></div>
                <div class="gallery__items">
                    <?php
                        $repeat_item = SCF::get_option_meta('theme-options-gallery', 'gallery');
                        foreach ($repeat_item as $fields):
                        $image_url = wp_get_attachment_image_src($fields['about-img'] , 'full');
                    ?>
                        <li class="gallery__item js-modal">
                            <img src="<?php echo $image_url[0]; ?>" width="<?php echo $image_url[1]; ?>"
                            height="<?php echo $image_url[2]; ?>" alt="<?php echo $fields["about-img-alt"]; ?>" />
                        </li>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer() ;?>