<?php
/**
 * Theme: mgs
 * 
 * Template Name: Home
 *
 * Full width page template (no sidebar, no container, no header) with 3 columns of
 * recent posts
 *
 * This is the template for full width pages with no sidebar and no container or 
 * header. It also lists your 3 most recent posts. This page truly stretches 
 * the full width of the browser window. You should set a <div class="container"> 
 * before your content to keep it in line with the rest of the site content.
 *
 * @package mgs
 */

get_header(); ?>

  <?php
      require('mytwit.inc.php');
      $tFeed = new MyTwit;
      $tFeed->TwitterUser = 'Metagraphos';
      $tFeed->TWITTER_CONSUMER_KEY = 'XsINnojPZXusmseo6Jm1g';
      $tFeed->TWITTER_CONSUMER_SECRET = '64cKkufT6PaBjZKrdZC1p1hH25FQ8IqMSWrHSmHDc';
      $tFeed->TWITTER_OAUTH_ACCESS_TOKEN = '121894801-9ABGy2qu7kNFXfJXgWrOX39KvKWCvminRsPg31Nu';
      $tFeed->TWITTER_OAUTH_ACCESS_TOKEN_SECRET = 'E708PBbTHSxb7MEZOqbcnILbvKZ78mrIj0ZQ3HaWWw';
      $tFeed->PostLimit = 1;
      $tFeed->UpdateCache();
    ?>

    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


<!--*********************
BANNER
*********************-->
    <div class="jumbotron jumbotron-top h home-bg">

<!--************** Fondo movil **************-->

<!--************** Video **************-->
      <div id="video-home" class="fondo-desktop">
        <video id="video" autoplay="true" loop="" poster="/wp-content/themes/mgs/images/home_img_0.jpg">
          <source src="/wp-content/themes/mgs/videos/home-loop.webm" type="video/webm">
          <source src="/wp-content/themes/mgs/videos/home-loop.ogv" type="video/ogg; codecs=&quot;theora, vorbis&quot;">
          <source src="/wp-content/themes/mgs/videos/home-loop.mp4" type="video/mp4">
        </video>
      </div>
      
<!--************** Info **************-->
      <div class="container banner-home-info">
        <h1 class="white-text m-b-none">Digital experiences for <br>transformation</h1>
        <!-- <h2 class="m-t-n-xs">
          <small class="white-text thin100">En metagraphos, innovamos para transformar el conocimiento y la productividad en tu organización.</small>
        </h2> -->
        <a href="#contactForm" class="btn btn-white btn-outline text-uppercase m-md std-btn-mgs">Contact us
          <svg fill="" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 0h24v24H0z" fill="none"/>
              <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
          </svg>
        </a>
      </div>
    </div>
    <div id="trigger" class="spacer s0 trigger-home"></div>

<!--*********************
INTRO
*********************-->
    <div class="container text-center signboard foot-hide">
      <!-- row of columns -->
      <div class="row">
        <div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-12 col-lg-12">
          <section>
            <header>
              <h2 class="m-b-sm">
                In metagraphos, we innovate to reshape the knowledge and productivity in your organization.
              </h2>
            </header>
            <p class="big">We create new ways to work, communicate and learn.</p>
            <p class="big Normal400Italic gray-light-text m-t-n-sm somos-meta">We are metagraphos, and we go further.</p>
            <a href="about" class="btn btn-black text-uppercase m-t-md std-btn-mgs">Learn more
              <svg fill="#ffffff" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 0h24v24H0z" fill="none"/>
                  <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
              </svg>
            </a>
          </section>
        </div>
      </div>
    </div>

<!--*********************
CREAMOS SOLUCIONES...
*********************-->
    <div class="full-width creamos-soluciones">
      <div class="row-height">
        <div class="col-sm-6 col-sm-height col-sm-top p-none bg-gray-light">
          <div class="inside">
            <div class="half-l-container">
              <section class="mgs-ux p-r-lg p-l-lg">
                <header>
                  <h2 class="Normal400 m-b-lg less-h2">
                    We bring together design and technology to create solutions that are beautiful, intelligent and easy to use.
                  </h2>
                </header>
                <p class="big">We work with passion to make your ideas come true</p>
                <p class="big Normal400Italic gray-light-text m-t-n-sm somos-meta"> We were born creative, digital, global</p>
                <!-- <a href="#" class="btn btn-outline btn-black text-uppercase m-t-md std-btn-mgs">Nuestros servicios 
                  <svg fill="#000000" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 0h24v24H0z" fill="none"/>
                      <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                  </svg>
                </a> -->
              </section>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-sm-height col-sm-middle p-none half-img-bg home-bg-img-1"></div>
      </div>
    </div>

