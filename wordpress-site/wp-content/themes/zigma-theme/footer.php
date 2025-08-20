</main>

<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-info">
                <h3>Zigma Global Wear</h3>
                <p>Premium UK Textiles & Fabric Solutions</p>
                <div class="footer-contact">
                    <p><strong>Phone:</strong> <a href="tel:<?php echo esc_attr(str_replace(' ', '', zigma_phone_number())); ?>"><?php echo esc_html(zigma_phone_number()); ?></a></p>
                    <p><strong>Email:</strong> <a href="mailto:<?php echo esc_attr(zigma_email_address()); ?>"><?php echo esc_html(zigma_email_address()); ?></a></p>
                </div>
            </div>
            
            <div class="footer-links">
                <h4>Quick Links</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'footer-menu',
                    'container'      => false,
                    'fallback_cb'    => 'zigma_footer_fallback_menu',
                ));
                ?>
            </div>
            
            <div class="footer-business">
                <h4>Business Information</h4>
                <div class="business-details">
                    <p><?php echo wp_kses_post(zigma_business_address()); ?></p>
                    <p><em>[Content container - business hours]</em></p>
                    <p><em>[Content container - certifications]</em></p>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Zigma Global Wear. All rights reserved.</p>
            <p>Website built with WordPress | <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
// Basic mobile menu toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
            this.setAttribute('aria-expanded', mobileMenu.classList.contains('active'));
        });
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.site-header')) {
            mobileMenu.classList.remove('active');
            mobileToggle.setAttribute('aria-expanded', 'false');
        }
    });
});
</script>

</body>
</html>

<?php
// Footer fallback menu
function zigma_footer_fallback_menu() {
    echo '<ul class="footer-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
    echo '<li><a href="' . esc_url(home_url('/products')) . '">Products</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '">Contact</a></li>';
    echo '</ul>';
}
?> 