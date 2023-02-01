<?php

namespace App\Entity\AbstractEntity;

Abstract class AbstractUser {
    protected int $user_id;
    protected string $user_name;
    protected array $user_role = [];

    public function __construct()
    {
        $this->user_id = rand(100, 115);
    }


    public function getUser_id()
    {
        return $this->user_id;
    }

 
    public function getUser_name()
    {
        return $this->user_name;
    }


    public function setUser_name($user_name)
    {
        $this->user_name = $user_name;

        return $this;
    }


    public function getUser_role()
    {
        return $this->user_role;
    }


    public function setUser_role($user_role)
    {
        $this->user_role = $user_role;

        return $this;
    }
}