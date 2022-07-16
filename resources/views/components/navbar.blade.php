<nav>
    <div class="container navbar-container">
        <section class="navbar-header">
        <div class="navbar-header-container">
            <a href="{{ route("home")}}">
            <img src="{{ asset("images/Logo.png") }}" alt="ANIDA logo">
            </a>
        </div>
        </section>
        <section class="navbar-menu">
        <ul class="navbar-menu-list">
            <li class="navbar-menu-item">
            <a href="{{ route("home") }}">Home</a>
            </li>
            <li class="navbar-menu-item">
            <a href="{{ route("about") }}">About Us</a>
            </li>
        </ul>
        </section>
        <section class="navbar-hamburger">
        <button class="navbar-hamburger-btn">
            <span class="hamburger-bar1"></span>
            <span class="hamburger-bar1"></span>
            <span class="hamburger-bar1"></span>
        </button>
        </section>
    </div>
</nav>