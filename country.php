
<!Doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>World App</title>
</head>
<body>
<?php
$connection = mysqli_connect("localhost", "traveller","secret", "world");

var_dump($connection);

$q ="SELECT NOW()";
$result = mysqli_query($connection, $q);
?>



</body>

</html>