<!--*********************
PRODUCTOS Y SERVICIOS
*********************-->
    <div class="container our-team">
      <!-- row of columns -->
      <div class="row">
        <div class="col-sm-12">
          <section>
            <header>
              <h3 class="Medium500 m-b-lg">Services <span class="foot-hide">and Products</span></h3>
            </header>
            <div class="products_&_services">

<!-- E-learning -->
              <div class="member-container figure-overlay col-sm-6 col-md-4 p-none">
                <a href="e-learning-en">
                  <figure class="member yellow">

                    <img class="img-responsive full-width" src="/wp-content/uploads/2016/04/produc_service_1.jpg"
                         alt="Adriana Caballero CEO / Fundadora" />

                    <figcaption class="white-text c-m full-width p-sm">
                      <span class="medium light300">E-learning</span>
                      <p class="text-xl">Digital experiences <br>for knowledge</p>
                    </figcaption>

                    <blockquote class="no-quotes text-center">
                      <div class="more-s-p">
                        <svg fill="#ffffff" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0 0h24v24H0z" fill="none"/>
                          <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                        </svg>
                        <span> view information</span>
                      </div>
                    </blockquote>

                  </figure>
                </a>
              </div>

<!-- Aplicaciones web -->
              <div class="member-container figure-overlay col-sm-6 col-md-4 p-none">
                <a href="web-applications" class="white-text light300">

                  <figure class="member yellow">
                    <img class="img-responsive full-width" src="/wp-content/uploads/2016/04/produc_service_2.jpg"
                         alt="Ernesto Riestra CTO / Fundadora" />
                    <figcaption class="white-text c-m full-width p-sm">
                      <span class="medium light300">Web Applications</span>
                      <p class="text-xl">Digital experiences <br>for productivity</p>
                    </figcaption>

                    <blockquote class="no-quotes text-center">
                      <div class="more-s-p">
                        <svg fill="#ffffff" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0 0h24v24H0z" fill="none"/>
                          <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                        </svg>
                        <span> view information</span>
                      </div>
                    </blockquote>

                  </figure>
                </a>
              </div>

<!-- Know-How -->
              <div class="member-container figure-overlay col-sm-6 col-md-4 p-none">
                <a href="consulting">
                  <figure class="member yellow">

                    <img class="img-responsive full-width" src="/wp-content/uploads/2016/04/produc_service_3.jpg"
                         alt="Ernesto Riestra CTO / Fundadora" />

                    <figcaption class="white-text c-m full-width p-sm single">
                      <span class="medium light300">Consulting</span>
                      <p class="text-xl">Experiences for organizational transformation</p>
                    </figcaption>

                    <blockquote class="no-quotes text-center">
                      <div class="more-s-p">
                        <svg fill="#ffffff" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0 0h24v24H0z" fill="none"/>
                          <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                        </svg>
                        <span> view information</span>
                      </div>
                    </blockquote>

                  </figure>
                </a>
              </div>

<!-- Porta 3D -->
              <div class="member-container figure-overlay col-sm-6 col-md-4 p-none foot-hide">
                <a href="porta3d-en" class="white-text light300">
                <figure class="member yellow">
                  <img class="img-responsive full-width" src="/wp-content/uploads/2016/04/produc_service_4.jpg"
                       alt="Ernesto Riestra CTO / Fundadora" />
                  <figcaption class="white-text text-center c-m full-width p-sm">
                    <span class="medium light300">Five variables, only one graph</span>
                    <p class="text-xl">Porta 3D</p>
                  </figcaption>
                  <blockquote class="no-quotes text-center">
                    <div class="more-s-p">
                      <svg fill="#ffffff" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                      </svg>
                      <span> view information</span>
                    </div>
                  </blockquote>
                </figure>
              </a>
              </div>

