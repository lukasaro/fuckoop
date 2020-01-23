<html>
<head>
<meta charset = "utf=8">
</head>

<?php

Class Artikel
{

	public $id;
	public $bezeichnung;
    public $beschreibung;
    public $preis;	

	public function __construct($id, $bezeichnung, $beschreibung, $preis)
	{
		$this-> id=$id;
		$this-> bezeichnung=$bezeichnung;
		$this-> beschreibung=$beschreibung;
		$this-> preis=$preis;
	}

	public function ausgabe()
	{
		echo "ID: ($this-> id)<br>";
		echo "Bezeichnung: ($this-> bezeichnung)<br>";
		echo "Beschreibung: ($this-> beschreibung)<br>";
		echo "Preis: ($this->preis) €<br>";
    } 
	public function getArtikelBezeichnung()
	{
		return $this->bezeichnung;
	}
}


?>

</html>	