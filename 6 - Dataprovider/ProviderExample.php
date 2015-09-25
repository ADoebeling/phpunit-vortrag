<?php
namespace Chapter6;

class ProviderExample
{
	public function ifThenElse($a)
	{
		/*
		 * Die Bedingung erlaubt einen großen Zahlenraum. Hier müssen unter Umständen sehr viele Test erzeugt werden.
		 * 100 % Sicherheit kann in solchen Fällen nicht erreicht werden, aber in der Praxis relevante Szenarien sollten getestet werden.
		 */

		if ($a <= 3) {
			return 'foo';
		} else {
			return 'bar';
		}
	}
} 