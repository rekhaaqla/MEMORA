

document.addEventListener('DOMContentLoaded', function () {

    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');
    const navLinks = document.querySelectorAll('#navMenu a');

    if (menuToggle && navMenu) {

        // Open and close mobile menu
        menuToggle.addEventListener('click', function () {

            const isOpen = navMenu.classList.toggle('show');

            menuToggle.setAttribute('aria-expanded', isOpen);
            menuToggle.innerHTML = isOpen ? '&times;' : '&#9776;';

        });

        // Close menu after selecting a page
        navLinks.forEach(link => {

            link.addEventListener('click', function () {

                navMenu.classList.remove('show');

                menuToggle.setAttribute('aria-expanded', 'false');
                menuToggle.innerHTML = '&#9776;';

            });

        });

    }

});

/* COLLECTION SEARCH AND FILTER */
const collectionSearch = document.getElementById('collectionSearch');
const filterButtons = document.querySelectorAll('.filter-btn');
const collectionCards = document.querySelectorAll('.collection-card');
const collectionEmpty = document.getElementById('collectionEmpty');

if (collectionSearch && collectionCards.length > 0) {
    let activeFilter = 'all';

    function filterCollections() {
        const keyword = collectionSearch.value.toLowerCase();
        let visibleCount = 0;

        collectionCards.forEach(card => {
            const category = card.dataset.category;
            const content = card.textContent.toLowerCase();

            const matchesCategory =
                activeFilter === 'all' || category === activeFilter;

            const matchesSearch = content.includes(keyword);

            if (matchesCategory && matchesSearch) {
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });

        collectionEmpty.style.display =
            visibleCount === 0 ? 'block' : 'none';
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            activeFilter = button.dataset.filter;
            filterCollections();
        });
    });

    collectionSearch.addEventListener('input', filterCollections);
}


/* COLLECTION EXPAND / COLLAPSE */

document.querySelectorAll('.collection-expand-btn').forEach(button => {

    button.addEventListener('click', function () {

        const card = this.closest('.collection-card');
        const isExpanded = card.classList.toggle('expanded');

        this.setAttribute('aria-expanded', isExpanded);

        this.textContent = isExpanded
            ? 'SHOW LESS ↑'
            : 'EXPLORE COLLECTION ↗';

    });

});

/* =================================
   MEMORA - 360 VIRTUAL TOUR
================================= */


