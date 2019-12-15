<?php
/**
 * Created by PhpStorm.
 * User: Z570
 * Date: 15.12.2019
 * Time: 14:12
 */

namespace Models;

require_once "../settings.php";

class User
{
    private $name;
    private $email;
    private $phone;
    private $id;
    private $created_add;
    private $password;
    private $avatar;

    function __construct($arFields) {
        $this->name = $arFields["name"];
        $this->email = $arFields["email"];
        $this->phone = $arFields["phone"];
        $this->password = md5($arFields["password"]);
        $this->created_add = time();
        $this->id = isset($arFields["id"])?$arFields["id"]:null;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCreatedAdd()
    {
        return $this->created_add;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public static function getById($id){
        $res = false;
        // Create connection
        $mysqli = new mysqli($db_server, $db_user, $db_password, $db_name);
        // Check connection
        if (mysqli_connect_errno()) {
            $res['result'] = false;
            $res['error_message'] = "mysql connection error";
            return $res;
        }

        $stmt = $mysqli->prepare("SELECT id, name, email, phone, avatar_id from users WHERE id=?");
        $stmt->bind_param('i',
            $id
        );

        if ($result = $stmt->execute()) {
            $arFields = [];
            while ($row = $result->fetch_row()) {
                $arFields["id"] = $row[0];
                $arFields["name"] = $row[1];
                $arFields["email"] = $row[2];
                $arFields["phone"] = $row[3];
                $arFields["avatar_id"] = $row[4];
                $res = new User($arFields);
            }
        } else {
            $res['result'] = false;
            $res['error_message'] = $stmt->error;
        }

        $stmt->close();
        $mysqli->close();

        return $res;
    }

    public function save(){
        $res = false;
        // Create connection
        $mysqli = new mysqli($db_server, $db_user, $db_password, $db_name);
        // Check connection
        if (mysqli_connect_errno()) {
            $res['result'] = false;
            $res['error_message'] = "mysql connection error";
            return $res;
        }

        if(!is_null($this->id)) {
            //phone_number=?, street_name=?, city=?, county=?, zip_code=?, day_date=?, month_date=?, year_date=?
            //WHERE account_id=?";

            $stmt = $mysqli->prepare("UPDATE users SET name=?, email=?, phone=? WHERE id=?");
            $stmt->bind_param('sssi',
                $this->name,
                $this->email,
                $this->phone,
                $this->id
            );
        } else {
            $stmt = $mysqli->prepare("INSERT INTO users (name, email, password, phone, created_at)
VALUES (?,?,?,?)");
            $stmt->bind_param('sssst',
                $this->name,
                $this->email,
                $this->password,
                $this->phone,
                $this->created_add
            );
        }

        if ($stmt->execute() === TRUE) {
            if(is_null($this->id)){
                $res['result'] = mysqli_stmt_insert_id($stmt);
                $this->id = $res['result'];
            } else {
                $res['result'] = true;
            }
        } else {
            $res['result'] = false;
            $res['error_message'] = $stmt->error;
        }

        $stmt->close();
        $mysqli->close();

        return $res;
    }

    public function delete($id) {
        $res = false;
        // Create connection
        $mysqli = new mysqli($db_server, $db_user, $db_password, $db_name);
        // Check connection
        if (mysqli_connect_errno()) {
            $res['result'] = false;
            $res['error_message'] = "mysql connection error";
            return $res;
        }

        $stmt = $mysqli->prepare("DELETE from users WHERE id=?");
        $stmt->bind_param('i',
            $id
        );

        if ($stmt->execute() === TRUE) {
                $res['result'] = true;
        } else {
            $res['result'] = false;
            $res['error_message'] = $stmt->error;
        }

        $stmt->close();
        $mysqli->close();

        return $res;
    }
}