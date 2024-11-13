<?php 
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS','');
    define('BASE','clinica');


    $conn = new mysqli(HOST, USER, PASS,BASE);

    /*if($conn==true){
        print "Conseguiu conectar!";
    }else{
        print "Não conectou!";
    }*/
?>