<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="VaultEdge blog — expert investment tips, market analysis, and wealth management guides.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Financial Insights — VaultEdge</title>
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}">
</head>
<body>
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>
    
    @include('partials.nav')

    <section class="ve-page-hero" style="background-image:url({{ asset('img/bg-img/24.jpg') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Blog</span><h1>Blog <span>Horinfo</span></h1>
            <nav aria-label="breadcrumb"><ol class="ve-breadcrumb"><li><a href="{{ route('home') }}">Home</a></li><li class="active">Insights</li></ol></nav>
        </div>
    </section>

    <section class="ve-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="100ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/10.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Développement</span><h5><a href="{{ route('post.show') }}">Comprendre le responsive design : une nécessité pour les entreprises</a></h5><p>Le responsive design est devenu un incontournable pour toute présence web professionnelle.</p><div class="ve-insight-meta"><span><i class="fa fa-calendar"></i> 2 septembre 2025</span><a href="{{ route('post.show') }}">Lire l'article <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="200ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/11.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Innovation</span><h5><a href="{{ route('post.show') }}">Horinfo au 7ᵉ Congrès du District 403-A3 — Une belle participation</a></h5><p>Nous avons eu le grand plaisir de participer à cet évènement majeur.</p><div class="ve-insight-meta"><span><i class="fa fa-calendar"></i> 2 septembre 2025</span><a href="{{ route('post.show') }}">Lire l'article <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="300ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/12.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Développement</span><h5><a href="{{ route('post.show') }}">Pourquoi votre portfolio est très essentiel sur votre CV</a></h5><p>Dans un monde où la compétition sur le marché de l'emploi ne cesse de croître...</p><div class="ve-insight-meta"><span><i class="fa fa-calendar"></i> 2 septembre 2025</span><a href="{{ route('post.show') }}">Lire l'article <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/23.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Innovation</span><h5><a href="{{ route('post.show') }}">Retour en images sur la participation de Horinfo à la [FIDIAS]</a></h5><p>Du 26 au 29 décembre 2024, la place...</p><div class="ve-insight-meta"><span><i class="fa fa-calendar"></i> 2 septembre 2025</span><a href="{{ route('post.show') }}">Lire l'article <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/25.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Management</span><h5><a href="{{ route('post.show') }}">Amidou Ouédraogo, PDG de HORINFO, présente ses vœux</a></h5><p>Amidou Ouédraogo, Président Directeur Général...</p><div class="ve-insight-meta"><span><i class="fa fa-calendar"></i> 2 septembre 2025</span><a href="{{ route('post.show') }}">Lire l'article <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="600ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/26.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Innovation</span><h5><a href="{{ route('post.show') }}">Semaine des bâtisseurs Douala 2024 : L'expertise de Horinfo</a></h5><p>Du 12 au 19 février 2024, une équipe de Horinfo, conduite par le Président Directeur général, a séjourné à Douala...</p><div class="ve-insight-meta"><span><i class="fa fa-calendar"></i> 2 septembre 2025</span><a href="{{ route('post.show') }}">Lire l'article <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="700ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/9.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Technologie</span><h5><a href="{{ route('post.show') }}">Trois outils numériques pour renforcer la gestion des finances publiques</a></h5><p>Dans le cadre du Programme d'Appui à la Gestion Publique et aux Statistiques (PAGPS), la Direction...</p><div class="ve-insight-meta"><span><i class="fa fa-calendar"></i> 16 septembre 2025</span><a href="{{ route('post.show') }}">Lire l'article <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="800ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/17.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Technologie</span><h5><a href="{{ route('post.show') }}">LinkedIn resserre la vis sur les publications générées par IA</a></h5><p>Si vous avez l'impression que votre fil LinkedIn se remplit de contenus générés automatiquement...</p><div class="ve-insight-meta"><span><i class="fa fa-calendar"></i> 16 septembre 2025</span><a href="{{ route('post.show') }}">Lire l'article <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                    </div>
                    <div class="ve-pagination"><a href="#" class="active">1</a><a href="#">2</a><a href="#">3</a><a href="#"><i class="fa fa-chevron-right"></i></a></div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="ve-sidebar">
                        <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Recherche</h5>
                            <div class="ve-search-box"><input type="text" placeholder="Rechercher un article..."><button><i class="fa fa-search"></i></button></div>
                        </div>
                        <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Catégories</h5>
                            <ul class="ve-cat-list">
                                <li><a href="#">Développement <span>2</span></a></li>
                                <li><a href="#">Innovation <span>3</span></a></li>
                                <li><a href="#">Management <span>1</span></a></li>
                                <li><a href="#">Technologie <span>2</span></a></li>
                            </ul>
                        </div>
                        <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Articles récents</h5>
                            <div class="ve-recent-post"><div class="ve-rp-img bg-img" style="background-image:url({{ asset('img/bg-img/17.jpg') }});"></div><div><a href="{{ route('post.show') }}">LinkedIn resserre la vis sur les publications générées par IA</a><span><i class="fa fa-calendar"></i> 16 septembre 2025</span></div></div>
                            <div class="ve-recent-post"><div class="ve-rp-img bg-img" style="background-image:url({{ asset('img/bg-img/9.jpg') }});"></div><div><a href="{{ route('post.show') }}">Trois outils numériques pour la gestion des finances publiques</a><span><i class="fa fa-calendar"></i> 16 septembre 2025</span></div></div>
                            <div class="ve-recent-post"><div class="ve-rp-img bg-img" style="background-image:url({{ asset('img/bg-img/10.jpg') }});"></div><div><a href="{{ route('post.show') }}">Comprendre le responsive design</a><span><i class="fa fa-calendar"></i> 2 septembre 2025</span></div></div>
                        </div>
                        <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Tags populaires</h5>
                            <div class="ve-tags"><a href="#">Web</a><a href="#">Digital</a><a href="#">IA</a><a href="#">Innovation</a><a href="#">Management</a><a href="#">Marketing</a><a href="#">Formation</a><a href="#">CRM</a><a href="#">Évènementiel</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ve-newsletter-section"><div class="container"><div class="ve-newsletter-wrap">
        <div class="ve-nl-left"><i class="fa fa-envelope-o"></i><div><h3>Stay Ahead of the Markets</h3><p>Weekly insights — straight to your inbox.</p></div></div>
        <div class="ve-nl-right"><form class="ve-nl-form" action="#" method="post"><input type="email" placeholder="Enter your email address" required><button type="submit">Subscribe</button></form></div>
    </div></div></section>

    @include('partials.footer')

    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script src="{{ asset('js/vaultedge.js') }}"></script>
</body></html>