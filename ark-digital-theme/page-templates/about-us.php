<?php
/*
Template Name: About Us
*/
get_header();
?>

<main class="about-page">
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <h1>Our Story</h1>
            <p class="hero-subtitle">Building digital lifeboats for tomorrow's business landscape</p>
        </div>
    </section>

    <!-- Origin Story Section -->
    <section class="our-story">
        <div class="container">
            <div class="story-content">
                <h2>Born from Insight</h2>
                <div class="story-text">
                    <p>ARK DIGITAL emerged in 2020, during a time when the world witnessed an unprecedented shift in how businesses operate. As digital transformation accelerated from a luxury to a necessity, we recognized a crucial need: businesses needed more than just service providers—they needed strategic partners prepared for the future.</p>
                    <p>Founded by former Stripe colleagues who witnessed firsthand the transformative power of digital solutions, ARK DIGITAL was built on a simple yet powerful premise: prepare today for tomorrow's changes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Philosophy Section -->
    <section class="philosophy">
        <div class="container">
            <h2>Our Philosophy</h2>
            <div class="philosophy-content">
                <div class="philosophy-text">
                    <p>Our name draws inspiration from an ancient tale of foresight and preparation. Like Noah's Ark, we believe in building robust solutions before the flood—not of water, but of technological and market changes that can either elevate or overwhelm a business.</p>
                    <p>This isn't about predicting the future; it's about being prepared for it. We partner with businesses who share our forward-thinking mindset and are ready to build solutions that withstand and adapt to whatever changes come their way.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Approach Section -->
    <section class="our-approach">
        <div class="container">
            <h2>Our Approach</h2>
            <div class="approach-grid">
                <div class="approach-card">
                    <h3>Custom Solutions</h3>
                    <p>Every business is unique. We tailor digital solutions that align with your industry, culture, and growth trajectory.</p>
                </div>
                
                <div class="approach-card">
                    <h3>Future-Ready</h3>
                    <p>We build scalable systems that grow with you, ensuring your digital infrastructure can adapt to new challenges.</p>
                </div>
                
                <div class="approach-card">
                    <h3>Strategic Partnership</h3>
                    <p>Beyond service providers, we're your strategic partners in navigating digital transformation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2>The Crew</h2>
            <div class="team-photo">
                <!-- Team photo container -->
                <img src="/api/placeholder/1200/600" alt="ARK DIGITAL Team" />
            </div>
            
            <div class="team-leaders">
                <div class="team-card" data-modal="ulises">
                    <div class="card-image">
                        <img src="/api/placeholder/300/300" alt="Ulises Torres" />
                    </div>
                    <div class="card-content">
                        <h3>Ulises Torres</h3>
                        <p class="title">Founder & CEO</p>
                        <p class="preview">Former Stripe specialist with a vision for future-proof digital solutions...</p>
                        <button class="read-more">Read More</button>
                    </div>
                </div>

                <div class="team-card" data-modal="jonathan">
                    <div class="card-image">
                        <img src="/api/placeholder/300/300" alt="Jonathan Mayoral" />
                    </div>
                    <div class="card-content">
                        <h3>Jonathan Mayoral</h3>
                        <p class="title">Senior Engineer</p>
                        <p class="preview">Technical architect with expertise in scalable solutions...</p>
                        <button class="read-more">Read More</button>
                    </div>
                </div>

                <div class="team-card" data-modal="david">
                    <div class="card-image">
                        <img src="/api/placeholder/300/300" alt="David Urena" />
                    </div>
                    <div class="card-content">
                        <h3>David Urena</h3>
                        <p class="title">Senior Business Developer</p>
                        <p class="preview">Strategic growth specialist focused on business transformation...</p>
                        <button class="read-more">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Member Modals -->
    <div class="team-modals">
        <div id="modal-ulises" class="team-modal">
            <div class="modal-content">
                <button class="close-modal">&times;</button>
                <div class="modal-grid">
                    <div class="modal-image">
                        <img src="/api/placeholder/400/500" alt="Ulises Torres" />
                    </div>
                    <div class="modal-text">
                        <h3>Ulises Torres</h3>
                        <p class="title">Founder & CEO</p>
                        <div class="bio">
                            <!-- Add detailed bio here -->
                            <p>With a background in financial technology and digital transformation, Ulises founded ARK DIGITAL with a vision to help businesses navigate the rapidly evolving digital landscape.</p>
                            <p>His experience at Stripe provided crucial insights into how businesses can leverage technology to achieve sustainable growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Similar modals for Jonathan and David -->
    </div>

    <!-- Call to Action -->
    <section class="about-cta">
        <div class="container">
            <h2>Ready to Build Your Digital Ark?</h2>
            <p>Let's prepare your business for whatever tomorrow brings.</p>
            <a href="#consultation" class="button button-primary">Start the Conversation</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>