<?php
namespace Chapter7;

class Singletons
{
	private static $instance;

	private function __construct() { }

	/**
	 * @return self
	 */
	public static function getInstance()
	{
		if (self::$instance === null) {
			self::$instance = new self();
		}

		return self::$instance;
	}
}

class SingletonsTest extends \PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		parent::setUp();

		/*
		 * Vor jedem Test löschen wir die Instanz
		 */
		$ref = new \ReflectionProperty('\Chapter7\Singletons', 'instance');
		$ref->setAccessible(true);
		$ref->setValue(null, null);
	}
}

/*
Als Alternative kann PHPUnit mit der Kommandozeilenoption --static-backup entsprechend ausgeführt werden.
*/