<?php
/*
Template Name: New Website
*/
get_header();
?>

<main class="new-website-page">
    <!-- Hero Section -->
    <section class="new-website-hero">
        <div class="container">
            <h1>Professional Website Package</h1>
            <p class="hero-price">Starting at $500</p>
            
            <div class="hero-features">
                <div class="feature-item">
                    <span class="feature-icon">🚀</span>
                    <h3>Quick Launch</h3>
                    <p>Your website live in 2 weeks</p>
                </div>
                
                <div class="feature-item">
                    <span class="feature-icon">💼</span>
                    <h3>All-Inclusive</h3>
                    <p>Domain, hosting & design included</p>
                </div>
                
                <div class="feature-item">
                    <span class="feature-icon">🛠️</span>
                    <h3>Built to Grow</h3>
                    <p>Ready for future integrations</p>
                </div>
            </div>
        </div>
    </section>

    <!-- What's Included Section -->
    <section class="package-includes">
        <div class="container">
            <h2>Everything You Need to Get Started</h2>
            
            <div class="includes-grid">
                <div class="include-card">
                    <h3>Website Essentials</h3>
                    <ul>
                        <li>Professional WordPress Design</li>
                        <li>Mobile Responsive Layout</li>
                        <li>Contact Forms</li>
                        <li>Social Media Integration</li>
                        <li>Google Maps Integration</li>
                    </ul>
                </div>

                <div class="include-card">
                    <h3>Technical Setup</h3>
                    <ul>
                        <li>Domain Registration</li>
                        <li>1-Year Hosting</li>
                        <li>SSL Certificate</li>
                        <li>Basic SEO Setup</li>
                        <li>Performance Optimization</li>
                    </ul>
                </div>

                <div class="include-card">
                    <h3>Support & Training</h3>
                    <ul>
                        <li>Content Upload Assistance</li>
                        <li>Admin Panel Training</li>
                        <li>Documentation</li>
                        <li>30 Days Support</li>
                        <li>Future Growth Consultation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="website-cta">
        <div class="container">
            <h2>Ready to Get Started?</h2>
            <p>Schedule a consultation to discuss your website needs</p>
            <div class="cta-buttons">
                <a href="#consultation" class="button button-primary">Schedule Consultation</a>
                <a href="#examples" class="button button-secondary">View Examples</a>
            </div>
        </div>
    </section>

    <!-- Domain Checker -->
    <section class="domain-checker-section">
        <div class="container">
            <h2>Check Your Domain Availability</h2>
            <p>See if your desired domain name is available</p>
            <div class="domain-checker-wrapper">
                <input type="text" placeholder="yourbusiness.com" class="domain-checker">
                <button class="check-domain">Check Availability</button>
            </div>
            <div class="domain-info">
                <p>Already have a domain? No problem - we'll help you transfer it.</p>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <h2>How We Build Your Website</h2>
            <div class="process-timeline">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Consultation</h3>
                    <p>Discuss your goals and requirements</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Design</h3>
                    <p>Create your custom layout</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Development</h3>
                    <p>Build your responsive website</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>Launch</h3>
                    <p>Go live with full support</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>