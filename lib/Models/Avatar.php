<?php
/**
 * Created by PhpStorm.
 * User: Z570
 * Date: 15.12.2019
 * Time: 14:13
 */

class Avatar
{
    private $id;
    private $user_id;
    private $path;

    function __construct($arFields)
    {
        $this->user_id = $arFields['user_id'];
        $this->path = $arFields["FILE"]["path"];
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
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getByUser($user_id)
    {

    }

    public function save(){

    }

    public function delete($id) {

    }

}