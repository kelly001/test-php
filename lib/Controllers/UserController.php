<?php
/**
 * Created by PhpStorm.
 * User: Z570
 * Date: 15.12.2019
 * Time: 21:03
 */

namespace Controllers;

use \Models\User;
use Models\Avatar;

class UserController
{
    public static function registration(){
        var_dump($_REQUEST);

        //validation
        $arFields = [];
        $arErrors = [];

        if(isset($_REQUEST["email"])) {
            $email = htmlspecialchars($_REQUEST["email"]);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $arErrors["email"] = "Неверный формат email";
            }
        } else {
            $arErrors["email"] = "Укажите email";
        }

        if(isset($_REQUEST["password"])) {
            $password = htmlspecialchars($_REQUEST["password"]);
            if(strlen($password) < 6){
                $arErrors["password"] = "Неверный формат пароля (менее 6 символов)";
            }
        } else {
            $arErrors["password"] = "Укажите пароль";
        }

        if(isset($_REQUEST["name"])) {
            $name = htmlspecialchars($_REQUEST["name"]);
            if(strlen($name) < 2){
                $arErrors["name"] = "Неверный формат имени (менее 2 символов) ";
            }
        }

        if(isset($_REQUEST["phone"])) {
            $phone = intval(htmlspecialchars($_REQUEST["phone"]));
            if(strlen($phone) < 10){
                $arErrors["phone"] = "Неверный формат номера телефона (10 цифр без кода страны, пробелов и других символов) ";
            }
        }

        //todo save avatar
        //save avatar
        $userId = 1;
        if(isset($_FILES["avatar"])){
            var_dump($_FILES["avatar"]);
            $dir = $GLOBALS["upload_dir"] . basename($_FILES['avatar']['name']);
            if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dir)){
                $Avatar = new Avatar([
                    "user_id" => $userId,
                    "file_name" => $_FILES['avatar']['name'],
                    "file_path" => $dir
                ]);
                $Avatar->save();
                $fileId = $Avatar->getId();
            }
        }

        die();

        if(empty($arErrors)) {
            $arFields["name"] = isset($name)?$name:"";
            $arFields["email"] = $email;
            $arFields["password"] = $password;
            $arFields["phone"] = isset($phone)?$phone:"";
            $User = new User($arFields);
            $res = $User->save();

            //save avatar
            var_dump($_REQUEST["file"]);

            if($res["result"] === true){
                //todo save session
                /*session_start();
                $_SESSION['user_id'] = $User->getId();*/

                //redirect to personal
                header("Location: http://localhost:8080/personal.php?user_id=".$User->getId());
            } else {
                return $res["error_message"];
            }
        } else {
            return $arErrors;
        }
    }

    public static function login(){

    }

    public static function getInfo($user_id) {
        $user_id = intval(htmlspecialchars($user_id));
        var_dump($user_id);
        if(is_integer($user_id)) {
            $obUser = User::getById($user_id);
            $arResult = (array) $obUser;
            return $arResult;
        } else {
            return false;
        }
    }



}