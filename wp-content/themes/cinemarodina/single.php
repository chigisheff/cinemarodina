<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html xml:lang=«ru» lang="ru" >
<?php get_header();?>
<body>
   
<div class="mwind">
    <div class="header">
        <a href="/"><img src="<?php bloginfo( 'stylesheet_directory' );?>/scr/logo-1.png"/></a>
    </div>
    <div class="mainmenu">
        <div class="time_center"><?php echo date("d.m. Y") ?></div>
        <?php wp_nav_menu($args);?>
    </div>
 
    <div class ="mainbody">

        <div class="info_field">
            <?php  
            if ( have_posts() ) : while ( have_posts()) : the_post(); 
            $metafield = get_post_meta($post->ID,'',TRUE);    
            $category = get_the_category($post->ID); 
                if($category[0]->term_id != 17){
            ?>
            <div class="film-info">
                <?php echo '<p class="genres">'. $metafield['genre'][0].'</p><br/>';
                echo 'длительность <b>'.$metafield['duration'][0].'ч</b>'.'<br>';
                echo 'ограничения по возрасту <b>'.$metafield['restriction'][0].'</b><br/>';
                echo 'сеансы <b>'.$metafield['seance'][0].'</b><br/>';
                ?>
            </div>
            <?php } ?> 
            <div class="main-show">
            <?php the_content();?>
            </div>
                
                 
                
              <?php  endwhile;?>
             <div class="navigation-pg">
                 <?php previous_post_link('◄ %link ','Предыдущий',TRUE);
                 next_post_link('%link ►','Следующий',TRUE); ?>
             </div> 
            
            <?php endif; ?>
            
            
            
            
        </div>
        <?php get_sidebar();?>
        
    </div>
    <?php get_footer(); ?>
    
</div>
</body>
</html>
