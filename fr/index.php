<!-- DESIGNED and DEVELOPED by Nina Presotto labs (https://ninapresotto.com) -->
<?php

require_once '../vendor/autoload.php';

$form = new Formr\Formr();
$form->required = '*';

// check if the form has been submitted
if ($form->submitted())
{
    // get our form values and assign them to a variable
    $data = $form->validate('Nom, Email, Message');

    // show a success message if no errors
    if($form->ok()) {
        $form->success_message = "Merci, {$data['name']}!";
        $headers = 'From: contact@ninapresotto.com' . "\r\n" .
        'Reply-To: '.$data["email"].'' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        echo "<script>document.write( window.location.href = '#contact')</script>";
        mail(
          'contact@ninapresotto.com',
          'A new message from ninapresotto.com',
          $data['name']." ".$data['name']." ".$data['email'],
          $headers
        );
    }
}
?>
<! doctype html>
<html>
  <head>
    <title>Nina Presotto | Senior Wordpress Developer</title>
    <meta content="Une développeuse WordPress hautement qualifiée et compétente avec plus de 20 ans d'expérience professionnelle dans tous les aspects de la création de sites Web WordPress, y compris les thèmes personnalisés, les plug-ins personnalisés. Cela inclut les applications d'entreprise, éditoriales ou de commerce électronique." name="description">
    <meta content="width=device-width, maximum-scale=1.0" name="viewport">
    <meta content="Nina Presotto | Senior Wordpress Developer" property="og:title">
    <meta content="Nina Presotto Senior Wordress developer" property="og:site_name">
    <meta content="website" property="og:type">
    <meta content="https://ninapresotto.com/" property="og:url">
    <link rel="alternate" href="https://ninapresotto.com" hreflang="en" />
    <link rel="alternate" href="https://ninapresotto.com/fr/" hreflang="fr" />
    <link href="/favicon.png" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto+Mono:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../dist/css/all.min.css">
    <link rel="stylesheet" href="../dist/css/styles.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="../dist/js/jquery.scrollify.js"></script>
    <script type="text/javascript" src="../dist/js/scripts.min.js"></script>
  </head>
  <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand no-deco" href="/fr"><span><strong>Nina Presotto</strong></span><br><span>Senior Developeur Wordpress</span></a>
        <div class="gitnav mr-2">
          <a href="https://github.com/supersonicBlonde" class="no-deco">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 261 258" >
              <title>GitHub-Mark-ai</title>
              <g id="Layer 1">
                <g id="&lt;Group&gt;">
                  <path id="&lt;Path&gt;" class="s0" d="m251 131.7c0 53.3-34.6 98.6-82.5 114.6-6.2 1.1-8.3-2.6-8.3-5.8 0-4 0.1-17 0.1-33.2 0-11.3-3.8-18.6-8.2-22.4 26.9-2.9 55.2-13.2 55.2-59.5 0-13.2-4.7-24-12.5-32.5 1.3-3 5.4-15.3-1.1-31.9 0 0-10.2-3.3-33.2 12.4-9.7-2.7-20-4.1-30.3-4.1-10.2 0-20.6 1.4-30.2 4.1-23.1-15.7-33.2-12.4-33.2-12.4-6.6 16.6-2.5 28.9-1.2 31.9-7.7 8.5-12.4 19.3-12.4 32.5 0 46.2 28.2 56.6 55 59.6-3.5 3.1-6.6 8.4-7.7 16.2-6.9 3.1-24.4 8.4-35.1-10 0 0-6.4-11.6-18.5-12.5 0 0-11.8-0.1-0.9 7.4 0 0 7.9 3.7 13.4 17.6 0 0 7.1 21.6 40.7 14.3 0.1 10.1 0.2 19.6 0.2 22.5 0 3.1-2.2 6.9-8.3 5.8-48-16-82.6-61.3-82.6-114.6 0-66.7 54.1-120.8 120.8-120.8 66.7 0 120.8 54.1 120.8 120.8z"/>
                  <path id="&lt;Compound Path&gt;" class="s0" d="m55.2 184.3c-0.3 0.6-1.2 0.8-2.1 0.4-0.9-0.4-1.4-1.2-1.1-1.8 0.3-0.7 1.2-0.8 2.1-0.4 0.9 0.4 1.4 1.2 1.1 1.8z"/>
                  <path id="&lt;Compound Path&gt;" class="s0" d="m60.1 189.8c-0.6 0.5-1.7 0.2-2.5-0.6-0.8-0.8-0.9-2-0.3-2.5 0.6-0.5 1.6-0.3 2.4 0.5 0.8 0.9 1 2 0.4 2.6z"/>
                  <path id="&lt;Compound Path&gt;" class="s0" d="m64.8 196.7c-0.7 0.5-1.9 0-2.7-1-0.7-1.1-0.7-2.4 0.1-2.9 0.7-0.5 1.9-0.1 2.7 1 0.7 1.1 0.7 2.4-0.1 2.9z"/>
                  <path id="&lt;Compound Path&gt;" class="s0" d="m71.4 203.4c-0.7 0.8-2.1 0.6-3.1-0.4-1.1-1-1.4-2.4-0.7-3.1 0.6-0.7 2.1-0.5 3.1 0.4 1.1 1 1.4 2.4 0.7 3.1z"/>
                  <path id="&lt;Compound Path&gt;" class="s0" d="m80.4 207.3c-0.3 1-1.7 1.4-3.1 1-1.3-0.4-2.2-1.5-1.9-2.5 0.2-0.9 1.6-1.4 3-0.9 1.4 0.4 2.2 1.5 2 2.4z"/>
                  <path id="&lt;Compound Path&gt;" class="s0" d="m90.2 208.1c0.1 1-1.1 1.8-2.5 1.8-1.5 0-2.6-0.8-2.6-1.8 0-1 1.1-1.8 2.5-1.8 1.5 0 2.6 0.8 2.6 1.8z"/>
                  <path id="&lt;Compound Path&gt;" class="s0" d="m99.4 206.5c0.2 1-0.8 2-2.2 2.2-1.4 0.3-2.7-0.3-2.9-1.3-0.2-1 0.9-2 2.3-2.2 1.4-0.3 2.7 0.3 2.8 1.3z"/>
                </g>
              </g>
            </svg>
          </a>
        </div>
        <a class="no-deco flagnav m-2"  href="/">
          <img src="../dist/img/en-flag.png" alt="English" width="18" height="12">
        </a>

        <button class="navbar-toggler second-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent23"
            aria-controls="navbarSupportedContent23" aria-expanded="false" aria-label="Toggle navigation">
          <div class="animated-icon2"><span></span><span></span><span></span></div>
        </button>
        <div class="nav-slider">
          <ul class="nav navbar-nav ml-auto mr-3">
          <li class="nav-item active">
              <a class="nav-link no-deco" href="accueil">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link no-deco" href="portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link no-deco" href="services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link no-deco" href="a-propos">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link no-deco" href="contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="no-deco flag"  href="https://ninapresotto.com/">
                <img src="../dist/img/en-flag.png" alt="English" width="18" height="12">
              </a>
            </li>
          </ul>
          <div class="git">
            <a href="https://github.com/supersonicBlonde" class="no-deco">
              <svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 261 258" >
                <title>GitHub-Mark-ai</title>
                <g id="Layer 1">
                  <g id="&lt;Group&gt;">
                    <path id="&lt;Path&gt;" class="s0" d="m251 131.7c0 53.3-34.6 98.6-82.5 114.6-6.2 1.1-8.3-2.6-8.3-5.8 0-4 0.1-17 0.1-33.2 0-11.3-3.8-18.6-8.2-22.4 26.9-2.9 55.2-13.2 55.2-59.5 0-13.2-4.7-24-12.5-32.5 1.3-3 5.4-15.3-1.1-31.9 0 0-10.2-3.3-33.2 12.4-9.7-2.7-20-4.1-30.3-4.1-10.2 0-20.6 1.4-30.2 4.1-23.1-15.7-33.2-12.4-33.2-12.4-6.6 16.6-2.5 28.9-1.2 31.9-7.7 8.5-12.4 19.3-12.4 32.5 0 46.2 28.2 56.6 55 59.6-3.5 3.1-6.6 8.4-7.7 16.2-6.9 3.1-24.4 8.4-35.1-10 0 0-6.4-11.6-18.5-12.5 0 0-11.8-0.1-0.9 7.4 0 0 7.9 3.7 13.4 17.6 0 0 7.1 21.6 40.7 14.3 0.1 10.1 0.2 19.6 0.2 22.5 0 3.1-2.2 6.9-8.3 5.8-48-16-82.6-61.3-82.6-114.6 0-66.7 54.1-120.8 120.8-120.8 66.7 0 120.8 54.1 120.8 120.8z"/>
                    <path id="&lt;Compound Path&gt;" class="s0" d="m55.2 184.3c-0.3 0.6-1.2 0.8-2.1 0.4-0.9-0.4-1.4-1.2-1.1-1.8 0.3-0.7 1.2-0.8 2.1-0.4 0.9 0.4 1.4 1.2 1.1 1.8z"/>
                    <path id="&lt;Compound Path&gt;" class="s0" d="m60.1 189.8c-0.6 0.5-1.7 0.2-2.5-0.6-0.8-0.8-0.9-2-0.3-2.5 0.6-0.5 1.6-0.3 2.4 0.5 0.8 0.9 1 2 0.4 2.6z"/>
                    <path id="&lt;Compound Path&gt;" class="s0" d="m64.8 196.7c-0.7 0.5-1.9 0-2.7-1-0.7-1.1-0.7-2.4 0.1-2.9 0.7-0.5 1.9-0.1 2.7 1 0.7 1.1 0.7 2.4-0.1 2.9z"/>
                    <path id="&lt;Compound Path&gt;" class="s0" d="m71.4 203.4c-0.7 0.8-2.1 0.6-3.1-0.4-1.1-1-1.4-2.4-0.7-3.1 0.6-0.7 2.1-0.5 3.1 0.4 1.1 1 1.4 2.4 0.7 3.1z"/>
                    <path id="&lt;Compound Path&gt;" class="s0" d="m80.4 207.3c-0.3 1-1.7 1.4-3.1 1-1.3-0.4-2.2-1.5-1.9-2.5 0.2-0.9 1.6-1.4 3-0.9 1.4 0.4 2.2 1.5 2 2.4z"/>
                    <path id="&lt;Compound Path&gt;" class="s0" d="m90.2 208.1c0.1 1-1.1 1.8-2.5 1.8-1.5 0-2.6-0.8-2.6-1.8 0-1 1.1-1.8 2.5-1.8 1.5 0 2.6 0.8 2.6 1.8z"/>
                    <path id="&lt;Compound Path&gt;" class="s0" d="m99.4 206.5c0.2 1-0.8 2-2.2 2.2-1.4 0.3-2.7-0.3-2.9-1.3-0.2-1 0.9-2 2.3-2.2 1.4-0.3 2.7 0.3 2.8 1.3z"/>
                  </g>
                </g>
              </svg>
            </a>
          </div>
        </div>
        <div class="nav-mask"></div>
      </nav>
    </header>
    <section class="panel" id="home-section" data-section-name="accueil">
      <div class="section-content">
        <div class="container">
          <div class="row">
            <div class="col-12 mt-md-3">
              <h1 class="mt-md-5 headline headline--is-gigantic headline--is-light no-pb uppercase">Je transforme vos idées en un site web rapide et fonctionnel.</h1>
              <h2 class="headline headline--is-small">Spécialisée dans la création de <span class="color-accent bold">thèmes wordpress sur mesure.</span></h2>
            </div><!-- .col -->
          </div><!-- .row -->
          <div class="row mt-5">
            <div class="col-12">
              <p class="subtitle">Des questions sur votre projet ?<br>
              </span> <a href="#" class="scrollContact">Laissez une message,</a> je réponds à toutes vos questions.</p>
          </div><!-- .col -->
          </div><!-- .row -->
        </div><!-- .container -->
      </div><!-- .section-content -->
      <div class="text-center">
        <a href="#" class="scroll"></a>
      </div>
    </section><!-- section -->
    <section class="panel" id="services-section" data-section-name="services">
      <div class="section-content">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-8 col-12">
              <h2 class="headline uppercase">Ce que je peux faire pour vous</h2>
              <h3 class="headline headline--is-small my-3 pl-3">Pour tous types de sites<br><span class="small">(vitrine, ecommerce, editorial, ...) :</span></h3>
              <ul>
                <li>Creation de <strong>themes wordpress sur mesure</strong> conforme à votre design et basées sur vos spécifications.</li>
                <li>Sites légers, chargement rapide</li>
                <li>Interface d'administration (Back Office) permettant une mise à jour facile de tous les contenus du site.</li>
                <li>Ajout de fonctionnalités sur site existant.</li>
                <li>Développement de plugins sur mesure.</li>
                <li>Debugging, résolution de problèmes techniques, assistance</li>
                <li>Code efficace, élégant et optimisé.</li>
              </ul>
              <div class="my-5 pl-lg-5 ">
                <a href="#" class="scrollContact no-deco button button-services" style="color: #e3b505; background-color:#3e5c76;">Parlons de votre projet !</a>
              </div>  
            </div>
            <div class="col-md-4 col-12 pt-md-5">
              <div class="logos-container p-md-3 justify-content-center d-flex flex-wrap">
                <div><img src="../assets/logos/HTML5_Logo.svg" alt="Official logo Html5"></div>
                <div><img src="../assets/logos/css3-seeklogo.com_v2.svg" alt="Official logo CSS3" ></div>
                <div><img src="../assets/logos/JavaScript_logo.svg" alt="Logo Javascript"></div>
                <div><img src="../assets/logos/php-logo_v2.svg" alt="Official logo php"></div>
                <div><img src="../assets/logos/logo_woocommerce_icon.svg" alt="Official logo Woocommerce" ></div>
                <div><img src="../assets/logos/WordPress-logotype-standard_v2.svg" alt="Official logo Wordpress"></div>
                <div><img src="../assets/logos/JQuery_logo_v2.svg" alt="Official logo jQuery"></div><div><img src="../assets/logos/node_js_logo.svg" alt="Official logo Node"></div>
                <div><img src="../assets/logos/mysql_logo.svg" alt="Official logo mySQL"></div>
                <div><img src="../assets/logos/react_js_logo.svg" alt="Official logo React"></div>
                <div><img src="../assets/logos/gulp-seeklogo.com.svg" alt="Official logo Gulp"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="panel" id="about-section" data-section-name="a-propos">
      <div class="section-content">
        <div class="container">
          <div class="row ">
            <div class="col-md-4 col-12">
              <div class="item">
                <div class="polaroid">
                  <img class="grayscale" src="../dist/img/ninaprofil.jpg" alt="Nina Presotto portrait">
                </div>
              </div>
            </div>
            <div class="col-md-8 col-12">
              <h2 class="headline uppercase">A propos</h2>
              <p><strong>Senior WordPress developpeur</strong> avec 20 ans d'expérience professionnelle en création de sites web incluant des themes et plugins wordpress sur mesure.</p>
              <p>La connaissance du <span>langage PHP</span>, qui constitue la base de wordpress et l'expérience de mise en oeuvre de solutions techniques répondant à vos besoins vous garantit un service irréprochable.</p>  
              <p>La maîtrise des outils du développement front-end vous assure un rendu final conforme à votre design orignal.</p>  
              <p>Expérimentée dans la relation client, je vous aide à trouver la solution qui répond à votre propre problématique. Je suis disponible tout au long du projet et au delà pour assurer le succès et la maintenance du projet.</p>
              <p>Basée en France.</p>
              <div class="my-5">
                <a href="#" class="scrollContact no-deco button button-about" style="color: white; background-color:#4b7a7a;;">Contactez-moi</a>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="panel" id="work-section" data-section-name="portfolio">
      <div class="section-content">
        <div class="container">
          <div class="row pt-3">
            <div class="col-12">
              <h2 class="headline uppercase">PORTFOLIO</h2>
             <!--  <h3>Tailor made Worpdress Themes</h3> -->

                    <div class="work-slider mt-5">
                      <div class="card bg-primary shadow-soft">
                        <div class="card-header p-3">
                        <a href="https://fraaiberlin.de" class="no-deco zoom" target="_blank">
                          <div class="overlay">
                            <img src="../dist/img/work/fraaiberlin.jpg" class="card-img-top rounded" alt="Fraai Berlin">
                            </div>
                          </a>
                          </div>
                          <div class="card-body">
                              <span class="h6 icon-tertiary small"><span class="fas fa-medal mr-2"></span></span>
                              <h4 class="card-title mt-3"><a href="https://fraaiberlin.de" target="_blank" class="no-deco">Fraai Berlin</a></h4>
                              <p class="card-text"></p>
                              <a href="https://fraaiberlin.de" target="_blank">See the project</a>
                          </div>
                      </div>
                      <div class="card bg-primary shadow-soft">
                        <div class="card-header p-3">
                        <a href="https://getsharedcontacts.com" class="no-deco zoom" target="_blank">
                          <div class="overlay">
                            <img src="../dist/img/work/getsharedcontact.jpg" class="card-img-top rounded" alt="Get Shared Contacts">
                            </div>
                          </a>
                          </div>
                          <div class="card-body">
                              <span class="h6 icon-tertiary small"><span class="fas fa-medal mr-2"></span></span>
                              <h4 class="card-title mt-3"><a href="https://getsharedcontacts.com" target="_blank" class="no-deco">Get Shared Contacts</a></h4>
                              <p class="card-text"></p>
                              <a href="https://getsharedcontacts.com" target="_blank">See the project</a>
                          </div>
                      </div>
                      <div class="card bg-primary shadow-soft">
                        <div class="card-header p-3">
                        <a href="https://www.ibisstyles-stories.com/" class="no-deco zoom" target="_blank">
                        <div class="overlay">
                          <img src="../dist/img/work/ibis-style.jpg" class="card-img-top rounded" alt="Ibis Styles"></div>
                        </a>
                          
                          </div>
                          <div class="card-body">
                              <span class="h6 icon-tertiary small"><span class="fas fa-medal mr-2"></span></span>
                              <h4 class="card-title mt-3"><a href="https://www.ibisstyles-stories.com/" target="_blank" class="no-deco">Ibis Style Stories</a></h4>
                              <p class="card-text"></p>
                              <a href="https://www.ibisstyles-stories.com/" target="_blank">See the project</a>
                          </div>
                      </div>
                      <div class="card bg-primary shadow-soft">
                        <div class="card-header p-3">
                        <a href="https://ibis-rooms.com/music-room-by-ibis/" class="no-deco zoom" target="_blank">
                        <div class="overlay">
                          <img src="../dist/img/work/ibis-music-room.jpg" class="card-img-top rounded" alt="Ibis Music Rooms"></div>
                        </a>
                          
                          </div>
                          <div class="card-body">
                              <span class="h6 icon-tertiary small"><span class="fas fa-medal mr-2"></span></span>
                              <h4 class="card-title mt-3"><a href="https://ibis-rooms.com/music-room-by-ibis/" target="_blank" class="no-deco">Ibis Music Rooms</a></h4>
                              <p class="card-text"></p>
                              <a href="https://ibis-rooms.com/music-room-by-ibis/" target="_blank">See the project</a>
                          </div>
                      </div>
                      <div class="card bg-primary shadow-soft">
                        <div class="card-header p-3">
                        <a href="https://www.vracsdelestuaire.fr/" class="no-deco zoom" target="_blank">
                        <div class="overlay">
                          <img src="../dist/img/work/vracs-de-l-estuaire.jpg" class="card-img-top rounded" alt="Vracs de l'Estuaire"></div>
                        </a>
                          
                          </div>
                          <div class="card-body">
                              <span class="h6 icon-tertiary small"><span class="fas fa-medal mr-2"></span></span>
                              <h4 class="card-title mt-3"><a href="https://www.vracsdelestuaire.fr/" target="_blank" class="no-deco">Vracs de l'Estuaire</a></h4>
                              <p class="card-text"></p>
                              <a href="https://www.vracsdelestuaire.fr/" target="_blank">See the project</a>
                          </div>
                      </div>
                      <div class="card bg-primary shadow-soft">
                        <div class="card-header p-3">
                        <a href="https://purnatur.preprod2.me/" class="no-deco zoom" target="_blank">
                        <div class="overlay">
                          <img src="../dist/img/work/purnatur.jpg" class="card-img-top rounded" alt="Purnatur"></div>
                        </a>
                          
                          </div>
                          <div class="card-body">
                              <span class="h6 icon-tertiary small"><span class="fas fa-medal mr-2"></span></span>
                              <h4 class="card-title mt-3"><a href="https://purnatur.preprod2.me/" target="_blank" class="no-deco">PurNatur</a></h4>
                              <p class="card-text"></p>
                              <a href="https://purnatur.preprod2.me/" target="_blank">See the project</a>
                          </div>
                      </div>
                      <div class="card bg-primary shadow-soft">
                        <div class="card-header p-3">
                        <a href="https://www.ilestunefois.com/" class="no-deco zoom" target="_blank">
                        <div class="overlay">
                          <img src="../dist/img/work/ilestunefois.jpg" class="card-img-top rounded" alt="Il est une fois"></div>
                        </a>
                          
                          </div>
                          <div class="card-body">
                              <span class="h6 icon-tertiary small"><span class="fas fa-medal mr-2"></span></span>
                              <h4 class="card-title mt-3"><a href="https://www.ilestunefois.com/" target="_blank" class="no-deco">Il est une fois</a></h4>
                              <p class="card-text"></p>
                              <a href="https://www.ilestunefois.com/" target="_blank">See the project</a>
                          </div>
                      </div>
                      <div class="card bg-primary shadow-soft">
                        <div class="card-header p-3">
                        <a href="https://www.armide-avocats.com/" class="no-deco zoom" target="_blank">
                        <div class="overlay">
                          <img src="../dist/img/work/armide.jpg" class="card-img-top rounded" alt="Armide Avocats"></div>
                        </a>
                          
                          </div>
                          <div class="card-body">
                              <span class="h6 icon-tertiary small"><span class="fas fa-medal mr-2"></span></span>
                              <h4 class="card-title mt-3"><a href="https://www.armide-avocats.com/" target="_blank" class="no-deco">Armide avocats</a></h4>
                              <p class="card-text"></p>
                              <a href="https://www.armide-avocats.com/" target="_blank">See the project</a>
                          </div>
                      </div>
                      <div class="card bg-primary shadow-soft">
                        <div class="card-header p-3">
                        <a href="http://www.essaouira.thinkers-doers.com/" class="no-deco zoom" target="_blank">
                        <div class="overlay">
                          <img src="../dist/img/work/essaouira.jpg" class="card-img-top rounded" alt="Thinkers & Doers"></div>
                        </a>
                          
                          </div>
                          <div class="card-body">
                              <span class="h6 icon-tertiary small"><span class="fas fa-medal mr-2"></span></span>
                              <h4 class="card-title mt-3"><a href="http://www.essaouira.thinkers-doers.com/" target="_blank" class="no-deco">Thinkers & Doers</a></h4>
                              <p class="card-text"></p>
                              <a href="http://www.essaouira.thinkers-doers.com/" target="_blank">See the project</a>
                          </div>
                      </div>
                      <div class="card bg-primary shadow-soft">
                        <div class="card-header p-3">
                        <a href="https://athletica.media/" class="no-deco zoom" target="_blank">
                        <div class="overlay">
                          <img src="../dist/img/work/athletica.jpg" class="card-img-top rounded" alt="Athletica Magazine"></div>
                        </a>
                          
                          </div>
                          <div class="card-body">
                              <span class="h6 icon-tertiary small"><span class="fas fa-medal mr-2"></span></span>
                              <h4 class="card-title mt-3"><a href="https://athletica.media/" target="_blank" class="no-deco">Athletica Magazine</a></h4>
                              <p class="card-text"></p>
                              <a href="https://athletica.media/" target="_blank">See the project</a>
                          </div>
                      </div>
                    </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="panel" id="contact-section" data-section-name="contact">
      <div class="section-content">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-12 offset-md-3">
              <h2 class="headline uppercase">Contact</h2>
              <p>Vous avez un projet en tête ? Parlons-en.</p>
              <div class="inputs">
                <?php 
                 $form->create_form('Nom, Email, Message|textarea');
                 $form->messages(); 
                 ?> 
                <!-- <form method="post" action="inc/contactform.php">
                  <div>
                  <input type="text" placeholder="your name" required/>
                  </div>
                  <div>
                  <input type="email" id="input-email" required placeholder="example@test.com"/>
                  </div>
                  <div>
                    <textarea placeholder="your message" rows="8" required></textarea>
                  </div>
                  <div>
                    <button class="w-50" style="background-color:#5e565a;" type="submit">LOGIN</button>
                  </div>
                </form> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="tp-bullets" style="">
      <div class="tp-bullet" title="Accueil" style="top: 0px; left: 0px;"></div>
      <div class="tp-bullet" title="Services" style="top: 28px; left: 0px;"></div>
      <div class="tp-bullet" title="A propos" style="top: 56px; left: 0px;"></div>
      <div class="tp-bullet" title="Portfolio" style="top: 84px; left: 0px;"></div>
      <div class="tp-bullet" title="Contact" style="top: 112px; left: 0px;"></div>
    </div>
    <div id="upBtnContainer">
      <a href="#" onclick="topFunction()" class="no-deco" id="upBtn" title="Go to top">Top</a>
    </div>
  </body>
</html>
      