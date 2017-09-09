<?php
/**
 * INSIGHT functions and definitions
  */

function injunior_custom_post_types() {

  //Funçao para registrar os posts customizados
  // Escreva dentro do array os tipos de posts customizados que vc quer
  $types = array(

    // Projeto
    array('type'          => 'depoimento',     // Nome do tipo
          'typePlural'    => 'depoimentos',  // Nome em plural
          'labelSingle'   => 'Depoimento',   // Nome Singular maiusculo
          'labelPlural'   => 'Depoimentos'  // Nome Plural maiusculo
      )
      
  );

  // Um foreach para criar o(s) post(s) customizado(s)
  foreach ($types as $type) {

    $typeSingle = $type['type'];
    $typePlural = $type['typePlural'];
    $labelSingle = $type['labelSingle'];
    $labelPlural = $type['labelPlural'];

    // Labels: Coloque na lingua desejavel, isso irá aparecer no painel do admin
    $labels = array(
      'name'               => _x( $labelPlural, ' post type general name' ),
      'singular_name'      => _x( $labelSingle, ' post type singular name' ),
      'add_new'            => _x( 'Adicionar novo ', $labelSingle ),
      'add_new_item'       => __( 'Adicionar novo '. $labelSingle ),
      'edit_item'          => __( 'Editar '. $labelSingle ),
      'new_item'           => __( 'Novo '. $labelSingle ),
      'all_items'          => __( 'Todos os '. $labelPlural ),
      'view_item'          => __( 'Mostrar '. $labelSingle ),
      'search_items'       => __( 'Search '. $labelPlural ),
      'not_found'          => __( 'Not Found '. $labelSingle .' ' ),
      'not_found_in_trash' => __( 'Not Found '. $labelSingle .' ' ),
      'parent_item_colon'  => '',
      'menu_name'          => __( $labelPlural ),
    );

    //  Argumentos para criação do post customizado
    if ($typeSingle == 'depoimento'){
	    $args = array(
	      'labels'        => $labels,
	      'description'   => 'Depoimentos',
	      'public'        => true,
	      'supports'      => array( 'title', 'editor', 'author', 'page-attributes','custom-fields' ),     //  Aqui vc pode colocar outros supports, consulte o wordpress para saber outros tipos
	      'has_archive'   => false, //se pode anexar arquivos
	      'menu_position' => 5, //posição no wp-admin
	      'exclude_from_search' => true, //evitar q apareça quando buscar no search do site
	      'rewrite'       => true, // default
	      'menu_icon'     => 'dashicons-editor-quote' //icone no wp-admin
	    );
        // Registrando o Post
	    register_post_type( $typeSingle, $args );
    }
    
  } // end foreach

}
add_action( 'init', 'injunior_custom_post_types' );

 ?>