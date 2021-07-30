<?php

define("servername","localhost");
define("username","root");
define("dbname","schoolwebsite");
define("password","Ebenezer@97");

function db(){
        //connect to db
        $dbconnect = new mysqli(servername,username,"",dbname);

        return $dbconnect;
}


?>