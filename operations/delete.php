<?php

use ServiceContainer\Core\App;
use ServiceContainer\Database\Database;

function deleteUser($vars)
{

    $db = App::getContainer()->get("DatabaseConnection");

    $db->delete("users", ['id' => $vars['id']]);


    header("Location: http://www.container.com/");
    exit();
}