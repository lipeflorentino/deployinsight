
    <footer>
      
      <!--Linha amarela-->
      <div id="yellow-margin"></div>
      
      <!--Footer abaixo da linha amarela-->
      <div class="container">
      	<div class="row text-center">
      		<div class="col-xs-12 col-sm-3 vertical-center">
      			<a href="http://www.insightjunior.com.br">
      			  <img id="image-brand-white" src="wp-content/themes/insight/images/logo-branca.png" alt="Marca-Branca">
      		  </a>
      		</div>
      		<div id="footer-down-meio" class="col-xs-12 col-sm-6 text-center">
      		  <div class="sociais">
                <a class="f-social" href="#" target="_blank">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                </a>
                <a class="f-social" href="#" target="_blank">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a class="f-social" href="#" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
      			<p class="font-size-13">Av. Pasteur, 250, Pavilhão Nilton campos - Instituto de Psicologia. Urca, Rio de Janeiro - RJ, 22290-902</p>
      			<p class="font-size-10">Copyright © 2017 Insight Consultoria, todos os direitos reservados.</p>
      			<span><i class="fa fa-phone" aria-hidden="true"> (21) 3938-5337</i></span>
      		</div>
      		<div class="col-xs-12 col-sm-3 text-center vertical-center">
      			<p class="font-size-13">Desenvolvimento:</p>
      			<a href="http://injunior.com.br">
      			  <img id="image-in" src="wp-content/themes/insight/images/logoIN.png" alt="In Junior">
      			</a>
      		</div>
      	</div>
      </div>
    </footer>
    
    <script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" defer="defer">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      
        ga('create', 'UA-66810701-1', 'auto');
        ga('send', 'pageview');
      
      </script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
          $('#myCarousel').find('.item').first().addClass('active');
          $('#myCarousel2').find('.item').first().addClass('active');

          $('.carousel').carousel({
        			interval: 2000,
		          pause: "hover"	
        	})
      });
      
    </script>
    <script type="text/javascript">
		  
	  </script>
    <?php wp_footer(); ?> 
  </body>
</html>