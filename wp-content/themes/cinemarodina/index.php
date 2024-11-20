<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
/*
Template Name: Blog
*/
?>

<html xml:lang=«ru» lang="ru" >
<?php 
get_header();
?>
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
            query_posts( array ( 'orderby' => 'title', 'order' => 'ASC','paged' => get_query_var('paged'),'category'=>'21' ) ); 
            if ( have_posts() ) : while ( have_posts()) : the_post(); 
                
                $metafield = get_post_meta($post->ID,'',TRUE);
                 
                if(time() <= strtotime($metafield['day_end'][0])){
                echo '<p>в прокате с '.$metafield['date'][0].'&nbsp;';
                echo 'до '.$metafield['day_end'][0].'&nbsp;</p>';?>
                <div class="content-container">
                <?php the_excerpt();?>
                    <a href="<?php echo get_permalink(); ?>"> Больше...</a>
                </div>
                <div class="film-info">
                <?php echo '<p class="genres">'. $metafield['genre'][0].'</p><br/>';
                echo 'длительность <b>'.$metafield['duration'][0].'ч</b>'.'<br>';
                echo 'ограничения по возрасту <b>'.$metafield['restriction'][0].'</b><br/>';
                echo 'сеансы <b>'.$metafield['seance'][0].'</b><br/>';
                ?>
                    <hr/>
                </div>
                <br/> 
                
                <?php
                }
                endwhile;?>
                    <div class="navigation-pg">
                        <?php posts_nav_link(' ⇆ ', '◄вернуться назад', 'заглянуть вперед►'); ?>
                        
                    </div>
            
            <?php endif; ?>
            
            
            
            
        </div>
        <?php get_sidebar();?>
        
    </div>
    <?php get_footer(); ?>
    
</div>
</body>
</html>