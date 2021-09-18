<div class="head">

    <img class="header_logo" src="<?= $static_img ?>header_logo.png" />

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

                    <input type="text" id="ville" placeholder="Ex : Le Mans, France" class="form-control" required>

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
                    <a id="choix_oui" href="#" class="btn btn-success btn-head">Oui, ça me plaît</a>

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
                        <div>Je certifie être majeur(e) et accepter les <a href="">conditions générales</a>. Découvrez comment nous traitons vos données dans notre <a href="">politique de confidentialité</a>, <a href="">charte d’utilisation des cookies</a> et <a href="">règles relatives à la visibilité des profils</a>.</div>
                    </label>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="checke" required>
                    <label class="form-check-label checke" for="checke">
                        <div>J’accepte que mes <a href=" data-action=" popup">données sensibles</a> soient traitées par Meetic pour me fournir le service.</div>
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

</div>

<div class="head_nav">
    <div class="head_navsub">
        <div class="head_navsub2">
            <div class="head_nav_item">
                <div class="head_nav_item_img">
                    <i class="far fa-star"></i>
                </div>
                <div>A l’origine de plus de 8 millions de couples**</div>
            </div>
            <div class="head_nav_item">
                <div class="head_nav_item_img">
                    <i class="far fa-star"></i>
                </div>
                <div>Le site de rencontres préféré des célibataires***</div>
            </div>
            <div class="head_nav_item">
                <div class="head_nav_item_img">
                    <i class="far fa-star"></i>
                </div>
                <div>Des profils vérifiés****</div>
            </div>
        </div>
    </div>
</div>