
@extends('layouts.app')

@section('title', 'Home - MEMORA | Virtual Museum of Aceh')

@section('content')

<!-- HERO SECTION -->
<section class="hero">

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <div class="hero-label">
            <span></span>
            DISCOVER THE HERITAGE OF ACEH
        </div>

        <h1>
            A Journey Through
            <span>Time & Heritage.</span>
        </h1>

        <p>
            Discover the timeless stories, remarkable history,
            and cultural treasures of Aceh through an immersive
            digital museum experience.
        </p>

        <div class="hero-buttons">

            <a href="{{ route('collections.index') }}"
               class="btn-primary">
                Explore Collections
                <span>↗</span>
            </a>

            <a href="{{ route('museum.index') }}"
               class="btn-secondary">
                Enter Virtual Museum
            </a>

        </div>

    </div>

    <div class="hero-bottom">

        <div class="hero-location">
            <span>01 /</span>
            ACEH, INDONESIA
        </div>

        <div class="hero-scroll">
            SCROLL TO EXPLORE
            <span>↓</span>
        </div>

    </div>

</section>


<!-- INTRODUCTION SECTION -->
<section class="introduction">

    <div class="intro-label">
        <span></span>
        WELCOME TO MEMORA
    </div>

    <div class="intro-container">

        <div class="intro-heading">
            <h2>
                Every Heritage Holds
                <span>A Story Worth Preserving.</span>
            </h2>
        </div>

        <div class="intro-description">
            <p>
                MEMORA is a digital museum dedicated to
                preserving and introducing the historical
                and cultural heritage of Aceh.
            </p>

            <p>
                Through digital collections, virtual
                exhibitions, historical articles, and
                interactive timelines, we invite everyone
                to explore the stories behind Aceh's
                remarkable civilization.
            </p>

            <a href="{{ route('about') }}" class="text-link">
                Discover Our Story <span>↗</span>
            </a>
        </div>

    </div>

    <div class="intro-bottom">
        <span>01 — OUR PURPOSE</span>
        <span>PRESERVE · EXPLORE · EDUCATE</span>
    </div>

</section>


<!-- FEATURED COLLECTIONS -->
<section class="featured-collections">

    <div class="section-heading">

        <div>
            <div class="intro-label">
                <span></span>
                EXPLORE THE COLLECTION
            </div>

            <h2>
                Treasures of <span>Aceh.</span>
            </h2>

            <p>
                Discover remarkable artifacts and cultural
                treasures that tell the story of Aceh.
            </p>
        </div>

        <a href="{{ route('collections.index') }}"
           class="view-all">
            View All Collections <span>↗</span>
        </a>

    </div>


    <div class="collection-grid">

        <!-- COLLECTION 1 -->
        <article class="collection-card">

            <div class="collection-image">
                <img src="{{ asset('assets/images/rencong.jpg') }}"
                     alt="Rencong Aceh">

                <span class="collection-number">01</span>
            </div>

            <div class="collection-info">
                <span class="collection-category">
                    TRADITIONAL WEAPON
                </span>

                <h3>Rencong</h3>

                <p>
                    A traditional Acehnese weapon
                    recognized as an important symbol
                    of Acehnese identity.
                </p>

                <a href="{{ route('collections.index') }}">
                    Explore Collection <span>↗</span>
                </a>
            </div>

        </article>


        <!-- COLLECTION 2 -->
        <article class="collection-card">

            <div class="collection-image">
                <img src="{{ asset('assets/images/kupiah.jpg') }}"
                     alt="Kupiah Meukeutop">

                <span class="collection-number">02</span>
            </div>

            <div class="collection-info">
                <span class="collection-category">
                    TRADITIONAL ATTIRE
                </span>

                <h3>Kupiah Meukeutop</h3>

                <p>
                    A traditional Acehnese headwear
                    associated with cultural identity
                    and historical heritage.
                </p>

                <a href="{{ route('collections.index') }}">
                    Explore Collection <span>↗</span>
                </a>
            </div>

        </article>


        <!-- COLLECTION 3 -->
        <article class="collection-card">

            <div class="collection-image">
                <img src="{{ asset('assets/images/manuscript.jpg') }}"
                     alt="Aceh Historical Manuscript">

                <span class="collection-number">03</span>
            </div>

            <div class="collection-info">
                <span class="collection-category">
                    HISTORICAL MANUSCRIPT
                </span>

                <h3>Ancient Manuscripts</h3>

                <p>
                    Historical writings that preserve
                    knowledge, literature, and the
                    intellectual heritage of Aceh.
                </p>

                <a href="{{ route('collections.index') }}">
                    Explore Collection <span>↗</span>
                </a>
            </div>

        </article>

    </div>

</section>

