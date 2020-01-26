<html>
<head>
<meta charset = "utf=8">
</head>

<?php

require("kontakt.php");

class kunde extends kontakt
{
    public $Kundennr;
}

$kunde = new kunde();
$kunde->Name = "Lukas";
$kunde->Adresse = "Zuhause";
$kunde->Email = "info@home.de";
$kunde->Kundennr = "10";
$kunde->bitchmove ="100%";

echo "$kunde->Name $kunde->Adresse $kunde->Email $kunde->Kundennr $kunde->bitchmove"

?>


