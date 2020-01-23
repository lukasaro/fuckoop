<html>
<head>
<meta charset = "utf=8">
</head>
<?php

require("Auftrag.php");
require("Artikel.php");
$artikel1=new Artikel (1, "Klobürste", "Plastik, weiß", 9.99);
$kunde1 =new Kunde (1, "Behrendt", "Peter", "Wandsbeker Chaussee 7", "22300", "Hamburg", "info@behrendt.de");
$auftrag1=new Auftrag (1, "8.12.19",$kunde1->getName());

echo "Kunden:<br>";
$kunde1->ausgabe();
echo "<br>";
echo "Artikel:<br>";
$artikel1->ausgabe();
echo "<br>";

echo "Aufträge: <br>";
	$auftrag1->auftragsausgabe();
	
	
	
	
	
?>