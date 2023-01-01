<?php get_header(); ?>

<section>
    <div class="container conteudo">
        <div class="row">
            <div class="col-md-8 maincontent">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>

                        <h2 class="post_title post_title_single">
                            <?php the_title(); ?>
                        </h2>
                        <p class="post_content">
                            <?php the_content(); ?>
                        </p>

                    <?php endwhile; ?>
                    
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>