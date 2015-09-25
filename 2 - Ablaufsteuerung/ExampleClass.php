<?php
namespace Chapter2;

class ExampleClass
{
	private $data;

	public function __construct(array $data)
	{
		$this->data = $data;
	}

	public function processData()
	{
		/*
		 * Ohne Daten ist diese Funktion sinnlos, ein zugehöriger Test muss diese Daten bereit stellen
		 */
		foreach ($this->data as $key => $val) {
			// something
		}
	}
} 