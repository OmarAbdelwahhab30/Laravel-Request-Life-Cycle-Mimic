<?php


use ServiceContainer\Core\App;
use ServiceContainer\Database\Database;

return [

    ['GET', '/', function () {

        $db = App::getContainer()->get("DatabaseConnection");

        $users = $db->fetchAll('users');

        require_once VIEWS_PATH . "view.php";
    }],

    ["POST", "/addUser", function () {
        require_once OPERATIONS_PATH . "add.php";
        addUser();
    }],

    ["GET", "/delete/{id:\d+}", function ($vars) {
        require_once OPERATIONS_PATH . "delete.php";
        deleteUser($vars);
    }]
];