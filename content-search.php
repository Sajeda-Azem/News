<div class="col-sm-2">
            <div class="main-post">
                 <h5 class="the-title">
                     
                <a  href="<?php the_permalink();?>">
               
                <?php the_title();?>
                     </a>
                    </h5>
               
                <span><?php the_post_thumbnail('',['class'=>'img-fluid','title'=>'image-post']);?></span>
               <br>
                <br>
                <br>
                <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
                
               
            </div>
        </div>