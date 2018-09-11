<!-- /w3_agileits_top_nav-->
<!-- /nav-->
<div class="w3_agileits_top_nav">
    <ul id="gn-menu" class="gn-menu-main">
        <?php load::view("template::sidebar") ?>
        <li class="second logo"><h1><a href="main-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i><?= $GLOBALS["config"]["appName"] ?></a></h1></li>
            <?php load::view("template::navcontent") ?>
        <li class="second full-screen">
            <section class="full-top">
                <button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>
            </section>
        </li>

    </ul>
    <!-- //nav -->

</div>
<div class="clearfix"></div>
<!-- //w3_agileits_top_nav-->