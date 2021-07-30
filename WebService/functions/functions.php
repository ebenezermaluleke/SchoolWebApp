<?php
    //TODO find another hash password pseudocode
    function hashpassword($password){
    
    }

    function sanitizeString($var){
        $var = stripcslashes($var);
        $var = htmlentities($var);
        $var = strip_tags($var);

        return $var;

    }

    function sanitiseSQL($connection, $var){
        $var = $connection->real_escape_string($var);
        $var = sanitizeString($var);
        return $var;
    }

?>