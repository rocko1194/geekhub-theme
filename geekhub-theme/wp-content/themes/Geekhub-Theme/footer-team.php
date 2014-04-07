<div id="footer">
    <?php wp_nav_menu(array(
        'theme_location'  => 'main_menu',
        'menu_class'      => 'footer-nav',
        'container'       => false
    )); ?>
    <p>&copy; Copyrights <?php echo date('Y');?> </p>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>