<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="header-container">
        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
            Zigma Global Wear
        </a>

        <!-- Desktop Navigation -->
        <nav class="main-navigation" id="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'nav-menu',
                'container'      => false,
                'fallback_cb'    => 'zigma_fallback_menu',
            ));
            ?>
            
            <!-- Contact Phone in Header -->
            <div class="header-contact">
                <a href="tel:<?php echo esc_attr(str_replace(' ', '', zigma_phone_number())); ?>">
                    <?php echo esc_html(zigma_phone_number()); ?>
                </a>
            </div>
            
            <!-- CTA Button -->
            <a href="<?php echo esc_url(home_url('/products')); ?>" class="cta-button">
                View Our Collection
            </a>
        </nav>

        <!-- Mobile Menu Toggle -->
        <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle mobile menu">
            ☰
        </button>
    </div>

    <!-- Mobile Navigation -->
    <nav class="mobile-menu" id="mobile-menu">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class'     => 'nav-menu',
            'container'      => false,
            'fallback_cb'    => 'zigma_fallback_menu',
        ));
        ?>
        
        <div class="mobile-contact">
            <a href="tel:<?php echo esc_attr(str_replace(' ', '', zigma_phone_number())); ?>" class="mobile-phone">
                📞 <?php echo esc_html(zigma_phone_number()); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/products')); ?>" class="cta-button mobile-cta">
                View Our Collection
            </a>
        </div>
    </nav>
</header>

<main class="site-main" id="main">

<?php
// Fallback menu if no menu is assigned
function zigma_fallback_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '" class="' . (is_front_page() ? 'current' : '') . '">Home</a></li>';
    echo '<li><a href="' . esc_url(home_url('/products')) . '" class="' . (is_page('products') ? 'current' : '') . '">Products</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '" class="' . (is_page('contact') ? 'current' : '') . '">Contact</a></li>';
    echo '</ul>';
}
?> 