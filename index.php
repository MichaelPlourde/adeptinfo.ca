<?php require_once "controller/requestsHandlers.php"; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>ADEPT Informatique</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Libraries CSS Files -->
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/animate.css/animate.min.css" rel="stylesheet">
    <link href="node_modules/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="node_modules/lightbox2/dist/css/lightbox.min.css" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="css/style.css?v1.4" rel="stylesheet">
  </head>
  <body>
  <!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/fr_FR/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your customer chat code -->
	<div class="fb-customerchat"
	  minimized="true"
	  attribution="setup_tool"
	  page_id="1405736689655466"
	  theme_color="#10d213"
	  logged_in_greeting="Salut! Avez-vous des questions?"
	  logged_out_greeting="Salut! Avez-vous des questions? Connectez vous avec Facebook et posez les!">
	</div>
    <!--==========================
        Entête
        ============================-->
    <header id="header">
      <div class="container-fluid">
        <div id="logo" class="pull-left">
          <h1><a href="#intro" class="scrollto">ADEPT</a></h1>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active d-block d-sm-none"><a href="#intro">Accueil</a></li>
            <li><a href="#about">Qui sommes nous</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#team">Membres du conseil</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="http://adeptinfo.ca/lan">LAN de L'ADEPT</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- #header -->
    <!--==========================
        SECTION : ACCUEIL
        ============================-->
    <section id="intro">
      <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators"></ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" id="first" style="background-image: url('img/intro-carousel/1.jpg');">
              <div class="carousel-container">
                <div class="carousel-content">
                    <?php $r = validateGet("r");
                    if ($r == 'success'){
                        echo '<div class="alert alert-success top-message">Nous avons bien reçu votre message, merci !</div>';
                    } else if ($r == 'error') {
                        echo "<div class='alert alert-danger top-message'>Désolé, une erreur s'est produite lors de l'envoi de votre message.</div>";
                    } else if($r =='error-as') {
                        echo "<div class='alert alert-warning top-message'>Vous êtes déjà inscrit à la liste d'envoi de l'ADEPT.</div>";
                    } else if ($r == 'subscribed') {
                        echo "<div class='alert alert-success top-message'>Vous avez été ajouté à la liste d'envoi de l'ADEPT avec succès.</div>";
                    }?>
                  <h2>Bienvenue à l'ADEPT</h2>
                  <p>L'ADEPT, c'est l'Association Des Étudiants et Étudiantes du Programme de Technique Informatique du cégep Édouard-Montpetit.
                    <br class="hidden-mobile" /><strong>Venez nous voir, nous sommes au local F-041 situé dans la cafeteria !</strong>
                  </p>
                  <a href="#about" class="btn-get-started scrollto">Découvrir l'ADEPT</a>
                </div>
              </div>
            </div>
            <!-- À décommenter pour ajouter des pages au carroussel
            <div class="carousel-item" style="background-image: url('img/intro-carousel/2.jpg');">
                <div class="carousel-container">
                  <div class="carousel-content">
                      <h2>Bienvenue à l'ADEPT</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <a href="#about" class="btn-get-started scrollto">Découvrir l'ADEPT</a>
                  </div>
                </div>
                </div>

                <div class="carousel-item" style="background-image: url('img/intro-carousel/3.jpg');">
                <div class="carousel-container">
                  <div class="carousel-content">
                    <h2>Bienvenue à l'ADEPT</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#about" class="btn-get-started scrollto">Découvrir l'ADEPT</a>
                  </div>
                </div>
                </div> -->
          <!-- </div>
          <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
          </a>
          <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
          </a>
        </div> -->
      </div>
    </section>
    <!-- #intro -->
    <main id="main">
      <!--==========================
          SECTION À PROPOS
          ============================-->
      <section id="about">
        <div class="container">
          <header class="section-header">
            <h3 class="small-title">Notre mission</h3>
            <p>L'ADEPT est une des plus grandes organisations étudiantes du cégep Édouard-Montpetit <br class="hidden-mobile">et nous faisons notre maximum afin d'être celle qui épaule le mieux ses membres !</p>
          </header>
          <div class="row about-cols">
            <div class="col-md-4 wow fadeInUp">
              <div class="about-col">
                <div class="img">
                  <img src="img/communaute.jpg" alt="" class="img-fluid">
                  <div class="icon"><i class="ion-ios-people" ></i></div>
                </div>
                <h2 class="title"><a href="#">Créer une communauté</a></h2>
                <p class="description">
                  L'association rassemble tous les étudiants en informatique afin de former une communauté dynamique et favoriser l'esprit de coopération au sein du programme.
                </p>
              </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
              <div class="about-col">
                <div class="img">
                  <img src="img/adept-hero.jpg" alt="" class="img-fluid">
                  <div class="icon"><i class="fa fa-gavel" style="font-size: 30px"></i></div>
                </div>
                <h2 class="title"><a href="#">Défendre vos droits</a></h2>
                <p class="description">
                  Nous représentons tous nos membres auprès de l'AGECEM et afin de défendre leurs droits aux points de vue physique, moral, social, intellectuel et pédagogique.
                </p>
              </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="about-col">
                <div class="img">
                  <img src="img/hoodie-promo.jpg" alt="" class="img-fluid">
                  <div class="icon"><i class="ion-arrow-graph-up-right"></i></div>
                </div>
                <h2 class="title"><a href="#">Promouvoir le programme</a></h2>
                <p class="description">
                    Nous contribuons à promouvoir les techniques informatiques du cégep en organisant des activités telles que le LAN et en diffusant de l'information sur le sujet.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- #about -->
      <!--==========================
            Section Suis-je membre
      ============================-->
      <section id="featured-services">
        <div class="container">
          <header class="section-header">
            <h3>Suis-je membre de l'ADEPT ?</h3>
            <p class="text-center description">Si tu es inscrit dans un programme de technique informatique du cégep Édouard-Montpetit, tu es membre de l'ADEPT !</p>
          </header>
          <div class="row">
            <div class="col-lg-6 box">
              <h2 class="text-center"><i class="fa fa-code"></i></h2>
              <h4 class="title text-center"><span class="white">Programmation (Informatique de gestion)</span></h4>
              <!--<p class="description text-center">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>-->
            </div>
            <div class="col-lg-6 box box-bg">
              <h2 class="text-center"><i class="fa fa-server"></i></h2>
              <h4 class="title text-center"><span class="white">Gestion de Réseaux Informatiques</span></h4>
              <!--<p class="description text-center">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>-->
            </div>
          </div>
        </div>
      </section>
      <!-- #featured-services -->
      <!--==========================
          Section des services
      ============================-->
      <section id="services">
        <div class="container">
          <header class="section-header wow fadeInUp">
            <h3>Nos services</h3>
            <p> </p>
          </header>

          <div class="row">
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                <div class="icon"><i class="ion-android-happy"></i></div>
                <h4 class="title">Le local</h4>
                <p class="description">Notre local est un endroit parfait pour dîner, relaxer ou rencontrer de nouvelles personnes de la technique. En plus, nous avons un micro-ondes ! Vous êtes donc les bienvenus à vos pauses et durant le dîner !</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                <div class="icon"><i class="ion-ios-game-controller-b"></i></div>
                <h4 class="title"><a href="http://adeptinfo.ca/lan">LAN</a></h4>
                <p class="description">Nous organisons chaque session le LAN de l'ADEPT : un événement de jeux en réseau qui se déroule ici même au cégep et qui regroupe des adeptes de jeux vidéo de partout au Québec!</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-tshirt-outline"></i></div>
              <h4 class="title"><a href="./hoodies/index.php">Hoodies officiels</a></h4>
              <p class="description">Une fois par session vous aurez la chance de vous procurer un hoodie officiel et génial réservé aux membres des deux techniques! En plus, il est super confortable! Plus de détails <a href="./hoodies">ici</a>.</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-pizza"></i></div>
              <h4 class="title">Frigo et collations</h4>
              <p class="description">Vous êtes pressé ou vous ne voulez pas faire la file à la cafeteria? Ça tombe bien car nous avons justement un frigo plein pour vous dépanner! De nombreux breuvages et collations sont disponible à faible prix !</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-ios-monitor"></i></div>
              <h4 class="title">Ordinateurs disponibles</h4>
              <p class="description">Aucun labo n'est disponible ? Pas de problème, nos ordinateurs sont munis des mêmes logiciels que les ordinateurs du département. Vous pourrez donc continuer vos travaux sans tracas !</p>
            </div>
              <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                  <div class="icon"><i class="ion-chatbubble"></i></div>
                  <h4 class="title"><a href="https://discordapp.com/invite/KYZ5JQB">Serveur Discord</a></h4>
                  <p class="description">Rejoignez notre serveur Discord où les élèves de la technique sont réunis afin de s'entraider et s'amuser ensemble.</p>
              </div>
          </div>
        </div>
      </section>
      <!-- #services -->
      <!--==========================
          Pub Lan de l'adept
      ============================-->
      <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
          <img src="./img/logo-lan.png" id="logo-lan" />
          <div class="col-md-8 offset-md-2">
              <p>Le LAN de l'ADEPT est un événement bisannuel qui a lieu au cours de la semaine d'étude du cégep Édouard-Montpetit. Instauré par un petit groupe de 20 personnes en 2014 et amélioré à chaque édition, l'événement regroupe désormais près de 250 adeptes de jeux vidéo de partout au Québec chaque session!</p>
          </div>

          <a class="cta-btn" href="http://adeptinfo.ca/lan">En savoir plus</a>
        </div>
      </section>
      <!-- #call-to-action -->
      <!--==========================
         Statistiques
      ============================-->
      <section id="facts"  class="wow fadeIn">
        <div class="container">
          <header class="section-header">
            <h3>À propos de l'ADEPT</h3>
            <p>L'ADEPT, c'est une <span class="code"><span class="blue">new</span>&nbsp;ICollection&lt;<span class="turquoise">Avantage</span>&gt;</span> pour les étudiants en informatique !<br>Vous verrez, l'essayer c'est l'ADEPTer !
                <br><span class="x-small">* Pardon pour cet humour douteux...</span></p>
          </header>
          <div class="row counters">
            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">256</span>
              <p>Membres</p>
            </div>
            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">31</span>
              <p>Ans d'activité</p>
            </div>
            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">9</span>
              <p>LAN organisés</p>
            </div>
            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">752</span>
              <p>Pogos vendus</p>
            </div>
          </div>
          <!-- <div class="facts-img">
            <img src="img/facts-img.png" alt="" class="img-fluid">
          </div> -->
        </div>
      </section>
      <!-- #facts -->
      <!--==========================
          Section Membres Conseil
      ============================-->
      <section id="team">
        <div class="container">
          <div class="section-header wow fadeInUp">
            <h3>Membres du Conseil d'Administration</h3>
            <p>Voici les membres du Conseil d'Administration de votre association qui sont en fonction pour la session.<br><strong>N'hésitez pas à aller leur parler ou à leur poser des questions, ils sont là pour vous aider!</strong></p>
          </div>
          <div class="row">
            <div class="col-md-2 offset-md-1 wow fadeInUp">
              <div class="member">
                <img src="img/president.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Olivier<br>Brassard</h4>
                    <span>Président</span>
                    <div class="social">
                      <!-- <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a> -->
                      <a href="https://github.com/obrassard"><i class="fa fa-github"></i></a>
                      <a href="https://www.linkedin.com/in/obrassard/"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 wow fadeInUp" data-wow-delay="0.1s">
              <div class="member">
                <img src="img/vpresident.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Christopher<br/>St-Pierre</h4>
                    <span>Vice Président</span>
                    <div class="social">
                      <!-- <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a> -->
                      <a href="https://github.com/christopherst-pierre"><i class="fa fa-github"></i></a>
                      <!-- <a href=""><i class="fa fa-linkedin"></i></a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 wow fadeInUp" data-wow-delay="0.2s">
              <div class="member">
                <img src="img/externe.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Michael<br>Plourde</h4>
                    <span>Secrétaire externe</span>
                    <div class="social">
                      <!-- <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-github"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 wow fadeInUp" data-wow-delay="0.3s">
              <div class="member">
                <img src="img/interne.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Jasmin Papierz-Lambert</h4>
                    <span>Secrétaire interne</span>
                    <div class="social">
                      <!-- <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-github"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 wow fadeInUp" data-wow-delay="0.3s">
              <div class="member">
                <img src="img/tresorier.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Vincent Perreault</h4>
                    <span>Trésorier</span>
                    <div class="social">
                      <!-- <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-github"></i></a>-->
                      <a href="https://www.linkedin.com/in/vincent-p-bb4a66105/"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- #team -->
      <!--==========================
          Section de contact
      ============================-->
      <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h3>Contactez-nous</h3>
            <p class="font-weight-bold compact">Le meilleur moyen de nous contacter c'est d'abord de venir nous voir en personne au local de F-041 juste à côté de la cafeteria!</p>
            <p class="font-italic">Sinon, voici d'autres moyens de nous contacter :</p>
          </div>
          <div class="row contact-info">
            <div class="col-md-4 left">
                <!--<i class="fab fa-discord large-icon discord-color"></i>-->
				<iframe src="https://discordapp.com/widget?id=362987473154080778&theme=dark" width="100%" height="390" allowtransparency="true" frameborder="0"></iframe>
              <!--================
				Bouton d'inviation discord normal
			  ====================
			  <svg class="svg-inline--fa fa-discord  large-icon discord-color" aria-hidden="true" width="50" data-icon="discord" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M297.216 243.2c0 15.616-11.52 28.416-26.112 28.416-14.336 0-26.112-12.8-26.112-28.416s11.52-28.416 26.112-28.416c14.592 0 26.112 12.8 26.112 28.416zm-119.552-28.416c-14.592 0-26.112 12.8-26.112 28.416s11.776 28.416 26.112 28.416c14.592 0 26.112-12.8 26.112-28.416.256-15.616-11.52-28.416-26.112-28.416zM448 52.736V512c-64.494-56.994-43.868-38.128-118.784-107.776l13.568 47.36H52.48C23.552 451.584 0 428.032 0 398.848V52.736C0 23.552 23.552 0 52.48 0h343.04C424.448 0 448 23.552 448 52.736zm-72.96 242.688c0-82.432-36.864-149.248-36.864-149.248-36.864-27.648-71.936-26.88-71.936-26.88l-3.584 4.096c43.52 13.312 63.744 32.512 63.744 32.512-60.811-33.329-132.244-33.335-191.232-7.424-9.472 4.352-15.104 7.424-15.104 7.424s21.248-20.224 67.328-33.536l-2.56-3.072s-35.072-.768-71.936 26.88c0 0-36.864 66.816-36.864 149.248 0 0 21.504 37.12 78.08 38.912 0 0 9.472-11.52 17.152-21.248-32.512-9.728-44.8-30.208-44.8-30.208 3.766 2.636 9.976 6.053 10.496 6.4 43.21 24.198 104.588 32.126 159.744 8.96 8.96-3.328 18.944-8.192 29.44-15.104 0 0-12.8 20.992-46.336 30.464 7.68 9.728 16.896 20.736 16.896 20.736 56.576-1.792 78.336-38.912 78.336-38.912z"></path>
              </svg>
                <h3>Discord</h3>-->
              <p><a href="https://discordapp.com/invite/KYZ5JQB" class="btn btn-primary text-white discord">Rejoindre notre serveur</a></p>
            </div>


            <div class="col-md-4 center">
              <!--<i class="fab fa-facebook-messenger large-icon messenger-color"></i>-->
              <svg class="svg-inline--fa fa-facebook-messenger fa-w-14 large-icon messenger-color" aria-hidden="true" data-prefix="fab" width="50" data-icon="facebook-messenger" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                <path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path>
              </svg>
              <h3>Facebook Messenger</h3>
              <p><a href="https://www.facebook.com/ADEPTInformatique/" class="btn btn-primary text-white">Envoyer un message</a></p>
            </div>


            <div class="col-md-4 right">
              <svg class="svg-inline--fa fa-discord large-icon green" aria-hidden="true"  width="50" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M494.586 164.516c-4.697-3.883-111.723-89.95-135.251-108.657C337.231 38.191 299.437 0 256 0c-43.205 0-80.636 37.717-103.335 55.859-24.463 19.45-131.07 105.195-135.15 108.549A48.004 48.004 0 0 0 0 201.485V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V201.509a48 48 0 0 0-17.414-36.993zM464 458a6 6 0 0 1-6 6H54a6 6 0 0 1-6-6V204.347c0-1.813.816-3.526 2.226-4.665 15.87-12.814 108.793-87.554 132.364-106.293C200.755 78.88 232.398 48 256 48c23.693 0 55.857 31.369 73.41 45.389 23.573 18.741 116.503 93.493 132.366 106.316a5.99 5.99 0 0 1 2.224 4.663V458zm-31.991-187.704c4.249 5.159 3.465 12.795-1.745 16.981-28.975 23.283-59.274 47.597-70.929 56.863C336.636 362.283 299.205 400 256 400c-43.452 0-81.287-38.237-103.335-55.86-11.279-8.967-41.744-33.413-70.927-56.865-5.21-4.187-5.993-11.822-1.745-16.981l15.258-18.528c4.178-5.073 11.657-5.843 16.779-1.726 28.618 23.001 58.566 47.035 70.56 56.571C200.143 320.631 232.307 352 256 352c23.602 0 55.246-30.88 73.41-45.389 11.994-9.535 41.944-33.57 70.563-56.568 5.122-4.116 12.601-3.346 16.778 1.727l15.258 18.526z" class=""></path>
              </svg>
              <h3>Courriel</h3>
              <p><a href="mailto:adept.informatique.cem@gmail.com" id="emailbtn" class="btn btn-primary text-white">Envoyer un Courriel</a></p>
            </div>
          </div>
            <br>
          <div class="form">
            <form action="controller/sendForm.php" method="post" role="form" class="contactForm">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required minlength="4"/>
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse courriel"  required/>
                  <div class="validation"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet du message" required/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Votre message" required minlength="10"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>
        </div>
      </section>
      <!-- #contact -->
    </main>
    <!--==========================
        Pied de page
    ============================-->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-info">
              <img src="img/badge.png" id="footer-logo">
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Liens utiles</h4>
              <ul>
                <li><i class="ion-ios-arrow-right"></i> <a href="./hoodies/index.php">Réserver un hoodie</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="http://adeptinfo.ca/lan">Le LAN de l'ADEPT</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="#about" class="btn-get-started scrollto">À propos</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="#services" class="btn-get-started scrollto">Nos services</a></li>
                                <li><i class="ion-ios-arrow-right"></i> <a href="https://github.com/ADEPT-Informatique/Charte/blob/master/README.md" class="btn-get-started scrollto">Charte de l'ADEPT</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-contact">
              <h4>Visitez-nous</h4>
              <p>
                945 chemin Chambly, Longueuil<br>
                Local F-041, CEM,<br>
                Quebec, Canada <br>
                <a href="mailto:adept.informatique.cem@gmail.com">Nous écrire par courriel...</a>
              </p>
              <div class="social-links">
                <!--
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    -->
                <a href="https://www.facebook.com/ADEPTInformatique/" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://github.com/ADEPT-Informatique" class="git-hub"><i class="fa fa-github"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-newsletter">
              <h4>Infolettre</h4>
              <p>Inscrivez-vous afin de recevoir des nouvelles de nos événements et activités !</p>
              <form action="controller/subscribe.php" method="post">
                <input type="email" name="email" placeholder="Email" required><input type="submit"  value="S'abonner">
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          &copy; Copyright 2018 <strong class="green">ADEPT Informatique</strong>. Tous droits réservés.
        </div>
        <div class="credits">
            Ce site web est <a href="https://github.com/adept-informatique/adeptinfo.ca">open-source</a>. Merci à <a href="https://github.com/ADEPT-Informatique/adeptinfo.ca#remerciements">tous ceux qui y ont collaboré</a> !
			<br><span class="black">Why do Java programmers wear glasses ? Because they can't C# ;)</span>
		</div>
      </div>
    </footer>
    <!-- #footer -->
    <!-- Bouton retourner en haut <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->
    <!-- JavaScript Libraries -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/jquery.easing/jquery.easing.min.js"></script>
    <script src="node_modules/superfish/dist/js/hoverIntent.js"></script>
    <script src="node_modules/superfish/dist/js/superfish.min.js"></script>
    <script src="node_modules/wow.js/dist/wow.min.js"></script>
    <script src="node_modules/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="node_modules/counterup/jquery.counterup.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="node_modules/isotope-layout/dist/isotope.pkgd.min.js"></script>
    <script src="node_modules/lightbox2/dist/js/lightbox.min.js"></script>
    <script src="node_modules/jquery-touchswipe/jquery.touchSwipe.min.js"></script>
    <script src="js/konami.js?v=1.1"></script>
    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
  </body>
</html>
