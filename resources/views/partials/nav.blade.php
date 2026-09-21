<!-- ===== NAVBAR (single dark bar, logo left, nav center, CTA right) ===== -->
    <header class="ve-header" id="ve-sticky">
        <div class="container-fluid ve-nav-wrap">
            <!-- Logo -->
            <div class="ve-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/bg-img/logo.png') }}" alt="HORINFO" class="ve-logo-img">
                    <span class="ve-logo-text">HOR<strong>INFO</strong></span>
                </a>
            </div>

            <!-- Nav Links -->
            <nav class="ve-nav">
                <ul>
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a></li>
                    <li class="has-drop">
                        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">L'entreprise <i class="fa fa-angle-down"></i></a>
                        <ul class="ve-dropdown">
                            <li><a href="{{ route('about') }}">A propos de nous</a></li>
                            <li><a href="{{ route('services') }}">Nos Services</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                    <li class="has-drop">
                        <a href="#">Solutions <i class="fa fa-angle-down"></i></a>
                        <ul class="ve-dropdown">
                            <li><a href="#">Management</a></li>
                            <li><a href="#">Technologie</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Developpement</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('post.index') }}" class="{{ request()->routeIs('post.index') ? 'active' : '' }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
            </nav>

            <!-- CTA -->
            <div class="ve-nav-cta">
                <a href="{{ route('contact') }}" class="ve-cta-btn">Prendre un rendez-vous<i class="fa fa-arrow-right"></i></a>
            </div>

            <!-- Mobile Toggle -->
            <button class="ve-toggler" id="ve-toggle">
                <span></span><span></span><span></span>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="ve-mobile-menu" id="ve-mobile-menu">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="#">Solutions</a></li>
                <li><a href="{{ route('post.index') }}">Insights</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </header>