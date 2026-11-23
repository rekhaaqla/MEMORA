


<?php $__env->startSection('title', 'Collections | MEMORA'); ?>

<?php $__env->startSection('content'); ?>

<!-- COLLECTION HERO -->
<section class="collection-hero">
    <div class="collection-hero-content">
        <span>MEMORA DIGITAL MUSEUM</span>
        <h1>Explore The <em>Collections.</em></h1>
        <p>
            Discover historical objects, cultural artifacts, and
            valuable heritage that tell the story of Aceh.
        </p>
        <div class="collection-breadcrumb">
            <a href="<?php echo e(route('home')); ?>">HOME</a>
            <span>/</span>
            <span>COLLECTIONS</span>
        </div>
    </div>
</section>

<!-- COLLECTION INTRO -->
<section class="collection-intro">
    <div>
        <span class="intro-label"><span></span> MUSEUM COLLECTION</span>
        <h2>Stories Preserved in <em>Every Object.</em></h2>
    </div>

    <p>
        Each collection holds a story about the history, identity,
        knowledge, and traditions of the Acehnese people.
        Explore them through our digital museum.
    </p>
</section>

<!-- COLLECTION FILTER -->
<section class="collection-list-section">

    <div class="collection-toolbar">
        <div>
            <h3>Explore Collections</h3>
            <p>Discover the heritage of Aceh</p>
        </div>

        <div class="collection-search">
            <input type="text" id="collectionSearch"
                placeholder="Search collections...">
        </div>
    </div>

    <div class="collection-filters">
        <button class="filter-btn active" data-filter="all">All Collections</button>
        <button class="filter-btn" data-filter="weapon">Historical Objects</button>
        <button class="filter-btn" data-filter="culture">Culture</button>
        <button class="filter-btn" data-filter="manuscript">Manuscripts</button>
    </div>

    