function initializeHistoricalTour() {
    const tourElement = document.getElementById('historicalTour');

    if (!tourElement) return;

    // Tunggu sampai library Pannellum tersedia
    if (typeof window.pannellum === 'undefined') {
        console.error('Library Pannellum belum tersedia.');

        tourElement.innerHTML = `
            <p style="color:white; padding:20px;">
                Virtual Tour belum dapat dimuat.
                Periksa koneksi internet.
            </p>
        `;
        return;
    }

    if (tourElement.dataset.initialized === 'true') return;

    tourElement.dataset.initialized = 'true';

    window.pannellum.viewer('historicalTour', {
        type: 'equirectangular',
        panorama: '/assets/images/historical-room-360.png',

        autoLoad: true,
        autoRotate: 0,
        compass: false,

        mouseZoom: true,
        draggable: true,

        showZoomCtrl: true,
        showFullscreenCtrl: true,

        hfov: 100,
        minHfov: 50,
        maxHfov: 120,

        
hotSpots: [
    {
        pitch: -5,
        yaw: 0,
        type: "info",
        text: `
            <div class="hotspot-content">
                <span class="hotspot-category">HISTORICAL OVERVIEW</span>
                <h3>The Aceh Sultanate</h3>
                <small>Established in the 16th Century</small>
                <p>
                    The Sultanate of Aceh Darussalam was one of
                    the most influential Islamic kingdoms in
                    Southeast Asia. Located at the northern tip
                    of Sumatra, Aceh became an important center
                    of Islamic learning, diplomacy, and maritime
                    trade.
                </p>
                <p>
                    Its strategic location near the Strait of
                    Malacca allowed Aceh to develop strong
                    connections with merchants and kingdoms
                    from across Asia, the Middle East, and Europe.
                </p>
                <div class="hotspot-fact">
                    <strong>Did You Know?</strong>
                    <p>
                        Aceh played an important role in the
                        regional spice trade, especially in
                        the international pepper market.
                    </p>
                </div>
            </div>
        `
    },
    {
        pitch: -5,
        yaw: -60,
        type: "info",
        text: `
            <div class="hotspot-content">
                <span class="hotspot-category">GREAT LEADER</span>
                <h3>Sultan Iskandar Muda</h3>
                <small>Reign: 1607–1636</small>
                <p>
                    Sultan Iskandar Muda was one of the most
                    prominent rulers in Aceh's history.
                    During his reign, the sultanate experienced
                    significant political, economic, and
                    military development.
                </p>
                <p>
                    He strengthened royal authority, expanded
                    Aceh's influence, and supported the growth
                    of trade and Islamic scholarship.
                </p>
                <div class="hotspot-fact">
                    <strong>Historical Significance</strong>
                    <p>
                        His reign is widely regarded as a
                        remarkable period in the history of
                        the Aceh Sultanate.
                    </p>
                </div>
            </div>
        `
    },
    {
        pitch: -5,
        yaw: 60,
        type: "info",
        text: `
            <div class="hotspot-content">
                <span class="hotspot-category">MARITIME HISTORY</span>
                <h3>Trade and Maritime Power</h3>
                <small>16th–17th Century</small>
                <p>
                    Aceh developed into a major maritime
                    trading center because of its strategic
                    position along important international
                    shipping routes.
                </p>
                <p>
                    Pepper was one of its most valuable
                    commodities. Traders from different
                    regions visited Aceh to exchange goods,
                    knowledge, and cultural influences.
                </p>
                <div class="hotspot-fact">
                    <strong>Key Fact</strong>
                    <p>
                        The Strait of Malacca connected Aceh
                        to important commercial networks
                        across the Indian Ocean.
                    </p>
                </div>
            </div>
        `
    },
    {
        pitch: -5,
        yaw: 120,
        type: "info",
        text: `
            <div class="hotspot-content">
                <span class="hotspot-category">HISTORICAL LANDMARK</span>
                <h3>Baiturrahman Grand Mosque</h3>
                <small>A Symbol of Aceh</small>
                <p>
                    Baiturrahman Grand Mosque is one of the
                    most recognized historical landmarks in
                    Banda Aceh. It represents the religious,
                    cultural, and historical identity of
                    the Acehnese people.
                </p>
                <p>
                    The mosque is closely associated with
                    Aceh's history and became an important
                    symbol of resilience, especially during
                    the colonial period and the 2004 tsunami.
                </p>
                <div class="hotspot-fact">
                    <strong>Did You Know?</strong>
                    <p>
                        The mosque is admired for its
                        distinctive architecture and
                        beautiful domes.
                    </p>
                </div>
            </div>
        `
    },
    {
        pitch: -5,
        yaw: -120,
        type: "info",
        text: `
            <div class="hotspot-content">
                <span class="hotspot-category">STRUGGLE AND RESISTANCE</span>
                <h3>The Aceh War</h3>
                <small>Beginning in 1873</small>
                <p>
                    The Aceh War began in 1873 when the
                    Dutch colonial government launched a
                    military expedition against Aceh.
                    The conflict developed into a long
                    period of resistance.
                </p>
                <p>
                    Acehnese fighters continued to defend
                    their homeland through various forms
                    of resistance, making this conflict
                    an important chapter in Indonesian history.
                </p>
                <div class="hotspot-fact">
                    <strong>Historical Significance</strong>
                    <p>
                        The Aceh War became one of the
                        longest and most significant
                        colonial conflicts in the region.
                    </p>
                </div>
            </div>
        `
    },
    {
        pitch: -5,
        yaw: 180,
        type: "info",
        text: `
            <div class="hotspot-content">
                <span class="hotspot-category">CULTURAL HERITAGE</span>
                <h3>Historical Treasures of Aceh</h3>
                <small>Preserving the Past</small>
                <p>
                    Aceh preserves a rich collection of
                    historical heritage, including ancient
                    manuscripts, traditional weapons,
                    architectural landmarks, royal objects,
                    and cultural artifacts.
                </p>
                <p>
                    These objects provide valuable insights
                    into the knowledge, beliefs, traditions,
                    and daily lives of earlier generations.
                </p>
                <div class="hotspot-fact">
                    <strong>Why It Matters</strong>
                    <p>
                        Preserving historical objects helps
                        future generations understand and
                        appreciate Aceh's identity.
                    </p>
                </div>
            </div>
        `
    }
]

    });
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeHistoricalTour);
} else {
    initializeHistoricalTour();
}
