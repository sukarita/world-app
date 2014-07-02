<!DOCtype html>
<html lang="es">
<head>
    <meta charset="iso-8859-1">
    <title>World App</title>
</head>
<body>
<?php
$connection = mysqli_connect("localhost", "traveller","secret", "world");

//var_dump($connection); //verificamos que conecta

$q ="SELECT code, name
     FROM country";

$result = mysqli_query($connection, $q);
while($row = mysqli_fetch_assoc($result)){
 echo print_r($row);
}

?>