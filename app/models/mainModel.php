<?php
namespace app\models;

if(file_exists(__DIR__."/../../config/server.php")){
require_once __DIR__."/../../config/server.php"
}

class mainModel{
    private $server=DB_SERVER;
    PRIVATE $db=DB_NAME;
    private $user=DB_USER;
    private $pass=DB_PASS;
}