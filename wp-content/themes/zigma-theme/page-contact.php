<?php get_header(); ?>

<!-- Page Header -->
<section class="hero-section" style="padding: 60px 20px; background: linear-gradient(135deg, #27ae60 0%, #2ecc71 100%);">
    <div class="hero-container">
        <h1>Get in Touch</h1>
        <p style="font-size: 20px; margin-top: 15px;">Ready to discuss your textile needs?</p>
        <nav class="breadcrumb" style="margin-top: 20px;">
            <a href="<?php echo esc_url(home_url('/')); ?>" style="color: rgba(255,255,255,0.8);">Home</a> 
            <span style="color: rgba(255,255,255,0.6);"> > </span> 
            <span style="color: white;">Contact</span>
        </nav>
    </div>
</section>

<!-- Contact Information Section -->
<section class="section">
    <div class="section-container">
        <h2>Contact Information</h2>
        
        <div class="contact-info">
            <div class="contact-card">
                <div class="contact-icon">📞</div>
                <h3>Phone</h3>
                <p><strong><a href="tel:<?php echo esc_attr(str_replace(' ', '', zigma_phone_number())); ?>"><?php echo esc_html(zigma_phone_number()); ?></a></strong></p>
                <p>Call us for immediate assistance</p>
            </div>
            
            <div class="contact-card">
                <div class="contact-icon">✉️</div>
                <h3>Email</h3>
                <p><strong><a href="mailto:<?php echo esc_attr(zigma_email_address()); ?>"><?php echo esc_html(zigma_email_address()); ?></a></strong></p>
                <p><strong><a href="mailto:sales@zigmaglobalwear.com">sales@zigmaglobalwear.com</a></strong></p>
                <p>Email us your inquiries</p>
            </div>
            
            <div class="contact-card">
                <div class="contact-icon">📍</div>
                <h3>Address</h3>
                <div class="content-container">
                    <h3>Business Address Container</h3>
                    <p>Full UK address will be placed here</p>
                </div>
            </div>
            
            <div class="contact-card">
                <div class="contact-icon">🕒</div>
                <h3>Business Hours</h3>
                <div class="content-container">
                    <h3>Operating Schedule Container</h3>
                    <p>Operating schedule will be placed here</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="section-container">
        <h2>Send Us a Message</h2>
        <p class="text-center">Fill out the form below and we'll get back to you as soon as possible</p>
        
        <!-- Contact Form Success/Error Messages -->
        <?php if (isset($_GET['contact'])): ?>
            <?php if ($_GET['contact'] == 'success'): ?>
                <div class="form-message success">
                    <p>✅ Thank you! Your message has been sent successfully. We'll get back to you soon.</p>
                </div>
            <?php elseif ($_GET['contact'] == 'error'): ?>
                <div class="form-message error">
                    <p>❌ Sorry, there was an error sending your message. Please try again or call us directly.</p>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        
        <form class="contact-form" method="post" action="">
            <?php wp_nonce_field('zigma_contact_form_action', 'zigma_contact_nonce'); ?>
            
            <div class="form-group">
                <label for="contact_name">Name *</label>
                <input type="text" id="contact_name" name="contact_name" required>
            </div>
            
            <div class="form-group">
                <label for="contact_company">Company</label>
                <input type="text" id="contact_company" name="contact_company">
            </div>
            
            <div class="form-group">
                <label for="contact_email">Email *</label>
                <input type="email" id="contact_email" name="contact_email" required>
            </div>
            
            <div class="form-group">
                <label for="contact_phone">Phone</label>
                <input type="tel" id="contact_phone" name="contact_phone">
            </div>
            
            <div class="form-group">
                <label for="inquiry_type">Inquiry Type</label>
                <select id="inquiry_type" name="inquiry_type">
                    <option value="General">General Inquiry</option>
                    <option value="Product Info">Product Information</option>
                    <option value="Custom Order">Custom Order</option>
                    <option value="Partnership">Partnership Opportunity</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="contact_message">Message *</label>
                <textarea id="contact_message" name="contact_message" required placeholder="Please tell us about your textile requirements..."></textarea>
            </div>
            
            <button type="submit" name="zigma_contact_form" class="submit-button">Send Inquiry</button>
        </form>
    </div>
