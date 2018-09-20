<?php load::view("template::head") ?>
<?php load::view("template::navbar") ?>
    <div class="inner_content">
        <!-- /pages_agile_info_w3l -->

        <div class="pages_agile_info_w3l">
            <!-- /login -->
            <div class="over_lay_agile_pages_w3ls one">
                <div class="registration">
                    <div class="signin-form profile">
                        <h2>Modifier demande</h2>
                        <div class="login-form form-body form-body-info">
                            <form action="<?= site::site_url("bankier/add_client") ?>" method="post"
                                  accept-charset="UTF-8">
                                <?php
                                foreach ($cl as $key => $value):
                                    ?>
                                    <label for="<?= $key ?>"><?= ucwords(str_replace("_", " ", $key)) ?></label>
                                    <input id="<?= $key ?>" type="<?= ($value === 0) ? "number" : "text" ?>"
                                           name="<?= $key ?>" value="<?= $value ?>" required=""/>
                                <?php
                                endforeach;
                                ?>
                                <div class="tp">
                                    <input type="submit" value="Enregistrer">
                                </div>
                            </form>
                        </div>

                        <p><a href="#"> Assur&eacute;r vous d'avoir mis &agrave; la disposition du client nos termes et
                                conditions d'utilisations</a></p>
                        <h6><a href="<?= site::base_url() ?>">Retour &agrave; l'accueil</a><h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /login -->
    <!-- //pages_agile_info_w3l -->
    <script type="application/javascript">
        $("div .inner_content").removeClass("inner_content")
    </script>
<?php load::view("template::foot") ?>