<!-- HISTORICAL TIMELINE -->
<section class="history-section">

    <div class="history-header">

        <div class="intro-label">
            <span></span>
            JOURNEY THROUGH TIME
        </div>

        <h2>
            Tracing The <span>History of Aceh.</span>
        </h2>

        <p>
            Explore the important moments that shaped
            Aceh's civilization, identity, and heritage.
        </p>

    </div>

    <div class="timeline">

        <article class="timeline-item">
            <div class="timeline-year">1205</div>

            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <span>THE EARLY SULTANATE</span>
                <h3>Early Islamic Kingdom</h3>
                <p>
                    The establishment of the Samudera Pasai
                    Sultanate marked an important chapter
                    in the development of Islam in the region.
                </p>
            </div>
        </article>

        <article class="timeline-item">
            <div class="timeline-year">1514</div>

            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <span>THE RISE OF ACEH</span>
                <h3>Kingdom of Aceh Darussalam</h3>
                <p>
                    Aceh developed into a significant
                    maritime and trading power in
                    Southeast Asia.
                </p>
            </div>
        </article>

        <article class="timeline-item">
            <div class="timeline-year">1607</div>

            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <span>THE GOLDEN AGE</span>
                <h3>Era of Sultan Iskandar Muda</h3>
                <p>
                    Aceh experienced remarkable political,
                    economic, and cultural development
                    during this period.
                </p>
            </div>
        </article>

        <article class="timeline-item">
            <div class="timeline-year">1873</div>

            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <span>THE STRUGGLE</span>
                <h3>Aceh War</h3>
                <p>
                    The people of Aceh began a long
                    resistance against Dutch colonial
                    expansion.
                </p>
            </div>
        </article>

    </div>

    <div class="history-footer">
        <a href="{{ route('timeline.index') }}">
            EXPLORE COMPLETE TIMELINE <span>↗</span>
        </a>
    </div>

</section>


<section class="articles-section">
    <div class="articles-heading">
        <div class="intro-label">
            <span></span> STORIES & KNOWLEDGE
        </div>
        <h2>Discover Stories of <span>Aceh.</span></h2>
        <p>
            Discover the stories, traditions, and historical events
            that preserve the identity of Aceh.
        </p>
    </div>

    <div class="articles-grid">
        <article class="article-card">
            <div class="article-image">
                <img src="{{ asset('assets/images/article-aceh.jpg') }}" alt="Sejarah Aceh">
            </div>
            <div class="article-info">
                <span>HISTORY</span>
                <h3>The Legacy of Aceh Sultanate</h3>
                <p>Discover the history of the Aceh Sultanate and its influence in the region.</p>
                <a href="{{ route('articles.index') }}">READ ARTICLE ↗</a>
            </div>
        </article>

        <article class="article-card">
            <div class="article-image">
                <img src="{{ asset('assets/images/article-culture.jpg') }}" alt="Budaya Aceh">
            </div>
            <div class="article-info">
                <span>CULTURE</span>
                <h3>Understanding Acehnese Traditions</h3>
                <p>Explore the traditions and cultural values passed down through generations.</p>
                <a href="{{ route('articles.index') }}">READ ARTICLE ↗</a>
            </div>
        </article>

        <article class="article-card">
            <div class="article-image">
                <img src="{{ asset('assets/images/article-heritage.jpg') }}" alt="Warisan Aceh">
            </div>
            <div class="article-info">
                <span>HERITAGE</span>
                <h3>Preserving Aceh's Cultural Heritage</h3>
                <p>Learn why preserving historical objects and cultural heritage matters.</p>
                <a href="{{ route('articles.index') }}">READ ARTICLE ↗</a>
            </div>
        </article>
    </div>

    <div class="articles-footer">
        <a href="{{ route('articles.index') }}">EXPLORE ALL ARTICLES ↗</a>
    </div>
</section>


<!-- ABOUT MEMORA -->
<section class="about-section">
    <div class="about-image">
        <img src="{{ asset('assets/images/about-memora.jpg') }}" alt="Warisan budaya Aceh">
        <div class="about-image-label">
            <span>MEMORA</span>
            <small>Preserving Heritage, Inspiring Generations</small>
        </div>
    </div>

    <div class="about-content">
        <div class="intro-label">
            <span></span> ABOUT MEMORA
        </div>

        <h2>Every Heritage Has a <span>Story to Tell.</span></h2>

        <p>
            MEMORA is a digital museum platform dedicated to introducing,
            documenting, and preserving the historical and cultural heritage
            of Aceh.
        </p>

        <p>
            Through digital collections, virtual exhibition rooms, articles,
            and historical timelines, MEMORA invites everyone to explore
            the stories behind Aceh's rich heritage.
        </p>

        <a href="{{ route('about') }}" class="about-link">
            LEARN MORE ABOUT US <span>↗</span>
        </a>
    </div>
</section>

<!-- CLOSING SECTION -->
<section class="closing-section">
    <div class="closing-content">
        <span>EXPLORE • DISCOVER • PRESERVE</span>

        <h2>Heritage Lives On<br>Through <em>Every Story.</em></h2>

        <p>
            Step into the past, discover the present, and help preserve
            the heritage of Aceh for future generations.
        </p>

        <a href="{{ route('collections.index') }}">
            BEGIN YOUR JOURNEY <span>↗</span>
        </a>
    </div>
</section>

@endsection