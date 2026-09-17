<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="VaultEdge - Premium financial planning and investment management HTML template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>VaultEdge - Financial Planning &amp; Investment HTML Template</title>

    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>

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
                    <li><a href="{{ route('home') }}" class="active">Accueil</a></li>
                    <li class="has-drop">
                        <a href="{{ route('about') }}">Services <i class="fa fa-angle-down"></i></a>
                        <ul class="ve-dropdown">
                            <li><a href="{{ route('about') }}">Solutions</a></li>
                            <li><a href="{{ route('services') }}">Our Services</a></li>
                            <li><a href="{{ route('elements') }}">UI Elements</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('services') }}">projets</a></li>
                    <li class="has-drop">
                        <a href="#">Blog <i class="fa fa-angle-down"></i></a>
                        <ul class="ve-dropdown">
                            <li><a href="#">Management</a></li>
                            <li><a href="#">Technologie</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Developpement</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('post.index') }}">l'entreprise</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
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

    <!-- ===== HERO: Split layout — left text, right image panel ===== -->
    <section class="ve-hero">
        <!-- Left Panel -->
        <div class="ve-hero-left">
            <span class="ve-hero-badge">Partenaire IT &nbsp;·&nbsp; Depuis 1999</span>
            <h1>Tansformez vos idées en <br><span class="ve-highlight">réalité numérique</span></h1>
            <p>Solutios logiciellles sur mesure, plateformes web innovantes et stratégie digitale pour propulser votre entreprise. Expertise africaine, stanqarts internationaux.</p>
            <div class="ve-hero-btns">
                <a href="{{ route('services') }}" class="ve-btn-primary">Prendre rendez-vous</a>
                <a href="{{ route('about') }}" class="ve-btn-ghost">Découvrir nos services</a>
            </div>
            <!-- Quick Stats Row -->
            <div class="ve-hero-stats">
                <div class="ve-stat">
                    <strong>$4.2B+</strong>
                    <span>Assets Managed</span>
                </div>
                <div class="ve-stat-divider"></div>
                <div class="ve-stat">
                    <strong>97%</strong>
                    <span>Client Satisfais</span>
                </div>
                <div class="ve-stat-divider"></div>
                <div class="ve-stat">
                    <strong>25+</strong>
                    <span>Années d'expérience</span>
                </div>
            </div>
        </div>
        <!-- Right Panel: overlapping image cards -->
        <div class="ve-hero-right">
            <div class="ve-hero-img-main bg-img" style="background-image:url({{ asset('img/bg-img/Image\ 1.png') }});"></div>
            <div class="ve-hero-img-accent bg-img" style="background-image:url({{ asset('img/bg-img/3.jpg') }});"></div>
            <!-- Floating card -->
            <div class="ve-float-card">
                <i class="fa fa-line-chart"></i>
                <div>
                    <strong>+18.4%</strong>
                    <span>Annual Returns</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== MARQUEE TRUST BAR ===== -->
    <div class="ve-trust-bar">
        <div class="ve-trust-inner">
            <span><i class="fa fa-shield"></i> Bank-Grade Security</span>
            <span><i class="fa fa-check-circle"></i> SEC Registered</span>
            <span><i class="fa fa-users"></i> 50,000+ Clients Worldwide</span>
            <span><i class="fa fa-lock"></i> 256-bit Encryption</span>
            <span><i class="fa fa-trophy"></i> Award Winning Advisory</span>
            <span><i class="fa fa-globe"></i> 30+ Countries Served</span>
            <span><i class="fa fa-shield"></i> Bank-Grade Security</span>
            <span><i class="fa fa-check-circle"></i> SEC Registered</span>
            <span><i class="fa fa-users"></i> 50,000+ Clients Worldwide</span>
            <span><i class="fa fa-lock"></i> 256-bit Encryption</span>
        </div>
    </div>

    <!-- ===== SERVICES GRID (new card layout) ===== -->
    <section class="ve-section ve-services-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">NOS DOMAINES D'INTERVENTION</span>
                <h2>Nos solutions informatique <span>Complète et Evolutive</span></h2>
                <p>Nous vous accompagnons dans la réalisation complète de vos projets</p>
            </div>
            <div class="ve-services-grid">
                <div class="ve-service-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-service-icon"><i class="fa fa-code"></i></div>
                    <h4>DIL</h4>
                    <p>Département Ingénierie Logicielle — conception et développement de solutions logicielles sur mesure.</p>
                    <a href="{{ route('services') }}" class="ve-card-link">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-service-icon"><i class="fa fa-bullhorn"></i></div>
                    <h4>DMD</h4>
                    <p>Département Marketing Digital — stratégie, communication et présence digitale pour votre marque.</p>
                    <a href="{{ route('services') }}" class="ve-card-link">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-service-icon"><i class="fa fa-handshake-o"></i></div>
                    <h4>DMC</h4>
                    <p>Département Marketing Commercial — développement commercial et relation client.</p>
                    <a href="{{ route('services') }}" class="ve-card-link">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY US (two-column: image left, content right) ===== -->
    <section class="ve-section ve-whyus-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Side -->
                <div class="col-12 col-lg-5">
                    <div class="ve-whyus-img-wrap wow fadeInLeft" data-wow-delay="100ms">
                        <div class="ve-whyus-img-main bg-img" style="background-image:url({{ asset('img/bg-img/5.jpg') }});"></div>
                        <div class="ve-whyus-badge">
                            <strong>25+</strong>
                            <span>Années d'excelence technologique au Burkina Faso et en Afrique</span>
                        </div>
                    </div>
                </div>
                <!-- Content Side -->
                <div class="col-12 col-lg-7 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-whyus-content">
                        <span class="ve-section-tag">Pourquoi choisir HORINFO</span>
                        <h2>Une Approche Stratégique pour <span>Vos Défis Technologiques</span></h2>
                        <p>Depuis 1999, nous combinons expertise technique et proximité client pour livrer des solutions qui répondent vraiment à vos besoins — au Burkina Faso et à l'international.</p>
                        <div class="ve-check-item">
                            <i class="fa fa-check-circle"></i>
                            <div><strong>Accompagnement Sur-Mesure</strong><p>Des solutions logicielles conçues et développées selon vos besoins réels, pas des produits standardisés.</p></div>
                        </div>
                        <div class="ve-check-item">
                            <i class="fa fa-check-circle"></i>
                            <div><strong>Infrastructures & Sécurité</strong><p>Une expertise dédiée en Cloud Computing, infrastructures systèmes, réseau et télécommunications.</p></div>
                        </div>
                        <div class="ve-check-item">
                            <i class="fa fa-check-circle"></i>
                            <div><strong>Confiance Institutionnelle</strong><p>La confiance d'organisations exigeantes comme la Banque Mondiale, le PNUD, l'Union Européenne et l'USAID.</p></div>
                        </div>
                        <a href="{{ route('about') }}" class="ve-btn-primary mt-30">Explorez notre historique et nos valeurs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== COUNTERS ===== -->
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

    <!-- ===== TESTIMONIALS ===== -->
    <section class="ve-section ve-testimonials-section">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">Ils Nous Font Confiance</span>
            <h2>Des Références Publiques et <span>Internationales Majeures</span></h2>
        </div>
    </div>

    <div class="ve-partners-marquee">
        <div class="ve-partners-track">
            <div class="ve-partner-card"><img src="{{ asset('img/clients/banque_mondiale.png') }}" alt="Banque Mondiale"><span>Banque Mondiale</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/pnud.png') }}" alt="PNUD"><span>PNUD</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/union_europeenne.png') }}" alt="Union Européenne"><span>Union Européenne</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/usaid.png') }}" alt="USAID"><span>USAID</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/cnss.png') }}" alt="CNSS"><span>CNSS</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/arcep.png') }}" alt="ARCEP"><span>ARCEP</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/institut_elevage.png') }}" alt="Institut Élevage"><span>Institut Élevage</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/expertise_france.png') }}" alt="Expertise France"><span>Expertise France</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/armoirie_du_burkina.png') }}" alt="Burkina Faso"><span>Burkina Faso</span></div>
            <!-- dupliqué pour la boucle continue -->
            <div class="ve-partner-card"><img src="{{ asset('img/clients/banque_mondiale.png') }}" alt="Banque Mondiale"><span>Banque Mondiale</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/pnud.png') }}" alt="PNUD"><span>PNUD</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/union_europeenne.png') }}" alt="Union Européenne"><span>Union Européenne</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/usaid.png') }}" alt="USAID"><span>USAID</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/cnss.png') }}" alt="CNSS"><span>CNSS</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/arcep.png') }}" alt="ARCEP"><span>ARCEP</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/institut_elevage.png') }}" alt="Institut Élevage"><span>Institut Élevage</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/expertise_france.png') }}" alt="Expertise France"><span>Expertise France</span></div>
            <div class="ve-partner-card"><img src="{{ asset('img/clients/armoirie_du_burkina.png') }}" alt="Burkina Faso"><span>Burkina Faso</span></div>
        </div>
    </div>
