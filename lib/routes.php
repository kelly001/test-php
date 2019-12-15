<?php
/**
 * Created by PhpStorm.
 * User: Z570
 * Date: 15.12.2019
 * Time: 21:48
 */

require_once "Controllers/UserController.php";

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
    default:
        //redirect to index.php
}