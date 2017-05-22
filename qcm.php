<?php
$nom =$_POST["nom"];
$email =$_POST["email"];
$q1 =$_POST["q1"]; 
$q2 =$_POST["q2"];
$q3 =$_POST["q3"];

$note = 0;
if ($q1 == "c"){
	$note++;//note=note+1;
	echo " bravo bonne reponse";
}
else{
	echo"Pouet pouet, Essayer encore.";
}
 
?>
