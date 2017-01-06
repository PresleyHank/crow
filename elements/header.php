<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crow v3.0 - a smart grid framework</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?=$app->url?>favicon.ico" />

  <link rel="stylesheet" type="text/css" href="<?=$app->url?>assets/css/base.css?v=<?=date('hs')?>" />
</head>
<body class="page-<?=(isset($_GET['page']) ? $_GET['page'] : 'index')?>">
<div id="fb-root"></div>
<?=$app->get('parts/vendors')?>
<?=$app->get('parts/top')?>
<div id="wrapper">