<!-- Documentación 4D móvil -->
              <div class="member-container figure-overlay col-sm-6 col-md-4 p-none foot-hide">
                <a href="virtual-bullet-time-en">
                <figure class="member yellow">
                  <img class="img-responsive full-width" src="/wp-content/uploads/2016/04/produc_service_5.jpg"
                       alt="Ernesto Riestra CTO / Fundadora" />
                  <figcaption class="white-text text-center c-m full-width p-sm">
                    <span class="medium light300">4D mobile simulation for training</span>
                    <p class="text-xl">VIrtual Bullet Time</p>
                  </figcaption>
                  <blockquote class="no-quotes text-center">
                    <div class="more-s-p">
                      <svg fill="#ffffff" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                      </svg>
                      <span> view information</span>
                    </div>
                  </blockquote>
                </figure>
                </a>
              </div>

<!-- ColorMaze 3D -->
              <div class="member-container figure-overlay col-sm-6 col-md-4 p-none foot-hide">
                <a href="colormaze-en">
                <figure class="member yellow">
                  <img class="img-responsive full-width" src="/wp-content/uploads/2016/04/produc_service_6.jpg"
                       alt="Ernesto Riestra CTO / Fundadora" />
                  <figcaption class="white-text text-center c-m full-width p-sm">
                    <span class="medium light300">3D Mazes... with a twist!</span>
                    <p class="text-xl">ColorMaze3D</p>
                  </figcaption>
                  <blockquote class="no-quotes text-center">
                    <div class="more-s-p">
                      <svg fill="#ffffff" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                      </svg>
                      <span> view information</span>
                    </div>
                  </blockquote>
                </figure>
                </a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div> <!-- /container -->

<!--*********************
REDES
*********************-->
    <div class="container methodology">
      <!-- row of columns -->
      <div class="row">
        <div class="col-sm-12">
          <section>
            <!--<header>
              <h3 class="Medium500 m-b-lg">Metodología</h3>
            </header>-->
            <div class="row">

