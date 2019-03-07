<?php




add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
    //wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
   /* wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );*/
}

/* 
add_action('admin_init', function () {
    //Replace with the correct image ID
    $image_id = 45;
    $args = array(
        'nopaging'   => true,
        'post_type'  => 'listings'
    );
    $listings = get_posts( $args );
    foreach( $listings as $listing) {
        //if has not featured image assigned, set default
        if( ! has_post_thumbnail($listing->ID) ) {
            set_post_thumbnail( $listing->ID, $image_id );
        }
    }
} ); */



add_action( 'rest_api_init', 'create_api_posts_meta_field' );

function create_api_posts_meta_field() {

    // register_rest_field ( 'name-of-post-type', 'name-of-field-to-return', array-of-callbacks-and-schema() )
    register_rest_field( 'workshop', 'date',  array(
           'get_callback'    => 'get_post_meta_for_api',
           'schema'          => null,
        )
    );
}

function get_post_meta_for_api( $object ) {
    //get the id of the post object array
    $post_id = $object['id'];

    //return the post meta
    return get_post_meta( $post_id );
}


add_theme_support('post-thumbnails');


add_action( 'rest_api_init', 'ws_register_images_field' );
function ws_register_images_field() {
    register_rest_field( 
        'workshop', //custom post name
        'attachment_url_images', //array name of your choice
        array(
            'get_callback'    => 'ws_get_images_urls',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
function ws_get_images_urls($post){
    if(has_post_thumbnail($post['id'])){
        $imgArray = wp_get_attachment_image_src( get_post_thumbnail_id( $post['id'] ), 'full' ); // replace 'full' with 'thumbnail' to get a thumbnail
        $imgURL = $imgArray[0];
        return $imgURL;
    } else {
        return false;
    }
}


function slug_get_instructor( $object, $field_name, $request ) {
    return get_post_meta( $object[ 'id' ], $field_name, true );
}
 /**
  * Register a workshop post type, with REST API support
  *
  * Based on example at: https://codex.wordpress.org/Function_Reference/register_post_type
  */
 add_action( 'init', 'my_workshop_cpt' );
 function my_workshop_cpt() {
   $labels = array(
     'name'               => _x( 'Workshops', 'post type general name', 'your-plugin-textdomain' ),
     'singular_name'      => _x( 'Workshop', 'post type singular name', 'your-plugin-textdomain' ),
     'menu_name'          => _x( 'Workshops', 'admin menu', 'your-plugin-textdomain' ),
     'name_admin_bar'     => _x( 'Workshop', 'add new on admin bar', 'your-plugin-textdomain' ),
     'add_new'            => _x( 'Add New', 'workshop', 'your-plugin-textdomain' ),
     'add_new_item'       => __( 'Add New Workshop', 'your-plugin-textdomain' ),
     'new_item'           => __( 'New Workshop', 'your-plugin-textdomain' ),
     'edit_item'          => __( 'Edit Workshop', 'your-plugin-textdomain' ),
     'view_item'          => __( 'View Workshop', 'your-plugin-textdomain' ),
     'all_items'          => __( 'All Workshops', 'your-plugin-textdomain' ),
     'search_items'       => __( 'Search Workshops', 'your-plugin-textdomain' ),
     'parent_item_colon'  => __( 'Parent Workshops:', 'your-plugin-textdomain' ),
     'not_found'          => __( 'No workshops found.', 'your-plugin-textdomain' ),
     'not_found_in_trash' => __( 'No workshops found in Trash.', 'your-plugin-textdomain' )
   );
  
   $args = array(
     'labels'             => $labels,
     'description'        => __( 'Description.', 'your-plugin-textdomain' ),
     'public'             => true,
     'publicly_queryable' => true,
     'show_ui'            => true,
     'show_in_menu'       => true,
     'query_var'          => true,
     'rewrite'            => array( 'slug' => 'workshop' ),
     'capability_type'    => 'post',
     'has_archive'        => true,
     'hierarchical'       => false,
     'menu_position'      => null,
     'show_in_rest'       => true,
     'rest_base'          => 'workshops',
     'rest_controller_class' => 'WP_REST_Posts_Controller',
     'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
   );
  
   register_post_type( 'workshop', $args );
  
 }


 
 
 
 
 function replace_core_jquery_version() {
     wp_deregister_script( 'jquery-core' );
     wp_register_script( 'jquery-core', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
     wp_deregister_script( 'jquery-migrate' );
     wp_register_script( 'jquery-migrate', "https://code.jquery.com/jquery-migrate-3.0.0.min.js", array(), '3.0.0' );
 }
 
 add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );
 
 
 
 // Scheduled Action Hook
 // Set pulling of movies at 8PM
 // calling a command on the server's cronjob to visit the site and run this task
 
 // chromium-browser https://myjoroni.ml
 function run_my_script() {
     date_default_timezone_set("Asia/Manila");
     $t=time();
       $time = date("H",$t);
     if ($time == '20') {
         echo '<div class="alert alert-success" role="alert">Fetching...</div>';
         add_action( 'init', 'fetchMovies' );
      }else{
        //  echo 'NO';
        echo '<div class="alert alert-success hidden" role="alert">Fetching...</div>';
      }
 }
 
 //add_action( 'wp', 'run_my_script' );
 



//Get image URL
function get_thumbnail_url($post){
    if(has_post_thumbnail($post['id'])){
        $imgArray = wp_get_attachment_image_src( get_post_thumbnail_id( $post['id'] ), 'full' ); // replace 'full' with 'thumbnail' to get a thumbnail
        $imgURL = $imgArray[0];
        return $imgURL;
    } else {
        return false;
    }
}
//integrate with WP-REST-API
function insert_thumbnail_url() {
     register_rest_field( 'post',
                          'featured_image',  //key-name in json response
                           array(
                             'get_callback'    => 'get_thumbnail_url',
                             'update_callback' => null,
                             'schema'          => null,
                             )
                         );
     }
//register action
add_action( 'rest_api_init', 'insert_thumbnail_url' );
 