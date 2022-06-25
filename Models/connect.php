<?php
    class Connect{
        var $con;
        function __construct(){
            $server = 'localhost';
            $user = 'root';
            $pass = '';
            $db = 'bandothethao';
            $this->con = new mysqli($server, $user, $pass, $db);
            $this->con->set_charset('utf8');
            if($this->con->connect_error) {
                die('Connect failed: ' . $this->con->connect_error);
            }
        }
    }
?>