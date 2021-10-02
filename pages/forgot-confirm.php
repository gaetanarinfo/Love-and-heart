<div class="head">

    <img class="header_logo" src="<?= $static_img ?>header_logo.webp" />

    <div class="box_login" style="display: block;">

        <form id="forgot-password" method="POST" style="margin: 69px 0;">

            <p class="forgot-login-title">Mot de passe oublié&nbsp;?</p>

            <div class="forgot-login-desc">Saisissez votre mot de passe puis confirmer le à l'aide de la deuxième case. 8 caractères minimum.</div>

            <div class="text-start login-input">
                <label class="login-label" for="forgot-form-password-input">Mot de passe</label>
                <input class="login-password-input" type="password" autocomplete="on" id="forgot-form-password-input" value="">
            </div>

            <div class="text-start login-input">
                <label class="login-label" for="login-form-password2-input">Confirmer le mot de passe</label>
                <input class="login-password-input" type="password" autocomplete="on" id="forgot-form-password2-input" value="">
            </div>

            <div class="m-auto text-center">
                <button class="btn btn-success btn-navbar btn-login">Valider</button>
            </div>

        </form>

        <div id="forgot-final" style="display: none;">

            <p class="forgot-login-title">Mot de passe oublié&nbsp;?</p>

            <p class="forgot-p">Votre mot de passe a été modifié.</p>

            <p class="forgot-p">Vous pouvez désormais vous connecter à votre compte et profiter de vos avantages.</p>

        </div>

        <div class="loader_login" id="loader_login">
            <i class="fas fa-spinner fa-spin spiner_sub" aria-hidden="true"></i>
        </div>

        <div class="alert alert-danger" id="alert_danger" style="display: none;" role="alert">
            <div class="message_danger"></div>
            <div class="back_error_login">
                <a id="back_error_login">Retour</a>
            </div>
        </div>

        <div class="alert alert-success" id="alert_success" style="display: none;" role="alert">
            <div class="message_success"></div>
            <div class="back_success_login">
                <a id="back_success_login">Retour</a>
            </div>
        </div>

    </div>

</div>

<div class="container">
    <div class="row">
        <div class="m-auto mt-5 col-lg-10 text-center">
            <h1>Love and heart : trouvez l’amour sur notre site de rencontre</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row g-4 my-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
            <div class="feature-icon mb-1 text-center icon_home">
                <i class="fab fa-phoenix-framework"></i>
            </div>
            <p class="text-center">Avec Love and heart vous êtes sûr<br /> de trouver la rencontre de l'année.</p>
        </div>
        <div class="feature col">
            <div class="feature-icon mb-1 text-center icon_home">
                <i class="fas fa-user-friends"></i>
            </div>
            <p class="text-center">+8 millions<br />de couples**</p>
        </div>
        <div class="feature col">
            <div class="feature-icon mb-1 text-center icon_home">
                <i class="fas fa-camera-retro"></i>
            </div>
            <p class="text-center">100% des français aiment<br />les vrais profils</p>
        </div>
    </div>
</div>

<section class="mobile_pres pt-4">
    <div class="text-center">
        <h2 class="ms-2 me-2">Pourquoi Love and heart ?</h2>
        <p class="second_title ms-3 me-3">Trouvez l’amour auprès d’une personne qui vous correspond</p>
        <br />
        <p class="third_title ps-2 pe-2">Nos membres sont à la recherche de belles histoires et nous mettons tout en œuvre pour leur permettre de les vivre.</p>

        <img class="img_mob_pres" src="<?= $static_img ?>2178005-app-rencontre.jpg">

        <p class="mb-0 ms-2 me-2">Découvrez nos profils détaillés</p>
        <p class="desc_p me-3 ms-3">Il n’est pas toujours évident de se faire une idée précise de la personnalité d’un membre sur un site de rencontre.<br /> Sur Love and heart, les profils sont très détaillés. Trouvez ceux qui vous correspondent avec la recherche par critères ou<br /> laissez-vous charmer par leurs petits détails.</p>
    </div>
</section>

<section class="mobile_pres2 pt-4 mt-0">
    <div class="container">
        <div class="row">
            <div class="text-center col col mb-3 pb-2">
                <img class="mobile_pres2_img" src="/assets/img/events-9b56514888f.svg">
            </div>

            <div class="text-start col-lg mt-3 pt-2">
                <h3>Bye bye routine, hello surprise.</h3>
                <p class="mobile_pres2_p">Venez rencontrer les célibataires de votre région lors de nos soirées Love and heart animées et décontractées.</p>
            </div>
        </div>
    </div>
