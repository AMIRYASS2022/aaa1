<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3><?php _e('Contact Information', 'mezquita-alhuda'); ?></h3>
                <div class="contact-info">
                    <p><i class="fas fa-map-marker-alt"></i> <?php echo get_theme_mod('mosque_address', 'Playa Blanca, Lanzarote 35580'); ?></p>
                    <p><i class="fas fa-phone"></i> <?php echo get_theme_mod('mosque_phone', '+34 627 095 609'); ?></p>
                    <p><i class="fas fa-envelope"></i> <?php echo get_theme_mod('mosque_email', 'masjidalhudaalhuda7@gmail.com'); ?></p>
                </div>
            </div>
            
            <div class="footer-section">
                <h3><?php _e('Prayer Times', 'mezquita-alhuda'); ?></h3>
                <div id="footer-prayer-times">
                    <div class="prayer-times-loading"><?php _e('Loading...', 'mezquita-alhuda'); ?></div>
                </div>
            </div>
            
            <div class="footer-section">
                <h3><?php _e('Support Our Mosque', 'mezquita-alhuda'); ?></h3>
                <p><?php _e('Your donations help us maintain and improve our services', 'mezquita-alhuda'); ?></p>
                <p><strong><?php _e('IBAN:', 'mezquita-alhuda'); ?></strong> <?php echo get_theme_mod('donation_iban', 'ES33 2100 6992 4402 0012 8409'); ?></p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('All rights reserved', 'mezquita-alhuda'); ?>.</p>
        </div>
    </div>
</footer>

<!-- Botón Flotante de WhatsApp -->
<a href="https://api.whatsapp.com/send?phone=34627095609&text=Hola!%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20mezquita." class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<?php wp_footer(); ?>
</body>
</html>