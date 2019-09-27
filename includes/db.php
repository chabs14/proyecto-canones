<?php // Using Medoo namespace use Medoo\Medoo; // Initialize $database=new Medoo([ 'database_type'=> 'mysql',


use Medoo\Medoo;

//$server = ($_SERVER['HTTP_HOST' == "localhost"]) ? "smoothoperators.com.mx" : "localhost" ; 

//Initialize
$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'proyecto-desarrollo',
    'server' => 'smoothoperators.com.mx',
    'username' => 'remote',
    'password' => 'D7AC3D58A7318'
]);
/* $db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'equipop4_proyecto-desarrollo',
    'server' => '209.59.139.37',
    'username' => 'equipop4_admin',
    'password' => 's5bwPzZfK9GATrT'
]); */
