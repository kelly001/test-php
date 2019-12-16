<?php
/**
 * Created by PhpStorm.
 * User: Z570
 * Date: 15.12.2019
 * Time: 21:48
 */

session_start();
include "header_admin.php";

switch ($_REQUEST["action"]){
    case "registration":
        $arErrors = \Controllers\UserController::registration();
        if(!empty($arErrors)){
            $query = http_build_query($_POST);
            $_SESSION["ERRORS"] = $arErrors;
            header("Location: http://localhost:8080/index.php?".$query);
            exit();
        }
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
        header("Location: http://localhost:8080/index.php");
        break;
        exit();
    default:
        //redirect to index.php
}