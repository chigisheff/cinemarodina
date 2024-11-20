<?php
/*
Template Name: page
*/
?>
<html>
<?php get_header();?>
<body>
<div class="mwind">
    <div class="header">
        <!--a href="/"><img src="<?php bloginfo( 'stylesheet_directory' );?>/scr/logo-1.png"/> </a-->
    </div>
    <div class="mainmenu">
        <div class="time_center"> <?php echo date("d.m. Y") ?></div> 
        <?php wp_nav_menu($args);?>&nbsp;
        
    </div>
    <div class ="mainbody">
        <div class="info_field"> Ожидаются...</div>
        <?php get_sidebar();?>
        
    </div>
    <?php get_footer(); ?>
    
</div>
</body>
</html>