</section>

<section class="mobile_pres3 pt-4 mt-0">
    <div class="container">
        <div class="row">
            <div class="text-end col-lg mt-3 pt-2">
                <h3>Partagez un tête-à-tête en vidéo</h3>
                <p class="mobile_pres2_p text-end float-end">Grâce aux appels vidéo sur Love and heart, découvrez pour la première fois ses réactions, en toute sérénité.</p>
            </div>

            <div class="text-center col mb-3 pb-2">
                <img class="mobile_pres2_img" src="/assets/img/video-chat-bf696929737.svg">
            </div>
        </div>
    </div>
</section>

<section class="mobile_pres4 py-5">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h2>+ de 8 millions de couples se sont déjà formés <br />sur internet; alors soyez le prochain !</h2>

                <button id="mobile_pres4_totop" type="button" class="mobile_pres4_totop mt-5"><img alt="" class="mobile_pres4_totopimg" src="<?= $static_img ?>heart-a-da88c3ae5a0.svg">Commencez votre propre histoire !</button>
            </div>
        </div>
    </div>
</section>

<section class="mobile_pres3 pt-4 mt-0">
    <div class="container">
        <div class="row">
            <div class="text-center col mb-3 pb-2 pt-5">
                <img class="mobile_pres3_img" src="/assets/img/security-a7fea000e61.svg">
            </div>

            <div class="text-start col-lg mt-3 pt-2 mb-3 pb-3">
                <h3>Confiance et sécurité</h3>
                <p class="mobile_pres2_p text-start">Si vous cherchez à faire une vraie rencontre amoureuse, il est important de choisir un site de rencontre sérieux comme Love and heart sur lequel vous aurez la possibilité d’échanger avec des célibataires sérieux et engagés, afin d’assurer votre tranquillité d’esprit lors de vos futures conversations.<br /><br /> La priorité de notre service client, c’est votre sécurité et la protection de vos données personnelles.</p>
            </div>
        </div>
    </div>
</section>

<section class="mobile_arcel pt-4 mt-0">
    <div class="container">
        <div class="row">
            <div class="text-end col-lg mt-3 pt-2">
                <h3>Le cyberharcèlement ne mène à rien. <br>Encore moins à l’amour.</h3>
                <p class="mobile_arcel_p text-end">Love and heart s’engage contre le cyberharcèlement pour vous assurer une expérience des plus sécurisées.<br> Si vous recevez des messages insistants, ou qui vous mettentr<br> mal à l’aise, vous pouvez :</p>
                <p class="mobile_arcel_p text-end"><b>- Signaler un profil</b> pour alerter le service Modération et Sûreté.</p>
                <p class="mobile_arcel_p text-end"><b>- Bloquer un profil</b> pour ne plus être contacté</p>
                <p class="mobile_arcel_p text-end"><b>- Notre équipe participe à la prévention et la<br> détection des formes de cyberharcèlement.</b> Elle intervient en <br>cas d’un trop grand nombre de messages envoyés à la même<br> personne et restés sans réponse. On vous accompagne pour<br> mettre fin à cette situation.</p>
            </div>

            <div class="text-center col mb-3 pb-2">
                <img class="cyber_img bordered_img" src="/assets/img/cyberstalking-e66e3708f56.jpg">
            </div>
        </div>
    </div>
</section>

