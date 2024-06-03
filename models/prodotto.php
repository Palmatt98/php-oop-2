<?php
require_once __DIR__ . "/cibo.php";
require_once __DIR__ . "/gioco.php";
require_once __DIR__ . "/categoria.php";

class Prodotto {

	public string $titolo;
	public int $prezzo;
	public string $immagine;
	public string $tipo;
	public Categoria $categoria;

	public function __construct(string $_titolo, int $_prezzo, string $_immagine, string $_tipo, string $_icona){
		$this->titolo = $_titolo;
		$this->prezzo = $_prezzo;
		$this->immagine = $_immagine;
		$this->tipo = $_tipo;
		$this->categoria = new Categoria($_icona);
	}

}

