<html>
<head>
<meta charset = "utf=8">
</head>
<?php
require("Kontakt.php");
require("Auftragsposition.php");
require("Artikel.php");
$auftragsposition1=new Auftragsposition(1,$artikel1->getArtikelBezeichnung());
$kunde1 =new Kunde (1, "Behrendt", "Peter", "Wandsbeker Chaussee 7", "22300", "Hamburg", "info@behrendt.de");
$artikel1=new Artikel (1, "Klobürste","Plastik, weiß", 9.99);
//auftragsposition=new Auftragsposition($auftrag, 1, $artikel);
//$kunde=$1->getName();
Class Auftrag
{
	public $id;
	public $datum;
	public $kunde;
	public $auftragsposition;
	
	
	public function __construct (INT $id, $datum, Kunde  $kunde, Auftragsposition $auftragsposition)
	{
		$this-> id=$id;
		$this-> datum=$datum;
		$this-> kunde=$kunde;
		$this-> auftragsposition=$auftragsposition;
	}
	public function auftragsausgabe()
	{
		echo "ID: ($this-> id)<br>";
		echo "Datum: ($this-> datum)<br>";
		echo "Kunde: ($this-> kunde)<br>";
		echo "Position: ($this-> auftragsposition)<br>";
	
	}
	public function getAuftragsId()
	{
		return $this->id;
	}

}
																					"getAuftragsausgabe" möglicherweise falsch..
$auftrag1=new Auftrag(1,"8.12.19,",$kunde1->getName(),$artikel=getArtikelBezeichnung(), $auftragsposition=getAuftragsausgabe?()) 
//echo "Aufträge: <br>";
	//$auftrag1->auftragsausgabe();
?>
</html>	