<section class="mobile_controle pt-4 mt-0">
    <div class="container">
        <div class="row">
            <div class="text-start col-lg mt-3 mobile_controle_d">
                <h3>Envie de plus de contrôle ?</h3>
                <p class="mobile_controle_p text-start">En matière de rencontre en ligne, vous pouvez contrôler le cours de vos prochaines rencontres grâce aux modes Incognito et Zen. Visiter les profils sans que les célibataires s’en aperçoivent ou encore activer vos préférences afin de recevoir seulement des invitations de la part des célibataires qui correspondent à vos critères essentiels, c’est à vous de décider.</p>
            </div>

            <div class="text-left col mb-3 pb-2">
                <div class="row my-3">
                    <div class="feature controle_c">
                        <div class="feature-icon mb-3 text-left icon_controle">
                            <i class="fas fa-ghost"></i>
                        </div>
                        <p class="text-left">Adoptez le mode « incognito »</p>
                        <p class="text-left">Visitez les profils en toute discrétion et<br /> n’apparaissez qu’aux profils qui vous intéressent.</p>
                    </div>
                    <div class="feature controle_c">
                        <div class="feature-icon mb-3 text-left icon_controle">
                            <i class="fas fa-yin-yang"></i>
                        </div>
                        <p class="text-left">Passez en mode « zen »</p>
                        <p class="text-left">Vous serez contactés uniquement par les profils qui correspondent à vos critères.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mobile_rencontre pt-4 mt-0">
    <div class="text-center">
        <h2 class="ms-2 me-2">Comment rencontrer l’amour ?</h2>
        <p class="second_title ms-3 me-3">Vous êtes à trois étapes d’une vraie rencontre amoureuse</p>

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 col-lg-12 m-auto g-3">
                <div class="col mb-4" style="margin: -44px 0;">
                    <img class="rounded_img" width="69" height="69" alt="" src="<?= $static_img ?>profile-ce8d204f851.svg">
                    <div class="card shadow-sm">
                        <img src="<?= $static_img ?>women-fb870051eaf.jpg" alt="" />

                        <div class="card-body text-start">
                            <p class="card-text title-card">Dites-nous qui vous êtes !</p>
                            <p class="card-text"><strong>Parlez de vous. Le secret ?</strong> Soyez naturel(le), honnête, et spontané(e). Sur un site de rencontre, quelques lignes suffisent pour marquer les esprits. Pourquoi pas ajouter un trait d’humour ?</p>
                            <p class="card-text"><strong>Soyez précis :</strong> plus vous remplissez vos critères de recherche, plus vous augmentez vos chances d’être contacté(e) par des célibataires sur la même longueur d’onde que vous.</p>
                            <p class="card-text"><strong>Partagez vos photos.</strong> Créez un album qui reflète votre personnalité.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4" style="margin: -44px 0;">
                    <img class="rounded_img" width="69" height="69" alt="" src="<?= $static_img ?>search-0d733813c76.svg">
                    <div class="card shadow-sm">
                        <img src="<?= $static_img ?>couple-3db611fc059.jpg" alt="">

                        <div class="card-body text-start">
                            <p class="card-text title-card">Recherchez la personne qu’il vous faut</p>
                            <p class="card-text">Rencontrez la personne qui vous correspond vraiment grâce à la <strong>recherche détaillée.</strong></p>
                            <p class="card-text">Découvrez notre <strong>sélection personnalisée</strong> de profils détaillés.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-5" style="margin: -44px 0;">
                    <img class="rounded_img" width="69" height="69" alt="" src="<?= $static_img ?>inbox-f601a029aa0.svg">
                    <div class="card shadow-sm">
                        <img src="<?= $static_img ?>computer-363135afa70.jpg" alt="">

                        <div class="card-body text-start">
                            <p class="card-text title-card">Discutez</p>
                            <p class="card-text">Vous ne savez pas comment démarrer la conversation?</p>
                            <p class="card-text">Parler du petit détail qui vous a interpellé(e) sur son profil ou de vos points communs sont de bons moyens de briser la glace.</p>
                            <p class="card-text">Ou alors partagez une musique, un GIF. Soyez inventifs !</p>
                            <p class="card-text">N’hésitez pas à consulter nos articles conseils pour maximiser l’attractivité de votre profil et apprendre à briser la glace.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mobile_rencontre_ser pt-4 mt-0">
    <div class="text-center">
        <h2 class="ms-2 me-2">Commencer une vraie histoire</h2>
        <p class="second_title ms-3 me-3">L’engagement dans la rencontre amoureuse</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="text-start col-lg mt-3 pt-2 mb-3 pb-3">
                <p class="text-start">La multiplication des sites de rencontre en ligne a conduit à une augmentation des rencontres occasionnelles, sans lendemain et à la longue ennuyeuses.</p>
                <p class="text-start">Chez Love and heart, nous sommes convaincus que s’engager est la chose la plus cool que l’on puisse faire dans une relation. C’est pourquoi, les célibataires qui veulent vivre une vraie histoire avec une personne qui partage cette même envie s’inscrivent sur le site de rencontre Love and heart.</p>
                <p class="text-start">Les profils sur Love and heart laissent autant la place aux photos qu’à la description et l’expression de la personnalité de chacun.e. L’inscription sur Love and heart est toujours gratuite, en revanche pour engager des conversations inspirantes avec les célibataires qui vous plaisent, vous devez choisir un Pass. L’abonnement est un engagement en soi et la preuve que les célibataires inscrits sur Love and heart sont vraiment impliqués dans leurs recherches.</p>
            </div>

            <div class="text-start col mb-3 pb-2" style="padding-top: 2em !important;">
                <img class="mobile_rencontre_ser_img bordered_img" src="<?= $static_img ?>phone_street-fd1d9ba3d5e.jpg">
            </div>
        </div>
    </div>
