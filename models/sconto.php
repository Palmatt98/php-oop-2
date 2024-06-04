<?php
trait Sconto
{
	public function calcolaPrezzoScontato(int $scontoPercentuale): float
	{
		return $this->prezzo - ($this->prezzo * $scontoPercentuale / 100);
	}
}
