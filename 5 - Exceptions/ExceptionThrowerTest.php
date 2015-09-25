<?php
namespace Chapter5;

class ExceptionThrowerTest extends \PHPUnit_Framework_TestCase
{
	public function testUsingProjectExceptionNoException()
	{
		$class = new ExceptionThrower();
		$class->usingProjectException(5);
	}

	/**
	 * Der Name der Exception muss vollständig qualifiziert (also mit Namespace) angegeben werden.
	 *
	 * @expectedException \Chapter5\ProjectException
	 */
	public function testUsingProjectException()
	{
		$class = new ExceptionThrower();
		$class->usingProjectException(-5);
	}

	public function testUsingProjectExceptionAlternative()
	{
		$class = new ExceptionThrower();

		try {
			$class->usingProjectException(-5);
			$this->fail('Expected Exception');
		} catch (ProjectException $e) {
			$this->assertEquals('$a must not be negative.', $e->getMessage());
		}
	}

	/**
	 * Kein Unterschied bei speziellen Exceptions.
	 *
	 * @expectedException \InvalidArgumentException
	 */
	public function testUsingPhpException()
	{
		$class = new ExceptionThrower();
		$class->usingPhpException(-5);
	}

	public function testUsingGlobalException()
	{
		$class = new ExceptionThrower();

		try {
			//$class->usingGlobalException(-5);
			$this->fail('Expected Exception');
		} catch (\Exception $e) {
			/*
			 * PHPUnit selbst wirft \PHPUnit_Framework_Exception die natürlich von \Exception abgeleitet sind.
			 * Ein Workaround wäre explizit darauf noch zu prüfen. Generell sollte aber \Exception gar nicht erst geworfen werden.
			 */
			$this->assertNotInstanceOf('\PHPUnit_Framework_Exception', $e);
		}
	}
}