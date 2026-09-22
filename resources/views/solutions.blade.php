<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="VaultEdge offers investment, wealth management, retirement, tax, and risk services.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Our Services — VaultEdge</title>
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}">
</head>
<body>
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>
    
    @include('partials.nav')

    <section class="ve-page-hero" style="background-image:url({{ asset('img/bg-img/20.jpg') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Nos produits</span>
            <h1>Des solutions <span>développées en interne</span></h1>
            <p>Des outils conçus et développés par nos équipes, pensés pour répondre à des besoins métier concrets.</p>
            <nav aria-label="breadcrumb"><ol class="ve-breadcrumb"><li><a href="{{ route('home') }}">Accueil</a></li><li class="active">Solutions</li></ol></nav>
        </div>
    </section>

    <section class="ve-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Nos réalisations</span>
                <h2>ce que nous avons <span>déjà construit</span></h2>
                <p>Des exemples concrets de solutions imaginées, conçues et développées par nos équipes.</p>
            </div>
            <div class="ve-services-grid">
            <div class="ve-service-card wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-service-icon"><i class="fa fa-calendar"></i></div>
                <h4>YEELE — Gestion d'évènements</h4>
                <p>Plateforme digitale de gestion d'évènements en ligne. Un outil tout-en-un, simple et rapide, pour organiser vos congrès, salons, séminaires, conférences, formations, mariages et autres évènements.</p>
                <ul class="ve-af-features" style="list-style:none;padding:0;margin:16px 0;">
                    <li><i class="fa fa-check" style="color:var(--ve-gold);margin-right:8px;"></i>Personnalisation</li>
                    <li><i class="fa fa-check" style="color:var(--ve-gold);margin-right:8px;"></i>Système d'envoi de mail</li>
                    <li><i class="fa fa-check" style="color:var(--ve-gold);margin-right:8px;"></i>Suivi de vos évènements</li>
                    <li><i class="fa fa-check" style="color:var(--ve-gold);margin-right:8px;"></i>Divers moyens de paiement</li>
                </ul>
                <a href="#" class="ve-card-link">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
            </div>
            <div class="ve-service-card wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-service-icon"><i class="fa fa-building"></i></div>
                <h4>DIGITIMMO — Gestion immobilière</h4>
                <p>Plateforme digitale innovante dédiée à la gestion immobilière, conçue pour simplifier, sécuriser et optimiser toutes les étapes du processus immobilier, du foncier à la finance.</p>
                <ul class="ve-af-features" style="list-style:none;padding:0;margin:16px 0;">
                    <li><i class="fa fa-check" style="color:var(--ve-gold);margin-right:8px;"></i>Gestion des contrats</li>
                    <li><i class="fa fa-check" style="color:var(--ve-gold);margin-right:8px;"></i>Facturation</li>
                    <li><i class="fa fa-check" style="color:var(--ve-gold);margin-right:8px;"></i>Gestion foncière</li>
                    <li><i class="fa fa-check" style="color:var(--ve-gold);margin-right:8px;"></i>Gestion technique</li>
                </ul>
                <a href="#" class="ve-card-link">En savoir plus <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
        </div>
    </section>


    <section class="ve-cta-banner bg-img" style="background-image:url({{ asset('img/bg-img/6.jpg') }});">
        <div class="ve-cta-overlay"></div>
        <div class="container ve-cta-content">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8"><h2>Prêt à concrétiser votre <span>projet numérique ?</span></h2><p>Échangez gratuitement avec notre équipe pour discuter de vos besoins et obtenir un premier devis.</p></div>
                <div class="col-12 col-lg-4 text-lg-right"><a href="{{ route('contact') }}" class="ve-btn-white">Demander un devis</a></div>
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