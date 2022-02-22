<!DOCTYPE html>
<html>
<head>
<?php wp_head();?>
</head>
<body>


<nav class="navbar navbar-expand-md bg-gray navbar-gray">
  <a class="navbar-brand" href="#"><?php bloginfo('name');?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
     <?php add_bootstrap_menu();?>  
    </ul>
    <?php get_search_form();
         ?>
  </div>  
</nav>