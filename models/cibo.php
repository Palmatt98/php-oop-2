<?php
require_once __DIR__ . "/prodotto.php";

class Cibo extends Prodotto
{
	public function __construct(string $titolo, int $prezzo, string $immagine, string $icona)
	{
		parent::__construct($titolo, $prezzo, $immagine, "Cibo", $icona);
	}
}
