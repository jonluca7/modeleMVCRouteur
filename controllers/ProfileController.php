<?php

class ProfileController
{
    public function index()
    {
        if($_SERVER['REQUEST_METHOD'] === "POST")
        {
           require 'views/profile.php';
        }
    }
}

?>