<?php
$order_sort_out=array('0'=>'сегодня','1'=>'скоро','2'=>'новинки');
/*
Template Name: welcom
*/
?>
<html>
<?php get_header();?>
<body>
<div class="mwind">
    <div class="header">
        <a href="/"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/scr/logo-1.png"/></a>
    </div>
    <div class="mainmenu">
        <div class="time_center"> <?php echo date("d.m. Y") ?> </div> 
        <?php wp_nav_menu($args); ?> &nbsp;
        
    </div>
    <div class ="mainbody">
        <?php 
        $counter = 0;
        $pathto = get_template_directory_uri();
        $posts = get_posts(array(
	'numberposts'     => 13,
	'offset'          => 0,
	'category'        => '21',
        'order'           => 'asc',
	'include'         => '',
	'exclude'         => '',
	'meta_key'        => '',
	'meta_value'      => '',
	'post_type'       => 'post',
	'post_mime_type'  => '',
	'post_parent'     => '',
	'post_status'     => 'publish'
));
        
        
        foreach($posts as $post)   {
            $category = get_the_category($post->ID);
            if($category[0]->name != 'расписание'){$mod=0;}else{$mod=1;}
            $mygloblist[$counterfilm] = $category[$mod]->name;
            $counterfilm++;
        }
        $varios['content'] = array_values(array_unique($mygloblist));
        reset($posts);
foreach($posts as $post){ //setup_postdata($post);
    $metafield = get_post_meta($post->ID,'',TRUE); //echo '<br/>'.'метаполя'.'<br/>';
    $category = get_the_category($post->ID);
    if($category[0]->name != 'расписание'){$mod=0;}else{$mod=1;}
    $testrec = $category[$mod]->name;
    reset($varios);
    
    for($i = 0; $i < count($varios['content']); $i++){
        if( $testrec == $order_sort_out[$i]){ $selector = $i ;}
    }
    $bodydescript['id'] = $post->ID;
    $bodydescript['link'] = get_permalink($post->ID);
    $bodydescript['title'] = $post->post_title;
    $bodydescript['day_start'] = $metafield['date'][0];
    $bodydescript['day_end'] = $metafield['day_end'][0];
    $bodydescript['genre'] = $metafield['genre'][0];
    $bodydescript['format'] = $metafield['format'][0];
    $bodydescript['duration'] = $metafield['duration'][0];
    $bodydescript['scr_back'] = $metafield['mini_screen'][0];
    $bodydescript['seance'] = $metafield['seance'][0];
    $bodydescript['name'] = $metafield['name_film'][0];
    $writearr[$selector][] = $bodydescript;
    //var_dump($metafield);
  } 
  $step =count($writearr);
  ?>
    <div class="info_field">
    <?php 
    for ($i = 0; $i < $step; $i++){ 
    ?><div class="row head"><?php
    switch($i){
    case 0: echo 'Сегодня';
        break;
    case 1: echo 'Скоро';
        break;
    case 2: echo 'Новинки';
    }
    ?></div><?php
    print_out_file_slice($writearr[$i],$pathto);
    
    }?>
    </div>
     <?php get_sidebar();?>
    </div>
    <?php get_footer(); ?>
    
</div>
</body>
</html>


