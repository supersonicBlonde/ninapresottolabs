<?php
$current = 'home'; 
$title = 'Nina Presotto | Senior Wordpress Developer';
require ('header.php');
?>
<section class="panel" id="home-section">
  <div class="section-content">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="pt-0 headline headline--is-gigantic headline--is-light no-pb uppercase">I'm a freelancer bringing your ideas to a fast functionnal website</h1>
          <h2 class="headline headline--is-small">Specialized in tailor-made premium <span class="color-accent bold">wordpress themes</span></h2>
        </div><!-- .col -->
      </div><!-- .row -->
      <div class="row mt-5">
        <div class="col-12">
          <p class="subtitle"><a href="/contact" class="scrollContact">Be in touch.</a> I answer to all your questions.</p>
      </div><!-- .col -->
      </div><!-- .row -->
    </div><!-- .container -->
  </div><!-- .section-content -->
</section><!-- section -->
<section class="panel py-5" id="services-section">
  <div class="section-content">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8 col-12">
          <h2 class="headline uppercase">What can I do for you ?</h2>
          <h3 class="headline headline--is-small my-3 pl-3">Services for any types of sites<br><span class="small">(corporate, ecommerce, editorial, ...):</span></h3>
          <ul>
            <li>Creation of custom <strong>premium wordpress reponsive themes</strong> based on your design and specifications.</li>
            <li>Lightweight and fast loading websites</li>
            <li>Tailor-made back office to facilitate the edition of content</li>
            <li>Adding additional features to existing sites</li>
            <li>Development of custom plugins</li>
            <li>Debugging, troubleshooting, assistance</li>
            <li>Efficient code, elegant and optimized</li>
          </ul>
          <div class="my-5 pl-lg-5 ">
            <a href="/contact" class="no-deco button">Let's talk about your project!</a>
          </div>  
        </div>
        <div class="col-md-4 col-12">
          <div class="logos-container p-md-3 justify-content-center d-flex flex-wrap">
            <div><img src="assets/logos/HTML5_Logo.svg" alt="Official logo Html5"></div>
            <div><img src="assets/logos/css3-seeklogo.com_v2.svg" alt="Official logo CSS3" ></div>
            <div><img src="assets/logos/JavaScript_logo.svg" alt="Logo Javascript"></div>
            <div><img src="assets/logos/php-logo_v2.svg" alt="Official logo php"></div>
            <div><img src="assets/logos/logo_woocommerce_icon.svg" alt="Official logo Woocommerce" ></div>
            <div><img src="assets/logos/WordPress-logotype-standard_v3.svg" alt="Official logo Wordpress"></div>
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
<section class="panel py-5" id="testimonials-section">
  <div class="section-content">
    <div class="container"> 
      <div class="row align-items-center">
        <div class="col-12">
          <h2 class="headline uppercase">What people say about me ?</h2>
          <p>Those testimonials are coming from my <a href="https://en.malt.fr/profile/ninapresotto" class="no-deco pl-1" target="_blank"><img style="margin-top: -5px; width:80px" src="assets/logos/malt-red.svg" alt="Malt Logo"></a> profile</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
        <div class="m-panel__header">
          <div>
            <h3 class="m-panel__title"><strong>88</strong> projects on Malt</h3>
              <div class="profile-mission__title-rating-stars-wrapper">
                <div class="joy-rating-stars__wrapper">
                  <ul class="joy-rating-stars horizontal-list">
                    <?php for($i = 0 ; $i < 5 ; $i++): ?>
                    <li><svg class="star-full" width="14" height="14" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.51738 0.317102L10.8968 5.03115L15.4764 5.48484C15.7915 5.51103 16.0257 5.78767 15.9995 6.10274C15.9882 6.2386 15.9288 6.36597 15.832 6.46193L12.063 10.1975L13.4604 15.2735C13.5424 15.5821 13.3586 15.8987 13.05 15.9806C12.9134 16.0169 12.7682 16.0019 12.6419 15.9384L7.99897 13.6393L3.36244 15.9355C3.07717 16.079 2.72963 15.964 2.58619 15.6787C2.52268 15.5524 2.50765 15.4073 2.54393 15.2706L3.94129 10.1946L0.169485 6.45908C-0.0550713 6.23653 -0.0566948 5.87408 0.165859 5.64952C0.261822 5.55269 0.389191 5.49329 0.525048 5.482L5.10469 5.0283L7.48056 0.317103C7.62715 0.0307927 7.97809 -0.0824695 8.2644 0.0641246C8.37318 0.119821 8.46168 0.208323 8.51738 0.317102Z" fill="#FFC200"></path></svg></li>
                    <?php endfor; ?>
                  </ul>
                  <span slot="rating-stars-slot">(77 ratings)</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-7">
          <ul class="profile-rating-details no-list d-md-flex justify-content-between w-100">
            <li class="profile-mission__list-item">
                <joy-icon name="mood-good" role="img">&#127773;<span class="pl-1">Quality</span></joy-icon>
                <div class="profile-mission__rating-stars-wrapper">    
                      <ul class="joy-rating-stars horizontal-list">
                      <?php for($i = 0 ; $i < 5 ; $i++): ?>
                      <li><svg class="star-full" width="14" height="14" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.51738 0.317102L10.8968 5.03115L15.4764 5.48484C15.7915 5.51103 16.0257 5.78767 15.9995 6.10274C15.9882 6.2386 15.9288 6.36597 15.832 6.46193L12.063 10.1975L13.4604 15.2735C13.5424 15.5821 13.3586 15.8987 13.05 15.9806C12.9134 16.0169 12.7682 16.0019 12.6419 15.9384L7.99897 13.6393L3.36244 15.9355C3.07717 16.079 2.72963 15.964 2.58619 15.6787C2.52268 15.5524 2.50765 15.4073 2.54393 15.2706L3.94129 10.1946L0.169485 6.45908C-0.0550713 6.23653 -0.0566948 5.87408 0.165859 5.64952C0.261822 5.55269 0.389191 5.49329 0.525048 5.482L5.10469 5.0283L7.48056 0.317103C7.62715 0.0307927 7.97809 -0.0824695 8.2644 0.0641246C8.37318 0.119821 8.46168 0.208323 8.51738 0.317102Z" fill="#FFC200"></path></svg></li>
                      <?php endfor; ?>
                    </ul>
                </div>
            </li>
            <li class="profile-mission__list-item">
                <joy-icon name="clock" role="img" >&#x231A;<span class="pl-1">Respects deadlines</span></joy-icon>
                <div class="profile-mission__rating-stars-wrapper">
                    <ul class="joy-rating-stars horizontal-list">
                    <?php for($i = 0 ; $i < 5 ; $i++): ?>
                    <li><svg class="star-full" width="14" height="14" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.51738 0.317102L10.8968 5.03115L15.4764 5.48484C15.7915 5.51103 16.0257 5.78767 15.9995 6.10274C15.9882 6.2386 15.9288 6.36597 15.832 6.46193L12.063 10.1975L13.4604 15.2735C13.5424 15.5821 13.3586 15.8987 13.05 15.9806C12.9134 16.0169 12.7682 16.0019 12.6419 15.9384L7.99897 13.6393L3.36244 15.9355C3.07717 16.079 2.72963 15.964 2.58619 15.6787C2.52268 15.5524 2.50765 15.4073 2.54393 15.2706L3.94129 10.1946L0.169485 6.45908C-0.0550713 6.23653 -0.0566948 5.87408 0.165859 5.64952C0.261822 5.55269 0.389191 5.49329 0.525048 5.482L5.10469 5.0283L7.48056 0.317103C7.62715 0.0307927 7.97809 -0.0824695 8.2644 0.0641246C8.37318 0.119821 8.46168 0.208323 8.51738 0.317102Z" fill="#FFC200"></path></svg></li>
                    <?php endfor; ?>
                  </ul>
                </div>
            </li>
            <li class="profile-mission__list-item">
                <joy-icon name="megaphone" role="img" >&#128227;<span class="pl-1">Communication</span></joy-icon>
                <div class="profile-mission__rating-stars-wrapper">
                    
                    <ul class="joy-rating-stars horizontal-list">
                    <?php for($i = 0 ; $i < 5 ; $i++): ?>
                    <li><svg class="star-full" width="14" height="14" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.51738 0.317102L10.8968 5.03115L15.4764 5.48484C15.7915 5.51103 16.0257 5.78767 15.9995 6.10274C15.9882 6.2386 15.9288 6.36597 15.832 6.46193L12.063 10.1975L13.4604 15.2735C13.5424 15.5821 13.3586 15.8987 13.05 15.9806C12.9134 16.0169 12.7682 16.0019 12.6419 15.9384L7.99897 13.6393L3.36244 15.9355C3.07717 16.079 2.72963 15.964 2.58619 15.6787C2.52268 15.5524 2.50765 15.4073 2.54393 15.2706L3.94129 10.1946L0.169485 6.45908C-0.0550713 6.23653 -0.0566948 5.87408 0.165859 5.64952C0.261822 5.55269 0.389191 5.49329 0.525048 5.482L5.10469 5.0283L7.48056 0.317103C7.62715 0.0307927 7.97809 -0.0824695 8.2644 0.0641246C8.37318 0.119821 8.46168 0.208323 8.51738 0.317102Z" fill="#FFC200"></path></svg></li>
                    <?php endfor; ?>
                  </ul>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row"> 
        <div class="col-12">
          <div class="profile-recommendation__list col-xl-8 col-12">
            <div class="testimonial-item mb-4 align-items-center">
              <a class="no-deco mr-5 img-profile" rel="nofollow" href="https://en.malt.fr/profile/davidbaudry" target="_blank">
                <img class="img-circle" alt="" src="https://dam.malt.com/babjgxjy9jr6h1yskvei?gravity=face&amp;func=crop&amp;w=80&amp;h=80&amp;force_format=png">
              </a>
              <div class="profile-recommendation__content mt-3 mt-md-0">
                  <div class="profile-recommendation__title d-flex">
                      <a href="https://en.malt.fr/profile/davidbaudry" class="no-deco" title="See David's profile">
                        <span class="mr-1">David</span>
                      </a><span class="mr-1">-</span>
                        <span><a href="https://ilestunefois.com" class="no-deco" target="_blank">il est une fois</a></span>
                    </div>
                    <p class="color-white">Nina est notre webmaster, nous sommes ravis de son travail</p>
                    <p class="color-white"><i>Translated : Nina is our webmaster, we are delighted with her work</i></p>
                </div>
            </div>
            <div class="testimonial-item mb-4">
              <div class="mr-5 img-profile mb-2">
                <img class="img-circle" alt="" src="https://dam.malt.com/t1pz45p35erm3ugaomtd?gravity=face&func=crop&w=80&h=80&force_format=png">
              </div>
              <div class="profile-recommendation__content mt-3 mt-md-0">
                <div class="profile-recommendation__title d-flex">
                  <div>
                    <span class="mr-1 profile-recommendation__name">Kevin</span>
                  </div><span class="mr-1">-</span>
                        <span>L'atelier Digital - Datakairos</span>
                    </div>
                    <p class="color-white">Très bon contact avec Nina, très pédagogue! Nina m'a accompagné sur la mise en place d'un projet de refonte de site et a été d'une aide précieuse. merci</p>
                    <p class="color-white"><i>Translated : Very good contact with Nina, very pedagogue! Nina accompanied me on the implementation of a site redesign project and was of great help. thank you</i></p>
                </div>
            </div>
            <div class="testimonial-item mb-4">
              <a class="no-deco mr-5 mb-2 img-profile" rel="nofollow" href="https://en.malt.fr/profile/seyivekoukoui" target="_blank">
                <img class="img-circle" alt="" src="https://dam.malt.com/pkwedizmlxk0lrbvsvcc?gravity=face&func=crop&w=80&h=80&force_format=png">
              </a>
              <div class="profile-recommendation__content mt-3 mt-md-0">
                <div class="profile-recommendation__title d-flex">
                  <a href="https://en.malt.fr/profile/seyivekoukoui" class="no-deco" title="See Seyive's profile">
                    <span class="mr-1 profile-recommendation__name">Seyive</span>
                      </a><span class="mr-1">-</span>
                    <span><a href="https://la-fille.fr/" class="no-deco" target="_blank">La fille</a></span>
                </div>
                <p class="color-white">Une dev Wordpress de Haut Vol Merci Mme Nina</p>
                <p class="color-white"><i>Translated : A high-skilled Wordpress dev Thank you Mrs. Nina</i></p>
              </div>
            </div>
            <div class="testimonial-item mb-4">
              <div class="mr-5 mb-2 img-profile">
                <img class="img-circle" alt="" src="https://dam.malt.com/ppn8sjuava73envexqdd?gravity=face&func=crop&w=80&h=80&force_format=png">
              </div>
              <div class="profile-recommendation__content mt-3 mt-md-0">
                  <div class="profile-recommendation__title d-flex">
                      <div>
                        <span class="mr-1 profile-recommendation__name">Son</span>
                    </div><span class="mr-1">-</span>
                        <span>Didask</span>
                    </div>
                    <p class="color-white">Nina a réalisé un excellent travail sur le développement d'une application web semi-statique en Wordpress. Elle a très vite saisi les enjeux de notre projet et a su organiser le travail de manière expérimentée et professionnelle, tout en restant très disponible. Une collaboration très agréable et fructueuse !</p>
                    <p class="color-white"><i>Translated : Nina did an excellent job developing a semi-static web application in Wordpress. She very quickly grasped the challenges of our project and was able to organize the work in an experienced and professional manner, while remaining very available. A very pleasant and fruitful collaboration!</i></p>
                </div>
            </div>
            <div class="testimonial-item mb-4">
              <div class="mr-5 mb-2 img-profile">
                <img class="img-circle" alt="" src="https://dam.malt.com/lf3crjwttlgvxhhnzquq?gravity=face&func=crop&w=80&h=80&force_format=png">
              </div>
              <div class="profile-recommendation__content mt-3 mt-md-0">
                    <div class="profile-recommendation__title d-flex">
                      <div>
                        <span class="mr-1 profile-recommendation__name">Steven</span>
                      </div><span class="mr-1">-</span>
                      <span>Elsebang</span>
                    </div>
                    <p class="color-white">Toujours aussi agréable de travailler avec Nina au bout d'un an de collaboration !</p>
                    <p class="color-white"><i>Translated: Always so pleasant to work with Nina after a year of collaboration!</i></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
        <div class="my-5 pl-lg-5 ">
            <a href="https://en.malt.fr/profile/ninapresotto" target="_blank" class="no-deco button">Check all testimonials !</a>
          </div>  
        </div>
      </div>
    </div>
  </div>
</section> 

<?php
  
require ('footer.php');

?>