
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

$country = $_GET["country"];
$q ="SELECT local_name,
            head_of_state,
            continent,
            region,
            population,
            city.name
    FROM country
    JOIN city ON city.id = country.capital
    Where code ='$country'"; //revisar, algun error en el SQL x revisar
$result = mysqli_query($connection, $q);
$row = mysqli_fetch_assoc($result);


echo "<h1>".$row["local_name"] ."</h1>";
echo "<h1>".$row["head_of_state"] ."</h1>";
echo "<h1>".$row["continent"] ."</h1>";
echo "<h1>".$row["region"] ."</h1>";
echo "<h1>".$row["population"] ."</h1>";
echo "<h1>".$row["name"] ."</h1>";





?>



</body>

</html>
