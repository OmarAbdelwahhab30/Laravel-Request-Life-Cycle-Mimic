<?php

use ServiceContainer\Core\App;
use ServiceContainer\Database\Database;

function addUser()
{
    $db = App::getContainer()->get("DatabaseConnection");

    $data = ['username' => $_POST['username'], 'password' => md5($_POST['password'])];

    $db->insert('users', $data);

    header("Location: http://www.container.com/");
    exit();
}
