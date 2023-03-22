<?php
define("HOST",'localhost');
define("USER",'root');
define("PSWD",'');
define("DBNAME",'library');

//$host = 'localhost';
//$user = 'root';
//$pswd = '';
//$dbname = 'penperel'; 

$conn = new mysqli(HOST,USER,PSWD,DBNAME);  
session_start();