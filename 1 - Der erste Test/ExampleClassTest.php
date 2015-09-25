<?php
namespace Chapter1;

class ExampleClassTest extends \PHPUnit_Framework_TestCase
{
	public function testExistence()
	{
		/*
		 * Hält man sich zu 100 % an die Regeln wäre selbst die pure Existenz der Klasse zu prüfen.
		 * Allerdings wird keiner der folgenden Tests je am "new ExampleClass()" vorbei kommen, wenn die Klasse nicht verfügbar wäre.
		 */
		$this->assertTrue(class_exists('\Chapter1\ExampleClass'));
	}

	public function testSimpleMethod()
	{
		$class  = new ExampleClass();
		$result = $class->simpleMethod();

		$this->assertEquals(5, $result);
	}

	public function testAssertions()
	{
		/*
		 * Einige gängige Prüfungen.
		 */

		// Typ und boolean
		$this->assertTrue(true);
		$this->assertFalse(false);
		$this->assertNull(null);
		$this->assertNotNull(false);

		// gleich und identisch
		$this->assertEquals(5, '5');
		$this->assertSame(5, 5);

		// typ
		$this->assertInstanceOf('Chapter1\ExampleClass', new ExampleClass());
	}

	public function testIfThenElsePath1()
	{
		$class  = new ExampleClass();
		$result = $class->ifThenElse(1);

		$this->assertEquals('foo', $result);
	}

	public function testIfThenElsePath2()
	{
		$class  = new ExampleClass();
		$result = $class->ifThenElse(11);

		$this->assertEquals('bar', $result);
	}

	public function testOutputSimple()
	{
		$this->expectOutputString('OK');
		//$this->expectOutputRegex('/^OK$/');

		$class = new ExampleClass();
		$class->output();
	}

	public function testOutputTricky()
	{
		$class = new ExampleClass();

		ob_start();
		$class->output();
		$output = ob_get_clean();

		$this->assertTrue(stripos($output, 'OK') !== false);

	}
}