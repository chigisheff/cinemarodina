<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of uploadimg
 *
 * @author andreych
 */

$callback = $_GET['CKEditorFuncNum'];
    $dir = '/var/www/cinemarodina.org/wp-content/themes/cinemarodina/img/';
    $full_path = $dir.$_FILES['upload']['name'];
    $http_path = 'cinemarodina.org/wp-content/themes/cinemarodina/img/'.$_FILES['upload']['name'];
    $error = '';
    if( move_uploaded_file($_FILES['upload']['tmp_name'], $full_path) ) {
    } else {
        $error = 'Что-то пошло не так!';
        $http_path = '';
    }
    echo "<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction(".$callback.
    ",\"".$http_path."\", \"".$error."\" );</script>";
/*move_uploaded_file($_FILES['upload']['tmp_name'], "wp-content/themes/cinemarodina/img/".$name);
$full_path = 'http://www.cinemarodina.org/wp-content/themes/cinemarodina/img/'.$name;
$message = "Файл ".$_FILES['upload']['name']." загружен";
$size=@getimagesize('wp-content/themes/cinemarodina/img/'.$name);
if($size[0]<50 OR $size[1]<50){
unlink('wp-content/themes/cinemarodina/img/'.$name);}
*/