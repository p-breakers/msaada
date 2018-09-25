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
                                <input type="hidden" name="id" value="<?= cl['id'] ?>"/>
                                <label for="cap_perm" class="control-label">Capitaux Permanent</label>
                                <input type="number" value="<?= $cl['capitaux_permanent'] ?>" class="form-control"
                                       id="cap_perm" name="cap_perm" required/>
                                <label for="val_imm" class="control-label">Valeur Immobili&egrave;re</label>
                                <input type="number" value="<?= $cl['valeurs_immobilisees'] ?>" class="form-control"
                                       id="val_imm" name="val_imm" required/>
                                <label for="actif" class="control-label">Actif</label>
                                <input type="number" value="<?= $cl['acticf'] ?>" class="form-control" id="actif"
                                       name="actif" required/>
                                <label for="cap_cr" class="control-label">Capitaux Credit</label>
                                <input type="number" value="<?= $cl['capitaux_credit'] ?>" class="form-control"
                                       id="cap_cr" name="cap_cr" required/>
                                <label for="facteur" class="control-label">Facteur</label>
                                <select name="facteur" class="form-control" id="facteur" required>
                                    <option value="taux interet" <?= ($cl['facteur'] == 'taux interet') ? "selected" : "" ?>>
                                        Taux d'intérêt
                                    </option>
                                    <option value="cours de change" <?= ($cl['facteur'] == 'cours de change') ? "selected" : "" ?>>
                                        Cours de change
                                    </option>
                                </select>
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