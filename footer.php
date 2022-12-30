 <!-- Footer -->
<footer>
    <div class="content">
        <div class="footer_widgets">
        <?php
            if(is_active_sidebar('lm_footersidebar')){
                dynamic_sidebar('lm_footersidebar');
            }
        ?>
        </div>
        <div class="mainfooter">
        <div class="mainfooter_left">
            Todos os direitos reservados. - 
            <?php if(get_theme_mod('lm_privacy_url')): ?>
                <a href="<?php the_permalink(get_theme_mod('lm_privacy_url')); ?>">Política de Privacidade</a>
            <?php endif; ?>
            
        </div>
        <div class="mainfooter_right">
            Criado por Lucas Maieski
        </div>
        <div class="mainfooter_scroll" onclick="animateToTop(event)">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/seta-up.png" alt="">
        </div>
        </div>
    </div>

</footer>
<script type="text/javascript">
    var ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>
<?php wp_footer(); ?>
</body>
</html>
