<?php
require_once '../vendor/autoload.php';
?>
<!doctype html>
<html lang="fr">
  <head>
    <title><?php echo $title; ?></title>
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
    <?php if($current == "work"): ?>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <?php endif; ?>
  </head>
  <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand no-deco" href="/fr/home-fr"><span><strong>Nina Presotto</strong></span><span style="display:block">Senior Developeur Wordpress</span></a>
        <div class="gitnav mr-2">
          <a href="https://github.com/supersonicBlonde" class="no-deco">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 261 258" >
              <title>GitHub-Mark-ai</title>
              <g>
                <g>
                  <path class="s0" d="m251 131.7c0 53.3-34.6 98.6-82.5 114.6-6.2 1.1-8.3-2.6-8.3-5.8 0-4 0.1-17 0.1-33.2 0-11.3-3.8-18.6-8.2-22.4 26.9-2.9 55.2-13.2 55.2-59.5 0-13.2-4.7-24-12.5-32.5 1.3-3 5.4-15.3-1.1-31.9 0 0-10.2-3.3-33.2 12.4-9.7-2.7-20-4.1-30.3-4.1-10.2 0-20.6 1.4-30.2 4.1-23.1-15.7-33.2-12.4-33.2-12.4-6.6 16.6-2.5 28.9-1.2 31.9-7.7 8.5-12.4 19.3-12.4 32.5 0 46.2 28.2 56.6 55 59.6-3.5 3.1-6.6 8.4-7.7 16.2-6.9 3.1-24.4 8.4-35.1-10 0 0-6.4-11.6-18.5-12.5 0 0-11.8-0.1-0.9 7.4 0 0 7.9 3.7 13.4 17.6 0 0 7.1 21.6 40.7 14.3 0.1 10.1 0.2 19.6 0.2 22.5 0 3.1-2.2 6.9-8.3 5.8-48-16-82.6-61.3-82.6-114.6 0-66.7 54.1-120.8 120.8-120.8 66.7 0 120.8 54.1 120.8 120.8z"/>
                  <path  class="s0" d="m55.2 184.3c-0.3 0.6-1.2 0.8-2.1 0.4-0.9-0.4-1.4-1.2-1.1-1.8 0.3-0.7 1.2-0.8 2.1-0.4 0.9 0.4 1.4 1.2 1.1 1.8z"/>
                  <path  class="s0" d="m60.1 189.8c-0.6 0.5-1.7 0.2-2.5-0.6-0.8-0.8-0.9-2-0.3-2.5 0.6-0.5 1.6-0.3 2.4 0.5 0.8 0.9 1 2 0.4 2.6z"/>
                  <path  class="s0" d="m64.8 196.7c-0.7 0.5-1.9 0-2.7-1-0.7-1.1-0.7-2.4 0.1-2.9 0.7-0.5 1.9-0.1 2.7 1 0.7 1.1 0.7 2.4-0.1 2.9z"/>
                  <path  class="s0" d="m71.4 203.4c-0.7 0.8-2.1 0.6-3.1-0.4-1.1-1-1.4-2.4-0.7-3.1 0.6-0.7 2.1-0.5 3.1 0.4 1.1 1 1.4 2.4 0.7 3.1z"/>
                  <path  class="s0" d="m80.4 207.3c-0.3 1-1.7 1.4-3.1 1-1.3-0.4-2.2-1.5-1.9-2.5 0.2-0.9 1.6-1.4 3-0.9 1.4 0.4 2.2 1.5 2 2.4z"/>
                  <path  class="s0" d="m90.2 208.1c0.1 1-1.1 1.8-2.5 1.8-1.5 0-2.6-0.8-2.6-1.8 0-1 1.1-1.8 2.5-1.8 1.5 0 2.6 0.8 2.6 1.8z"/>
                  <path  class="s0" d="m99.4 206.5c0.2 1-0.8 2-2.2 2.2-1.4 0.3-2.7-0.3-2.9-1.3-0.2-1 0.9-2 2.3-2.2 1.4-0.3 2.7 0.3 2.8 1.3z"/>
                </g>
              </g>
            </svg>
          </a>
        </div>
        <a class="no-deco flagnav m-2"  href="/">
          <img src="../dist/img/en-flag.png" alt="English" width="18" height="12">
        </a>

        <div class="navbar-toggler second-button" role="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <div class="animated-icon2"><span></span><span></span><span></span></div>
        </div>
        <div class="nav-slider">
          <ul class="nav navbar-nav ml-auto mr-3">
          <!-- <li class="nav-item active">
              <a class="nav-link no-deco" href="accueil">Accueil <span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link no-deco <?php if($current == 'portfolio'){ echo 'active';} ?>" href="portfolio">Portfolio</a>
            </li>
         <!--    <li class="nav-item">
              <a class="nav-link no-deco" href="services">Services</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link no-deco <?php if($current == 'a-propos'){ echo 'active';} ?>" href="a-propos">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link no-deco <?php if($current == 'contact'){ echo 'active';} ?>" href="contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="no-deco flag"  href="https://ninapresotto.com/">
                <img src="../dist/img/en-flag.png" alt="English" width="18" height="12">
              </a>
            </li>
          </ul>
          <div class="git">
            <a href="https://github.com/supersonicBlonde" class="no-deco">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 261 258" >
                <title>GitHub-Mark-ai</title>
                <g>
                  <g>
                    <path class="s0" d="m251 131.7c0 53.3-34.6 98.6-82.5 114.6-6.2 1.1-8.3-2.6-8.3-5.8 0-4 0.1-17 0.1-33.2 0-11.3-3.8-18.6-8.2-22.4 26.9-2.9 55.2-13.2 55.2-59.5 0-13.2-4.7-24-12.5-32.5 1.3-3 5.4-15.3-1.1-31.9 0 0-10.2-3.3-33.2 12.4-9.7-2.7-20-4.1-30.3-4.1-10.2 0-20.6 1.4-30.2 4.1-23.1-15.7-33.2-12.4-33.2-12.4-6.6 16.6-2.5 28.9-1.2 31.9-7.7 8.5-12.4 19.3-12.4 32.5 0 46.2 28.2 56.6 55 59.6-3.5 3.1-6.6 8.4-7.7 16.2-6.9 3.1-24.4 8.4-35.1-10 0 0-6.4-11.6-18.5-12.5 0 0-11.8-0.1-0.9 7.4 0 0 7.9 3.7 13.4 17.6 0 0 7.1 21.6 40.7 14.3 0.1 10.1 0.2 19.6 0.2 22.5 0 3.1-2.2 6.9-8.3 5.8-48-16-82.6-61.3-82.6-114.6 0-66.7 54.1-120.8 120.8-120.8 66.7 0 120.8 54.1 120.8 120.8z"/>
                    <path class="s0" d="m55.2 184.3c-0.3 0.6-1.2 0.8-2.1 0.4-0.9-0.4-1.4-1.2-1.1-1.8 0.3-0.7 1.2-0.8 2.1-0.4 0.9 0.4 1.4 1.2 1.1 1.8z"/>
                    <path  class="s0" d="m60.1 189.8c-0.6 0.5-1.7 0.2-2.5-0.6-0.8-0.8-0.9-2-0.3-2.5 0.6-0.5 1.6-0.3 2.4 0.5 0.8 0.9 1 2 0.4 2.6z"/>
                    <path  class="s0" d="m64.8 196.7c-0.7 0.5-1.9 0-2.7-1-0.7-1.1-0.7-2.4 0.1-2.9 0.7-0.5 1.9-0.1 2.7 1 0.7 1.1 0.7 2.4-0.1 2.9z"/>
                    <path  class="s0" d="m71.4 203.4c-0.7 0.8-2.1 0.6-3.1-0.4-1.1-1-1.4-2.4-0.7-3.1 0.6-0.7 2.1-0.5 3.1 0.4 1.1 1 1.4 2.4 0.7 3.1z"/>
                    <path  class="s0" d="m80.4 207.3c-0.3 1-1.7 1.4-3.1 1-1.3-0.4-2.2-1.5-1.9-2.5 0.2-0.9 1.6-1.4 3-0.9 1.4 0.4 2.2 1.5 2 2.4z"/>
                    <path  class="s0" d="m90.2 208.1c0.1 1-1.1 1.8-2.5 1.8-1.5 0-2.6-0.8-2.6-1.8 0-1 1.1-1.8 2.5-1.8 1.5 0 2.6 0.8 2.6 1.8z"/>
                    <path  class="s0" d="m99.4 206.5c0.2 1-0.8 2-2.2 2.2-1.4 0.3-2.7-0.3-2.9-1.3-0.2-1 0.9-2 2.3-2.2 1.4-0.3 2.7 0.3 2.8 1.3z"/>
                  </g>
                </g>
              </svg>
            </a>
          </div>
        </div>
        <div class="nav-mask"></div>
      </nav>
    </header>