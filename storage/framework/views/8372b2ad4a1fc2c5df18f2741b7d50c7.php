


<?php $__env->startSection('title', 'About MEMORA | Virtual Museum of Aceh'); ?>

<?php $__env->startSection('content'); ?>

<!-- ABOUT HERO -->
<section class="about-hero">
    <div class="about-hero-content">
        <span class="section-subtitle">DISCOVER OUR STORY</span>

        <h1>Preserving the Past,<br>Inspiring the Future.</h1>

        <p>
            A digital space dedicated to exploring, documenting,
            and preserving the historical and cultural heritage of Aceh.
        </p>
    </div>
</section>

<!-- ABOUT INTRODUCTION -->
<section class="about-intro">
    <div class="about-intro-image">
        <img src="<?php echo e(asset('assets/images/historical-room-360.png')); ?>"
             alt="MEMORA Virtual Museum">
    </div>

    <div class="about-intro-content">
        <span class="section-subtitle">ABOUT MEMORA</span>

        <h2>Where History Meets Digital Exploration</h2>

        <p>
            MEMORA is a digital museum that introduces the rich
            historical and cultural heritage of Aceh through an
            interactive web-based experience.
        </p>

        <p>
            Through digital collections, virtual museum experiences,
            historical articles, and timelines, visitors can discover
            meaningful stories from Aceh's past in an accessible
            and engaging way.
        </p>

        <p>
            MEMORA aims to make historical knowledge easier to explore
            while encouraging appreciation for the heritage that
            shapes Aceh's identity.
        </p>
    </div>
</section>

<!-- VISION AND MISSION -->
<section class="about-vision">
    <div class="about-section-heading">
        <span class="section-subtitle">OUR DIRECTION</span>
        <h2>Vision & Mission</h2>
        <p>
            Building a meaningful connection between history,
            culture, technology, and future generations.
        </p>
    </div>

    <div class="vision-mission-grid">

        <div class="vision-card">
            <span class="about-number">01</span>
            <h3>Our Vision</h3>
            <p>
                To become an accessible digital platform that
                preserves, introduces, and promotes the historical
                and cultural heritage of Aceh to a wider audience.
            </p>
        </div>

        <div class="vision-card">
            <span class="about-number">02</span>
            <h3>Our Mission</h3>
            <p>
                To provide interactive historical collections,
                engaging virtual exploration, informative articles,
                and chronological timelines that support cultural
                education and heritage preservation.
            </p>
        </div>

    </div>
</section>

<!-- WHAT WE OFFER -->
<section class="about-offer">
    <div class="about-section-heading">
        <span class="section-subtitle">EXPLORE MEMORA</span>
        <h2>A Journey Through Aceh's Heritage</h2>
        <p>
            Discover different ways to experience the stories
            and historical treasures of Aceh.
        </p>
    </div>

    <div class="about-offer-grid">

        <div class="offer-card">
            <span class="offer-number">01</span>
            <h3>Digital Collections</h3>
            <p>
                Explore historical objects, traditional artifacts,
                and cultural treasures preserved through digital
                documentation.
            </p>
        </div>

        <div class="offer-card">
            <span class="offer-number">02</span>
            <h3>Virtual Museum</h3>
            <p>
                Experience the Historical Room through an
                interactive 360-degree virtual tour.
            </p>
        </div>

        <div class="offer-card">
            <span class="offer-number">03</span>
            <h3>Historical Articles</h3>
            <p>
                Read stories about important figures, historical
                events, architecture, and Acehnese traditions.
            </p>
        </div>

        <div class="offer-card">
            <span class="offer-number">04</span>
            <h3>Historical Timeline</h3>
            <p>
                Follow the important periods and events that
                shaped the history of Aceh.
            </p>
        </div>

    </div>
</section>

<!-- CLOSING -->
<section class="about-closing">
    <span class="section-subtitle">THE LEGACY CONTINUES</span>

    <h2>Every Heritage Has a Story Worth Preserving.</h2>

    <p>
        Discover the past, appreciate the present,
        and keep the heritage of Aceh alive for generations to come.
    </p>

    <a href="<?php echo e(route('collections.index')); ?>" class="about-button">
        Explore Our Collections →
    </a>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\MEMORA\resources\views/about/index.blade.php ENDPATH**/ ?>