<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function andreych_left_side() {
    register_sidebar(
        array(
                'id' => 'andreych_left_side', // уникальный id
                'name' => 'Боковая колонка', // название сайдбара
                'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
                'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
                'after_title' => '</h3>'
        )
    );
}
add_action( 'widgets_init', 'andreych_left_side' );

class widget_about_cinemarodina_ru extends WP_Widget {
     public function __construct() {
           parent::__construct(
                 'widget_about_cinemarodina_ru',
                 __('Виджет сайта cinemarodina.ru'),
                 array( 'description' => __( 'Обзор последних новостей в разделе о нас', 'text_domain' ), )
           );
     }
     public function update( $new_instance, $old_instance ) {
           $instance = array();
           $instance['title'] = strip_tags( $new_instance['title'] );
           return $instance;
     }
     public function form( $instance ) { ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Сбор записей о нас</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
             name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" 
             value="<?php echo $instance['title']; ?>" />
        </p>
<?php
    }
    public function widget( $args, $instance ) {
        $posts = get_posts(array(
            'numberposts'     => 5,
            'offset'          => 0,
            'category'        => '17',
            'post_type'       => 'post',
            'post_mime_type'  => '',
            'post_parent'     => '',
            'post_status'     => 'publish'));
        ?>
        
        <div class="widget_about_cinemarodina_ru" >
            <span>
        <?php echo $instance[ 'title' ]; ?>
            </span>
        <?php 
            foreach ($posts as $post){ ?>
            <div><a href="<?php echo get_permalink($post->ID);?>"><?php echo $post->post_title; ?></a></div>
        <?php    }
        ?>
        
        </div>
<?php
    }
}

class widget_current_film extends WP_Widget {
     public function __construct() {
           parent::__construct(
                 'widget_current_film',
                 __('Виджет сайта cinemarodina.ru'),
                 array( 'description' => __( 'Сейчас идет', 'text_domain' ), )
           );
     }
     public function update( $new_instance, $old_instance ) {
           $instance = array();
           $instance['title'] = strip_tags( $new_instance['title'] );
           return $instance;
     }
     public function form( $instance ) { ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Сейчас идет</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
             name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" 
             value="<?php echo $instance['title']; ?>" />
        </p>
<?php
    }
    public function widget( $args, $instance ) {
        $posts = get_posts(array(
            'numberposts'     => 8,
            'offset'          => 0,
            'category'        => '22',
            'post_type'       => 'post',
            'post_mime_type'  => '',
            'post_parent'     => '',
            'post_status'     => 'publish'));
        ?>
        
        <div class="widget_about_cinemarodina_ru" >
            <span>
        <?php echo $instance[ 'title' ]; ?>
            </span>
        <?php 
        $listoffilms = array();
        $currseance = 0;
        $nextseance =0;
        $counterlist = 0;
        $time = time();
        $time+=3*3600;
            $timenow = date('H:i',$time);
            $timegrn = gmdate('H:i');
            foreach ($posts as $post){ 
            $metafield = get_post_meta($post->ID,'',TRUE);
            $bodydescript['link'] = get_permalink($post->ID);
            $bodydescript['title'] = $post->post_title;
            $bodydescript['scr_back'] = $metafield['mini_screen'][0];
            $bodydescript['seance'] = $metafield['seance'][0];
            $bodydescript['duration'] = $metafield['duration'][0];
            if($metafield['name_film'][0]){$bodydescript['title'] = $metafield['name_film'][0];}
            $crtime = explode ("\r\n",$bodydescript['seance']);
            foreach($crtime as $ltime){
                $listoffilms['time'][] = $ltime;
                $listoffilms['name_film'][] = $bodydescript['title'];
                $listoffilms['scrpath'][] = $bodydescript['scr_back'];
                $listoffilms['links'][]=$bodydescript['link'];
                $listoffilms['duration'][]=$bodydescript['duration'];
            }
            
            }
$counterlist = count($listoffilms['time']);
$p = array_multisort($listoffilms['time'],$listoffilms['name_film'],$listoffilms['scrpath'],$listoffilms['links']);
for($i=0; $i <$counterlist;$i++){
    if($listoffilms['time'][0]>$timenow){$currseance = -1;break; }
    if($listoffilms['time'][1]>$timenow && $listoffilms['time'][0]<$timenow){$currseance = 0;$nextseance = 1;break; }
    if($listoffilms['time'][$i]>$timenow){
        $nextseance = $i; $currseance = $nextseance-1; break;
    }
    if($i == $counterlist-1){
        $ttest = strtotime($listoffilms['duration'][$counterlist-1]);
        $ttest += $time;
        $lasttime = date('H:i',$ttest);
        $currseance = $counterlist-1;$nextseance = $counterlist+1;
    }
}
$ttest = strtotime($listoffilms['duration'][$counterlist-1]);
$ttest += $time;
$lasttime = date('H:i',$ttest);
if($currseance ==-1){
            ?>
            <div><?php echo "Слишком рано для кино <br/>"; ?></div>
            сейчас:<?php echo $timenow; ?>
            <div>
                <?php if($nextseance < $counterlist ){?>
                <p>Следущий сеанс:<br/><strong><?php echo $listoffilms['name_film'][$nextseance].' '.$listoffilms['time'][$nextseance];?> </strong></p>
                <a href="<?php echo $listoffilms['links'][$nextseance];?>"><?php echo $$listoffilms['name_film'][$nextseance]; ?>
                     <img src="<?php bloginfo( 'stylesheet_directory' ); echo '/'. $listoffilms['scrpath'][$nextseance];?>"/></a>
            </div>
                <?php    }} else {?>
            
            <div>
                <p>Сейчас идет:<br/><strong><?php echo $listoffilms['name_film'][$currseance]?></strong></p>
                <a href="<?php echo $listoffilms['links'][$currseance];?>"><?php echo $$listoffilms['name_film'][$currseance]; ?>
                <img src="<?php bloginfo( 'stylesheet_directory' ); echo '/'. $listoffilms['scrpath'][$currseance];?>"/></a>
                
            </div>
            <div>
                <?php if($nextseance < $counterlist ){?>
                <p>Следущий сеанс:<br/><strong><?php echo $listoffilms['name_film'][$nextseance].' '.$listoffilms['time'][$nextseance];?> </strong></p>
                <a href="<?php echo $listoffilms['links'][$nextseance];?>"><?php echo $$listoffilms['name_film'][$nextseance]; ?>
                     <img src="<?php bloginfo( 'stylesheet_directory' ); echo '/'. $listoffilms['scrpath'][$nextseance];?>"/></a></div>
                         <?php
                } else { ?>
            <p>Следующий сеанс утром<strong><?php echo $listoffilms['time'][0];?></strong> </p>
                    <?php
                }
            }
            ?>
        
        </div>
<?php

//var_dump($listoffilms);
    }
}

