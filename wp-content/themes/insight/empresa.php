<?php /* Template name: Empresa */ ?>
<?php include 'header.php' ?>

<div class="container"> <!-- Depoimentos-->
  <div id="myCarousel" class="carousel slide col-md-6 col-sm-12 col-xs-12"> <!-- Depoimento da direita -->
    <div class="carousel-inner">
    
      <?php
      $args = array('post_type' => 'Depoimento',  'meta_key' => 'tipo_autor', 'meta_value' => 'Membro' ); /* Criando query para pegar os posts do tipo depoimento de Membros*/
      query_posts($args);
      $cont = 0;
      while (have_posts()) : the_post();   /* While para passar por todos eles*/
?>
        <div class="item ">
          <p> <?php echo wp_trim_words( get_the_content(), 100, '[...]' ); /* Imprimir o conteudo do depoimento, limitando em 100 caracteres*/ ?> </p>  
          <p> <?php echo the_field('autor_depoimento');/* Imprimindo o nome do autor do depoimento*/ ?></p>
          <p> <?php echo the_field('tipo_autor'); /* Imprimindo o tipo do autor*/ ?></p>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
        <?php  ++$cont;
      endwhile; /* Fim do While*/ 
      wp_reset_query(); ?>
    </div>
  </div>


  <div id="myCarousel2" class="carousel slide col-md-6 col-sm-12 col-xs-12 "> <!-- Depoimento da esquerda -->
    <div class="carousel-inner">
    
      <?php
      $args = array('post_type' => 'Depoimento',  'meta_key' => 'tipo_autor', 'meta_value' => 'Ex-membro' ); /* Criando query para pegar os posts do tipo depoimento de Ex-membros*/
      query_posts($args);
      $cont = 0;
      while (have_posts()) : the_post();   /* While para passar por todos eles*/
?>
        <div class="item ">
          <p> <?php echo wp_trim_words( get_the_content(), 100, '[...]' ); /* Imprimir o conteudo do depoimento, limitando em 100 caracteres*/ ?> </p>  
          <p> <?php echo the_field('autor_depoimento');/* Imprimindo o nome do autor do depoimento*/ ?></p>
          <p> <?php echo the_field('tipo_autor'); /* Imprimindo o tipo do autor*/ ?></p>
        </div>
        <a class="left carousel-control" href="#myCarousel2" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel2" data-slide="next">&rsaquo;</a>
        <?php  ++$cont;
      endwhile; /* Fim do While*/ 
      wp_reset_query(); ?>
    </div>
  </div>
</div>

<?php include 'footer.php' ?>
