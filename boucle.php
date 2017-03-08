 
<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>

<?php
$variable = 0 ;
for ($i=0; $i <= 10; $i++) {
            echo "$i </br>";
        }
?>

<?php
$var1 = 0;
$var2 = 20;
while ($var1 <= 20) {
echo ($var1 * $var2 );
$var1 ++;
  }
?>

<?php
$var3 = 100;
$var4 = 50;
while ( $var3 >= 10) {
    echo ($var3 * $var4);
    $var3--;
}
?>
   
<?php
$var5 = 1;
while ( $var5 <= 10) {
    echo $var5;
            $var5 += $var5 / 2;
}
?>
    
<?php
for ($i=0; $i <= 15; $i++) {
    echo "on y arrive presque </br>";
}
?>
    
<?php
for ($i=20; $i >= 0; $i--) {
    echo "c'est presque bon </br>";
}
?>
    
    
<?php
for ($i=1; $i <= 100 ; $i += 15) {
    echo "on tient le bambou </br>";
}
?>
    




</body>
</html>