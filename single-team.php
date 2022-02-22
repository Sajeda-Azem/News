<?php get_header();?>
<?php echo'hi sajeda from team page';?>
<?php
$locations=get_field('locations');
foreach($locations as $location):;?>
<a href="<?php echo get_page_link($location->ID);?>">
<?php
echo $location->post_title;?>
</a>
<?php
endforeach;

?>



<?php get_footer();?>