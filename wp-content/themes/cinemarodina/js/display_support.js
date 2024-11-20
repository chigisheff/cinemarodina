$(document).ready(function(){
    var  height_screen = $('.scr').length;
    
    var globheight = ($('.scr').height()+34)*height_screen+
            3*($('.row').height()*3+16+$('.blank').height()+$('.btn').height()+$('.head').height()+25+12);
    
    $('.main-show').is(function(){
        globheight = $('.main-show').height()+$('.navigation-pg').height()+128;
        $('.film-info').is(function(){
            globheight += $('.film-info').height()+25;
        });
    });
    $('.content-container').is(function(){
        var heighs_content = $('.content-container').length;
        globheight = heighs_content*($('.content-container').height()+$('.film-info').height()+24+16+24)+50;
    });
    $('.info_field').css('height',globheight);
    if($('.reclam_field').height() > globheight){globheight = $('.reclam_field').height();}
    $('.reclam_field').css('height',$('.info_field').height());
    
});


