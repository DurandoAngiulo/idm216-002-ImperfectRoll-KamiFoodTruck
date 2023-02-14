<?php
header("Access-Control-Allow-Origin: *");
if (!isset($page_title)) {
    $page_title = '🚨 Missing Title 🚨';
}
$site_title = 'Imperfect Roll Final';
$document_title = $page_title . ' | ' . $site_title; // Home | 

// if($page_title ='Home'){
//   $favicon = '/dist/images/dice.png';
// }else{
//   $favicon = '/dist/images/kami-fav-icon.png';
// }
?>
<!-- /dist/images/kami-fav-icon.png -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/dist/images/kami-fav-icon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/main.css">
  <!-- <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/criticalPath.css"> -->
  <title><?php echo $document_title ; ?></title>
</head>