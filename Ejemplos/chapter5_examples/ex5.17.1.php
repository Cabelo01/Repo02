<html><head><title>Conditional Statement</title></head>
<body bgcolor="lightgreen"><font size="+1">

<?php
extract($_REQUEST);
echo "hola";
if ($age>0 && $age <=18){
    print "$name, age $age pays \$$price Tienes entre 1 y 18 <br />";
}
elseif ($age>=19 && $age <=55){
    print "$name, age $age pays \$$price Tienes entre 19 y 55 <br />";
}
else{
    print "$name, age $age pays \$$price Tienes mas de 55 <br />";
}
?>

</body>
</html>
</body>
</html>


