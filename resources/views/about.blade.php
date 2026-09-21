<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Learn about VaultEdge — our story, team, mission, and values.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us — VaultEdge</title>
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}">
</head>
<body>
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>
    
    @include('partials.nav')

    <section class="ve-page-hero" style="background-image:url({{ asset('img/bg-img/13.jpg') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Notre histoire</span>
            <h1>Au service du numérique depuis <span>1999</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="active">A propos</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ABOUT SPLIT -->
    <section class="ve-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="ve-about-img-stack">
                        <div class="ve-about-img-1 bg-img" style="background-image:url({{ asset('img/bg-img/14.jpg') }});"></div>
                        <div class="ve-about-img-2 bg-img" style="background-image:url({{ asset('img/bg-img/5.jpg') }});"></div>
                        <div class="ve-about-ribbon"><strong>25+</strong><span>Ans d'expertise</span></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-about-text">
                        <span class="ve-section-tag">Qui sommes-nous</span>
                        <h2>Une entreprise bâtie sur l'<span>Expertise</span> et la Confiance</h2>
                        <p class="ve-lead">Nous sommes une équipe d'ingénieurs, de consultants et de spécialistes du numérique dédiée à accompagner la transformation digitale des organisations en Afrique de l'Ouest.</p>
                        <p>Fondée à Ouagadougou en 1999, HORINFO a commencé avec une mission simple : rendre les technologies de l'information accessibles et fiables pour les institutions et entreprises locales. Aujourd'hui, nous accompagnons des organisations internationales telles que la Banque mondiale, le PNUD, l'Union européenne et l'USAID.</p>
                        <div class="ve-about-features">
                            <div class="ve-af-item"><i class="fa fa-check"></i><span>Plus de 25 ans d'expertise IT en Afrique de l'Ouest</span></div>
                            <div class="ve-af-item"><i class="fa fa-check"></i><span>Partenaire de confiance d'institutions internationales</span></div>
                            <div class="ve-af-item"><i class="fa fa-check"></i><span>Équipe pluridisciplinaire : développement, marketing, conseil, formation</span></div>
                            <div class="ve-af-item"><i class="fa fa-check"></i><span>Approche sur mesure, adaptée à chaque client</span></div>
                        </div>
                        <a href="{{ route('services') }}" class="ve-btn-primary mt-30">Voir nos Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSION / VISION / VALUES -->
    <section class="ve-mvv-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Notre Foundation</span>
                <h2>Mission, Vision &amp; <span>Valeurs</span></h2>
            </div>
            <div class="ve-mvv-grid">
                <div class="ve-mvv-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-mvv-icon"><i class="fa fa-bullseye"></i></div>
                    <h4>Notre Mission</h4>
                    <p>Démocratiser l'accès à des solutions numériques fiables et sur mesure, pour accompagner la croissance des organisations que nous servons.</p>
                </div>
                <div class="ve-mvv-card wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-mvv-icon"><i class="fa fa-eye"></i></div>
                    <h4>Notre Vision</h4>
                    <p>Devenir la référence des services IT en Afrique de l'Ouest, reconnue pour son exigence technique et son engagement client.</p>
                </div>
                <div class="ve-mvv-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-mvv-icon"><i class="fa fa-heart"></i></div>
                    <h4>Nos Valeurs</h4>
                    <p>Rigueur, proximité client, innovation continue, transparence.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section class="ve-section ve-team-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Meet the Experts</span>
                <h2>Our Leadership <span>Team</span></h2>
                <p>Seasoned professionals with decades of combined experience across global financial markets.</p>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url({{ asset('img/bg-img/15.jpg') }});"></div>
                        <div class="ve-team-info">
                            <h5>Jordan Hayes</h5><span>Chief Executive Officer</span>
                            <div class="ve-team-social"><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url({{ asset('img/bg-img/16.jpg') }});"></div>
                        <div class="ve-team-info">
                            <h5>Taylor Brooks</h5><span>Chief Investment Officer</span>
                            <div class="ve-team-social"><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url({{ asset('img/bg-img/17.jpg') }});"></div>
                        <div class="ve-team-info">
                            <h5>Morgan Lane</h5><span>Head of Wealth Planning</span>
                            <div class="ve-team-social"><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url({{ asset('img/bg-img/18.jpg') }});"></div>
                        <div class="ve-team-info">
                            <h5>Casey Rivera</h5><span>Head of Risk &amp; Compliance</span>
                            <div class="ve-team-social"><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ve-counter-section">
        <div class="container">
            <div class="ve-counter-grid">
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="100ms">
                    <i class="fa fa-users"></i>
                    <strong class="counter" data-count="50000">0</strong><span>+</span>
                    <p>Happy Clients</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="200ms">
                    <i class="fa fa-briefcase"></i>
                    <strong class="counter" data-count="4200">0</strong><span>M+</span>
                    <p>Assets Managed</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="300ms">
                    <i class="fa fa-globe"></i>
                    <strong class="counter" data-count="30">0</strong><span>+</span>
                    <p>Countries Served</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="400ms">
                    <i class="fa fa-trophy"></i>
                    <strong class="counter" data-count="18">0</strong><span></span>
                    <p>Industry Awards</p>
                </div>
            </div>
        </div>
    </section>
    <section class="ve-newsletter-section">
        <div class="container">
            <div class="ve-newsletter-wrap">
                <div class="ve-nl-left">
                    <i class="fa fa-envelope-o"></i>
                    <div>
                        <h3>Stay Ahead of the Markets</h3>
                        <p>Weekly insights, tips, and exclusive offers — straight to your inbox.</p>
                    </div>
                </div>
                <div class="ve-nl-right">
                    <form class="ve-nl-form" action="#" method="post">
                        <input type="email" placeholder="Enter your email address" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script src="{{ asset('js/vaultedge.js') }}"></script>
</body>
</html>