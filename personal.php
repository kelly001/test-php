<?php
require_once "header.php";
$arUserInfo = [];
//$arUserInfo = \Controllers\UserController::getInfo($_REQUEST['user_id']);
//var_dump($arUserInfo);
?>
<div class="container">
    <div class="row">
        <div class="py-5 text-center">
            <h1><?=$arLang["personal_title"]?> #<?=isset($arUserInfo["id"])?$arUserInfo["id"]:""?></h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?if(isset($arUserInfo["avatar"])):?>
                <img src="<?=$arUserInfo["avatar"]["path"]?>" alt="" class="img-thumbnail">
            <?endif;?>
        </div>

        <div class="col-md-6">
            <dl class="row">
                <dt class="col-sm-3"><?=$arLang["username"]?></dt>
                <dd class="col-sm-9"><?=isset($arUserInfo["name"])?$arUserInfo["name"]:""?></dd>
            </dl>
            <dl class="row">
                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9"><?=isset($arUserInfo["email"])?$arUserInfo["email"]:""?></dd>
            </dl>
            <dl class="row">
                <dt class="col-sm-3"><?=$arLang["phone_number"]?></dt>
                <dd class="col-sm-9"><?=isset($arUserInfo["phone"])?$arUserInfo["phone"]:""?></dd>
            </dl>
        </div>
    </div>

</div>




<?php
require_once "footer.php";
?>