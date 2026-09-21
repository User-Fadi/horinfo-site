<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Le responsive design est devenu un incontournable pour toute présence web professionnelle. Découvrez pourquoi et comment l'adopter.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Comprendre le responsive design — HORINFO</title>
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}">
</head>
<body>
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>

    @include('partials.nav')
    
    <section class="ve-page-hero ve-page-hero-sm" style="background-image:url({{ asset('img/bg-img/10.jpg') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-insight-cat" style="margin-bottom:16px;">Développement</span>
            <h1>Comprendre le <span>responsive design</span></h1>
            <div class="ve-post-meta-hero">
                <span><i class="fa fa-calendar"></i> 2 septembre 2025</span>
                <span><i class="fa fa-user"></i> Horinfo</span>
                <span><i class="fa fa-clock-o"></i> 5 min de lecture</span>
            </div>
        </div>
    </section>

    <section class="ve-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <article class="ve-article">
                        <div class="ve-article-featured bg-img" style="background-image:url({{ asset('img/bg-img/10.jpg') }});"></div>
                        <div class="ve-article-body">
                            <p class="ve-article-lead">Le responsive design est devenu un incontournable pour toute présence web professionnelle. Avec la majorité du trafic internet provenant aujourd'hui des smartphones, un site qui ne s'adapte pas à tous les écrans perd des visiteurs et des clients potentiels.</p>
                            <h3>1. Qu'est-ce que le responsive design ?</h3>
                            <p>C'est une approche de conception qui permet à un site web de s'adapter automatiquement à la taille de l'écran sur lequel il est consulté — ordinateur, tablette ou smartphone — pour offrir une expérience de navigation optimale sur chaque support.</p>
                            <h3>2. Pourquoi c'est essentiel pour votre entreprise</h3>
                            <p>Un site non responsive donne une image peu professionnelle et pénalise votre référencement sur les moteurs de recherche, qui favorisent les sites adaptés au mobile. C'est souvent le premier point de contact d'un client avec votre entreprise.</p>
                            <h3>3. Les bonnes pratiques à retenir</h3>
                            <p>Grilles flexibles, images adaptatives, menus simplifiés sur mobile, temps de chargement optimisés : autant d'éléments à intégrer dès la conception d'un site pour garantir une expérience fluide, quel que soit l'appareil utilisé.</p>
                            <div class="ve-article-tags"><strong>Tags :</strong><a href="#">Web</a><a href="#">Design</a><a href="#">Digital</a></div>
                            <div class="ve-article-share"><strong>Partager :</strong><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                        </div>
                    </article>
                    <div class="ve-comments-section">
                        <h4>3 Commentaires</h4>
                        <div class="ve-comment"><div class="ve-comment-avatar bg-img" style="background-image:url({{ asset('img/bg-img/32.jpg') }});"></div><div class="ve-comment-body"><div class="ve-comment-meta"><strong>Alex Morgan</strong><span>April 27, 2025</span></div><p>Excellent breakdown! The dollar-cost averaging tip is something I've been applying for years and the results speak for themselves.</p><a href="#" class="ve-reply-btn">Reply</a></div></div>
                        <div class="ve-comment ve-comment-reply"><div class="ve-comment-avatar bg-img" style="background-image:url({{ asset('img/bg-img/33.jpg') }});"></div><div class="ve-comment-body"><div class="ve-comment-meta"><strong>Advisory Team</strong><span>April 28, 2025</span></div><p>Thanks Alex! Consistency really is the key. Feel free to reach out for a personalised strategy review.</p><a href="#" class="ve-reply-btn">Reply</a></div></div>
                        <div class="ve-comment"><div class="ve-comment-avatar bg-img" style="background-image:url({{ asset('img/bg-img/14.jpg') }});"></div><div class="ve-comment-body"><div class="ve-comment-meta"><strong>Jordan Lee</strong><span>April 29, 2025</span></div><p>Would love to see a follow-up piece specifically on TIPS and inflation hedging strategies. Very timely topic.</p><a href="#" class="ve-reply-btn">Reply</a></div></div>
                    </div>
                    <div class="ve-comment-form-wrap">
                        <h4>Laisser un commentaire</h4>
                        <form class="ve-contact-form" action="#" method="post">
                            <div class="ve-form-row"><div class="ve-form-group"><label>Nom</label><input type="text" placeholder="Votre nom" required></div><div class="ve-form-group"><label>Email</label><input type="email" placeholder="Votre email" required></div></div>
                            <div class="ve-form-group"><label>Commentaire</label><textarea rows="5" placeholder="Partagez votre avis..."></textarea></div>
                            <button type="submit" class="ve-btn-primary">Publier <i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="ve-sidebar">
                        <div class="ve-sidebar-widget">
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