<!-- Twitter -->
              <div class="method-container col-sm-4 feed-twitter">
                <h4 class="">Now in Twitter</h4>

                <div class="twitter-logo">
                  <figure>
                    <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>Sin título-1</title><rect width="40" height="40" fill="#989797"/><path d="M14.92,33.09V26.54c0-1.11-.24-1.42-1-1.42a3.17,3.17,0,0,0-2,1.09v6.89H10v-6.5c0-1.1-.24-1.46-1-1.46A3,3,0,0,0,7,26.07v7H5v-6.8a6,6,0,0,0-.34-2.4l1.87-.52a2.62,2.62,0,0,1,.34,1.22,3.56,3.56,0,0,1,2.51-1.2,2.46,2.46,0,0,1,2.27,1.39,3.89,3.89,0,0,1,2.83-1.39c1.56,0,2.47.81,2.47,2.77v6.93h-2Z" fill="#fff"/><path d="M22.29,24.75a1.48,1.48,0,0,0-1.63,1.65A1.44,1.44,0,0,0,22.29,28a1.45,1.45,0,0,0,1.63-1.61,1.45,1.45,0,0,0-1.63-1.63m3.93,0.19a2.57,2.57,0,0,1-.73-0.09,2.5,2.5,0,0,1,.62,1.65c0,1.65-1.37,2.9-3.59,2.9a1.84,1.84,0,0,0-1.27.9c0,0.36.13,0.39,2.36,0.39,1.52,0,3.15.77,3.15,2.7s-1.69,3.11-4.21,3.11-4.23-.81-4.23-2.59a3.9,3.9,0,0,1,.19-1h1.95a2,2,0,0,0-.15.67c0,0.88.75,1.37,2.08,1.37s2.25-.6,2.25-1.48S23.75,32.15,22,32.15c-2.55,0-3.11-.51-3.11-1.44s0.79-1.31,1.8-1.63a2.64,2.64,0,0,1-2.15-2.68c0-1.93,1.52-3.2,3.78-3.2a29,29,0,0,1,2.89.49A2.68,2.68,0,0,0,26.92,23l1,1.29a2.33,2.33,0,0,1-1.65.62" fill="#fff"/><path d="M31.51,33.16a7.65,7.65,0,0,1-3.63-1l0.73-1.48a6.63,6.63,0,0,0,3.07,1,1.38,1.38,0,0,0,1.54-1.33c0-.73-0.47-1.1-1.54-1.33l-1.14-.24a2.59,2.59,0,0,1-2.27-2.6c0-1.78,1.42-3,3.52-3a6.5,6.5,0,0,1,3.13.82l-0.67,1.42a4.82,4.82,0,0,0-2.32-.69,1.26,1.26,0,0,0-1.44,1.22c0,0.58.32,0.88,1.27,1.12l1.18,0.3c1.91,0.49,2.42,1.54,2.42,2.64,0,1.91-1.55,3.22-3.84,3.22" fill="#fff"/></svg>
                  </figure>
                  <p class="twitter-sub"><b>metagraphos</b></p>
                </div>

                <div class="tweet">

                    <?php 
                      if ($tFeed->ErrorMessage) {
                        echo '<div class="MyTwitError">
                          <h3>Error processing twitter feed</h3>
                          <p>'.$tFeed->ErrorMessage.'</p>
                        </div>';
                      } else {
                        foreach ($tFeed->Tweets as $tweet) {
                          $globalTuit = $tweet['MyText'];
                          $globalVia = $tweet['source'];
                          $globalTwitterUser = $tFeed->TwitterUser;
                          echo ''.$tweet['MyText'];
                          '<span class="TweetWho desktop">por
                            <a target="_blank" href="https://twitter.com/'.$tFeed->TwitterUser.'/status/'.$tweet['id_str'].'" rel="nofollow">'.$tFeed->TwitterUser.'</a>
                            '.$tweet['MyTimeAgo'].' via '.$tweet['source'].'</span>
                          ';
                        }
                      }
                    ?>

                    <div class="feed-twitter"></div>
                    <a href="https://twitter.com/metagraphos" target="_blank" class="twitter-user">@metagraphos</a><br/>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                  </div>

                </div>

<!-- Blog -->
              <div class="member-container col-sm-4 redes-col">
                <h4 class="nowrap">In the mgsroom</h4>

                <div class="feed-blog">
                  <?php
                    $request_url = 'http://mgsroom.tumblr.com/api/read?type=post&start=0&num=1';
                    $xml = simplexml_load_file($request_url);
                    $title = $xml->posts->post->{'regular-title'};
                    $post = $xml->posts->post->{'regular-body'};
                    $link = $xml->posts->post['url'];
                    $small_post = substr($post,0,220);
                    echo '<h1>'.$title.'</h1>';
                    echo '<p>'.$small_post.'...</p>';
                    echo "</br><a target='_blank' class='btn btn-outline btn-black text-uppercase m-t-md std-btn-mgs leer-mas' href='$link'>Read more</a>"; 
                  ?>
                </div>

              </div>

<!-- Newsletter -->
              <div class="member-container col-sm-4 redes-col newsletter">

                <h4 class="nowrap">Newsletter</h4>
                <p class="lead m-t-sm Normal400">Join us and receive relevant information about design and technological trends for your organization.</p>

                
                <form id="newsletter-new" action="//metagraphos.us13.list-manage.com/subscribe/post?u=1386e87066bd330beb97f3aad&amp;id=8bb8977050" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div class="col-xs-8 col-sm-9 col-md-10">
                   <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Write your email here..." required>
                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_1386e87066bd330beb97f3aad_8bb8977050" tabindex="-1" value="">
                  </div>
                  </div>

                  <div class="col-xs-4 col-sm-3 col-md-2 boton">
                    <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
                      <svg fill="#262520" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0 0h24v24H0z" fill="none"/>
                          <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                      </svg>
                    </button>
                  </div>
                  
                </form>
                 <div id="respuesta">Thanks!</div>
              </div>

            </div>
          </section>
        </div>
      </div>
    </div>

    <?php get_template_part( 'formulario-en'); ?>

<?php get_footer(); ?>
<?php get_template_part( 'foot-scripts'); ?>
