
<!Doctype html>
<html lang="es">
<head>
    <meta charset="iso-8859-1">
    <title>World App</title>
</head>
<body>
<?php
$connection = mysqli_connect("localhost", "traveller","secret", "world");

//var_dump($connection); //verificamos que conecta

$q ="SELECT local_name
FROM country
Where code ='AUT'";
$result = mysqli_query($connection, $q);
$row = mysqli_fetch_assoc($result);

echo "<h1>".$row["local_name"] ."</h1>";
?>



</body>

</html>
