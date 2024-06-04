<?php

class Categoria

{
	private string $icona;

	public function __construct(string $_icona)
	{
		$this->icona = $_icona;
	}
	/**
	 * Get the value of nome
	 */
	public function getIcona(): string
	{
		return $this->icona;
	}
}
