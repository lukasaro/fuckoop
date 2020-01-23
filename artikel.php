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
		echo "E-Mail: ($this-> datum)<br>";
    } 
    class Kunde extends Kontakt {
        private $name;
        private $vorname;

        public function __construct($id, $name, $vorname, $strasse, $plz, $email)
    }



}

																					"getAuftragsausgabe" möglicherweise falsch..

$auftrag1=new Auftrag(1,"8.12.19,",$kunde1->getName(),$artikel=getArtikelBezeichnung(), $auftragsposition=getAuftragsausgabe?()) 

//echo "Aufträge: <br>";

	//$auftrag1->auftragsausgabe();

?>

</html>	