<div class="collection-grid">

    <!-- 1. RENCONG -->
    <article class="collection-card" data-category="weapon">
        <div class="collection-card-image">
            <img src="<?php echo e(asset('assets/images/rencong.jpg')); ?>" alt="Rencong Aceh">
            <span>HISTORICAL OBJECT</span>
        </div>
        <div class="collection-card-info">
            <small>WEAPON & SYMBOL</small>
            <h3>Rencong</h3>
            <p>A traditional Acehnese weapon that represents courage and identity.</p>

            <div class="collection-extra">
                <p>Rencong is a traditional weapon closely associated with the history and identity of Aceh. Its distinctive curved shape makes it one of the most recognizable cultural objects from the region.</p>
                <p>Historically, Rencong was used as a weapon for self-defense and became a symbol of bravery, honor, and resistance among the Acehnese people.</p>
                <p><strong>Cultural Significance:</strong> Rencong is also part of traditional Acehnese attire and represents the courage and dignity of its people.</p>
            </div>

            <button class="collection-expand-btn" type="button" aria-expanded="false">
                EXPLORE COLLECTION ↗
            </button>
        </div>
    </article>

    <!-- 2. KUPIAH MEUKEUTOP -->
    <article class="collection-card" data-category="culture">
        <div class="collection-card-image">
            <img src="<?php echo e(asset('assets/images/kupiah.jpg')); ?>" alt="Kupiah Meukeutop">
            <span>CULTURAL HERITAGE</span>
        </div>
        <div class="collection-card-info">
            <small>TRADITIONAL ATTIRE</small>
            <h3>Kupiah Meukeutop</h3>
            <p>A traditional Acehnese headpiece with distinctive colors and patterns.</p>

            <div class="collection-extra">
                <p>Kupiah Meukeutop is a traditional Acehnese cap recognized by its colorful woven patterns and distinctive shape. It is an important part of traditional male attire in Aceh.</p>
                <p>The cap is commonly associated with formal occasions, traditional ceremonies, and cultural performances. Its design reflects the craftsmanship and artistic traditions of Acehnese society.</p>
                <p><strong>Cultural Significance:</strong> Kupiah Meukeutop represents cultural identity, tradition, and pride in Acehnese heritage.</p>
            </div>

            <button class="collection-expand-btn" type="button" aria-expanded="false">
                EXPLORE COLLECTION ↗
            </button>
        </div>
    </article>

    <!-- 3. ANCIENT MANUSCRIPTS -->
    <article class="collection-card" data-category="manuscript">
        <div class="collection-card-image">
            <img src="<?php echo e(asset('assets/images/manuscript.jpg')); ?>" alt="Ancient Manuscripts">
            <span>HISTORICAL DOCUMENT</span>
        </div>
        <div class="collection-card-info">
            <small>ANCIENT KNOWLEDGE</small>
            <h3>Ancient Manuscripts</h3>
            <p>Historical manuscripts that preserve knowledge and literary traditions.</p>

            <div class="collection-extra">
                <p>Aceh has a long tradition of manuscript writing that preserves knowledge from earlier generations. These manuscripts contain historical accounts, religious teachings, literature, and traditional knowledge.</p>
                <p>Written in various scripts, including Jawi, these documents provide valuable evidence of intellectual and cultural life in Aceh.</p>
                <p><strong>Historical Value:</strong> Ancient manuscripts help researchers understand the development of education, literature, religion, and society in Aceh.</p>
            </div>

            <button class="collection-expand-btn" type="button" aria-expanded="false">
                EXPLORE COLLECTION ↗
            </button>
        </div>
    </article>

    <!-- 4. ACEHNESE HERITAGE -->
    <article class="collection-card" data-category="culture">
        <div class="collection-card-image">
            <img src="<?php echo e(asset('assets/images/rencong.jpg')); ?>" alt="Acehnese Heritage">
            <span>CULTURAL HERITAGE</span>
        </div>
        <div class="collection-card-info">
            <small>LOCAL TRADITION</small>
            <h3>Acehnese Heritage</h3>
            <p>Discover the traditions and cultural values of Aceh.</p>

            <div class="collection-extra">
                <p>Acehnese heritage includes traditional dances, music, clothing, ceremonies, architecture, and local customs that have developed over generations.</p>
                <p>These traditions reflect the historical experiences, beliefs, and social values of the Acehnese people.</p>
                <p><strong>Cultural Significance:</strong> Preserving traditional practices helps maintain local identity and introduces Acehnese culture to future generations.</p>
            </div>

            <button class="collection-expand-btn" type="button" aria-expanded="false">
                EXPLORE COLLECTION ↗
            </button>
        </div>
    </article>

    <!-- 5. ACEH HISTORICAL HERITAGE -->
    <article class="collection-card" data-category="weapon">
        <div class="collection-card-image">
            <img src="<?php echo e(asset('assets/images/hero-aceh.jpg')); ?>" alt="Aceh Historical Heritage">
            <span>HISTORICAL HERITAGE</span>
        </div>
        <div class="collection-card-info">
            <small>HISTORICAL PERIOD</small>
            <h3>Aceh Historical Heritage</h3>
            <p>Explore objects and stories from important periods in Aceh's history.</p>

            <div class="collection-extra">
                <p>Aceh has experienced important historical periods, including the rise of the Samudera Pasai Sultanate, the development of the Aceh Sultanate, and the long struggle against colonial rule.</p>
                <p>Historical buildings, monuments, objects, and written records help preserve memories of these periods.</p>
                <p><strong>Historical Value:</strong> These remains provide a deeper understanding of Aceh's political, economic, and cultural development.</p>
            </div>

            <button class="collection-expand-btn" type="button" aria-expanded="false">
                EXPLORE COLLECTION ↗
            </button>
        </div>
    </article>

    <!-- 6. HISTORICAL ARCHIVES -->
    <article class="collection-card" data-category="manuscript">
        <div class="collection-card-image">
            <img src="<?php echo e(asset('assets/images/article-heritage.jpg')); ?>" alt="Historical Archives">
            <span>ARCHIVAL COLLECTION</span>
        </div>
        <div class="collection-card-info">
            <small>DOCUMENTATION</small>
            <h3>Historical Archives</h3>
            <p>Explore visual documentation and historical records of Aceh.</p>

            <div class="collection-extra">
                <p>Historical archives consist of photographs, written documents, maps, records, and other materials that preserve information about Aceh's past.</p>
                <p>They provide important references for understanding historical events, community life, and the transformation of Aceh over time.</p>
                <p><strong>Historical Value:</strong> Archival materials support research, education, and the preservation of collective memory.</p>
            </div>

            <button class="collection-expand-btn" type="button" aria-expanded="false">
                EXPLORE COLLECTION ↗
            </button>
        </div>
    </article>

</div>


    <p class="collection-empty" id="collectionEmpty">
        No collections found.
    </p>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\MEMORA\resources\views/collections/index.blade.php ENDPATH**/ ?>