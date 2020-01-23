<html>

<head>

<meta charset = "utf=8">

</head>

<?php

Class Kontakt
{
	public $id;
	public $strasse;
    public $plz;
    public $ort;
    public $email;	

	public function __construct($id, $strasse, $plz, $ort, $email)
	{
		$this-> id=$id;
		$this-> strasse=$strasse;
		$this-> plz=$plz;
		$this-> ort=$ort;
        $this-> email=$email;
	}

	public function ausgabe()
	{
		echo "ID: ($this-> id)<br>";
		echo "E-Mail: ($this-> email)<br>";
    } 
    class Lieferant extends Kontakt {
		public $firma;
		
	public function __construct($id, $name, $vorname, $strasse, $plz, $email)
	{
		$this-> id=$id;
		$this-> firma=$firma;
		$this-> plz=$plz;
		$this-> ort=$ort;
        $this-> email=$email;
	}

}

}													#Klammern prüfen
$kunde1 =new Kunde(1, "Behrendt", "Peter", "Wandsbecker Chaussee 7", "22300", "Hamburg", "info@"
//echo "$kunde1->name<br>";
//$nachname=$kunde1->getName();
//echo "($kunde1->getName())<br>";
//$kunde1->ausgabe();
//$lieferant1 =new Lieferant(1, "Lieferando", "Süderstr. 1", "21300", "Hamburg", "info@" )
//$lieferant1->ausabe();


?>
</html>	