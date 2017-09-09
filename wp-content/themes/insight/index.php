<?php /* Template name: Home */ ?>

<?php include 'header.php' ?>

<?php

    $args = array('post_type' => 'Depoimento' ); /* Criando query para pegar os posts do tipo depoimento*/
    query_posts($args);
    while (have_posts()) : the_post();   /* While para passar por todos eles*/
        
        if (get_field('tipo_autor') == "Cliente"){ /* If para pegar os depoimento dos clientes( depoimento da direita)*/
        ?>
        
        <div> <!-- Depoimento da direita -->
            <p> <?php echo wp_trim_words( get_the_content(), 100, '[...]' ); /* Imprimir o conteudo do depoimento, limitando em 100 caracteres*/ ?> </p>  
            <p> <?php echo the_field('autor_depoimento');/* Imprimindo o nome do autor do depoimento*/ ?></p>
            <p> <?php echo the_field('tipo_autor'); /* Imprimindo o tipo do autor*/ ?></p>
        <div>
        <?php
        }   
        else if(get_field('tipo_autor') == "Orientador")  { /* If para pegar os depoimento dos orientadores( depoimento da esquerda)*/
        ?>
        
        <div> <!-- Depoimento da esquerda -->
            <p> <?php echo wp_trim_words( get_the_content(), 100, '[...]' ); /* Imprimir o conteudo do depoimento, limitando em 100 caracteres*/ ?> </p>  
            <p> <?php echo the_field('autor_depoimento');/* Imprimindo o nome do autor do depoimento*/ ?></p>
            <p> <?php echo the_field('tipo_autor'); /* Imprimindo o tipo do autor*/ ?></p>
        <div>
        <?php
        }
        
    endwhile; /* Fim do While*/ 
    ?>

<?php include 'footer.php' ?>
