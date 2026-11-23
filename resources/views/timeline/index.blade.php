
@extends('layouts.app')

@section('title', 'Historical Timeline | MEMORA')

@section('content')

<!-- TIMELINE HERO -->
<section class="timeline-hero">
    <div class="timeline-hero-content">
        <span class="section-subtitle">A JOURNEY THROUGH TIME</span>
        <h1>The Historical Timeline of Aceh</h1>
        <p>
            Explore the remarkable journey of Aceh through centuries
            of history, culture, struggles, and achievements.
        </p>
    </div>
</section>

<!-- TIMELINE INTRO -->
<section class="timeline-intro">
    <span class="section-subtitle">THE LEGACY OF ACEH</span>
    <h2>Centuries of Stories, One Timeless Heritage</h2>
    <p>
        From the rise of powerful kingdoms to the preservation of
        cultural identity, every period has shaped the history
        and character of Aceh.
    </p>
</section>

<!-- HISTORICAL TIMELINE -->
<section class="historical-timeline">

    <div class="timeline-line"></div>

    <!-- 1 -->
    <div class="timeline-item">
        <div class="timeline-year">1205</div>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
            <span class="timeline-category">EARLY ISLAMIC KINGDOM</span>
            <h3>The Rise of Samudera Pasai</h3>
            <p>
                Samudera Pasai emerged as one of the earliest
                Islamic sultanates in Southeast Asia. Its position
                along major maritime routes helped establish Aceh
                as an important center of Islamic learning and trade.
            </p>
        </div>
    </div>

    <!-- 2 -->
    <div class="timeline-item reverse">
        <div class="timeline-year">1496</div>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
            <span class="timeline-category">THE SULTANATE</span>
            <h3>The Establishment of the Aceh Sultanate</h3>
            <p>
                The Aceh Sultanate began to rise as a significant
                political and maritime power. Its strategic location
                made it an important center for regional trade.
            </p>
        </div>
    </div>

    <!-- 3 -->
    <div class="timeline-item">
        <div class="timeline-year">1607–1636</div>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
            <span class="timeline-category">GOLDEN AGE</span>
            <h3>The Reign of Sultan Iskandar Muda</h3>
            <p>
                Under Sultan Iskandar Muda, Aceh reached one of
                its greatest periods of political, economic,
                and cultural influence. Trade and diplomatic
                relations expanded across the region.
            </p>
        </div>
    </div>

    <!-- 4 -->
    <div class="timeline-item reverse">
        <div class="timeline-year">1873</div>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
            <span class="timeline-category">COLONIAL RESISTANCE</span>
            <h3>The Beginning of the Aceh War</h3>
            <p>
                The Dutch launched a military expedition against
                Aceh, beginning a long period of resistance.
                The people of Aceh fought to defend their land
                and independence.
            </p>
        </div>
    </div>

    <!-- 5 -->
    <div class="timeline-item">
        <div class="timeline-year">1908</div>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
            <span class="timeline-category">HISTORICAL STRUGGLE</span>
            <h3>The Legacy of Aceh's Resistance</h3>
            <p>
                Although colonial military campaigns continued,
                resistance remained an important part of Aceh's
                historical identity. Its legacy lives on through
                stories of courage and determination.
            </p>
        </div>
    </div>

    <!-- 6 -->
    <div class="timeline-item reverse">
        <div class="timeline-year">1945</div>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
            <span class="timeline-category">INDEPENDENCE</span>
            <h3>Indonesia's Independence</h3>
            <p>
                Indonesia proclaimed its independence on
                17 August 1945. Aceh became part of the newly
                independent Republic of Indonesia.
            </p>
        </div>
    </div>

    <!-- 7 -->
    <div class="timeline-item">
        <div class="timeline-year">2004</div>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
            <span class="timeline-category">A NEW CHAPTER</span>
            <h3>The Indian Ocean Tsunami</h3>
            <p>
                On 26 December 2004, a devastating tsunami struck
                Aceh. The disaster profoundly affected its people,
                communities, and historical landscape.
            </p>
        </div>
    </div>

    <!-- 8 -->
    <div class="timeline-item reverse">
        <div class="timeline-year">2005</div>
        <div class="timeline-dot"></div>
        <div class="timeline-card">
            <span class="timeline-category">PEACE AND RECONSTRUCTION</span>
            <h3>The Helsinki Peace Agreement</h3>
            <p>
                The peace agreement signed on 15 August 2005
                marked an important turning point in Aceh's
                journey toward peace and reconstruction.
            </p>
        </div>
    </div>

</section>

<!-- CLOSING -->
<section class="timeline-closing">
    <span class="section-subtitle">PRESERVING THE PAST</span>
    <h2>History Lives Through Every Story</h2>
    <p>
        Every chapter of Aceh's history deserves to be remembered,
        explored, and passed on to future generations.
    </p>
    <a href="{{ route('articles.index') }}" class="timeline-button">
        Explore Historical Stories →
    </a>
</section>

@endsection
