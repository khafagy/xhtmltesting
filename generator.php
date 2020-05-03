<?php
$file = 'index.html';
// The new person to add to the file

/*function setter($t_title='nn',$t_author='mm'){
          global $themes_title, $themes_author;      
          $themes_title = $t_title;
          $themes_author = $t_author;      
  
}*/

$themes_title =  $_POST['themes_title'] ? $_POST['themes_title'] : 'lolo';
$themes_author =  $_POST['themes_author'];
$themes_url =  $_POST['themes_url'];
$themes_description =  $_POST['themes_description'];
$themes_created =  $_POST['themes_created'];
$themes_modified =  $_POST['themes_modified'];

$css_folder = $_POST['css_folder'];
$images_folder = $_POST['images_folder'];
$css_screen_file = $_POST['css_screen_file'];
$css_print_file = $_POST['css_print_file'];
$meta_description =  $_POST['description'];
$meta_title =  $_POST['title'];
$meta_keywords =  $_POST['$keywords'];
$author =  $_POST['author'];
$favicon =  $_POST['favicon'];
$title =  $_POST['title'];
$title =  $_POST['title'];
$title =  $_POST['title'];
$title =  $_POST['title'];
$person =  <<< END

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
  <!--
  
  /* 
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
 
  Title : {$themes_title}   
  Author : {$themes_author} 
  URL : {$themes_url }
  
  Description : {$themes_description}
  
  Created :  {$themes_created}
  Modified : {$themes_modified}
  
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
  */
  
  /* ----- CSS ----- */
  
  -->
</style>

<title>{$title}</title>

<!-- Meta Tags -->
<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
<meta name="robots" content="index, follow" />


<meta name="description" content="{$meta_description}" />
<meta name="keywords" content="{$meta_keywords}" />
<meta name="author" content="{$meta_author}" />

<!-- Favicon -->
<link rel="shortcut icon" href="{$images_folder}/{$favicon}" />

<!-- CSS -->
<link rel="stylesheet" href="{$css_folder}/{$css_screen_file}" media="screen,projection" type="text/css" />
<link rel="stylesheet" href="{$css_folder}/{$css_print_file}" media="print" type="text/css" />

<!-- RSS -->

<link rel="alternate" href="" title="RSS Feed" type="application/rss+xml" />

<!-- JavaScript -->
<script src="" type="text/javascript"></script>


</head>

<body>


</body>

</html>

END;




// Write the contents to the file, 
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
file_put_contents($file, $person);



?>



