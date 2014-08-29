<?php
/**
 * Created by PhpStorm.
 * User: johna
 * Date: 14/08/23
 * Time: 17:26
 */

namespace GeekMenu;

use GeekMenu\Api\Restaurant;

class Client
{
    private $username;
    private $password;
    private $token;

    public function setCredentials($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    public function getApi($name)
    {
        switch ($name) {
            case "restaurant":
                return new Restaurant($this);
                break;
        }
    }

} 