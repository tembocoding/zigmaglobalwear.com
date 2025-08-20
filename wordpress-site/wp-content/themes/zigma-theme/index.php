<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-container">
        <h1>Premium UK Textiles & Fabric Solutions</h1>
        <p>[Content container - brief value proposition]</p>
        <div class="hero-actions">
            <a href="<?php echo esc_url(home_url('/products')); ?>" class="cta-button">Explore Products</a>
            <a href="tel:<?php echo esc_attr(str_replace(' ', '', zigma_phone_number())); ?>" class="cta-button secondary">Call Now</a>
        </div>
    </div>
    
    <!-- Hero Image Container -->
    <div class="content-container">
        <h3>Hero Image/Video Container</h3>
        <p>High-quality textile imagery will be placed here</p>
    </div>
</section>

<!-- About/Overview Section -->
<section class="section">
    <div class="section-container">
        <h2>About Zigma Global Wear</h2>
        
        <div class="about-grid">
            <div class="about-content">
                <h3>Company Introduction</h3>
                <div class="content-container">
                    <h3>Company Story Container</h3>
                    <p>Brief story about Zigma Global Wear will be placed here</p>
                </div>
                
                <h3>UK Textiles Focus</h3>
                <div class="content-container">
                    <h3>UK Manufacturing Container</h3>
                    <p>Emphasis on quality British manufacturing will be placed here</p>
                </div>
            </div>
            
            <div class="about-content">
                <h3>General Textile Solutions</h3>
                <div class="content-container">
                    <h3>Textile Applications Container</h3>
                    <p>Diverse textile applications content will be placed here</p>
                </div>
                
                <h3>Quality Commitments</h3>
                <div class="content-container">
                    <h3>Quality Standards Container</h3>
                    <p>Quality, durability, and innovation content will be placed here</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="section-container">
        <h2>Why Choose Zigma Global Wear</h2>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🏭</div>
                <h3>Premium Quality</h3>
                <div class="content-container">
                    <h3>UK Materials Container</h3>
                    <p>UK-sourced materials content will be placed here</p>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🏅</div>
                <h3>Industry Standards</h3>
                <div class="content-container">
                    <h3>Certifications Container</h3>
                    <p>Professional certifications content will be placed here</p>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🌱</div>
                <h3>Sustainability</h3>
                <div class="content-container">
                    <h3>Eco-Friendly Container</h3>
                    <p>Eco-friendly practices content will be placed here</p>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">⚙️</div>
                <h3>Custom Solutions</h3>
                <div class="content-container">
                    <h3>Tailored Solutions Container</h3>
                    <p>Tailored textile solutions content will be placed here</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Indicators Section -->
<section class="section">
    <div class="section-container">
        <h2>Trusted by Industry Leaders</h2>
        
        <div class="trust-grid">
            <div class="trust-item">
                <h3>Certifications</h3>
                <div class="content-container">
                    <h3>UK Standards Container</h3>
                    <p>UK textile standards and industry certifications will be placed here</p>
                </div>
            </div>
            
            <div class="trust-item">
                <h3>Experience</h3>
                <div class="content-container">
                    <h3>Years in Business Container</h3>
                    <p>Years in business and experience content will be placed here</p>
                </div>
            </div>
            
            <div class="trust-item">
                <h3>Client Testimonials</h3>
                <div class="content-container">
                    <h3>Customer Quotes Container</h3>
                    <p>Customer quotes and testimonials will be placed here if available</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call-to-Action Section -->
<section class="section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
    <div class="section-container text-center">
        <h2 style="color: white;">Ready to Discuss Your Textile Needs?</h2>
        <p style="font-size: 18px; margin-bottom: 30px;">Get in touch with our textile specialists today</p>
        
        <div class="cta-actions">
            <a href="<?php echo esc_url(home_url('/products')); ?>" class="cta-button" style="background: white; color: #667eea;">View Products</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cta-button" style="background: transparent; border: 2px solid white;">Request Consultation</a>
        </div>
        
        <div class="contact-quick-info" style="margin-top: 40px;">
            <p><strong>Phone:</strong> <a href="tel:<?php echo esc_attr(str_replace(' ', '', zigma_phone_number())); ?>" style="color: white;"><?php echo esc_html(zigma_phone_number()); ?></a></p>
            <p><strong>Email:</strong> <a href="mailto:<?php echo esc_attr(zigma_email_address()); ?>" style="color: white;"><?php echo esc_html(zigma_email_address()); ?></a></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<style>
/* Additional styles for homepage */
.about-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 40px;
    margin: 40px 0;
}

.trust-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin: 40px 0;
}

.trust-item {
    text-align: center;
    padding: 20px;
}

.cta-actions {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-button.secondary {
    background: transparent;
    border: 2px solid white;
}

.hero-actions {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 20px;
}

.contact-quick-info a {
    text-decoration: none;
    font-weight: bold;
}

.contact-quick-info a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .about-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .trust-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .cta-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .hero-actions {
        flex-direction: column;
        align-items: center;
    }
}
</style> 