</section>

    <!-- ===== CTA BANNER ===== -->
    <section class="ve-cta-banner bg-img" style="background-image:url({{ asset('img/bg-img/horinfo-house.jpeg') }});">
        <div class="ve-cta-overlay"></div>
        <div class="container ve-cta-content">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <h2>Prêt à Moderniser <span>Votre Système d'Information?</span></h2>
                    <p>Échangeons autour de vos besoins IT — 30 minutes suffisent pour poser les bases de votre projet.</p>
                </div>
                <div class="col-12 col-lg-4 text-lg-right">
                    <a href="{{ route('contact') }}" class="ve-btn-white">Prendre Rendez-Vous</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== LATEST INSIGHTS ===== -->
    <section class="ve-section ve-insights-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Blog &amp; News</span>
                <h2>Actualités & <span>Insights technologiques</span></h2>
                <p>Restez informé grâce à nos analyses, conseils et actualités sur les technologies et les solutions numériques.</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/10.jpg') }});"></div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Investment</span>
                            <h5><a href="{{ route('post.show') }}">5 Smart Investment Strategies for 2025</a></h5>
                            <p>Discover the top strategies seasoned investors are using to grow wealth in volatile markets.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 26</span>
                                <a href="{{ route('post.show') }}">Lire plus <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/11.jpg') }});"></div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Credit</span>
                            <h5><a href="{{ route('post.show') }}">Understanding Your Credit Score in 2025</a></h5>
                            <p>Learn the key factors that influence your credit score and how to improve it fast.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 20</span>
                                <a href="{{ route('post.show') }}">Lire plus <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/12.jpg') }});"></div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Savings</span>
                            <h5><a href="{{ route('post.show') }}">Building Wealth in Your 30s — A Full Guide</a></h5>
                            <p>The financial habits and investment moves that set you up for lifelong prosperity.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 14</span>
                                <a href="{{ route('post.show') }}">Lire plus <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== NEWSLETTER ===== -->
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

    <!-- ===== FOOTER (dark, 4-column) ===== -->
    <footer class="ve-footer">
        <div class="container">
            <div class="row">
                <!-- Col 1: Brand -->
                <div class="col-12 col-sm-6 col-lg-4 mb-50">
                    <div class="ve-footer-brand">
                        <a href="{{ route('home') }}" class="ve-footer-logo">
                            <span class="ve-logo-icon">V</span>
                            <span class="ve-logo-text">Vault<strong>Edge</strong></span>
                        </a>
                        <p>Empowering individuals and businesses with intelligent financial strategies since 2012.</p>
                        <div class="ve-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Col 2: Quick Links -->
                <div class="col-12 col-sm-6 col-lg-2 mb-50">
                    <h5 class="ve-footer-title">Quick Links</h5>
                    <ul class="ve-footer-links">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('post.index') }}">Insights</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <!-- Col 3: Services -->
                <div class="col-12 col-sm-6 col-lg-3 mb-50">
                    <h5 class="ve-footer-title">Our Services</h5>
                    <ul class="ve-footer-links">
                        <li><a href="#">Investment Planning</a></li>
                        <li><a href="#">Wealth Management</a></li>
                        <li><a href="#">Retirement Plans</a></li>
                        <li><a href="#">Tax Advisory</a></li>
                        <li><a href="#">Risk Management</a></li>
                    </ul>
                </div>
                <!-- Col 4: Contact -->
                <div class="col-12 col-sm-6 col-lg-3 mb-50">
                    <h5 class="ve-footer-title">Get In Touch</h5>
                    <ul class="ve-footer-contact">
                        <li><i class="fa fa-map-marker"></i> 42 Harbor View, San Francisco, CA</li>
                        <li><i class="fa fa-phone"></i> +1 800 555 0199</li>
                        <li><i class="fa fa-envelope"></i> hello@vaultedge.com</li>
                        <li><i class="fa fa-clock-o"></i> Mon–Fri, 9am – 6pm</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="ve-footer-bottom">
            <div class="container">
                <div class="ve-footer-bottom-inner">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> VaultEdge. All Rights Reserved <a href="https://github.com/Rabina-Vishwakarma/" class="text-white" target="_blank">Rabina Vishwakarma</a> • Distributed by <a href="https://themewagon.com" class="text-white" target="_blank">ThemeWagon</a></p>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script src="{{ asset('js/vaultedge.js') }}"></script>
</body>
</html>
