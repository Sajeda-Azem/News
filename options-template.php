
<?php
/* Template Name: Options page */
?>
<?php
get_header();?>
<?php
$color=get_field('color');

?>
<?php
        the_post();
        the_title();
      
    
    ?>
    <?php
    if($color)
   echo $color['label'];


?>
   
    <?php get_footer();?>