<!-- DESIGNED and DEVELOPED by Nina Presotto labs (https://ninapresotto.com) -->
<?php
require_once 'vendor/autoload.php';

$form = new Formr\Formr();
$form->required = '*';

// check if the form has been submitted
if ($form->submitted())
{
    // get our form values and assign them to a variable
    $data = $form->validate('Name, Email, Comments');

    // show a success message if no errors
    if($form->ok()) {
        $form->success_message = "Thank you, {$data['name']}!";
        $headers = 'From: contact@ninapresotto.com' . "\r\n" .
        'Reply-To: '.$data["email"].'' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        echo "<script>document.write( window.location.href = '#4')</script>";
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
    <title>Nina Presotto Labs | Integrating and coding websites</title>
    <meta content="I'm Nina Presotto, a passionate freelancer bringing your ideas to a fast functionnal website. I am experienced in developing web and desktop applications including full front end and tailored admin inerfaces. This includes corporate, editorial or ecommerce applications." name="description">
    <meta content="width=device-width, maximum-scale=1.0" name="viewport">
    <meta content="Nina Presotto Labs | Integrating and coding websites" property="og:title">
    <meta content="Nina Presotto Labs" property="og:site_name">
    <meta content="website" property="og:type">
    <meta content="https://ninapresotto.com/" property="og:url">
    <meta content="I'm Nina Presotto, a passionate freelancer bringing your ideas to a speed functionnal website. I am experienced in developing web and desktop applications including full front end and tailored admin interfaces. This includes corporate, editorial or ecommerce applications." property="og:description">
    <meta content="/icon.285cefea.png" property="og:image">
    <link href="/favicon.png" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto+Mono:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/styles.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="dist/js/jquery.scrollify.js"></script>
    <script type="text/javascript" src="dist/js/scripts.min.js"></script>
  </head>
  <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand no-deco" href="/"><strong>Nina Presotto</strong>&nbsp;Labs</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ml-auto">
            <li class="nav-item active">
              <a class="nav-link no-deco" href="home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link no-deco" href="services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link no-deco" href="about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link no-deco" href="contact">Say hello</a>
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
      </nav>
    </header>
    <section class="panel" id="home-section" data-section-name="home">
      <div class="section-content">
        <div class="container">
          <div class="row">
            <div class="col-12 mt-md-3">
              <h1 class="mt-md-5 headline headline--is-gigantic headline--is-light no-pb uppercase">I'm a freelancer bringing your ideas to a fast functionnal website</h1>
              <h2 class="headline headline--is-small">Specialized in tailor-made premium <span class="color-accent bold">wordpress themes</span></h2>
            </div><!-- .col -->
          </div><!-- .row -->
          <div class="row mt-5">
            <div class="col-12">
              <p class="subtitle"><a href="#" class="scrollContact">Be in touch.</a></span> I answer to all your questions.</p>
          </div><!-- .col -->
          </div><!-- .row -->
        </div><!-- .container -->
      </div><!-- .section-content -->
      <div class="text-center">
        <a href="#overview" class="scroll"></a>
      </div>
    </section><!-- section -->
    <section class="panel" id="services-section" data-section-name="services">
      <div class="section-content">
        <div class="container">
          <div class="row align-items-center pt-2 pt-md-5">
            <div class="col-md-8 col-12 pt-2 pt-md-5">
              <h2 class="headline uppercase">What can I do for you ?</h2>
              <h3 class="headline headline--is-small my-3 pl-3">Services for any types of sites:</h3>
              <ul>
                <li>Creation of custom premium wordpress themes based on your design</li>
                <li>Tailor-made back office to facilitate the edition of content</li>
                <li>Adding additional features to existing sites</li>
                <li>Development of custom plugins</li>
                <li>Efficient code, elegant and optimized</li>
              </ul>
              <div class="my-5 pl-5 ">
                <a href="#" class="scrollContact no-deco button" style="background-color:#3e5c76;">Let's talk about your project!</a>
              </div>  
            </div>
            <div class="col-md-4 col-12 pt-md-5">
              <div class="logos-container p-3 justify-content-center d-flex flex-wrap">
                <div><img src="assets/logos/HTML5_Logo.svg" alt="Official logo Html5"></div>
                <div><img src="assets/logos/css3-seeklogo.com_v2.svg" alt="Official logo CSS3" ></div>
                <div><img src="assets/logos/JavaScript_logo.svg" alt="Logo Javascript"></div>
                <div><img src="assets/logos/php-logo_v2.svg" alt="Official logo php"></div>
                <div><img src="assets/logos/logo_woocommerce_icon.svg" alt="Official logo Woocommerce" ></div>
                <div><img src="assets/logos/WordPress-logotype-standard_v2.svg" alt="Official logo Wordpress"></div>
                <div><img src="assets/logos/JQuery_logo_v2.svg" alt="Official logo jQuery"></div><div><img src="assets/logos/node_js_logo.svg" alt="Official logo Node"></div>
                <div><img src="assets/logos/mysql_logo.svg" alt="Official logo mySQL"></div>
                <div><img src="assets/logos/react_js_logo.svg" alt="Official logo React"></div>
                <div><img src="assets/logos/gulp-seeklogo.com.svg" alt="Official logo Gulp"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="panel" id="about-section" data-section-name="about">
      <div class="section-content">
        <div class="container">
          <div class="row pt-5">
            <div class="col-md-4 col-12 pt-2 pt-md-5">
              <div class="item">
                <div class="polaroid">
                  <img class="grayscale" src="dist/img/ninaprofil.jpg" alt="Nina Presotto portrait">
                </div>
              </div>
            </div>
            <div class="col-md-8 col-12 pt-2 pt-md-5">
              <h2 class="headline uppercase">About</h2>
              <p>The knowledge of the <span class="color-white">PHP language</span>, which constitutes the basis of <span class="color-white">wordpress,</span><br>+ the experience of implementing technical responses guarantees an <span class="color-white">irreproachable service.</span></p>    
              <p>I am <span class="color-white">highly experienced</span> technically and also in the relationship I have with my clients. I am permanently available throughout the mission and after the end of it to support you in the <span class="color-white">success of your project.</span></p>
              <div class="my-5">
                <a href="#" class="scrollContact no-deco button" style="background-color:#a54657;">Want to know more?</a>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="panel" id="contact-section" data-section-name="home">
      <div class="section-content">
        <div class="container">
          <div class="row pt-3 pt-md-5">
            <div class="col-md-6 col-12 offset-md-3">
              <h2 class="headline uppercase">Say Hello</h2>
              <div class="inputs">
                <?php 
                 $form->create_form('Name, Email, Comments|textarea');
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
      <div class="tp-bullet" style="top: 0px; left: 0px;"></div>
      <div class="tp-bullet" style="top: 28px; left: 0px;"></div>
      <div class="tp-bullet selected" style="top: 56px; left: 0px;"></div>
      <div class="tp-bullet" style="top: 84px; left: 0px;"></div>
    </div>
    <div id="upBtnContainer">
      <a href="#" onclick="topFunction()" class="no-deco" id="upBtn" title="Go to top">Top</a>
    </div>
  </body>
</html>
      