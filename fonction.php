<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
function sophie(){
	return true;
}
?>

<?php
function celine ($celine){
	return $celine;
}
echo celine('celine');
?>

<?php
function coucou ($var1, $var2){
	return $var1.$var2;
}
	echo coucou('bonjour</br>', 'moi</br>');
?>


<?php
 function comparaison($int1,$int2){
     if ($int1 > $int2) {
         echo  $int1.' est plus grand';
     }
     if ($int1<$int2) {
         echo $int1.' est plus petit ';
     }
     if ($int1==$int2) {
         echo 'les deux nombres sont identiques';
     }
 }
 echo comparaison(12,24);
 ?>
   
<?php
function mixte($nombre,$chaine){
    return $nombre.$chaine;
}
echo mixte(5,' euros');
?>
    
        
<?php
function phrase($nom,$prenom,$age){
    return 'Bonjour '.$nom.' '.$prenom.' tu as '.$age.' ans.';
}
echo phrase('LE BERRE','Sophie',20);
?>
    


</body>
</html>