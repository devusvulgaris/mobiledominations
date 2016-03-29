<?php
/*
Plugin Name: Site Plugin for Mobile domination
Description: Site specific plugin
*/

//create a custom taxonomy name it topics for your posts

function create_topics_hierarchical_taxonomy() {

// Adding new taxonomy for tutorials

  $labels = array(
    'name' => _x( 'Разделы', 'taxonomy general name' ),
    'singular_name' => _x( 'Раздел', 'taxonomy singular name' ),
    'search_items' =>  __( 'Искать в разделе' ),
    'all_items' => __( 'Все разделы' ),
    'parent_item' => __( 'Родительский раздел' ),
    'parent_item_colon' => __( 'Родительский раздел:' ),
    'edit_item' => __( 'Редактировать раздел' ),
    'update_item' => __( 'Обновить раздел' ),
    'add_new_item' => __( 'Добавить новый раздел' ),
    'new_item_name' => __( 'Название нового раздела' ),
    'menu_name' => __( 'Разделы' ),
  );

// Register the taxonomy

  register_taxonomy('topics',array('tutorials'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'urok', 'with_front' => false),
  ));
}

// Custom post type "Tutorials"
function create_posttype() {

  register_post_type( 'tutorials',
  // Options
    array(
      'labels' => array(
        'name' => __( 'Уроки по использованию конструктора приложений' ),
        'singular_name' => __( 'Урок по использованию конструктора приложений' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'uroki', 'with_front' => false),
      'taxonomies' => array( 'topics' ),
      'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );


// Change checkout fields

// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_last_name']);
     unset($fields['billing']['billing_company']);
     unset($fields['billing']['billing_state']);
     unset($fields['billing']['billing_country']);
     unset($fields['billing']['billing_address_1']);
     unset($fields['billing']['billing_address_2']);
     unset($fields['billing']['billing_city']);
     unset($fields['billing']['billing_postcode']);
    $fields['billing']['billing_first_name']['input_class'] = array('form-control');
    $fields['billing']['billing_email']['input_class'] = array('form-control');
    $fields['billing']['billing_phone']['input_class'] = array('form-control');
    $fields['billing']['billing_phone']['required'] = false;
    $fields['order']['order_comments']['input_class'] = array('form-control');


     return $fields;
}

?>
