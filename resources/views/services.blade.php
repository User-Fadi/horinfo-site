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
            <span class="ve-section-tag">Ce que nous offrons</span>
            <h1>Des solutions <span>numériques complètes</span></h1>
            <nav aria-label="breadcrumb"><ol class="ve-breadcrumb"><li><a href="{{ route('home') }}">Accueil</a></li><li class="active">Services</li></ol></nav>
        </div>
    </section>

    <section class="ve-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Notre expertise</span>
                <h2>Une solution pour <span>chaque besoin numérique</span></h2>
                <p>Que vous démarriez un projet ou cherchiez à moderniser votre système d'information, nous avons la solution adaptée.</p>
            </div>
            <div class="ve-services-grid">
                <div class="ve-service-card wow fadeInUp" data-wow-delay="100ms"><div class="ve-service-icon"><i class="fa fa-code"></i></div><h4>Développement d'application web et mobile</h4><p>Conception d'applications sur mesure, performantes et évolutives, pour le web comme pour le mobile.</p><a href="#" class="ve-card-link">En savoir plus <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="200ms"><div class="ve-service-icon"><i class="fa fa-cogs"></i></div><h4>Développement CRM et application métier</h4><p>Des outils métier adaptés à vos processus internes, pour gagner en efficacité et en productivité.</p><a href="#" class="ve-card-link">En savoir plus <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="300ms"><div class="ve-service-icon"><i class="fa fa-globe"></i></div><h4>Développement de site web</h4><p>Des sites vitrines ou institutionnels modernes, rapides et pensés pour convertir vos visiteurs.</p><a href="#" class="ve-card-link">En savoir plus <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="400ms"><div class="ve-service-icon"><i class="fa fa-bullhorn"></i></div><h4>Marketing digital</h4><p>Stratégies de visibilité en ligne pour développer votre présence et atteindre vos cibles efficacement.</p><a href="#" class="ve-card-link">En savoir plus <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="500ms"><div class="ve-service-icon"><i class="fa fa-refresh"></i></div><h4>Refonte web</h4><p>Modernisation de vos plateformes existantes : design, performance et expérience utilisateur repensés.</p><a href="#" class="ve-card-link">En savoir plus <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="600ms"><div class="ve-service-icon"><i class="fa fa-graduation-cap"></i></div><h4>Formations</h4><p>Des formations pratiques pour monter en compétences vos équipes sur les outils numériques.</p><a href="#" class="ve-card-link">En savoir plus <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="700ms"><div class="ve-service-icon"><i class="fa fa-search"></i></div><h4>Audits, études et conseils</h4><p>Un diagnostic complet de votre système d'information pour identifier les axes d'amélioration prioritaires.</p><a href="#" class="ve-card-link">En savoir plus <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="800ms"><div class="ve-service-icon"><i class="fa fa-calendar"></i></div><h4>Évènementiel</h4><p>Organisation et accompagnement technique de vos évènements professionnels.</p><a href="#" class="ve-card-link">En savoir plus <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="900ms"><div class="ve-service-icon"><i class="fa fa-wrench"></i></div><h4>Assistance technique</h4><p>Un support réactif pour la maintenance, le dépannage et l'accompagnement continu de vos outils IT.</p><a href="#" class="ve-card-link">En savoir plus <i class="fa fa-long-arrow-right"></i></a></div>
            </div>
        </div>
    </section>

    <section class="ve-process-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Notre processus</span>
                <h2>Un accompagnement <span>simple et structuré</span></h2>
            </div>
            <div class="ve-process-grid">
                <div class="ve-process-step wow fadeInUp" data-wow-delay="100ms"><div class="ve-process-num">01</div><h5>Prise de contact</h5><p>Échange initial pour comprendre votre besoin, vos objectifs et votre contexte.</p></div>
                <div class="ve-process-arrow"><i class="fa fa-long-arrow-right"></i></div>
                <div class="ve-process-step wow fadeInUp" data-wow-delay="250ms"><div class="ve-process-num">02</div><h5>Analyse & devis</h5><p>Étude de votre projet et proposition d'une solution technique avec devis détaillé.</p></div>
                <div class="ve-process-arrow"><i class="fa fa-long-arrow-right"></i></div>
                <div class="ve-process-step wow fadeInUp" data-wow-delay="400ms"><div class="ve-process-num">03</div><h5>Développement</h5><p>Conception et développement de votre solution, avec points d'étape réguliers.</p></div>
                <div class="ve-process-arrow"><i class="fa fa-long-arrow-right"></i></div>
                <div class="ve-process-step wow fadeInUp" data-wow-delay="550ms"><div class="ve-process-num">04</div><h5>Livraison & support</h5><p>Mise en production, formation si besoin, et accompagnement technique continu.</p></div>
            </div>
        </div>
    </section>

    <section class="ve-section ve-faq-section">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-12 col-lg-5 wow fadeInLeft" data-wow-delay="100ms">
                    <span class="ve-section-tag">Questions fréquentes</span>
                    <h2>Foire Aux <span>Questions</span></h2>
                    <p>>Vous ne trouvez pas votre réponse ? <a href="{{ route('contact') }}" style="color:var(--ve-gold);">Contactez-nous</a> et nous vous répondrons sous 24h.</p>
                    <a href="{{ route('contact') }}" class="ve-btn-primary mt-30">Contacter notre équipe</a>
                </div>
                <div class="col-12 col-lg-7 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-faq-list">
                        <div class="ve-faq-item open"><div class="ve-faq-q"><span>Comment démarrer un projet avec HORINFO ?</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">Il suffit de nous contacter pour un premier échange gratuit. Nous analysons votre besoin et revenons vers vous avec une proposition sous quelques jours.</div></div>
                        <div class="ve-faq-item"><div class="ve-faq-q"><span>Combien coûte un projet web ou mobile ?</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">Le coût dépend de la complexité et des fonctionnalités souhaitées. Nous établissons un devis détaillé après avoir compris votre besoin.</div></div>
                        <div class="ve-faq-item"><div class="ve-faq-q"><span>Assurez-vous la maintenance après livraison ?</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">Oui, nous proposons un accompagnement et une assistance technique continue après la mise en production de votre solution.</div></div>
                        <div class="ve-faq-item"><div class="ve-faq-q"><span>Travaillez-vous avec des institutions internationales ?</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">Oui, nous accompagnons régulièrement des organisations telles que la Banque mondiale, le PNUD, l'Union européenne et l'USAID.</div></div>
                    </div>
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