</section>

<section class="mobile_rencontre_language pt-4 mt-0">
    <div class="text-center">
        <h2 class="ms-2 me-2">Le langage dans la rencontre amoureuse</h2>
        <p class="second_title ms-3 me-3">Les mots d’amour et de tous les jours</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="text-start col-lg mt-3 mb-3 pb-3 mobile_language_d">
                <p class="text-start">N’ayons pas peur des mots ! La multiplication des sites de rencontre a transformé le jeu de la séduction en « surconsommation » des relations.</p>
                <p class="text-start">Résultat ? Beaucoup de célibataires ne se retrouvent plus dans ce système et 57% des femmes célibataires considèrent même le dating comme épuisant* ! Les célibataires sont pourtant nombreux à rechercher une rencontre sérieuse, plus profonde et authentique : près d’un célibataire français sur 2 cherche avant tout une relation à long terme*.</p>
                <p class="text-start">Et si cette recherche d’authenticité passait par les mots ? Oui, contrairement aux a priori, les mots comptent plus que jamais, même à l’ère de la rencontre 2.0.</p>
            </div>

            <div class="text-start col mb-3 pb-2" style="padding-top: 2em !important;">
                <img class="mobile_rencontre_ser_img bordered_img" src="<?= $static_img ?>couple_phone-2225a62b800.jpg">
            </div>
        </div>
    </div>
</section>

<section class="mobile_rencontre_descript pt-4 mt-0">
    <div class="container">
        <div class="row">
            <div class="text-start col mb-3 pb-2" style="padding-top: 2em !important;">
                <img class="mobile_rencontre_ser_img bordered_img" src="<?= $static_img ?>computer-dbde93877e3.jpg">
            </div>

            <div class="text-start col-lg mt-3 mb-3 pb-3 mobile_language_d">
                <p class="text-start">Il y a les mots pour se décrire… On dit qu’une image vaut mieux que mille mots, toutefois 84% des célibataires affirment que la description du profil compte plus pour eux que la photo*.</p>
                <p class="text-start">Il est donc important, même sur un site de rencontre sérieux, de prendre le temps de soigner sa présentation écrite, pour se dévoiler en toute sincérité.</p>
                <p class="text-start"><strong>Et les mots pour briser la glace !</strong> Quand un célibataire nous plait, il est toujours difficile de trouver la bonne manière l’aborder, et de trouver LE message qui saura attirer son attention, et qui change du sempiternel « salut ça va »… Encore une fois, le choix des premiers mots échangés en ligne peut jouer un rôle déterminant !</p>
            </div>
        </div>
    </div>
</section>

<section class="mobile_rencontre_mot pt-4 mt-0">
    <div class="container">
        <div class="row">
            <div class="text-start col-lg mt-3 mb-3 pb-3 mobile_mot_d">
                <p class="text-start">Enfin, les mots en disent beaucoup lors d’un premier rendez-vous suite à une rencontre en ligne !</p>
                <p class="text-start">C’est un fait, le physique ne fait pas tout, et en face de la personne, on ne peut plus se cacher derrière son écran… Rassurez-vous, les célibataires sont 59% à privilégier l’humour au physique lors d’un premier rendez-vous et 56% à préférer une conversation partagée intéressante à l’apparence de la personne*. L’essentiel est de rester soi-même et le plus naturel possible.</p>
                <p class="text-start">*Source : Love Connection Nov.2018 – Enquête conduite par Kantar TNS pour Meetic Europe auprès de célibataires âgés entre 18 et 65 ans **Etude interne Meetic France réalisée en juin 2019 auprès de 1013 membres âgés de 18 à 49 ans</p>
            </div>

            <div class="text-start col mb-3 pb-2" style="padding-top: 2em !important;">
                <img class="mobile_rencontre_ser_img bordered_img" src="<?= $static_img ?>couple_hug-46ac7fe93a8.jpg">
            </div>
        </div>
    </div>
</section>

<section class="footer_register">
    <div class="container">
        <div class="row">
            <div class="footer_register_col">
                <div class="footer_register_title">Commencez à rencontrer dès aujourd’hui des célibataires prêts à s’engager</div>
                <div><a id="footer_register_totop" class="btn btn-success btn-navbar">S'inscrire</a></div>
            </div>
        </div>
    </div>
</section>