<?php load::view("template::head") ?>
<?php load::view("template::navbar") ?>
    <div class="inner_content">
        <div class="inner_content_w3_agile_info">
            <!-- /agile_top_w3_grids-->
            <div class="agile_top_w3_grids">
                <ul class="ca-menu">
                    <li>
                        <a href="<?= site::site_url("bankier/add_client") ?>">
                            <i class="fa fa-building-o" aria-hidden="true"></i>
                            <div class="ca-content">
                                <h4 class="ca-main"><?= $nbClient ?></h4>
                                <h3 class="ca-sub">Ajouter un client</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site::site_url("bankier/add_demande") ?>">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <div class="ca-content">
                                <h4 class="ca-main one"><?= $nbDemande ?></h4>
                                <h3 class="ca-sub one">Ajouter une demande</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site::site_url("bankier/list_clients") ?>">
                            <i class="fa fa-database" aria-hidden="true"></i>
                            <div class="ca-content">
                                <h4 class="ca-main two"><?= $nbClient ?></h4>
                                <h3 class="ca-sub two">Liste des clients</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site::site_url("bankier/list_comptes") ?>">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                            <div class="ca-content">
                                <h4 class="ca-main three"><?= $nbCompte ?></h4>
                                <h3 class="ca-sub three">Liste des comptes</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site::site_url("bankier/list_credits") ?>">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                            <div class="ca-content">
                                <h4 class="ca-main four"><?= $nbCredit ?></h4>
                                <h3 class="ca-sub four">Liste des cr&eacute;dits</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site::site_url("bankier/list_demandes") ?>">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                            <div class="ca-content">
                                <h4 class="ca-main four"><?= $nbDemande ?></h4>
                                <h3 class="ca-sub four">Liste des demandes</h3>
                            </div>
                        </a>
                    </li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <!-- //agile_top_w3_grids-->
        </div>
    </div>
<?php load::view("template::foot") ?>