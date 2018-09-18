<?php load::view("template::head") ?>
<?php load::view("template::navbar") ?>
<div class="inner_content">
    <!-- /pages_agile_info_w3l -->

    <div class="pages_agile_info_w3l">
        <!-- /login -->
        <div class="over_lay_agile_pages_w3ls two">
            <div class="registration">

                <div class="signin-form profile">
                    <h2>Demande de credit</h2>
                    <div class="login-form form-body form-body-info">
                        <form action="<?= site::site_url("bankier/add_demande") ?>" method="post"
                              accept-charset="UTF-8">
                            <label for="id_client">Choississez le client</label>
                            <div class="form-group">
                                <select name="id_client" id="id_client" required="true" class="form-control">
                                    <option value="Client demandant le credit" disabled=""></option>
                                    <?php
                                    foreach ($clients as $client):
                                        ?>
                                        <option value="<?= $client['num_client'] ?>"><?= ucwords($client['nom_complet']) ?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                            <input type="text" name="libelle" placeholder="Libelle de la demande" required="">
                            <label for="field-4">Motivation de la demande</label>
                            <div class="form-group">
                                <textarea name="message" id="field-4" required="true" class="form-control"
                                          maxlength="250"
                                          placeholder="Un petit message accompagnant le ademande"></textarea>
                            </div>

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
    <!-- /login -->
    <!-- //pages_agile_info_w3l -->
    <script type="application/javascript">
        $("div .inner_content").removeClass("inner_content")
    </script>
    <?php load::view("template::foot") ?>
