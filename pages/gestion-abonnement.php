<?php $result_favorites = selectDB('*', 'favorites', 'user_id = "' . $_SESSION['user_id'] . '" ORDER BY id DESC', $db, '*');  ?>

<div class="head">

    <img class="header_logo" src="<?= $static_img ?>header_logo.webp" />

    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto text-center pt-4 pb_mobile">

                <a href="/coup-de-coeur" class="btn btn-soeur btn-soeur-profil-heart mt-4 me-4 ms-4 mb-3"><i class="fas fa-heart me-2" style="color: red;"></i> Mes coup de coeur (<?= count($result_favorites) ?>)</a>
                <a href="/coup-de-coeur" class="btn btn-soeur btn-soeur-profil-msg mt-4 me-4 ms-4 mb-3"><i class="far fa-comment-dots me-2" style="color: rgb(43, 180, 18);" aria-hidden="true"></i> Mes messages (<?= count($result_favorites) ?>)</a>

            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="row g-4 my-5 row-cols-1 row-cols-lg-3 show_mobile">
        <?php include_once('modules/profil-avatar.php'); ?>

        <div class="col-lg-8">
            <div class="profil_gestion">
                <h3><i class="fas fa-gifts me-2"></i>Gérer mes abonnements <?php if ($premium->get_user() == 0) { ?><a href="/payment-renewal" class="mb-0 mt-0 d-inline-block btn btn-success btn-navbar" style="float: right;">Je choisis un abonnement</a><?php } ?></h3>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 col-lg-12 m-auto mt-4">

                    <?php foreach ($commande->get_commande() as $data) { ?>
                        <?php $formule = selectDB('*', 'formules', 'id = "' . $data['formule'] . '" ORDER BY id ASC', $db, '1'); ?>

                        <div class="col mb-4">
                            <div class="card shadow-sm">
                                <?= ($data['formule'] == "2") ? '<div style="background: url(' . $static_img . '71d6b38f167aa2d1ce20.svg); height: 255px;width: 100%;border-radius: 1.625rem 1.625rem 0 0;"></div>' : '<div style="background: url(' . $static_img . '2be9aa5e2b23bb90189f.png); height: 255px;width: 100%;border-radius: 1.625rem 1.625rem 0 0;background-position: right;background-size: cover;background-repeat: no-repeat;"></div>' ?>

                                <div class="card-body text-start">
                                    <p class="card-text title-card mb-3"><i class="fas fa-crown me-2" style="color: gold;"></i><?= $formule['name']; ?></p>
                                    <hr />
                                    <p class="card-text"><b>Récapitulatif de votre abonnement :</b></p>
                                    <p class="card-text"><?= $formule['name']; ?></p>
                                    <p class="card-text">Durée du pass <?= $formule['duration']; ?></p>
                                    <p class="card-text">Prix par mois <b><?= $formule['price_per_month']; ?> €</b></p>
                                    <p class="card-text">Total pour 6 mois <b><?= $formule['total_for_6_month']; ?> €</b></p>
                                    <p class="card-text">Total <b><?= $formule['total']; ?> €</b></p>
                                    <hr />
                                    <?php if ($data['statut_transaction'] != "Remboursée") { ?>
                                        <?php if (date('Y-m-d H:i:s') > $data['expired_date']) { ?>
                                            <p style="font-size: 0.85rem;display: inline-block;" class="card-text text-end"><i class="far fa-times-circle me-2" aria-hidden="true" style="color: red;"></i>Votre abonnement a expiré.</p>
                                        <?php } else { ?>
                                            <p style="font-size: 0.85rem;display: inline-block;" class="card-text text-end"><i class="far fa-check-circle me-2" aria-hidden="true" style="color: #24a21c;"></i>Votre abonnement prendra fin le <br /><?= str_replace(":", " heures et ", dateToFrench($data['expired_date'], 'l j F Y à H:i')) . " minute(s)." ?></p>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <p style="font-size: 0.85rem;display: inline-block;" class="card-text text-end"><i class="far fa-times-circle me-2" aria-hidden="true" style="color: red;"></i>Votre abonnement a été résilier.</p>
                                    <?php } ?>
                                </div>

                                <div class="card-footer text-start">
                                    <?php if ($data['statut_transaction'] != "Remboursée") { ?>
                                        <?php if (date('Y-m-d H:i:s') < $data['after_14']) { ?>
                                            <?php if ($data['expired_date'] >= date('Y-m-d H:i:s')) { ?>
                                                <a href="" class="btn btn-success btn-navbar btn-cancel mt-2 mb-2" data-id="<?= $data['transaction_id']; ?>" data-token="<?= $data['token'] ?>">Résilier</a>
                                                <p id="refun_ok" style="font-size: 0.75rem;padding-left: 3px;text-align: center; display: none;" class="mt-2 mb-2"><i class="fas fa-check me-2" style="color: #24a21c;"></i>La résiliation pour ce produit est activer.</p>
                                                <p id="refun_ok2" style="font-size: 0.75rem;padding-left: 3px;text-align: center; display: none;" class="mt-2 mb-2"><i class="fas fa-check me-2" style="color: #24a21c;"></i>Vous allez recevoir un email de confirmation.</p>
                                                <p id="refun_date_error" style="font-size: 0.75rem;padding-left: 3px;text-align: center; display: none;" class="mt-2 mb-2"><i class="fas fa-times me-2" style="color: red;"></i>La date de rétraction a été dépassée.</p>
                                                <p id="refun_date_error2" style="font-size: 0.75rem;padding-left: 3px;text-align: center; display: none;" class="mt-2 mb-2"><i class="fas fa-times me-2" style="color: red;"></i>Vous ne pouvez plus résilier l'abonnement.</p>
                                                <p id="refun_blocked_error" style="font-size: 0.75rem;padding-left: 3px;text-align: center; display: none;" class="mt-2 mb-2"><i class="fas fa-times me-2" style="color: red;"></i>Vous avez fait trop de tentatives.</p>
                                                <p id="refun_blocked_error2" style="font-size: 0.75rem;padding-left: 3px;text-align: center; display: none;" class="mt-2 mb-2"><i class="fas fa-times me-2" style="color: red;"></i>Votre compte sera désactivé si une nouvelle tentative intervient.</p>
                                                <p id="refun_error" style="font-size: 0.75rem;padding-left: 3px;text-align: center; display: none;" class="mt-2 mb-2"><i class="fas fa-times me-2" style="color: red;"></i>Une erreur est survenue. Merci de recommencer.</p>
                                                <p id="refun_refund_error" style="font-size: 0.75rem;padding-left: 3px;text-align: center; display: none;" class="mt-2 mb-2"><i class="fas fa-times me-2" style="color: red;"></i>Votre abonnement a déjà été résilié.</p>
                                            <?php } else { ?>
                                                <p style="font-size: 0.75rem;text-align: center;" class="mt-2 mb-2"><i class="fas fa-exclamation me-2" style="color: red;"></i>La résiliation pour ce produit n'est plus disponible.</p>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <p style="font-size: 0.75rem;padding-left: 3px;text-align: center;" class="mt-2 mb-2"><i class="fas fa-exclamation me-2" style="color: red;"></i>La résiliation pour ce produit n'est plus disponible.</p>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <p style="font-size: 0.75rem;padding-left: 3px;text-align: center;" class="mt-2 mb-2"><i class="fas fa-exclamation me-2" style="color: red;"></i>La résiliation pour ce produit n'est plus disponible.</p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>