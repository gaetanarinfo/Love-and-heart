<div class="head">

    <img class="header_logo" src="<?= $static_img ?>header_logo.webp" />

</div>

<section class="py-5 pb-0" style="display: block;">
    <div class="container px-2 my-5 mb-2">
        <div class="row gx-3">
            <div class="col-lg-12 mb-5 mb-lg-0">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active current first">
                        <div class="item-number">
                            <span class="number-badge">1</span>
                        </div>

                        <div class="item-label">
                            <span class="label">Votre Pass</span>
                        </div>
                    </li>

                    <li class="breadcrumb-item active items2">
                        <div class="item-number">
                            <span class="number-badge">2</span>
                        </div>
                        <div class="item-label">
                            <span class="label">Paiement</span>
                        </div>
                    </li>

                    <li class="breadcrumb-item active items3">
                        <div class="item-number">
                            <span class="number-badge">3</span>
                        </div>
                        <div class="item-label">
                            <span class="label" style="padding: 0 0;">Confirmation</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="card-valid" class="py-5 pb-1 pt-0">
    <div class="container card_container px-2 my-5 mt-0 m-auto">
        <div class="row gx-3 m-auto">
            <div class="bloc_card">
                <div class="card_left">
                    <div class="section_1">
                        <div class="details" style="background: url(<?= $static_img ?><?= $formules['icone']; ?>) top left no-repeat;">
                            <div class="name"><?= $formules['name']; ?></div>
                            <div class="duration"><?= $formules['duration']; ?></div>
                        </div>
                    </div>

                    <div class="section_2">
                        <div class="offer-price initial hidden-xs visible-on-toggle">
                            <span class="offer-label monthlyBilling">
                                Prix / Mois
                            </span>
                            <span class="offer-value monthlyBilling text-right" data-test="monthly-price-to-pay">
                                <?= $formules['price_per_month']; ?> €
                            </span>
                        </div>

                        <div class="offer-price total">
                            <span class="offer-label">
                                Total pour 6 mois
                            </span>
                            <span class="offer-value2 text-right" data-test="total-price-to-pay">
                                <?= $formules['total']; ?> €
                            </span>
                        </div>


                        <div class="offer-price to-pay">
                            <span class="offer-label monthlyBilling">
                                Montant à régler
                                <span class="asterisk">
                                    *
                                </span>
                            </span>

                            <span class="offer-value3 monthlyBilling text-right" data-test="fraction-price-to-pay">
                                <?= $formules['total']; ?> €
                            </span>
                        </div>

                        <div class="fraction-mention hidden-xs visible-on-toggle">
                            votre pass 6 mois sera facturé <span class="offer-value4"><?= $formules['price_per_month']; ?>€</span>/mois pendant 6 mois. La 1ère mensualité sera prélevée aujourd'hui.
                        </div>

                        <input type="hidden" name="signatureID" value="">
                        <input type="hidden" name="provider" value="">
                        <input type="hidden" name="mode" value="">

                        <div class="section_2-separator visible-separator visible-on-toggle hidden-xs"></div>

                    </div>
                </div>

                <div class="card_right">
                    <div>
                        <div class="card-title">
                            <h1 class="title">Sélectionnez votre mode de paiement</h1>
                        </div>

                        <div class="tab-container ">
                            <ul class="mop-tab">
                                <li id="creditcard" class="mop-item tabs__toggle tabs__toggle_active" data-test="creditcard">
                                    <div><i class="far fa-credit-card icon-credit-card"></i></div>
                                </li>
                            </ul>
                        </div>

                        <div class="pad_valide">
                            <div class="alert alert-success" id="alert_success" role="alert">
                                <div class="message"><i class="fas fa-check me-2" style="color: #049804"></i> Votre paiement a été accepté.<br />Vous allez recevoir une confirmation de paiement sur votre boite e-mail.<br />Merci pour votre paiement.<br />Et à bientôt sur Love and heart.</div>
                            </div>

                            <?php if (!empty($_SESSION['user_id'])) { ?>
                                <div class="redirect_login">
                                    <i class="fas fa-directions"></i><a href="/gestion-abonnement">Mes abonnements</a>
                                </div>
                            <?php } else { ?>
                                <div class="redirect_login">
                                    <i class="fas fa-directions"></i><a href="/">Connexion</a>
                                </div>
                            <?php } ?>

                        </div>

                        <div class="pad_reassurance">
                            <div class="bloc-reassurance">
                                <p class="bloc-reassurance-txt">Selon votre établissement bancaire, une redirection vers la page d'authentification de votre banque pourrait avoir lieu pour terminer la validation de votre paiement.</p>

                                <div class="bloc-reassurance-img">
                                    <img class="mastercard-secure" src="<?= $static_img ?>mastercard-secure.svg?v=1632140830" alt="mastercard-secure">
                                    <img class="cb-secure" src="<?= $static_img ?>cb-secure.svg?v=1632140830" alt="cb-secure">

                                    <img class="visa-secure" src="<?= $static_img ?>visa-secure.svg?v=1632140830" alt="visa-secure">
                                </div>

                            </div>

                            <div class="reassurances-icons">
                                <div class="secure secure-logos">
                                    <ul class="card-block cards-list">
                                        <li id="credit-card-PCI-DSS" class="credit-card-PCI-DSS"></li>
                                        <li id="credit-card-CB" class="credit-card-CB"></li>
                                        <li id="credit-card-VISA" class="credit-card-VISA"></li>
                                        <li id="credit-card-MASTERCARD" class="credit-card-MASTERCARD"></li>
                                        <li id="credit-card-AMERICANEXPRESS" class="credit-card-AMERICANEXPRESS"></li>
                                        <li id="credit-card-PAYPAL" class="credit-card-PAYPAL"></li>
                                    </ul>
                                </div>
                                <div class="secure secure-payment">
                                    <i class="icon-lock-filled"></i>Paiement sécurisé
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 pb-0 pt-0" style="display: block;">
    <div class="container px-2 my-5 mt-0 m-auto">
        <div class="row gx-3">
            <div class="container terms col-lg-9 m-auto text-center">
                <p class="generic_term terms-element">
                    <sup class="asterisk">
                        *
                    </sup>
                    Si vous choisissez un Pass avec un engagement de <span>6</span> mois, il vous sera facturé mensuellement durant <span>6</span> mois pour un montant total de <span>149,94€</span> pour le Pass Essentiel et <span>179,94€</span> pour le Pass Premium.
                </p>


                <p class="generic_term terms-element">
                    <sup class="asterisk">
                        **
                    </sup>
                    Au-delà de la période initiale, votre Pass sera renouvelé automatiquement pour des périodes successives identiques et au plein tarif (non remisé).
                    Vous pouvez annuler ce renouvellement automatique à tout moment à partir de la page «Mon Compte», au plus tôt 24h après la souscription et au plus tard 48h avant la date d'échéance du Pass en cours.
                </p>


                <p class="generic_term terms-element">
                    <sup class="asterisk">

                    </sup>
                    Tous les prix incluent la TVA.
                </p>


                <p class="generic_term terms-element">
                    <sup class="asterisk">

                    </sup>
                    Vos Boosters seront réapprovisionnés tous les mois. Les Boosters non consommés seront perdus.
                </p>


                <p class="generic_term terms-element">
                    <sup class="asterisk">

                    </sup>
                    Conformément à l'article L 121-21 du Code de la Consommation,
                    vous disposez d'un délai de quatorze jours francs à compter de la souscription de votre Pass pour exercer votre droit de rétractation.
                    Pour plus d'information, <a href="https://love-and-heart.fr/terms" class="cgu-link in-popup" data-title="Conditions Générales d'Utilisation" target="_blank">cliquez ici</a> pour voir nos Conditions Générales d'Utilisation.
                </p>


                <p class="generic_term terms-element">
                    <sup class="asterisk">

                    </sup>
                    Pour voir notre Politique de confidentialité, <a href="https://love-and-heart.fr/privacy" class="in-popup" data-title="Politique de confidentialité" target="_blank">cliquez ici</a>.
                </p>

                <p class="generic_term terms-element">
                    <sup class="asterisk">

                    </sup>
                    « 1 Pass = 7x plus de messages ». Etude interne réalisée en comparant l’activité des membres abonnés (tous Pass confondus) et non abonnés – Juillet 2021
                </p>


                <p class="generic_term terms-element">
                    <sup class="asterisk">

                    </sup>
                    Love and heart, une micro-entreprise basée en France.
                </p>
            </div>
        </div>
    </div>
</section>

<script src="https://js.stripe.com/v3/"></script>