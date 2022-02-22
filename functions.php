<?php
function add_styles(){
   // wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.min.css');
  // wp_register_style('my-style',get_template_directory_uri().'/style.css', '', '1', 'all');
  
   
//wp_enqueue_style('my-style');
 
}

function add_scripts(){
    /*
    
    remove registraion for old jquery
    */
    //wp_deregister_script('jquery');
    /*
    to register jquery
    */
   // wp_register_script('jquery',includes_url('/js/jquery/jquery.js'),'false','',true);
    //wp_enqueue_script('jquery');
 
      //  wp_enqueue_script('main-js',get_template_directory_uri().'/js/main',array(),false,true);
    //wp_enqueue_script('jquery-js',get_template_directory_uri().'/js/jquery-3.5.1',array(),false,true);

     //wp_enqueue_script('bootstrap-scripts',get_template_directory_uri().'/js/bootstrap.min.js',array(),false,true);
    
}




?>

<?php add_action('wp_enqueue_scripts','add_styles');
add_action('wp_enqueue_scripts','add_scripts');
?>


<?php  function register_my_menu() {
  register_nav_menus(array('header-menu'=> 'Header Menu' ,
                    'footer-menu'=> 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );
    function add_bootstrap_menu(){
    wp_nav_menu(
        array(
            'theme_location'=>'header-menu',
            'menu_class'  => 'nav navbar-nav',
                      'container' =>  'div',
                   'container_class'  =>'collapse navbar-collapse',
                      'container_id'   =>'collapsibleNavbar',
                      'depth'           => 6,
           
                    
                     
    ));
    
  
}
 add_theme_support('post-thumbnails');
 add_image_size('custom_image_size',1400,800,true);


   


add_filter( 'upload_mimes', 'custom_myme_types', 1, 1 );
function custom_myme_types( $mime_types ) {
$mime_types['jfif'] = 'image/jfif+xml'; // Adding .jfif extension

return $mime_types;
}

function my_first_post_type()
{
    $args=array(
        'labels'=>array(
            'name'=>'Team Members',
            'singular_name'=>'Team Members'
        ),
        'hierarchical'=>false,
        'menu_icon'=>'dashicons-admin-users',
        'public' =>true,
        'has_archive' => true,
        'supports' => array('title','editor','thumbnail'),
        //'rewrite'=>array('slug'=>'cars'),
    );




 register_post_type('team',$args);

}
add_action('init','my_first_post_type');



function my_secound_post_type()
{
    $args=array(
        'labels'=>array(
            'name'=>'Locations',
            'singular_name'=>'Location',
        ),
        'hierarchical'=>true,
        'menu_icon'=>'dashicons-location',
        'public' =>true,
        'has_archive' => true,
        'supports' => array('title','editor','thumbnail'),
        //'rewrite'=>array('slug'=>'cars'),
    );




 register_post_type('location',$args);

}
add_action('init','my_secound_post_type');














  

    
    ?>