add_action( 'widgets_init', 
    function(){
        register_widget( 'widget_about_cinemarodina_ru');
});
add_action( 'widgets_init', 
    function(){
        register_widget( 'widget_current_film');
});


if(function_exists('wp_nav_menu')){
    register_nav_menus(array(
        'container'       => 'false',           //(string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
        'container_class' => 'mmenu'
    ));
}
function print_out_file_slice($deal,$pathto){
    //var_dump($deal);
    $can_continue=TRUE; //Допусакть расширение не более одного раза. Сбрасывается при входе при проверке
    
    $jnow=0; if(count($deal)>4){$step_now = 4;}else{$step_now=count($deal);}
    repit_next:
        ?>
    
    <div class="blank"><?php
    for($j = $jnow; $j < $step_now; $j++){
    echo '<p> с '.$deal[$j]['day_start'].'&nbsp;'.'до '.$deal[$j]['day_end'].'&nbsp;</p>'; }?>
    </div>
    <div class="row scr"><?php
    for($j = $jnow; $j < $step_now; $j++){
        echo '<div class = "one_screen">';
        echo '<a href="'.$deal[$j]['link'].'"';
        echo 'title="Формат: '.$deal[$j]['format'];
        echo ' Длительность: '.$deal[$j]['duration'];
        echo ' Жанр: '.$deal[$j]['genre'].'">';
        echo  '<img src="'.$pathto.'/'.$deal[$j]['scr_back'].'">';
        echo '</a>';
        echo '</div>';
    }
 ?> </div><?php
    
    ?><div class="namefield">    <?php
    for($j = $jnow; $j < $step_now; $j++){
        echo '<div class="one_name">'.$deal[$j]['name'].'</div>';
    }
    ?></div><?php
    ?><div class="row btn"><?php
    for($j = $jnow; $j < $step_now; $j++){
        echo '<a href="'.$deal[$j]['link'].'">';
        echo '<div class="one_button">';
        echo $deal[$j]['seance'];
        echo '</div></a>';
    }
    ?></div><?php
    if(count($deal)>4){$jnow=4; $step_now = count($deal); if($can_continue){$can_continue = FALSE; goto repit_next;}}
    }


 