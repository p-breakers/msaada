<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Eunice Banque | <?= isset($title) ? $title : "La banque du moment"; ?></title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="<?= $GLOBALS['config']['appName'] ?>, <?= $GLOBALS['config']['author'] ?>"/>
    <meta name="author" content="<?= $GLOBALS['config']['author'] ?>">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //custom-theme -->
    <link href="<?= site::base_url("assets/css/bootstrap.css") ?>" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= site::base_url("assets/css/snow.min.css") ?>" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= site::base_url("assets/css/component.css") ?>" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= site::base_url("assets/css/style_grid.css") ?>" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= site::base_url("assets/css/style.css") ?>" rel="stylesheet" type="text/css" media="all"/>
    <!-- font-awesome-icons -->
    <link href="<?= site::base_url("assets/css/font-awesome.css") ?>" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- /pages_agile_info_w3l -->

<div class="pages_agile_info_w3l page_error">
    <!-- /login -->
    <div class="over_lay_agile_pages_w3ls error">
        <div class="registration error">


            <h2>404</h2>
            <h3>Oops! Page Non Trouver.</h3>

            <h6><a href="<?= site::base_url() ?>">Retour à l'accueil</a><h6>
        </div>

        <!--copy rights start here-->
        <div class="copyrights_agile error">
            <p>© <?= date("Y"); ?> Eunice Bank. Tous droits r&eacute;serv&eacute; | Design by <a
                        href="http://localhost/" target="_blank"><?= $GLOBALS['config']['author'] ?></a></p>
        </div>
        <!--copy rights end here-->
    </div>
</div>
<!-- /login -->
<!-- //pages_agile_info_w3l -->


<!-- js -->

<script type="text/javascript" src="<?= site::base_url("assets/js/jquery-2.1.4.min.js") ?>"></script>
<script src="<?= site::base_url("assets/js/modernizr.custom.js") ?>"></script>

<script src="<?= site::base_url("assets/js/classie.js") ?>"></script>
<script src="<?= site::base_url("assets/js/gnmenu.js") ?>"></script>
<script>
    new gnMenu(document.getElementById('gn-menu'));
</script>

<!-- //js -->

<script src="<?= site::base_url("assets/js/screenfull.js") ?>"></script>
<script>
    $(function () {
        $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

        if (!screenfull.enabled) {
            return false;
        }


        $('#toggle').click(function () {
            screenfull.toggle($('#container')[0]);
        });
    });
</script>
<script src="<?= site::base_url("assets/js/jquery.nicescroll.js") ?>"></script>
<script src="<?= site::base_url("assets/js/scripts.js") ?>"></script>
<script src="<?= site::base_url("assets/js/snow.min.js") ?>"></script>
<script type="text/javascript" src="<?= site::base_url("assets/js/bootstrap-3.1.1.min.js") ?>"></script>
</body>
</html>