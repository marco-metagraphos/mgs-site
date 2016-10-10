<?php
/**
 * The theme footer
 * 
 * @package mgs
 */
?>
			</div><!--.site-content-->
			
<!--*********************
FOOTER
*********************-->
			<footer class="footer pull-left full-width">
			  <div class="container">

<!-- Logo -->
			    <div class="pull-left footer-logo">
			      <img class="m-b-lg" src="http://mgs.metagraphos.com/wp-content/themes/mgs/images/mgs-logo-short.png" alt="MGS"/>
			      <p class="m-none copyright">© 2016 metagraphos</p>
			      <p class="m-t-n-xs copyright">Todos los derechos reservados</p>
			    </div>

<!--************** Sidebars **************-->
			    <div class="roow">
			      <div class="col-sm-10 col-md-9 pull-right footer-menu">
			        <div class="row">

<!-- Explora -->
			          <div class="col-sm-2 col-md-2 foot-hide">
			            <?php dynamic_sidebar('footer-one'); ?> 
			          </div>

<!-- Dónde encontrarnos -->
			          <div class="col-sm-4 col-md-4">
			            <?php dynamic_sidebar('footer-two'); ?> 
			          </div>

<!-- Contáctanos -->
			          <div class="col-sm-4 col-md-3">
			            <?php dynamic_sidebar('footer-three'); ?> 
			          </div>

<!-- Síguenos -->
			          <div class="col-sm-2 col-md-2">
			            <?php dynamic_sidebar('footer-four'); ?> 
			          </div>

			        </div>

			      </div>

			    </div>

			<!-- Copy Móvil -->
			    <div class="div copy-movil">
			      <p>2016 metagraphos ©. Todos los derechos reservados</p>
			    </div>

			  </div>
			</footer>

		</div><!--.container page-container-->
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>