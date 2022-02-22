<?php get_header();?>
<div class="container">
<?php
if(have_posts()){
while(have_posts()){
the_title();

}}
?>
</div>

<?php get_footer();?>