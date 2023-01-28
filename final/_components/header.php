<?php

// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = '🚨 Missing Title 🚨';
}
$site_title = 'Imperfect roll Final';
$document_title = $page_title . ' | ' . $site_title; // Home | J

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/dist/images/recipe.png"> -->
  <!-- <script src="https://cdn.tiny.cloud/1/x2yk3gj8du2d3si372pt1ylmp1le9s0s2fns9fj75nflr46d/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">
  <title><?php echo $document_title ; ?></title>
</head>

<body>