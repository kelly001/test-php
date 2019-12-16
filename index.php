<?php
require_once "header.php";
?>
<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2><?=$arLang["form_h2"]?></h2>
    </div>

    <div class="col-md-8 order-md-1">
        <form class="needs-validation" novalidate method="post" action="lib/routes.php">
            <input type="hidden" name="action" value="registration">
            <div class="mb-6 form-group">
                <label for="username"><?=$arLang["username"]?> <span class="text-muted">(<?=$arLang["optional"]?>)</span></label>
                <div class="input-group">
                    <input type="text" class="form-control" id="name" placeholder="<?=$arLang["username_placeholder"]?>" name="name">
                </div>
            </div>

            <div class="mb-6 form-group">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" required>
                <div class="invalid-feedback">
                    <?=$arLang["email_error"]?>
                </div>
            </div>

            <div class="mb-6 form-group">
                <label for="phone"><?=$arLang["phone_number"]?> <span class="text-muted">(<?=$arLang["optional"]?>)</span></label>
                <input type="tel" pattern=".{10}" class="form-control" id="phone" placeholder="(999) 123-45-67" name="phone">
            </div>

            <div class="mb-6 form-group">
                <label for="password"><?=$arLang["password"]?></label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="invalid-feedback">
                    <?=$arLang["password_error"]?>
                </div>
            </div>

            <div class="mb-6 form-group">
                <label for="avatar"><?=$arLang["user_file"]?> <span class="text-muted">(<?=$arLang["optional"]?>)</span></label>
                <input type="file" class="form-control-file" id="avatar" name="avatar">
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit"><?=$arLang["registration_btn"]?></button>
        </form>
    </div>


    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2019 Company Name</p>
    </footer>
</div>

<?php
require_once "footer.php";
?>