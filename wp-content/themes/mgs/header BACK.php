<?php
/**
 * The theme header
 * 
 * @package mgs
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!--wordpress head-->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		
		<div class="page-container">

			<?php do_action('before'); ?> 

<!--*********************
MENÚ
*********************-->
<div id="cover"></div>
<h1 class="hidden">Metagraphos</h1>

<nav class="navbar navbar-mgs navbar-fixed-top">
  <header>
    <h2 class="hidden">metagraphos nav</h2>
  </header>

  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/index.php">
      </a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">

<!-- Inicio -->
        <li class="visible-xs-block"><a href="index.php" class="liga-acerca">inicio</a></li>

<!-- Acerca -->
        <li><a href="/about.php" class="liga-acerca">acerca</a></li>

<!-- Servicios -->
        <li class="dropdown services-menu">
          <a class="dropdown-toggle liga-servicios" href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="0">servicios <span class="glyphicon glyphicon-menu-down"></span></a>

<!--************* Modal Services *************-->
            <div class="dropdown-menu modal-dialog modal-menu modal-services">
              <div class="modal-content">
                <div class="container p-t-md">

<!-- E-learning -->
                  <div class="col-xs-4">
                    <a class="figure-link" href="/e-learning.php">
                      <figure class="p-md">
                        <img class="img-responsive full-width" src="wp-content/uploads/2016/04/menu_service_1.jpg" alt="Experiencias digitales para el Conocimeinto"/>
                        <figcaption class="c-m full-width">
                          <h3 class="text-xl">
                            <small>E-learning</small><br/>
                            <span class="hide-text">Experiencias digitales para el Conocimiento</span>
                          </h3>
                        </figcaption>
                      </figure>
                    </a>
                  </div>

<!-- Productividad -->
                  <div class="col-xs-4">
                    <a class="figure-link" href="/productivity.php">
                      <figure class="p-md">
                        <img class="img-responsive full-width" src="wp-content/uploads/2016/04/menu_service_2.jpg" alt="Experiencias digitales para la Productividad"/>
                        <figcaption class="c-m full-width">
                          <h3 class="text-xl">
                            <small>Aplicaciones Web</small><br/>
                            <span class="hide-text">Experiencias digitales para la Productividad</span>
                          </h3>
                        </figcaption>
                      </figure>
                    </a>
                  </div>
                  
<!-- Cosultoría -->
                  <div class="col-xs-4 consultoria">
                    <a class="figure-link" href="/consultancy.php">
                      <figure class="p-md">
                        <img class="img-responsive full-width" src="wp-content/uploads/2016/04/menu_service_3.jpg" alt="Consultoría y Capacitación"/>
                        <figcaption class="c-m full-width">
                          <h3 class="text-xl text-nowrap">
                            <small>Consultoría</small><br/>
                            <span class="hide-text">Experiencias de transformación <br>organizacional</span>
                          </h3>
                        </figcaption>
                      </figure>
                    </a>
                  </div>

                </div>
              </div>
            </div>

        </li>

<!-- Productos -->
        <li class="dropdown products-menu">
          <a class="liga-productos" href="#" data-toggle="dropdown" data-hover="dropdown">productos <span class="glyphicon glyphicon-menu-down"></span></a>

<!--************* Modal Solutions *************-->
          <div class="dropdown-menu modal-dialog modal-menu modal-services" role="document">
            <div class="modal-content">
              <div class="container p-t-md">

<!-- Porta 3D -->
                <div class="col-xs-4">
                  <a class="figure-link" href="/porta3d.php">
                    <figure class="p-md">
                      <img class="img-responsive full-width" src="wp-content/uploads/2016/04/menu_solution_1.jpg" alt="Porta 3D"/>
                      <figcaption class="c-m full-width">
                        <h3 class="text-xl">
                          <small class="hide-text">Cinco variables una sola gráfica</small><br/>
                          <span>Porta3D</span>
                        </h3>
                      </figcaption>
                    </figure>
                  </a>
                </div>

<!-- Virtual Bullet time -->
                <div class="col-xs-4">
                  <a class="figure-link" href="/vbt.php">
                    <figure class="p-md">
                      <img class="img-responsive full-width" src="wp-content/uploads/2016/04/menu_solution_2.jpg" alt="Virtual Bullet Time"/>
                      <figcaption class="c-m full-width">
                        <h3 class="text-xl">
                          <small class="hide-text">Documentación 4D móvil</small><br/>
                          <span>Virtual Bullet Time</span>
                        </h3>
                      </figcaption>
                    </figure>
                  </a>
                </div>

<!-- Color maze -->
                <div class="col-xs-4">
                  <a class="figure-link" href="/colormaze3d.php">
                    <figure class="p-md">
                      <img class="img-responsive full-width" src="wp-content/uploads/2016/04/menu_solution_3.jpg" alt="ColorMaze3D"/>
                      <figcaption class="c-m full-width">
                        <h3 class="text-xl">
                          <small class="hide-text">Laberintos 3D...¡con un giro!</small><br/>
                          <span>ColorMaze 3D</span>
                        </h3>
                      </figcaption>
                    </figure>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </li>

<!--************ Sectores ************-->
        <li class="dropdown sectors-menu">
          <a class="liga-sectores" href="#" data-toggle="dropdown" data-hover="dropdown">sectores <span class="glyphicon glyphicon-menu-down"></span></a>

<!--************* Modal Sectores *************-->
            <div class="dropdown-menu modal-dialog modal-menu modal-services" role="document">
              <div class="modal-content">
                <div class="container p-t-md">

<!-- Corporativos -->
                  <div class="col-xs-4">
                    <a class="figure-link" href="/corporate.php">
                      <figure class="p-md">
                        <img class="img-responsive full-width" src="wp-content/uploads/2016/04/menu_sectors_1.jpg" alt="Porta 3D"/>
                        <figcaption class="c-m full-width">
                          <h3 class="text-xl">
  <!--                       <small>“Cinco variables una sola gráfica”</small><br/>
   -->                      <span>Corporativos</span>
                          </h3>
                        </figcaption>
                      </figure>
                    </a>
                  </div>

<!-- Gobierno -->
                  <div class="col-xs-4">
                    <a class="figure-link" href="/government.php">
                      <figure class="p-md">
                        <img class="img-responsive full-width" src="wp-content/uploads/2016/04/menu_sectors_2.jpg" alt="Virtual Bullet Time"/>
                        <figcaption class="c-m full-width">
                          <h3 class="text-xl">
                            <!-- <small>Documentación 4D móvil</small><br/> -->
                            <span>Gobierno</span>
                          </h3>
                        </figcaption>
                      </figure>
                    </a>
                  </div>

<!-- Startup -->
                  <div class="col-xs-4">
                    <a class="figure-link" href="/starups.php">
                      <figure class="p-md">
                        <img class="img-responsive full-width" src="wp-content/uploads/2016/04/menu_sectors_3.jpg" alt="ColorMaze3D"/>
                        <figcaption class="c-m full-width">
                          <h3 class="text-xl">
                            <!-- <small>Laberintos 3D...!con un giro¡</small><br/> -->
                            <span>Startups</span>
                          </h3>
                        </figcaption>
                      </figure>
                    </a>
                  </div>
                </div>
              </div>
            </div>

        </li>

        <li><a href="http://mgsroom.tumblr.com/" target="_blank">mgsroom</a></li>
        
        <li><a href="#" data-toggle="modal" data-target="#navModalContact">contacto</a></li>
      </ul>
    </div><!--/.navbar-collapse -->
  </div>
</nav>

<div class="modal fade" id="navModalContact" role="dialog">
  <div class="modal-dialog modal-lg">
  
    <div class="modal-content">
      
<!-- Botón cerrar -->
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="contacto-info">
        <div class="modal-body">

<!-- Título -->
          <h4 class="modal-title">Contacto</h4>
         
<!-- Info -->
          <p>Escríbenos
            <br><a href="mailto:hola@metagraphos.com">hola@metagraphos.com</a>
          </p>

          <!-- <p>Innovacion y productos Metagraphos
            <br><a href="mailto:innovacion@metagraphos.com">innovacion@metagraphos.com</a>
          </p>

          <p>Trabaja con nosotros
            <br><a href="mailto:job@metagraphos.com">job@metagraphos.com</a>
          </p>
 -->
          <p>Llámanos
            <br><a href="tel:(+52)5580000228">(+52)55 8000 0228</a></p>

        </div>

        <div class="modal-footer">
          <h5>Dónde estamos</h5>
          <p>Insurgentes Sur No. 2453 Piso 6 Col. Tizapán, Del. Álvaro Obregón 01090 México DF</p>
          <a class="liga-mapa" href="https://www.google.com.mx/maps/place/Av+de+los+Insurgentes+Sur+2453,+San+%C3%81ngel,+01090+Ciudad+de+M%C3%A9xico,+D.F./@19.3399556,-99.1927782,17z/data=!3m1!4b1!4m2!3m1!1s0x85d20001c555516f:0x5f4c01b393213e34" target="_blank" class="google-maps">
            <span>IR A GOOGLE MAPS</span>
            <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24.49 24.85"><title>Sin título-1</title><polygon points="13.38 0.5 13.38 1.5 22.45 1.5 9.62 14.33 10.32 15.04 22.99 2.37 22.99 11.1 23.99 11.1 23.99 0.5 13.38 0.5" fill="#fff"/><path d="M10.32,15.74L8.91,14.33,21.24,2H12.88V0H24.49V11.6h-2v-8ZM23.49,10.6v0ZM13.88,1h0Z" fill="#fff"/><path d="M18.42,24.35H3.56A3.07,3.07,0,0,1,.5,21.28V6.41A3.07,3.07,0,0,1,3.56,3.35h9.7v1H3.56A2.06,2.06,0,0,0,1.5,6.41V21.28a2.07,2.07,0,0,0,2.06,2.06H18.42a2.06,2.06,0,0,0,2.06-2.06V11.92h1v9.36A3.07,3.07,0,0,1,18.42,24.35Z" fill="#fff"/><path d="M18.42,24.85H3.56A3.57,3.57,0,0,1,0,21.28V6.41A3.57,3.57,0,0,1,3.56,2.85h10.2v2H3.56A1.56,1.56,0,0,0,2,6.41V21.28a1.56,1.56,0,0,0,1.56,1.56H18.42A1.56,1.56,0,0,0,20,21.28V11.42h2v9.86A3.57,3.57,0,0,1,18.42,24.85ZM1,21.28a2.57,2.57,0,0,0,2.56,2.56h0A2.57,2.57,0,0,1,1,21.28Z" fill="#fff"/></svg>
          </a>
        </div>

      </div>
      
      <div class="map-cont">
        <div id="map"></div>
        
      </div>

    </div>
  </div>
</div>

<!--*********************
CONTENIDO
*********************-->
			<div id="content" class="row row-with-vspace site-content">