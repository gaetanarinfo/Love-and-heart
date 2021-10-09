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

                    <li class="breadcrumb-item items2">
                        <div class="item-number">
                            <span class="number-badge">2</span>
                        </div>
                        <div class="item-label">
                            <span class="label">Paiement</span>
                        </div>
                    </li>

                    <li class="breadcrumb-item items3">
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

<section id="choice_formule" class="py-5 pb-1 pt-0" style="display: block;">
    <div class="container px-2 my-5 mt-0 m-auto">
        <div class="row gx-3">

            <div class="mb-4 mt-0 m-auto text-center pass">
                <i class="fas fa-ticket-alt"></i> <a class="back_site" href="https://love-and-heart.fr/welcome">Retour sur le site</a>
            </div>
            <div class="offers-wrapper">

                <div class="pass-switch">
                    <div class="btn-switch">
                        <input class="ui-tracking switch1" type="radio" name="switch1">
                        <label>Essentiel</label>
                    </div>
                    <div class="btn-switch">
                        <input class="ui-tracking tracked switch2" type="radio" name="switch2" checked>
                        <label>Premium</label>
                    </div>
                </div>

                <div id="offer_1" class="pass-block">
                    <div class="mb-5 mb-lg-0 payment_bloc m-auto">
                        <div class="payement_left_2">
                            <div class="offer-content">
                                <i class="far fa-comments offer-icon icon-premium-1"></i>
                                <h2 class="offer-title text-start">L'essentiel pour démarrer <span>en toute sérénité</span></h2>
                            </div>
                        </div>

                        <div class="payment_right offer">
                            <div class="offer">
                                <h1 class="pass-title ">Essentiel</h1>

                                <div class="pass-duration">
                                    pendant 6 mois
                                    <sup class="asterisk term_asterisk_duration_display">* </sup>
                                </div>
                                <div class="pass-advantages">
                                    <ul>
                                        <li class="advantage-item ">
                                            <i class="fas fa-check advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text"> <span>Echangez sans limite</span> avec qui vous voulez</span>
                                        </li>
                                        <li class="advantage-item ">
                                            <i class="fas fa-check advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text"> <span>Accédez</span> à vos listes de <span>Likes et Visites</span></span>
                                        </li>
                                        <li class="advantage-item ">
                                            <i class="fas fa-check advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text"> <span>Décidez</span> qui peut <span>vous contacter</span></span>
                                        </li>
                                        <li class="advantage-item ">
                                            <i class="fas fa-check advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text"> Accédez aux <span>filtres avancés</span> de la recherche</span>
                                        </li>
                                        <li class="advantage-item ">
                                            <i class="fas fa-times text-secondary advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text text-secondary"> Permettez à <span>tous les profils</span> de vous contacter</span>
                                        </li>
                                        <li class="advantage-item ">
                                            <i class="fas fa-times text-secondary advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text text-secondary"> <span>Démarquez-vous</span> avec l'icône Premium</span>
                                        </li>
                                        <li class="advantage-item ">
                                            <i class="fas fa-times text-secondary advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text text-secondary"> Découvrez quand <span>vos messages sont lus</span></span>
                                        </li>
                                        <li class="advantage-item ">
                                            <i class="fas fa-times text-secondary advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text text-secondary"> Boostez votre profil : <span>5 mises en avant/mois</span></span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="pass-price">
                                    <span>24,99€</span>
                                    <span>/mois<sup class="asterisk term_asterisk_price_display">** </sup></span>
                                </div>

                                <div class="pass-submit text-center">
                                    <form class="form_pay_1" name="form_payment" method="post">
                                        <input type="hidden" name="pass" class="formule_1" value="1">
                                        <button type="submit" class="btn btn-selected">Sélectionner</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="offer_2" class="pass-block active-item">
                    <div class="mb-5 mb-lg-0 payment_bloc m-auto">
                        <div class="payement_left">
                            <div class="offer-content">
                                <i class="fas fa-crown offer-icon icon-premium-1"></i>
                                <h2 class="offer-title">Multipliez vos contacts, <span>passez à</span> <span>l'expérience Premium</span></h2>
                            </div>
                        </div>

                        <div class="payment_right offer">
                            <div class="offer">
                                <h1 class="pass-title ">Premium</h1>

                                <div class="pass-duration">
                                    pendant 6 mois
                                    <sup class="asterisk term_asterisk_duration_display">* </sup>
                                </div>
                                <div class="pass-advantages">
                                    <ul>
                                        <li class="advantage-item ">
                                            <i class="fas fa-check advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text"> <span>Echangez sans limite</span> avec qui vous voulez</span>
                                        </li>
                                        <li class="advantage-item ">
                                            <i class="fas fa-check advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text"> <span>Accédez</span> à vos listes de <span>Likes et Visites</span></span>
                                        </li>
                                        <li class="advantage-item ">
                                            <i class="fas fa-check advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text"> <span>Décidez</span> qui peut <span>vous contacter</span></span>
                                        </li>
                                        <li class="advantage-item ">
                                            <i class="fas fa-check advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text"> Accédez aux <span>filtres avancés</span> de la recherche</span>
                                        </li>
                                        <li class="advantage-item ">
                                            <i class="fas fa-check advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text"> Permettez à <span>tous les profils</span> de vous contacter</span>
                                        </li>
                                        <li class="advantage-item ">
                                            <i class="fas fa-check advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text"> <span>Démarquez-vous</span> avec l'icône Premium</span>
                                        </li>
                                        <li class="advantage-item ">
                                            <i class="fas fa-check advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text"> Découvrez quand <span>vos messages sont lus</span></span>
                                        </li>
                                        <li class="advantage-item ">
                                            <i class="fas fa-check advantage-icon icon-cheked_profiles_small"></i>
                                            <span class="advantage-text"> Boostez votre profil : <span>5 mises en avant/mois</span></span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="pass-price">
                                    <span>29,99€</span>
                                    <span>/mois<sup class="asterisk term_asterisk_price_display">** </sup></span>
                                </div>

                                <div class="pass-submit text-center">
                                    <form class="form_pay_2" name="form_payment" method="post">
                                        <input type="hidden" class="formule_2" name="pass" value="2">
                                        <button type="submit" class="btn btn-selected">Sélectionner</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="choice_card" class="py-5 pb-1 pt-0" style="display: none;">
    <div class="container card_container px-2 my-5 mt-0 m-auto">
        <div class="row gx-3 m-auto">
            <div class="bloc_card">
                <div class="card_left">
                    <div class="section_1">
                        <div class="details">
                            <div class="name">Pass Essentiel</div>
                            <div class="duration">6 mois</div>
                        </div>
                    </div>

                    <div class="section_2">
                        <div class="offer-price initial hidden-xs visible-on-toggle">
                            <span class="offer-label monthlyBilling">
                                Prix / Mois
                            </span>
                            <span class="offer-value monthlyBilling text-right" data-test="monthly-price-to-pay">
                                24,99 €
                            </span>
                        </div>

                        <div class="offer-price total">
                            <span class="offer-label">
                                Total pour 6 mois
                            </span>
                            <span class="offer-value2 text-right" data-test="total-price-to-pay">
                                149,94 €
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
                                24,99 €
                            </span>
                        </div>

                        <div class="fraction-mention hidden-xs visible-on-toggle">
                            votre pass 6 mois sera facturé <span class="offer-value4">24,99€</span>/mois pendant 6 mois. La 1ère mensualité sera prélevée aujourd'hui.
                        </div>

                        <input type="hidden" name="signatureID" value="">
                        <input type="hidden" name="provider" value="">
                        <input type="hidden" name="mode" value="">

                        <div class="section_2-separator visible-separator visible-on-toggle hidden-xs"></div>

                        <div class="back-link">
                            <a href="#" class="backButton">
                                &lt; Changer de Pass
                            </a>
                        </div>

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

                        <div class="loading" style="display: none;">
                            <i class="fas fa-spinner fa-spin spiner_sub" aria-hidden="true"></i>
                        </div>

                        <div>
                            <form id="payment-form" class="formules_1" style="display: none;" action="ajax/ajax-creates.php?formule=1" method="POST">

                                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-locale="auto" data-key="pk_live_51Jc2kML6rsNO3EBkFUHLMbwqsWY68sSmsyZEbz3IYNjGdJC6IyW6rwrQWqQjQLwq4XolETke21h59tKJQfJIYHrK009KNK7QGT" data-amount="2490" data-currency="eur" data-name="Pass Premium" data-description="Pendant 6 MOIS*" data-image="<?= $static_img ?>51bb9f68b8b684dd91f6.png">
                                </script>

                            </form>

                            <form id="payment-form" class="formules_2" style="display: none;" action="ajax/ajax-creates.php?formule=2" method="POST">

                                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-locale="auto" data-key="pk_live_51Jc2kML6rsNO3EBkFUHLMbwqsWY68sSmsyZEbz3IYNjGdJC6IyW6rwrQWqQjQLwq4XolETke21h59tKJQfJIYHrK009KNK7QGT" data-amount="2990" data-currency="eur" data-name="Pass Premium" data-description="Pendant 6 MOIS*" data-image="<?= $static_img ?>51bb9f68b8b684dd91f6.png">
                                </script>

                            </form>
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