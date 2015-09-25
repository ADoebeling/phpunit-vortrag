<?php
namespace Chapter6;

class ProviderExampleTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @dataProvider ifThenElseProvider
	 *
	 * @param $input
	 * @param $expected
	 */
	public function testIfThenElse($input, $expected)
	{
		$class  = new ProviderExample();
		$result = $class->ifThenElse($input);

		$this->assertSame($expected, $result);
	}

	public function ifThenElseProvider()
	{
		/*
		 * Der Data Provider muss public sein und darf nicht mit "test" anfangen.
		 * Er muss ein Array mit den Datensätzen (ebenfalls ein Array) für die Tests liefern.
		 *
		 * ACHTUNG: Da PHPUnit diese Funktion nur einmal vor allen Tests abruft, kann sie nicht sinnvoll auf Klassenvariablen zugreifen.
		 */
		return [
			[0, 'foo'], // Test-Datensatz #0
			[1, 'foo'], // Test-Datensatz #1
			[2, 'foo'], // Test-Datensatz #2
			[2.5, 'foo'], // Test-Datensatz #3
			[3, 'foo'], // Test-Datensatz #4
			[3.5, 'bar'], // Test-Datensatz #5
			[4, 'bar'], // Test-Datensatz #6
			[5, 'bar'], // Test-Datensatz #7
			[6, 'bar'], // Test-Datensatz #8
			[7, 'bar'], // Test-Datensatz #9
			// wird fehlschlagen
			//[5, 'foo'], // Test-Datensatz #10
		];
	}
} 