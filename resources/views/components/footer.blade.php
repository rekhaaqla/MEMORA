
<footer class="footer">

    <div class="footer-container">

        <div class="footer-brand">
            <h2>MEMORA<span>.</span></h2>

            <p>
                Preserving the past, inspiring the future.
                Discover the rich history and cultural heritage
                of Aceh through a digital museum experience.
            </p>
        </div>

        <div class="footer-links">
            <h3>Explore</h3>

            <a href="{{ route('collections.index') }}">Collections</a>
            <a href="{{ route('museum.index') }}">Virtual Museum</a>
            <a href="{{ route('articles.index') }}">Articles</a>
            <a href="{{ route('timeline.index') }}">Timeline</a>
        </div>

        <div class="footer-links">
            <h3>Discover</h3>

            <a href="{{ route('about') }}">About MEMORA</a>
            <a href="{{ route('home') }}">Home</a>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© {{ date('Y') }} MEMORA - Virtual Museum of Aceh.</p>
        <p>Preserving Aceh's Heritage.</p>
    </div>

</footer>