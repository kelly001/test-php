<?php
/**
 * Created by PhpStorm.
 * User: Z570
 * Date: 15.12.2019
 * Time: 14:28
 */

namespace Models;


class Group
{
    private $id;
    private $name;
    private $privilegies;

    function __construct($arFields)
    {
        $this->name = $arFields["name"];
        $this->privilegies = $arFields["privilegies"];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getById($id){

    }

    public function save(){

    }

    public function delete($id) {

    }
}