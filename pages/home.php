<div class="head">

    <img class="header_logo" src="<?= $static_img ?>header_logo.webp" />

    <?php if (empty($_SESSION['user_id'])) { ?>

        <div class="box_login">
            <form id="login" method="POST">
                <div class="text-start">
                    <label class="login-label" for="login-form-email-input">Adresse email</label>
                    <input class="login-email-input" type="email" autocomplete="on" id="login-form-email-input" value="<?= $_COOKIE['input_mail']; ?>">
                </div>

                <div class="text-start login-input">
                    <label class="login-label" for="login-form-email-input">Mot de passe</label>
                    <input class="login-password-input" type="password" autocomplete="on" id="login-form-password-input" value="<?= $_COOKIE['input_password']; ?>">
                    <button type="button" title="Masquer le mot de passe" class="hide_password"><img width="18" height="14" class="masque_password" alt="Masquer le mot de passe" src="<?= $static_img ?>hide-26eeb975ac5.svg"></button>
                    <button type="button" title="Afficher le mot de passe" style="display: none;" class="show_password"><img width="18" height="14" class="masque_password" alt="Afficher le mot de passe" src="<?= $static_img ?>show-d61c897a015.svg"></button>
                </div>

                <div class="check_login">
                    <div class="check_l_i">
                        <input class="remember-me" data-description="remember-me" id="login-remember-me-checkbox" type="checkbox">
                        <label class="remember-me-label" for="login-remember-me-checkbox">Mémoriser mes identifiants</label>
                    </div>

                    <a class="forgot-password" data-description="forgotten-password">Mot de passe oublié&nbsp;?</a>
                </div>

                <div class="m-auto text-center">
                    <button class="btn btn-success btn-navbar btn-login login_submit">Connexion</button>
                </div>

                <div class="text-center m-auto mt-3">
                    <span class="sp_register">Pas encore membre ?</span> <a id="link_register" class="link_register">Inscrivez-vous gratuitement</a>
                </div>

                <div id='recaptcha' class="g-recaptcha" data-sitekey="6Ldbz4ocAAAAAB1qOXeoQel591VCMR2eBCT2qJXg" data-callback="recaptcha_check" data-size="invisible"></div>
            </form>

            <form id="forgot-password" method="POST" style="display: none;">

                <p class="forgot-login-title">Mot de passe oublié&nbsp;?</p>

                <div class="forgot-login-desc">Saisissez l’adresse email de votre compte afin de recevoir des instructions pour réinitialiser votre mot de passe.</div>

                <div class="text-start">
                    <input class="forgot-email-input" type="email" autocomplete="on" id="forgot-form-email-input" value="">
                </div>

                <div class="m-auto text-center">
                    <button class="btn btn-success btn-navbar btn-login">Valider</button>
                </div>

                <div class="text-center m-auto mt-3">
                    <span class="sp_register">Pas encore membre ?</span> <a id="link_register" class="link_register">Inscrivez-vous gratuitement</a>
                </div>
            </form>

            <div id="forgot-final" style="display: none;">

                <p class="forgot-login-title">Mot de passe oublié&nbsp;?</p>

                <p class="forgot-p">Un email vient de vous être envoyé à cette adresse (cela peut prendre 5 minutes) :</p>

                <p class="forgot-email-show"></p>

                <p class="forgot-p">Pour réinitialiser votre mot de passe veuillez cliquer dans cet email et suivre les instructions. Attention le lien dans l’email expirera dans 11h. Pensez donc à vérifier dès maintenant !</p>

            </div>

            <div class="loader_login" id="loader_login">
                <i class="fas fa-spinner fa-spin spiner_sub" aria-hidden="true"></i>
            </div>

            <div class="loader_logins" id="loader_logins">
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

        <!-- Réponse homme et femme -->
        <div class="slide_1_chat">
            <span>Bonjour, je suis la pour vous aidez. <span class="b_s">Que recherchez-vous ?</span></span>
        </div>

        <!-- Réponse homme et femme -->
        <div class="slide_2_chat display_none">
            <span><span class="b_s">Êtes-vous un homme ou une femme ?</span></span>
        </div>

        <div class="slide_3_chat display_none">
            <span>
                <span class="b_s">Voulez-vous continuer ?</span>
            </span>
        </div>

        <div class="slide_4_chat display_none">
            <span>
                C’est noté, je vais vous aider à trouver votre bonheur.
                Donnez-moi votre <span class="b_s">date de naissance</span> s’il vous plait. <span class="merci_s_1 display_none"><span class="b_s">Merci !</span> 👍</span>
            </span>
        </div>

        <div class="slide_5_chat display_none">
            <span>
                Ok, donc vous avez <span class="age"></span> ans.
            </span>
        </div>

        <div class="slide_5_2_chat display_none">
            <span>
                Après l’âge, le lieu ! <span class="b_s">Dans quelle ville habitez-vous ?</span>
            </span>
        </div>

        <div class="slide_6_chat display_none">
            <span>
                <span class="b_s">J’adore cette ville ! 😍</span>
            </span>
        </div>

        <div class="slide_7_chat display_none">
            <span>
                Pouvez-vous m’indiquer votre <span class="b_s">prénom</span> ?
            </span>
        </div>

        <div class="slide_7_7_chat display_none">
            <span>
                <span class="b_s">Enchantée <span class="prenom"></span> ☺️</span>
            </span>
        </div>

        <div class="slide_8_chat display_none">
            <span>
                PARFAIT ! J’ai des célibataires près de chez vous ❤️. Pour vous montrer leur profil, je vais vous créer un compte gratuitement.
                <br />Pouvez-vous entrer <span class="b_s">votre adresse email ?</span>
            </span>
        </div>

        <div class="slide_8_8_chat display_none">
            <span>
                <span class="b_s">Parfait !</span> 👍
            </span>
        </div>

        <div class="slide_9_chat display_none">
            <span>
                C’est noté, votre email est :
                <br /><span class="b_s email"></span>
            </span>
        </div>

        <div class="slide_9_9_chat display_none">
            <span>
                Pour garantir la sécurité de votre compte, votre mot de passe doit contenir :<br>
                <p class="m-auto mt-1">
                    - Au moins une lettre majuscule<br>
                    - Au moins une lettre minuscule<br>
                    - Au moins un chiffre<br>
                    - Au moins 8 caractères
                </p>
            </span>
        </div>

        <div class="slide_10_chat display_none">
            <span>
                <span class="prenom b_s"></span>, comptez sur nous pour vous aider à commencer une vraie histoire 😍.
                <br />Nous vous proposons des sélections personnalisées de célibataires, des offres et des invitations aux évènements organisés près de chez vous <span class="b_s">pour augmenter vos chances de coups de cœur !</span>
                <br />Ça vous tente ?
            </span>
        </div>

        <div class="slide_11_chat display_none">
            <span>
                Parfait, je peux maintenant créer votre compte <span class="b_s">Love and heart</span>.
            </span>
        </div>

        <div id="slide_1" class="head_box">
            <a id="choix_1" href="#" class="btn btn-success btn-head">Je cherche un homme</a>
            <a id="choix_2" href="#" class="btn btn-success btn-head">Je cherche une femme</a>
        </div>

        <!-- Réponse homme et femme -->
        <div id="slide_2" class="head_box display_none">
            <a href="#" id="choix_3" class="btn btn-success btn-head">Je suis un homme</a>
            <a href="#" id="choix_4" class="btn btn-success btn-head">Je suis une femme</a>
        </div>

        <div id="slide_3" class="head_box display_none">
            <a href="#" id="choix_5" class="btn btn-success btn-head">Continuer</a>
        </div>

        <div id="slide_4" class="head_box display_none">

            <div id="message_18" class="message display_none">
                <div class="error">
                    <div>Vous devez être majeur(e) pour vous inscrire</div>
                </div>
                <div class="icon"><i class="fas fa-info-circle"></i></div>
            </div>

            <div class="form_date">
                <form id="form_date">
                    <div class="form_date">

                        <select required id="jour" class="form-select me-2">
                            <option disabled="" value="" selected>Jour</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>

                        <select required id="mois" class="form-select me-2">
                            <option disabled="" value="" selected>Mois</option>
                            <option value="1">Janvier</option>
                            <option value="2">Février</option>
                            <option value="3">Mars</option>
                            <option value="4">Avril</option>
                            <option value="5">Mai</option>
                            <option value="6">Juin</option>
                            <option value="7">Juillet</option>
                            <option value="8">Août</option>
                            <option value="9">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Décembre</option>
                        </select>

                        <select required id="annee" class="form-select">
                            <option disabled="" value="" selected>Année</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                            <option value="1960">1960</option>
                            <option value="1959">1959</option>
                            <option value="1958">1958</option>
                            <option value="1957">1957</option>
                            <option value="1956">1956</option>
                            <option value="1955">1955</option>
                            <option value="1954">1954</option>
                            <option value="1953">1953</option>
                            <option value="1952">1952</option>
                            <option value="1951">1951</option>
                            <option value="1950">1950</option>
                            <option value="1949">1949</option>
                            <option value="1948">1948</option>
                            <option value="1947">1947</option>
                            <option value="1946">1946</option>
                            <option value="1945">1945</option>
                            <option value="1944">1944</option>
                            <option value="1943">1943</option>
                            <option value="1942">1942</option>
                            <option value="1941">1941</option>
                            <option value="1940">1940</option>
                            <option value="1939">1939</option>
                            <option value="1938">1938</option>
                            <option value="1937">1937</option>
                            <option value="1936">1936</option>
                            <option value="1935">1935</option>
                            <option value="1934">1934</option>
                            <option value="1933">1933</option>
                            <option value="1932">1932</option>
                            <option value="1931">1931</option>
                            <option value="1930">1930</option>
                            <option value="1929">1929</option>
                            <option value="1928">1928</option>
                            <option value="1927">1927</option>
                            <option value="1926">1926</option>
                            <option value="1925">1925</option>
                            <option value="1924">1924</option>
                            <option value="1923">1923</option>
                            <option value="1922">1922</option>
                            <option value="1921">1921</option>
                        </select>

                        <button type="submit" id="submit" class="btn btn-success ms-2 disabled"><i class="icon_sub fas fa-arrow-right" aria-hidden="true"></i><i class="spiner_sub fas fa-spinner fa-spin display_none"></i></button>

                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-perso progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="9" style="width: 15%;"></div>
                    </div>

                </form>
            </div>
        </div>

        <div id="slide_5" class="head_box display_none">
            <div class="form_date">
                <form id="form_ville">
                    <div class="form_date">

                        <input type="text" id="ville" placeholder="Ex : 1 rue des tulipes" class="form-control" required>

                        <button type="submit" id="submitVille" class="btn btn-success ms-2 disabled"><i class="fas fa-arrow-right icon_sub" aria-hidden="true" style="display: none;"></i><i class="fas fa-spinner fa-spin spiner_sub" aria-hidden="true"></i></button>

                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-perso progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="9" style="width: 25%;"></div>
                    </div>

                </form>
            </div>
        </div>

        <div id="slide_6" class="head_box display_none">
            <div class="form_date">
                <form id="form_prenom">
                    <div class="form_date">

                        <input type="text" id="prenom" placeholder="Ex : Alain, Juliette" class="form-control" required>

                        <button type="submit" id="submitPrenom" class="btn btn-success ms-2 disabled"><i class="fas fa-arrow-right icon_sub" aria-hidden="true" style="display: none;"></i><i class="fas fa-spinner fa-spin spiner_sub" aria-hidden="true"></i></button>

                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-perso progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="9" style="width: 35%;"></div>
                    </div>

                </form>
            </div>
        </div>

        <div id="slide_7" class="head_box display_none">
            <div class="form_date">
                <form id="form_email">
                    <div class="form_date">

                        <input type="email" id="email" placeholder="Ex : test@test.fr" class="form-control" required>

                        <button type="submit" id="submitEmail" class="btn btn-success ms-2 disabled"><i class="fas fa-arrow-right icon_sub" aria-hidden="true" style="display: none;"></i><i class="fas fa-spinner fa-spin spiner_sub" aria-hidden="true"></i></button>

                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-perso progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="9" style="width: 45%;"></div>
                    </div>

                </form>
            </div>
        </div>

        <div id="slide_8" class="head_box display_none">
            <div class="form_date">
                <form id="form_password">
                    <div class="form_date">

                        <input type="password" id="password" placeholder="Entrer un mot de passe" class="form-control" required>

                        <button type="submit" id="submitPassword" class="btn btn-success ms-2 disabled"><i class="fas fa-arrow-right icon_sub" aria-hidden="true" style="display: none;"></i><i class="fas fa-spinner fa-spin spiner_sub" aria-hidden="true"></i></button>

                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-perso progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="9" style="width: 55%;"></div>
                    </div>

                </form>
            </div>
        </div>

        <div id="slide_9" class="head_box display_none">
            <div class="form_date">
                <form id="form_choix">
                    <div class="form_date">

                        <a id="choix_non" href="#" class="btn btn-success btn-head me-3">Non, c’est gentil</a>
                        <a id="choix_oui" href="#" class="btn btn-success btn-head disabled">Oui, ça me plaît</a>

                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-perso progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="9" style="width: 65%;"></div>
                    </div>

                </form>
            </div>
        </div>

        <div id="slide_10" class="head_box display_none">
            <div class="form_end">
                <form id="form_accept">

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="checkp" required>
                        <label class="form-check-label checkp" for="checkp">
                            <div>Je certifie être majeur(e) et accepter les <a href="">conditions générales</a>. Découvrez comment nous traitons vos données dans notre <a href="" data-bs-toggle="modal" data-bs-target="#pc">politique de confidentialité</a>, <a href="" data-bs-toggle="modal" data-bs-target="#charte">charte d’utilisation des cookies</a> et <a href="" data-bs-toggle="modal" data-bs-target="#securite">règles relatives à la visibilité des profils</a>.</div>
                        </label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="checke" required>
                        <label class="form-check-label checke" for="checke">
                            <div>J’accepte que mes <a href=" data-action=" popup">données sensibles</a> soient traitées par Love and heart pour me fournir le service.</div>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-success btn-head mt-2 btn-end">Crée, mon compte (gratuit)</button>

                    <div class="progress">
                        <div class="progress-bar progress-bar-perso progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="9" style="width: 85%;"></div>
                    </div>

                </form>
            </div>
        </div>

        <div id="slide_11" class="head_box display_none">
            <div class="form_end">
                <img class="heartb" src="<?= $static_img ?>gif-heart-51.gif" width="115px" />
                <p>Création de votre compte...</p>
            </div>
        </div>

    <?php } else { ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center pt-4 pb-4">

                    <div class="spinner">
                        <div class="heart heart1"></div>
                        <div class="heart heart2"></div>
                        <div class="heart heart3"></div>
                    </div>

                    <a href="/rencontre" class="btn btn-soeur">Trouver l'amour dès maintenant</a>
                </div>
            </div>
        </div>
    <?php } ?>

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