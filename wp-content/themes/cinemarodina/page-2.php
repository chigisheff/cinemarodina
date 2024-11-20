<?php
/*
Template Name: page-about
*/
?>
<html>
<?php get_header();?>
<body>
<div class="mwind">
    <div class="header">
        <a href="/"><img src="<?php bloginfo( 'stylesheet_directory' );?>/scr/logo-1.png"/> </a>
    </div>
    <div class="mainmenu">
        <div class="time_center"> <?php echo date("d.m. Y") ?></div> 
        <?php wp_nav_menu($args);?>&nbsp;
        
    </div>
    <div class ="mainbody">
        <div class="info_field">
	<?php  
$posts = get_posts(array(
	'numberposts'     => 13,
	'offset'          => 0,
	'category'        => '17',
	'orderby'         => 'date',
	'order'           => 'desc',
	'include'         => '',
	'exclude'         => '',
	'meta_key'        => '',
	'meta_value'      => '',
	'post_type'       => 'post',
	'post_mime_type'  => '',
	'post_parent'     => '',
	'post_status'     => 'publish'
));

               foreach($posts as $post){ 
                   echo '<p>'.$post->post_title.'</p>';
               ?>                 
                <div class="content-container">
                <?php echo the_excerpt();?>
                    <a href="<?php echo get_permalink(); ?>"> Больше...</a>
                </div>
                <div class="film-info">
                <?php the_content();?>
                    <hr/>
                </div>
                <br/> 
                
                <?php
               }
?>
                    <div class="navigation-pg">
                        <?php posts_nav_link(' ⇆ ', '◄вернуться назад', 'заглянуть вперед►'); ?>
                        
                    </div>
            
           
	</div>
        <?php get_sidebar();?>
        
    </div>
    <?php get_footer(); ?>
    
</div>
</body>
</html>

