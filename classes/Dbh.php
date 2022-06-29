<?php

// class
class Dbh {
    private $hostname = "localhost:8012";       // my host name 
    private $username = "root";                 // my host username
    private $password = "";                     // host password
    private $dbname = "zuriphp";                // data base name 

protected static function connect (){
    $connection = mysqli_connect(Dbh::$hostname, 
    Dbh::$username, Dbh::$password, Dbh::$dbname);
        return $connection; 
}
}

