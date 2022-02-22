
<?php
/* Template Name: Content page */
?>
<?php
get_header();?>




<?php $image=get_field('image_feture');
$picture=$image['sizes']['large'];
?>

<?php $file=get_field('upload_a_file');
$filename=$file['filename'];
$fileurl=$file['url'];


?>


<?php $embed_a_video=get_field('embaed_a_video');

?>

<?php if(have_posts()){

    while(have_posts()){
        the_post();
        the_title();
      
    }
    }
    ?>
    
<?php
if($embed_a_video){
    echo $embed_a_video;
}

   ?>
    <?php get_footer();?>