</section>

<!-- Business Information Section -->
<section class="section">
    <div class="section-container">
        <h2>Business Information</h2>
        
        <div class="business-info-grid">
            <div class="business-card">
                <h3>Company Registration</h3>
                <div class="content-container">
                    <h3>UK Business Details Container</h3>
                    <p>UK business registration details will be placed here</p>
                </div>
            </div>
            
            <div class="business-card">
                <h3>VAT Information</h3>
                <div class="content-container">
                    <h3>VAT Number Container</h3>
                    <p>VAT number if applicable will be placed here</p>
                </div>
            </div>
            
            <div class="business-card">
                <h3>Years in Business</h3>
                <div class="content-container">
                    <h3>Experience Container</h3>
                    <p>Years of experience content will be placed here</p>
                </div>
            </div>
            
            <div class="business-card">
                <h3>Certifications & Memberships</h3>
                <div class="content-container">
                    <h3>Industry Associations Container</h3>
                    <p>Industry associations and certifications will be placed here</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Location Map Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="section-container">
        <h2>Find Us</h2>
        <p class="text-center">Visit our location or get directions</p>
        
        <!-- Google Maps Container -->
        <div class="map-container">
            <div class="content-container">
                <h3>Google Maps Embed Container</h3>
                <p>Interactive Google Maps showing business location will be embedded here</p>
                <p><strong>Directions functionality will be available</strong></p>
            </div>
        </div>
        
        <div class="map-actions text-center mt-30">
            <a href="#" class="cta-button" onclick="alert('Google Maps integration will be added with actual address')">Get Directions</a>
            <a href="tel:<?php echo esc_attr(str_replace(' ', '', zigma_phone_number())); ?>" class="cta-button secondary">Call Before Visiting</a>
        </div>
    </div>
</section>

<!-- Quick Contact Section -->
<section class="section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
    <div class="section-container text-center">
        <h2 style="color: white;">Need Immediate Assistance?</h2>
        <p style="font-size: 18px; margin-bottom: 30px;">Our textile specialists are ready to help</p>
        
        <div class="quick-contact-grid">
            <div class="quick-contact-item">
                <h3>Call Us Now</h3>
                <p style="font-size: 24px; font-weight: bold;"><a href="tel:<?php echo esc_attr(str_replace(' ', '', zigma_phone_number())); ?>" style="color: white;"><?php echo esc_html(zigma_phone_number()); ?></a></p>
                <p>Speak directly with our team</p>
            </div>
            
            <div class="quick-contact-item">
                <h3>Email Response</h3>
                <p style="font-size: 18px; font-weight: bold;"><a href="mailto:<?php echo esc_attr(zigma_email_address()); ?>" style="color: white;"><?php echo esc_html(zigma_email_address()); ?></a></p>
                <p>We respond within 24 hours</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<style>
/* Additional styles for contact page */
.form-message {
    padding: 15px;
    margin: 20px 0;
    border-radius: 5px;
    text-align: center;
    font-weight: bold;
}

.form-message.success {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.form-message.error {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.business-info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin: 40px 0;
}

.business-card {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-align: center;
}

.business-card h3 {
    margin-bottom: 20px;
    color: #2c3e50;
}

.map-actions {
    margin-top: 30px;
}

.cta-button.secondary {
    background: transparent;
    border: 2px solid #3498db;
    color: #3498db;
    margin-left: 20px;
}

.cta-button.secondary:hover {
    background: #3498db;
    color: white;
}

.quick-contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    margin: 40px 0;
}

.quick-contact-item {
    padding: 20px;
}

.quick-contact-item h3 {
    margin-bottom: 15px;
    color: white;
}

.quick-contact-item a {
    text-decoration: none;
}

.quick-contact-item a:hover {
    text-decoration: underline;
}

.contact-card a {
    color: #3498db;
    text-decoration: none;
}

.contact-card a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .business-info-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .quick-contact-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .cta-button.secondary {
        margin-left: 0;
        margin-top: 15px;
    }
    
    .quick-contact-item p {
        font-size: 16px !important;
    }
}
</style> 