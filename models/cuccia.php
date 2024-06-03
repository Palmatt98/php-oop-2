<?php
require_once __DIR__ . "/prodotto.php";

class Cuccia extends Prodotto
{
	public function __construct(string $titolo, int $prezzo, string $immagine, $icona)
	{
		parent::__construct($titolo, $prezzo, $immagine, "Cuccia", $icona);
	}
}
