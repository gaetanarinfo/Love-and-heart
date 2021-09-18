<footer class="footer mt-auto py-3 bg-light" style="position: static;bottom: 0;width: 100%;">
    <div class="container text-center">
        <div class="footer_block">
        <p>Une visibilité étendue de votre profil : En créant votre profil sur Love and heart, celui-ci est visible sur les déclinaisons locales de notre service utilisant la même plateforme sous différentes marques. Pour plus d’informations sur les modalités de visibilité étendue de votre profil, cliquez ici.</p>
        <p>*Rencontres gratuites</p>
        <p>**Estimation du nombre de couples formés sur les sites du groupe Love and heart en Europe. Chiffre obtenu par l’extrapolation des résultats d’une enquête réalisée par Research Now en avril 2018, sur 59 931 personnes résidant en Europe (France, Royaume-Uni, Allemagne, Pays-Bas, Italie, Espagne et Suède) âgés de plus de 18 ans, à la population totale de cette tranche d’âge (Source eurostat 2018). Il résulte de cette étude que 6% des personnes interrogées ont déclaré avoir été en couple avec une personne rencontrée sur un des sites du groupe Love and heart.</p>
        <p>***Selon une étude TNS réalisée pour Love and heart du 30 octobre au 8 novembre 2017, sur un échantillon représentatif de 1660 célibataires âgés de 18 à 65 ans en France. Résultats observés parmi des célibataires connaissant au moins un service de rencontre en ligne.</p>
        <p>****Chaque description et photo de profil est modérée</p>
        </div>
        <div class="footer_link">
            <a href="" class="text-black">CGUV</a> | <a href="" class="text-black">Protection des données</a> | <a href="" class="text-black">Mentions Légales</a>
        </div>
        <span class="text-black"> © Copyright - Seigneur Gaëtan - Love and heart - <?= date('Y') ?></span>
    </div>
</footer>

<script type="text/javascript" src="<?= $static_url ?>bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= $static_url ?>bootstrap/js/popper.min.js" crossorigin="anonymous"></script>

<script src="<?= $static_url ?>js/jquery.cookie.js"></script>

<script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>

<?php if ($_SERVER['REQUEST_URI'] == "/") { ?>
    <script src="<?= $static_url ?>js/home.js?<?= time() ?>" crossorigin="anonymous"></script>
<?php } ?>

<?php if ($_SERVER['REQUEST_URI'] == "/welcome") { ?>
    <script src="<?= $static_url ?>js/welcome.js?<?= time() ?>" crossorigin="anonymous"></script>
<?php } ?>

<!-- for the search only version -->
<script src="https://cdn.jsdelivr.net/npm/algoliasearch@4.5.1/dist/algoliasearch-lite.umd.js"></script>

</body>

</html>