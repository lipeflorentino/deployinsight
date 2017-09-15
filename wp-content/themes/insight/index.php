<?php /* Template name: Home */ ?>

<?php include 'header.php' ?>

  
    <section class="h-header gd-color padding h-shadow">
      <div class="h-header-brand hb-box">
        <!--<img src="wp-content/themes/insight/images/logo-branca.png" alt="logo-insight">-->
      </div>
      <div class="h-header-text hb-box form-button">
        <h1>Insight Consultoria</h1>
        <h2>Lorem ipsum dolem dormen murandus totem tolen mundun fartum hojem vamem pra doiderum. Lorem ipsum dolem dormen murandus totem tolen mundun fartum hojem vamem pra doiderum. Lorem ipsum dolem dormen murandus totem tolen mundun fartum hojem vamem pra doiderum.</h2>
        <a href="/" class="f-shadow">Faça um diagnóstico grátis!</a>
      </div>
    </section>
    
    <section id="section-a" class="sa-title h-shadow">
      <h2>Depoimentos</h2>
      <div class="sa-box f-left f-shadow">
        <h3>Clientes</h3>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
          <?php
                //$args2 = array('post_type' => 'Depoimento',  'meta_key' => 'tipo_autor', 'meta_value' => 'Cliente' ); /* Criando query para pegar os posts do tipo depoimento de clientes*/
                //query_posts($args2);
                //$cont2 = 0;
                //while (have_posts()) : the_post();   /* While para passar por todos eles*/
          ?>
            <div class="item">
              <p></p>  
              <p></p>
            </div>
            <?php  
              //++$cont2;
              //endwhile; /* Fim do While*/ 
              //wp_reset_query(); 
            ?>
          </div>
          
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="sa-box f-right f-shadow">
        <h3>Professores</h3>
        <div id="myCarousel2" class="carousel slide" data-ride="carousel">
          
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <?php
                $args = array('post_type' => 'Depoimento',  'meta_key' => 'tipo_autor', 'meta_value' => 'orientador' ); /* Criando query para pegar os posts do tipo depoimento de clientes*/
                query_posts($args);
                $cont = 0;
                while (have_posts()) : the_post();   /* While para passar por todos eles*/
            ?>
            <div class="item">
              <p>" <?php echo wp_trim_words( get_the_content(), 100, '[...]' ); ?> "</p>  
              <p> <?php echo the_field('autor_depoimento');/* Imprimindo o nome do autor do depoimento*/ ?> - <?php echo the_field('tipo_autor');?></p>
            </div>
            <?php  
               ++$cont;
               endwhile; /* Fim do While*/ 
               wp_reset_query(); 
            ?>
          </div>
          
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel2" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    
    <section id="section-b" class="sa-title bg-white">
      <div class="sb-content">
        <p class="sb-text">"O diferencial da <strong>Insight</strong> está no comportamento empreendedor, crítico e analítico de nossos colaboradores que têm o compromisso com a responsabilidade social de suas ações."</p>
      </div>
    </section>
    
    <section id="section-c" class="sa-title gd-color padding">
      <div class="sc-content f-shadow">
        <h3>Fale conosco</h3>
        <p>Viu nossa carta de serviços? Procura algo que fazemos? Entra em contato com a gente!</p>
      </div>
      <div class="form-button">
        <a href="/" class="f-shadow">Faça um diagnóstico grátis!</a>
      </div>
    </section>
<?php include 'footer.php' ?>
