<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Eunice Banque | <?= isset($title) ? $title : "La banque du moment"; ?></title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?= $GLOBALS['config']['appName'] ?>, <?= $GLOBALS['config']['author'] ?>" />
    <meta name="author" content="<?= $GLOBALS['config']['author'] ?>">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme -->
    <link href="<?= site::base_url("assets/css/bootstrap.css")?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= site::base_url("assets/css/component.css") ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= site::base_url("assets/css/export.css") ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= site::base_url("assets/css/flipclock.css") ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= site::base_url("assets/css/circles.css") ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= site::base_url("assets/css/style_grid.css") ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= site::base_url("assets/css/style.css") ?>" rel="stylesheet" type="text/css" media="all" />

    <!-- font-awesome-icons -->
    <link href="<?= site::base_url("assets/css/font-awesome.css") ?>" rel="stylesheet"/>
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet"/>
    <link rel="shortcut icon" href="<?= site::base_url("favicon.ico") ?>" type="image/x-icon"/>
    <script type="text/javascript" src="<?= site::base_url("assets/js/jquery-2.1.4.min.js") ?>"></script>
</head>
<body>
<div class="wthree_agile_admin_info">