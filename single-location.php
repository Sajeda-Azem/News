<?php get_header();?>
<?php the_title();?>
<?php 


$link=get_field('link');?>
 <pre><?php echo print_r($link);?></pre>
<?php if($link):?>
<a href="<?php echo $link['url'];?>" target="<?php echo $link['target'];?>"><?php echo $link['title'];?></a>
<?php endif;?>
<?php
/*$args = [
    'post_type' =>'team',
    'meta_query' => [
        'key'=>'locations',
        'value' =>'"'. get_the_ID() .'"',
        'compare' =>'LIKE',
    ]
    ];
    $team_members = get_posts($args);
?>
<?php foreach($team_members as $member):?>
<a href="<?php echo get_permalink($member->ID);?>"><?php echo $member->post_title;?>
</a>
<?php endforeach;?>

<pre><?php echo print_r($team_members);?></pre>*/?>

<?php get_footer();?>