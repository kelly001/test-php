<?php
/**
 * Created by PhpStorm.
 * User: Z570
 * Date: 15.12.2019
 * Time: 14:12
 */

namespace Models;

class User
{
    private $name = "";
    private $email = "";
    private $phone = "";
    private $id = "";
    private $created_add = "";

    function __construct($arFields) {
        $this->name = $arFields["name"];
        $this->email = $arFields["email"];
        $this->phone = $arFields["phone"];
        $this->created_add = time();
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

    public function getById($id){

    }

    public function save(){

    }

    public function delete($id) {

    }
}