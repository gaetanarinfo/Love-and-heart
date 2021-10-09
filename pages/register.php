<div class="head">

    <img class="header_logo" src="<?= $static_img ?>header_logo.webp" />

</div>


<div class="container mt-5 mb-0">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>Crée un compte gratuitement</h1>
        </div>
    </div>
</div>

<div class="container mt-2 mb-4">
    <div class="row">
        <div class="col-lg-12">

            <hr />

            <div class="box_login">
                <form id="register" method="POST">
                    <div class="text-start">
                        <label class="login-label" for="login-form-email-input">Adresse email</label>
                        <input class="login-email-input" type="email" autocomplete="on" id="login-form-email-input" value="<?= $_COOKIE['input_mail']; ?>">
                    </div>

                    <div class="text-start login-input">
                        <label class="login-label" for="login-form-email-input">Mot de passe</label>
                        <input class="login-password-input" type="password" autocomplete="on" id="login-form-password-input" value="<?= $_COOKIE['input_password']; ?>">
                    </div>

                    <div class="m-auto text-center">
                        <button class="btn btn-success btn-navbar btn-login login_submit">S'inscrire</button>
                    </div>

                    <div class="text-center m-auto mt-3">
                        <a href="/" class="link_register">Vous êtes membre ?</a>
                    </div>

                    <div id='recaptcha' class="g-recaptcha" data-sitekey="6Ldbz4ocAAAAAB1qOXeoQel591VCMR2eBCT2qJXg" data-callback="recaptcha_check" data-size="invisible"></div>
                </form>

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
        </div>
    </div>
</div>