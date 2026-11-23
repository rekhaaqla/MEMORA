
<header class="navbar">
    <div class="nav-container">

        <a href="{{ route('home') }}" class="logo">
            <span class="logo-icon">M.</span>
            <span class="logo-text">
                MEMORA
                <small>VIRTUAL MUSEUM OF ACEH</small>
            </span>
        </a>

        <button class="menu-toggle" id="menuToggle"
                aria-label="Buka menu"
                aria-expanded="false">
            ☰
        </button>

        <nav class="nav-menu" id="navMenu">

            <a href="{{ route('home') }}"
               class="{{ request()->routeIs('home') ? 'active' : '' }}">
                Home
            </a>

            <a href="{{ route('collections.index') }}"
               class="{{ request()->routeIs('collections.*') ? 'active' : '' }}">
                Collections
            </a>

            <a href="{{ route('museum.index') }}"
               class="{{ request()->routeIs('museum.*') ? 'active' : '' }}">
                Virtual Museum
            </a>

            <a href="{{ route('articles.index') }}"
               class="{{ request()->routeIs('articles.*') ? 'active' : '' }}">
                Articles
            </a>

            <a href="{{ route('timeline.index') }}"
               class="{{ request()->routeIs('timeline.*') ? 'active' : '' }}">
                Timeline
            </a>

            <a href="{{ route('about') }}"
               class="{{ request()->routeIs('about') ? 'active' : '' }}">
                About
            </a>

        </nav>

    </div>
</header>