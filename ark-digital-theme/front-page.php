<?php 
get_header(); 

?>

<main class="site-main">
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <h1 class="hero-title">Web Development & Business Tools Integration</h1>
            <p class="hero-subtitle">We build custom websites and connect them with the digital tools your business needs: CRM, project management, payment processing, and more. Serving small and growing businesses in Central Texas.</p>
            
            <?php 
            $new_website_page = get_page_by_path('new-website');
            $new_website_url = $new_website_page ? get_permalink($new_website_page->ID) : '/new-website';

            $full_package_page = get_page_by_path('full-package');
            $full_package_url = $full_package_page ? get_permalink($full_package_page->ID) : '/full-package';
            ?>

            <div class="hero-options">
                <div class="quick-start">
                    <h3>Need a New Website?</h3>
                    <p>Get started with our $500 website package</p>
                    <a href="<?php echo esc_url($new_website_url); ?>" class="button button-primary">Start Now</a>
                </div>
                <div class="full-service">
                    <h3>Growing Your Business?</h3>
                    <p>Let's build your complete digital infrastructure</p>
                    <a href="<?php echo esc_url($full_package_url); ?>" class="button button-secondary">Schedule Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
    <div class="services-container">
        <h2 class="section-title">A Complete Digital Framework</h2>
        <div class="services-grid">
            <div class="service-card">
                <h3>Digital Foundation</h3>
                <p>Start with a professional website that serves as your business's digital anchor</p>
                <ul class="service-features">
                    <li>Custom WordPress Development</li>
                    <li>Responsive Design</li>
                    <li>Performance Optimization</li>
                </ul>
            </div>
            <div class="service-card">
                <h3>Business Integration</h3>
                <p>Connect your tools and streamline your operations</p>
                <ul class="service-features">
                    <li>CRM Integration</li>
                    <li>Project Management Setup</li>
                    <li>Workflow Automation</li>
                </ul>
            </div>
            <div class="service-card">
                <h3>Growth Systems</h3>
                <p>Scale your business with integrated digital solutions</p>
                <ul class="service-features">
                    <li>Payment Processing</li>
                    <li>Lead Management</li>
                    <li>Analytics & Reporting</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="integrations">
    <div class="container">
        <h2 class="section-title">Digital Tools We Use</h2>
        <p class="section-subtitle">Powerful integrations to run your business efficiently</p>

        <div class="tools-showcase">
        <div class="tools-showcase">

    <!-- Navigation Tabs -->
    <div class="tools-nav">
        <button class="tool-tab active" data-tab="crm">
            <span class="tab-icon">📊</span>
            <span class="tab-label">CRM & Sales</span>
        </button>
        <button class="tool-tab" data-tab="project">
            <span class="tab-icon">📋</span>
            <span class="tab-label">Project Management</span>
        </button>
        <button class="tool-tab" data-tab="payment">
            <span class="tab-icon">💳</span>
            <span class="tab-label">Payment Processing</span>
        </button>
        <button class="tool-tab" data-tab="automation">
            <span class="tab-icon">⚡</span>
            <span class="tab-label">Automation</span>
        </button>
        <button class="tool-tab" data-tab="marketing">
            <span class="tab-icon">📢</span>
            <span class="tab-label">Marketing</span>
        </button>
        <button class="tool-tab" data-tab="analytics">
            <span class="tab-icon">📊</span>
            <span class="tab-label">Analytics</span>
        </button>
    </div>

    <!-- Content Panels -->
    <div class="tools-content">
        <div class="tool-panel active" id="crm">
            <div class="tool-info">
                <h3>CRM & Sales Tools</h3>
                <p>Track leads, manage customers, and grow your business</p>
                <div class="tool-examples">
                    <span class="tool-badge">GoHighLevel</span>
                    <span class="tool-badge">Salesforce</span>
                    <span class="tool-badge">SalesRabbit</span>
                </div>
                <div class="tool-features">
                    <div class="feature">Lead Tracking</div>
                    <div class="feature">Email Marketing</div>
                    <div class="feature">Sales Pipeline</div>
                    <div class="feature">Customer Management</div>
                </div>
            </div>
        </div>

        <div class="tool-panel" id="project">
            <div class="tool-info">
                <h3>Project Management Tools</h3>
                <p>Streamline your workflows and collaborate effectively</p>
                <div class="tool-examples">
                    <span class="tool-badge">ClickUp</span>
                    <span class="tool-badge">Asana</span>
                    <span class="tool-badge">Wrike</span>
                </div>
                <div class="tool-features">
                    <div class="feature">Task Management</div>
                    <div class="feature">Team Collaboration</div>
                    <div class="feature">Project Tracking</div>
                    <div class="feature">Gantt Charts</div>
                </div>
            </div>
        </div>

        <div class="tool-panel" id="payment">
            <div class="tool-info">
                <h3>Payment Processing Tools</h3>
                <p>Secure and reliable payment solutions for your business</p>
                <div class="tool-examples">
                    <span class="tool-badge">Stripe</span>
                    <span class="tool-badge">Authorize.net</span>
                    <span class="tool-badge">Square</span>
                </div>
                <div class="tool-features">
                    <div class="feature">Online Payments</div>
                    <div class="feature">Recurring Billing</div>
                    <div class="feature">Secure Checkout</div>
                    <div class="feature">Fraud Protection</div>
                </div>
            </div>
        </div>

        <div class="tool-panel" id="automation">
            <div class="tool-info">
                <h3>Automation Tools</h3>
                <p>Streamline your workflows and eliminate repetitive tasks</p>
                <div class="tool-examples">
                    <span class="tool-badge">Zapier</span>
                    <span class="tool-badge">IFTTT</span>
                    <span class="tool-badge">HubSpot Workflows</span>
                </div>
                <div class="tool-features">
                    <div class="feature">Workflow Automation</div>
                    <div class="feature">Integration Recipes</div>
                    <div class="feature">Trigger-Based Actions</div>
                    <div class="feature">Data Sync</div>
                </div>
            </div>
        </div>

        <div class="tool-panel" id="marketing">
            <div class="tool-info">
                <h3>Marketing Tools</h3>
                <p>Reach and engage your target audience</p>
                <div class="tool-examples">
                    <span class="tool-badge">HubSpot</span>
                    <span class="tool-badge">Mailchimp</span>
                    <span class="tool-badge">Google Ads</span>
                </div>
                <div class="tool-features">
                    <div class="feature">Email Marketing</div>
                    <div class="feature">Social Media Management</div>
                    <div class="feature">Advertising</div>
                    <div class="feature">Analytics</div>
                </div>
            </div>
        </div>

        <div class="tool-panel" id="analytics">
            <div class="tool-info">
                <h3>Analytics Tools</h3>
                <p>Gain valuable insights to drive your business</p>
                <div class="tool-examples">
                    <span class="tool-badge">Google Analytics</span>
                    <span class="tool-badge">Mixpanel</span>
                    <span class="tool-badge">Tableau</span>
                </div>
                <div class="tool-features">
                    <div class="feature">Web Analytics</div>
                    <div class="feature">Customer Behavior Tracking</div>
                    <div class="feature">Data Visualization</div>
                    <div class="feature">Reporting</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.querySelectorAll('.tool-tab').forEach(tab => {
    tab.addEventListener('click', () => {
        // Remove active class from all tabs and panels
        document.querySelectorAll('.tool-tab').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.tool-panel').forEach(p => p.classList.remove('active'));

        // Add active class to clicked tab and corresponding panel
        tab.classList.add('active');
        document.getElementById(tab.dataset.tab).classList.add('active');
    });
});
</script>
    <!--Why ARK DIGITAL -->
    <section class="why-ark">
    <div class="container">
        <h2 class="section-title">Why Choose ARK DIGITAL</h2>
        <div class="values-grid">
            <div class="value-card">
                <h3>Local Partnership</h3>
                <p>Based in Killeen, serving Central Texas businesses with personalized attention</p>
            </div>
            <div class="value-card">
                <h3>Balanced Approach</h3>
                <p>We combine digital innovation with practical business solutions</p>
            </div>
            <div class="value-card">
                <h3>Future-Ready Solutions</h3>
                <p>Build systems that scale with your business</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="pricing" id="pricing">
    <div class="pricing-container">
        <?php 
        // Get page URLs
        $new_website_page = get_page_by_path('new-website');
        $new_website_url = $new_website_page ? get_permalink($new_website_page->ID) : '/new-website';

        $full_package_page = get_page_by_path('full-package');
        $full_package_url = $full_package_page ? get_permalink($full_package_page->ID) : '/full-package';
        ?>

        <h2 class="section-title">Choose Your Path</h2>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>New Website</h3>
                <div class="price">$500</div>
                <ul class="features">
                    <li>Professional WordPress website</li>
                    <li>Domain setup</li>
                    <li>1 year hosting included</li>
                    <li>Mobile responsive design</li>
                    <li>Basic SEO setup</li>
                    <li>Contact form integration</li>
                </ul>
                <a href="<?php echo esc_url($new_website_url); ?>" class="button button-primary">Get Started</a>
            </div>
            <div class="pricing-card featured">
                <h3>Full Digital Package</h3>
                <div class="price">Custom</div>
                <ul class="features">
                    <li>Custom website development</li>
                    <li>CRM integration</li>
                    <li>Project management setup</li>
                    <li>Payment system integration</li>
                    <li>Business automation</li>
                    <li>Training & support</li>
                </ul>
                <a href="<?php echo esc_url($full_package_url); ?>" class="button button-primary">Schedule Consultation</a>
            </div>
        </div>
        <div class="pricing-note">
            <p>*All packages include personalized support and guidance throughout the process</p>
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?>