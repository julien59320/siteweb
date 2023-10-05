<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spileers-Julien</title>
    <meta name="description" content ="Développeur web freelance, HTML, CSS, JavaScript, WordPress">
    <meta name="Keywords" content =" Portfolio de Spileers Julien, développeur web exerçant à Haubourdin (59), sur ce portfolio, vous y trouverez l'intégralité de mes projets.">
     <!-- ===== Icons ===== -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="icon" type="image/x-icon" href="./image/Fav.webp">
     <!-- ===== CSS Files ===== -->
     <link rel="stylesheet" href="./css/style.css">
     <link rel="stylesheet" href="./css/skins/color-1.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
     <!-- ===== Style SWITCHER Files ===== -->
     <link rel="stylesheet" href="./css/skins/color-1.css" class="alternate-style" title="color-1" disabled>
     <link rel="stylesheet" href="./css/skins/color-2.css" class="alternate-style" title="color-2" disabled>
     <link rel="stylesheet" href="./css/skins/color-3.css" class="alternate-style" title="color-3" disabled>
     <link rel="stylesheet" href="./css/skins/color-4.css" class="alternate-style" title="color-4" disabled>
     <link rel="stylesheet" href="./css/skins/color-5.css" class="alternate-style" title="color-5" disabled>
     <link rel="stylesheet" href="css/style-switcher.css">
     <!-- ===== JS Files ===== -->
     <script src="./js/script.js" defer ></script>
    </head>
    <body>
        <div class="nav__toggle" id="nav-toggle">
            <i class="fa-solid fa-bars"></i>
        </div>
        <!-- ===== SIDEBAR ===== -->
        <aside class="sidebar" id="sidebar">
            <nav class="nav">
                <div class="nav__logo">
                    <a href="index.php" class="nav__logo-text">J</a>
                </div>

                <div class="nav__menu">
                    <div class="menu">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="#Accueil" class="nav__link active-link ">Accueil</a>
                            </li>
                            <li class="nav__item">
                                <a href="#A-propos" class="nav__link ">A propos</a>
                            </li>
                            <li class="nav__item">
                                <a href="#service" class="nav__link ">Service</a>
                            </li>
                            <li class="nav__item">
                                <a href="#Réalisation" class="nav__link ">Réalisation</a>
                            </li>
                            <li class="nav__item">
                                <a href="#contact" class="nav__link ">Contact</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="btn__share ">
                    <i class="fa-solid fa-share-nodes"></i>
                </div>

                <div class="nav__close" id="nav-close">
                    <i class="fa-sharp fa-solid fa-circle-xmark"></i>
                </div>
            </nav>
        </aside>
        <!-- ===== MAIN ===== -->
        <main class="main">
            <!-- ===== Home ===== -->
            <section class="home" id="Accueil">
                <div class="home__container container grid">
                    <div class="home__social">
                        <span class="home__social-follow">Suivez Moi</span>
                        <div class="home__social-links">
                            <a href="https://www.linkedin.com/in/julien-spileers-5763741a7/" target="_blank" class="home__social-link">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="https://twitter.com/Spileers_Julien" target="_blank" class="home__social-link">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="https://github.com/julien59320" target="_blank" class="home__social-link">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <img src="./image/Moi.webp" alt="Photo de moi" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">Spileers Julien</h1>
                        <h3 class="home__subtitle"> <span class="typing">Dev web</span></h3>
                        <p class="home__description">Passionné par les technologies liées au Web, je suis à votre disposition pour répondre 
                            à tout type de projets de création de sites internet, de développement spécifique ou d'applications web. 
                            </p>
                            <a href="#about" class="button"><i class="fa-solid fa-user"></i>A propos</a>
                    </div>
                    <div class="my__info">
                        <div class="info__item">
                            <i class="fa-brands fa-linkedin info__icon"></i>
                            <div>
                                <h3 class="info__title">Linkedin</h3>
                                <span class="info__subtitle"><a href="https://www.linkedin.com/in/julien-spileers-5763741a7/" target="_blank" >Julien Spileers</a> </span>
                            </div>
                        </div>

                        <div class="info__item">
                            <i class="fa-solid fa-phone-volume info__icon"></i>
                            <div>
                                <h3 class="info__title">Téléphone</h3>
                                <span class="info__subtitle"><a href="tel:0767428403">0767428403</a></span>
                            </div>
                        </div>

                        <div class="info__item">
                            <i class="fa-sharp fa-solid fa-envelope info__icon"></i>
                            <div>
                                <h3 class="info__title">Email</h3>
                                <span class="info__subtitle"><a href="mailto:spileers.julien59@gmail.com">spileers.julien59@gmail.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ===== ABOUT ===== -->
            <section class="about section" id="A-propos">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2 class="hello">About</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text">
                                    <h3>Bonjour, je suis <span>Julien Spileers</span> </h3>
                                    <p> Après avoir plusieur année dans le commerce, 
                                        j’ai réalisé une reconversion et obtenu le diplôme d'état de développeur web et web mobile. Passionné par les métiers du web, 
                                        je m’intéresse à tout ce qui touche le développement, ce qui me permet d’aborder les differents projets avec sérénité. 
                                        De nature autonome, je peux travailler seul ou en équipe, capable de m’adapter à tout type d'environnement. 
                                        Doté de bonnes capacités d'analyse, je sais faire preuve de force de proposition afin de réaliser au mieux tout vos projets
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="personal-info padd-15">
                                        <div class="row2">
                                            <div class="info-item padd-15">
                                                <p>Anniv: <span>29 avr 1993</span> </p>
                                            </div>
                                            <div class="info-item padd-15">
                                                <p>Age: <span> 29 ans</span> </p>
                                            </div>
                                            <div class="info-item padd-15">
                                            <p>Site: <span> Spileers-julien.fr</span> </p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Email: <span> Spileers.julien59@gmail.com </span> </p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Tél: <span> 07.67.42.84.03 </span> </p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Ville: <span> Haubourdin </span> </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="button padd-15">
                                            <a class="btn hire-me" href="./Img/Spileers julien.pdf" download="CV Spileers Julien">
                                                Télécharger CV <i class="fas fa-download"></i></a>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="skills padd-15">
                                    <div class="row2">
                                        <div class="skill-item padd-15">
                                            <h5>Autonomie</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 85%;"></div>
                                                <div class="skill-percent">85%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>Force de proposition</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 75%;"></div>
                                                <div class="skill-percent">75%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>Travail d'équipe</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 65%;"></div>
                                                <div class="skill-percent">65%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>Organisation</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 75%;"></div>
                                                <div class="skill-percent">75%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="education padd-15">
                                    <h3 class="title">Education</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- ===== Timeline item ===== -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2022 
                                                    </h3>
                                                    <h4 class="timeline-title">Recherche Alternance</h4>
                                                    <p class="timeline-text">Suite a l'obtention de mon titre développeur web et web mobile. Je suis a la recherche d'une alternance "Développeur d'application Symfony/ Php, ayant deja utilisé c'est language, je souhaite continuer a développer mes connaissances dans ce domaine"</p>
                                                    </div>
                                                <!-- ===== Timeline item ===== -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2021 - 2022
                                                    </h3>
                                                    <h4 class="timeline-title">Developpeur web et web mobile</h4>
                                                    <p class="timeline-text">Formation de développeur web et web mobile à AFCI de Villeneuve-d'ascq, qui m'a permit de mieux comprendre le fonctionnement du web, mais également d'acquérir de bonne base en algorithmie et sur certains languages de programmation.

                                                    </p>
                                                    </div>
                                                <!-- ===== Timeline item ===== -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2009 - 2011
                                                    </h3>
                                                    <h4 class="timeline-title">Préparteur en produit carnés</h4>
                                                    <p class="timeline-text">Apprentissage théorique sur l'anatomie des espèces animales, les urgences sanitaire . Réalisation de différentes techniques commerciales. 
                                                        Apprentissage pratique des différentes techniques de découpe de viande, et pratique des cours théoriques.</p>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="experience padd-15">
                                    <h3 class="title">Expérience</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- ===== Timeline item ===== -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2022 
                                                    </h3>
                                                    <h4 class="timeline-title">Un artiste, une cause</h4>
                                                    <p class="timeline-text">Ce stage d’une durée de 3 mois, a consisté à la création d’un site web pour l'association "Un artiste, une cause". 
                                                        Il s’est déroulé du 14 mars au 10 juin 2022 en télétravail. Durant cette période, je me suis familiarisé avec un 
                                                        environnement technique et d’applications.</p>
                                                    </div>
                                                    <!-- ===== Timeline item ===== -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2018 - 2021
                                                    </h3>
                                                    <h4 class="timeline-title">Extrudeur Plastique</h4>
                                                    <p class="timeline-text"> Extrudeur de film de différent types ( film, 1z open, soufflet). Maîtrise des différents types de changement avec ou sans matiéres. 
                                                        Gestion et organisation du temp et des différente charge de travail. Poste de sous-chef</p>
                                                    </div>
                                                <!-- ===== Timeline item ===== -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2013 - 2015
                                                    </h3>
                                                    <h4 class="timeline-title">Responsable Boucher</h4>
                                                    <p class="timeline-text">Découpe, parage, dégraissage de tout type de viande. Préparation des produits de base en charcuterie. 
                                                        Service et prise de commande, auprés de la clientéle. Gestion des commandes ainsi que des marges.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ===== Service Section Start ===== -->
            <section class="service section " id="service">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Services</h2>
                        </div>
                    </div>
                    <div class="row2">
                        <!-- ===== Service Items Start ===== -->
                        <div class="service-item">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-mobile-alt"></i>
                                </div>
                                <h4>Développeur web</h4>
                                <p>Conception sur mesure d'un site responsive avec un design clair, unique et créatif qui s’adapte à vos besoins et à votre cible tout en respectant votre image de marque </p>
                            </div>
                        </div>
                        <!-- ===== Service Items End ===== -->
                        <!-- ===== Service Items Start ===== -->
                        <div class="service-item">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-laptop-code"></i>
                                </div>
                                <h4>Refonte de site</h4>
                                <p>L’identité de votre marque a changé? Ou vous voulez mettre à jour le design de votre site web? Un site fréquemment mis à jour et visuellement moderne convainc vos visiteurs de rester et inspire la confiance.
                                </p>
                            </div>
                        </div>
                        <!-- ===== Service Items End ===== -->
                        <!-- ===== Service Items Start ===== -->
                        <div class="service-item">
                            <div class="service-item-inner">
                                <div class="icon">
                                    <i class="fa fa-palette"></i>
                                </div>
                                <h4>Création WordPress</h4>
                                <p>Conseil stratégique, développement sur-mesure, maintenance quotidienne et hébergement professionnel, je vous accompagne de A à Z pour tous vos projets WordPress.</p>
                            </div>
                        </div>
                        <!-- ===== Service Items END ===== -->
                        <div class="row">
                            <div class="skill-heading padd-15">
                                <h2>Compétences professionnel :</h2>
                            </div>
                        </div>
                        <!-- ===== Service Skill Start ===== --> 
                        <div class="container-skill">
                                <div class="card">
                                    <div class="percent" style="--num:85;">
                                        <div class="dot"></div>
                                        <svg>
                                            <circle cx="70" cy="70" r="70"></circle>
                                            <circle cx="70" cy="70" r="70"></circle>
                                        </svg>
                                        <div class="number">
                                            <h2> <span>HTML</span></h2>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="percent" style="--num:80;">
                                        <div class="dot"></div>
                                        <svg>
                                            <circle cx="70" cy="70" r="70"></circle>
                                            <circle cx="70" cy="70" r="70"></circle>
                                        </svg>
                                        <div class="number">
                                            <h2><span>CSS</span></h2>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="percent" style="--num:70;">
                                        <div class="dot"></div>
                                        <svg>
                                            <circle cx="70" cy="70" r="70"></circle>
                                            <circle cx="70" cy="70" r="70"></circle>
                                        </svg>
                                        <div class="number">
                                            <h2><span>JS</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="percent" style="--num:65;">
                                        <div class="dot"></div>
                                        <svg>
                                            <circle cx="70" cy="70" r="70"></circle>
                                            <circle cx="70" cy="70" r="70"></circle>
                                        </svg>
                                        <div class="number">
                                            <h2><span>PHP</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="percent" style="--num:76;">
                                        <div class="dot"></div>
                                        <svg>
                                            <circle cx="70" cy="70" r="70"></circle>
                                            <circle cx="70" cy="70" r="70"></circle>
                                        </svg>
                                        <div class="number">
                                            <h2> <span>WordPress</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- ===== Service Skill End ===== -->
                </div>
            </section>

            <!-- ===== Portfolio ===== -->
            <section class="work section" id="Réalisation">
                <div class="row">
                    <div class="section-title padd-15">
                        <h2 class="hello">Réalisation</h2>
                    </div>
                </div>

                <div class="work__filters">
                    <span class="work__item active-work" data-filter="all">Tout</span>
                    <span class="work__item" data-filter=".web">Web</span>
                    <span class="work__item" data-filter=".E-commerce">E-commerce</span>
                    <span class="work__item" data-filter=".WordPress">WordPress</span>
                </div>

                <div class="work__container container grid">

                    <div class="work__card mix web">
                        <img src="./image/Avenir.webp" alt="Photo a venir" class="work__img">
                        <h3 class="work__title">Web</h3>
                        <span class="work__button">Découvrir <i class="uil uil-arrow-right work__icon"></i></span>
                        <div class="portfolio__item-details">
                            <h3 class="details__title">Forum Serveur jeux vidéo</h3>
                            <p class="details__description">Création d'un forum sur l'univers des serveur de jeux en ligne

                            </p>
                            <ul class="details__info">
                                <li>Créé - <span>En cours</span></li>
                                <li>Technologie - <span>Symfony | PHP | SQL</span></li>
                                <li>Role - <span> FullStack </span></li>
                                <li> Voir - <span><a href="#" target="_blank" >A venir</a></span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="work__card mix WordPress">
                        <img src="./image/Unartiste.webp" alt=" Photo un artiste une cause" class="work__img">
                        <h3 class="work__title">WordPress</h3>
                        <span class="work__button">Découvrir <i class="uil uil-arrow-right work__icon"></i></span>
                        <div class="portfolio__item-details">
                            <h3 class="details__title">Un artiste, Une cause</h3>
                            <p class="details__description">
                                Site web pour une association qui a pour but de soutenir des causes soutenue par des artistes crée avec le CMS Wordpress, stage de 3 mois
                                mois effectué dans le cadre de ma formation

                            </p>
                            <ul class="details__info">
                                <li>Créé - <span>Juin 2022</span></li>
                                <li>Technologie - <span>WordPress</span></li>
                                <li>Role - <span> Fullstack </span></li>
                                <li> Voir - <span><a href="https://unartisteunecause.fr/" target="_blank" >https://unartisteunecause.fr/</a></span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="work__card mix web">
                        <img src="./image/appMovie.webp" alt="Image App rezoom" class="work__img">
                        <h3 class="work__title">Web</h3>
                        <span class="work__button">Découvrir <i class="uil uil-arrow-right work__icon"></i></span>
                        <div class="portfolio__item-details">
                            <h3 class="details__title">App Rezoom</h3>
                            <p class="details__description">Création d'une application web qui permet d'afficher le résumer de film développer en 
                                JAVASCRIPT, AJAX en utilisant FETCH, HTML et CSS.

                            </p>
                            <ul class="details__info">
                                <li>Créé - <span>janvier 2022</span></li>
                                <li>Technologie - <span>HTML | CSS | JS</span></li>
                                <li>Role - <span> Front end</span></li>
                                <li> Voir - <span><a href="https://julien59320.github.io/appliMovie/" target="_blank" >https://julien59320.github.io/appliMovie/</a></span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="work__card mix web">
                        <img src="./image/shortUrl.webp" alt="Image Raccourcisseur d'url" class="work__img">
                        <h3 class="work__title">Web</h3>
                        <span class="work__button">Découvrir <i class="uil uil-arrow-right work__icon"></i></span>
                        <div class="portfolio__item-details">
                            <h3 class="details__title">Raccourcisseur d'Url</h3>
                            <p class="details__description">Création d'un raccourcisseur d'Url avec analyse des statistiques. 
                                Je me suis servit du framework Symfony et php pour développer mon application web.

                            </p>
                            <ul class="details__info">
                                <li>Créé - <span>Juin 2022</span></li>
                                <li>Technologie - <span>PHP | SYMFONY </span></li>
                                <li>Role - <span> FullStack</span></li>
                                <li> Voir github - <span><a href="https://github.com/julien59320/shortUrl" target="_blank" >https://github.com/julien59320/shortUrl</a></span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="work__card mix E-commerce">
                        <img src="./image/John.webp" alt="Image template e-commerce" class="work__img">
                        <h3 class="work__title">E-commerce</h3>
                        <span class="work__button">Découvrir <i class="uil uil-arrow-right work__icon"></i></span>
                        <div class="portfolio__item-details">
                            <h3 class="details__title">Reproduction d'une maquette</h3>
                            <p class="details__description">
                                Création d'un template e-commerce, qui ma permit de développer mes compétences en HTML, CSS, Javascript

                            </p>
                            <ul class="details__info">
                                <li>Créé - <span></span> dec 2021</span></li>
                                <li>Technologie - <span>HTML, CSS, Javascript</span></li>
                                <li>Role - <span> Front end</span></li>
                                <li> Voir - <span><a href="https://julien59320.github.io/JohnPharell/" target="_blank" >https://julien59320.github.io/JohnPharell/</a></span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="work__card mix WordPress">
                        <img src="./image/Montessori.webp" alt=" Image site montessori" class="work__img">
                        <h3 class="work__title">WordPress</h3>
                        <span class="work__button">Découvrir <i class="uil uil-arrow-right work__icon"></i></span>
                        <div class="portfolio__item-details">
                            <h3 class="details__title">L'odyssée Montessori</h3>
                            <p class="details__description">
                                Création compléte du site web en lien avec la charte graphique du projet. Et création visuel d'un E-book.
                            </p>
                            <ul class="details__info">
                                <li>Créé - <span>juillet 2022</span></li>
                                <li>Technologie - <span>Wordpress</span></li>
                                <li>Role - <span> Front end</span></li>
                                <li> Voir - <span><a href="https://odysseemontessori.fr/" target="_blank" >https://odysseemontessori.fr/</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PopUp portfolio-->
            <div class="portfolio__popup">
                <div class="portfolio__popup-inner">
                    <div class="portfolio__popup-content grid">
                        <span class="portfolio__popup-close">
                        <i class="fa-sharp fa-solid fa-circle-xmark"></i>
                        </span>
                        <div class="pp__thumbnail">
                            <img src="./image/Avenir.webp" alt="" class="portfolio__popup-img">
                        </div>
                        <div class="portfolio__popup-info">
                            <div class="portfolio__popup-subtitle">Création - <span>Design</span></div>
                            <div class="portfolio__popup-body">
                                <h3 class="details__title">Un artiste une cause</h3>
                                <p class="details__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa laudantium distinctio voluptatem.
    
                                </p>
                                <ul class="details__info">
                                    <li>Created - <span>4 dec 2020</span></li>
                                    <li>Technologie - <span>HTML | CSS</span></li>
                                    <li>Role - <span> Front end</span></li>
                                    <li> Voir - <span><a href="#">www.google.com</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         

            <!-- Contact-->
            <section class="contact section" id="contact">
                <div class="row">
                    <div class="section-title padd-15">
                        <h2 class="hello">Contact</h2>
                    </div>
                </div>
                <div class="contact__container container grid">
                    <div class="contact__content">
                        <div class="contact__info">
                            <div class="contact__card">
                                <i class="uil uil-envelope-edit contact__card-icon"></i>
                                <h3 class="contact__card-title">Linkedin</h3>
                                <span class="info__subtitle"><a href="https://www.linkedin.com/in/julien-spileers-5763741a7/" target="_blank">Julien Spileers</a></span>
                            </div>

                            <div class="contact__card">
                                <i class="uil uil-envelope-edit contact__card-icon"></i>
                                <h3 class="contact__card-title">Téléphone</h3>
                                <span class="info__subtitle"><a href="tel:0767428403">0767428403</a></span>
                            </div>

                            <div class="contact__card">
                                <i class="uil uil-envelope-edit contact__card-icon"></i>
                                <h3 class="contact__card-title">Email</h3>
                                <span class="info__subtitle"><a href="mailto:spileers.julien59@gmail.com">spileers.julien59@gmail.com</a></span>
                            </div>
                        </div>
                    </div>
                   

                    <div class="contact__content">
                        <form action="./mail.php" method="post" class="contact__form" >

                            <?php if (array_key_exists('errors', $_SESSION)) : ?>
                                <div class="alert alert-danger">
                                    <p>
                                        <?= implode('<br>', $_SESSION['errors']); ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php if (array_key_exists('success', $_SESSION)) : ?>
                                <div class="alert alert-success">
                                    <p>
                                        Votre email a bien été envoyé
                                    </p>
                                </div>
                            <?php endif; ?>

                            <div class="input__container">
                            <input type="text" name="name" id="name" class="input" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ""; ?>" />
                              
                                <label for="name">Nom & Prénom</label>
                                <span>Nom & Prénom</span>
                            </div>
                            <div class="input__container">
                                <input type="tel" class="input" id="tel" name="tel" value="<?= isset($_SESSION['inputs']['tel']) ? $_SESSION['inputs']['tel'] : ""; ?>" />
                                <label for="tel">Téléphone</label>
                                <span>Téléphone</span>
                            </div>
                            <div class="input__container">
                                <input type="text" class="input" id="mail" name="mail" value="<?= isset($_SESSION['inputs']['mail']) ? $_SESSION['inputs']['mail'] : ""; ?>"/>
                                <label for="mail">Email</label>
                                <span>Email</span>
                            </div>
                            <div class="input__container textarea">
                                <textarea name="message" id="msg"  class="input" value="<?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ""; ?>" ></textarea>
                                <label for="msg">Message</label>
                                <span>Message</span>
                            </div>
                            <button type="submit"  class="button" name="valider"><i class="uil uil-navigator button-icon"></i>
                            Envoyer</button>
                    </form>
                         
                            
      
                    </div>
                </div>
            </section>
            
            <footer>
              <p> Copyright 2022 | By <span> Spileers Julien</span> </p> 
            </footer>
        </main>
       






      <!-- ===== Style Switcher Start ===== -->
      <div class="style-switcher">
        <div class="style-switcher-toggler s-icon">
            <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="day-night s-icon">
            <i class="fas "></i>
        </div>
        <h4>Color theme</h4>
        <div class="colors">
            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
        </div>
    </div>
    <!-- ===== Style Switcher End ===== -->
    <!-- ===== JS Files ===== -->
    <script src="./js/mixitup.min.js"></script>
    <script src="./js/style-switcher.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
</body>
</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
?>