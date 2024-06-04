<?php
require_once __DIR__ . "/categoria.php";
require_once __DIR__ . "/sconto.php";

class Prodotto {
	use Sconto;

	public string $titolo;
	public int $prezzo;
	public string $immagine;
	public string $tipo;
	public Categoria $categoria;

	public function __construct(string $_titolo, int $_prezzo, string $_immagine, string $_tipo, string $_icona){
		$this->titolo = $_titolo;
		if($_prezzo <= 0){
			throw new Exception("il prezzo deve essere maggiore di 0");
		}
		$this->prezzo = $_prezzo;
		$this->immagine = $_immagine;
		$this->tipo = $_tipo;
		$this->categoria = new Categoria($_icona);
	}

}


