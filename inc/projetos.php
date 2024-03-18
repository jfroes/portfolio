<section class="projetos container">
    <div class="projetos-info">
        <h1>Projetos</h1>
        <p>Algumas coisas que tenho feito</p>
    </div>

    <?php
	$args = array (
		'post_type' => 'projetos',
		'order'   => 'ASC'
	);
	$the_query = new WP_Query ( $args );
?>
<div class="swiper ">
 
<div class="projetos-cards swiper-wrapper">

                <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                
                    
                <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img"><img src="<?php the_field('capa_projeto'); ?>" alt="<?php the_post_thumbnail_caption(); ?>"></div>

                            <div class="card-info">
                                <h1><?php the_title() ?></h1>
                                <p><?php the_field('projeto_descricao') ?></p>
                                <span><span>Tech stack: </span><?php the_field('projeto_tecnologias'); ?></span>
                                <div class="card-links">
                                    <a class="site" href="<?php the_field('projeto_link'); ?>">Live Preview</a>
                                    <a class="git" href="<?php the_field('projeto_github'); ?>">View Code</a>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <?php endwhile; else: endif; ?>
                </div>

        <div class="swiper-pagination"></div>
    </div>

</section>