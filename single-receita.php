<?php get_header(); ?>

<section>
    <div class="container conteudo">
        <div class="row">
            <div id="post-<?php the_ID(); ?>" <?php post_class('col-sm-8 maincontent'); ?>>
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                        <h1>Aqui é receita da vó caralho!!</h1>
                        <h2 class="post_title post_title_single">
                            <?php the_title(); ?>
                        </h2>
                        <p class="post_data">
                            <?php echo get_the_date(); ?>
                        </p>
                        <div class="post_content">
                            <?php the_content(); ?>
                        </div>

                    <?php endwhile; ?>
                    <div class="pag">
                        <div class="previous_pag"> <?php previous_post_link(); ?> </div>
                        <div class="next_pag"> <?php next_post_link(); ?> </div>
                    </div>
                    <div class="comments_area">
                        <?php 
                        if(comments_open()){
                            comments_template();
                        }
                        ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>