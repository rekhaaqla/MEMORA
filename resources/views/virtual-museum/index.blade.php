
@extends('layouts.app')

@section('title', 'Virtual Museum | MEMORA')

@section('content')

<!-- HERO -->
<section class="museum-hero">
    <div class="museum-hero-content">
        <span>MEMORA DIGITAL MUSEUM</span>
        <h1>Explore the Museum<br>of Aceh Heritage</h1>
        <p>
            Discover the history, culture, and heritage of Aceh
            through an interactive digital museum experience.
        </p>
        <a href="#virtual-tour" class="museum-btn">
            Start Exploring
        </a>
    </div>
</section>


<!-- INTRODUCTION -->
<section class="museum-intro">
    <div class="museum-intro-content">
        <span class="section-subtitle">VIRTUAL EXPERIENCE</span>
        <h2>Welcome to MEMORA Virtual Museum</h2>
        <p>
            MEMORA offers a digital journey through the historical
            and cultural heritage of Aceh. Visitors can discover
            various historical artifacts and cultural treasures
            through interactive virtual exhibition spaces.
        </p>
    </div>
</section>


<!-- ROOM COLLECTION -->
<section class="museum-rooms">
    <div class="museum-section-heading">
        <span class="section-subtitle">EXPLORE THE ROOMS</span>
        <h2>Museum Exhibition Rooms</h2>
        <p>Explore Our Exhibition Rooms</p>
    </div>

    <div class="museum-room-grid">

        <div class="museum-room-card">
            <img src="{{ asset('assets/images/room-history.jpg') }}"
                 alt="History">
            <div class="museum-room-info">
                <h3>Historical Room</h3>
                <p>
                    Discover the historical journey and glorious
                    legacy of the Aceh Darussalam Sultanate.
                </p>
            </div>
        </div>

        <div class="museum-room-card">
            <img src="{{ asset('assets/images/room-culture.jpg') }}"
                 alt="Culture">
            <div class="museum-room-info">
                <h3>Cultural Room</h3>
                <p>
                    Explore the traditions, arts, and cultural
                    identity of the Acehnese people.
                </p>
            </div>
        </div>

        <div class="museum-room-card">
            <img src="{{ asset('assets/images/room-manuscript.jpg') }}"
                 alt="Manuscript">
            <div class="museum-room-info">
                <h3>Manuscript Room</h3>
                <p>
                    Discover ancient manuscripts and valuable
                    knowledge preserved from the past.
                </p>
            </div>
        </div>

    </div>
</section>


<!-- 360 VIRTUAL TOUR -->
<section class="virtual-tour-section" id="virtual-tour">

    <div class="virtual-tour-heading">
        <span class="section-subtitle">360° VIRTUAL TOUR</span>
        <h2>Museum Room Tour</h2>
        <p>
            Drag the image to explore the museum room
            from different angles. Click the information
            markers to discover the history of Aceh.
        </p>
    </div>

    <div class="tour-room-label">
        Aceh Historical Exhibition
    </div>

    <div class="museum-tour-layout">

        <!-- PANORAMA VIEWER -->
        <div class="museum-tour-main">
            <div id="historicalTour" class="panorama-viewer"></div>

            <p class="tour-instruction">
                Drag to look around, scroll to zoom in or out,
                and select the information markers to explore.
            </p>
        </div>

        <!-- INFORMATION PANEL -->
        <aside class="museum-info-panel">

            <span class="section-subtitle">
                HISTORICAL COLLECTION
            </span>

            <h3 id="infoTitle">
                Welcome to Historical Room
            </h3>

            <p id="infoDescription">
                Discover the remarkable history of Aceh,
                a region known for its powerful sultanate,
                maritime influence, and rich cultural heritage.
            </p>

            <div class="museum-info-divider"></div>

            <div id="infoDetail">
                <p>
                    Explore the stories behind the rise of
                    the Aceh Sultanate, the reign of great
                    rulers, international trade, historical
                    landmarks, and the struggles of Acehnese
                    heroes.
                </p>

                <p>
                    Each information marker reveals a
                    different chapter of Aceh's history,
                    helping visitors understand the events
                    and people that shaped its identity.
                </p>
            </div>

            <div class="museum-info-footer">
                <span>MEMORA DIGITAL MUSEUM</span>
            </div>

        </aside>

    </div>

</section>

<!-- CLOSING -->
<section class="museum-closing">
    <h2>History Is Our Heritage</h2>
    <p>
        Explore, learn, and preserve the rich history
        and cultural heritage of Aceh with MEMORA.
    </p>
</section>


<!-- PANNELLUM LIBRARY -->
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css">

<script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>

@endsection