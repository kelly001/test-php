<?php
/**
 * Created by PhpStorm.
 * User: Z570
 * Date: 15.12.2019
 * Time: 21:48
 */
include "header_admin.php";

switch ($_REQUEST["action"]){
    case "registration":
        \Controllers\UserController::registration();
        break;
    case "login":
        \Controllers\UserController::login();
        break;
    case "personal":
        $arUserInfo = \Controllers\UserController::getInfo($_REQUEST['user_id']);
        break;
    case "logout":
        unset($_SESSION["user_id"]);
        session_destroy();
        header("Location: http://localhost/index.php");
        break;
    default:
        //redirect to index.php
}