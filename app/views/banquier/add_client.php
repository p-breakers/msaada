<?php load::view("template::head") ?>
<?php load::view("template::navbar") ?>
<div class="inner_content">
    <!-- /pages_agile_info_w3l -->

    <div class="pages_agile_info_w3l">
        <!-- /login -->
        <div class="over_lay_agile_pages_w3ls two">
            <div class="registration">

                <div class="signin-form profile">
                    <h2>Ajouter un client</h2>
                    <div class="login-form form-body form-body-info">
                        <form action="<?= site::site_url("bankier/add_client") ?>" method="post" accept-charset="UTF-8">
                            <input type="text" name="nom" placeholder="Nom Complet" required="">
                            <input type="text" name="adresse" placeholder="Adresse" required="">
                            <input type="text" name="nationalite" placeholder="Nationalit&eacute;(e)" required="">
                            <input type="tel" name="phone" placeholder="T&eacute;l&eacute;phone" required="">
                            <input type="date" name="bday" placeholder="Date de naissance" required="">
                            <input type="email" name="email" placeholder="E-mail" required="">
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="genre" value="m" required="">
                                        Homme
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="genre" value="f" required="">
                                        Femme
                                    </label>
                                </div>
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
