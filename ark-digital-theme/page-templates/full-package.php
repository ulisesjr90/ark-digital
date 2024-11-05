<?php
/*
Template Name: Full Package
*/
get_header();
?>

<main class="full-package-page">
    <section class="hero full-package-hero">
        <div class="hero-container">
            <h1 class="hero-title">Complete Digital Business Solutions</h1>
            <p class="hero-subtitle">Custom website development integrated with the tools your business needs to grow</p>
        </div>
    </section>

    <section class="consultation-flow" id="consultation">
        <div class="container">
            <h2 class="section-title">Schedule Your Free Consultation</h2>
            <div class="consultation-grid">
                <div class="consultation-info">
                    <h3>What to Expect</h3>
                    <ul class="consultation-points">
                        <li>30-minute video call or in-person meeting</li>
                        <li>Discuss your business needs and goals</li>
                        <li>Review current digital setup</li>
                        <li>Get custom solution recommendations</li>
                        <li>Receive pricing estimate</li>
                    </ul>
                </div>
                
                <div class="consultation-form">
    <?php echo do_shortcode('[contact-form-7 id="cd2d734" title="Contact form 1"]'); ?>
</div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>