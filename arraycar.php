<html>
<body>
<?php
$cars = array("Volvo", "BMW", "Toyota");
print_r($cars);
asort($cars);
echo "<br>";
echo "sorted array is ";
foreach($cars as $name)
echo($name);
//arsort($cars);
?>
</body>
</html>