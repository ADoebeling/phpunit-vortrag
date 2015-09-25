<?php
namespace Chapter2;

class ManualStatusTest extends \PHPUnit_Framework_TestCase
{
	public function testSkip()
	{
		$this->markTestSkipped('Not yet implemented');
	}

	public function testFailed()
	{
		$this->fail('Something is wrong here.');
	}

	public function testIncomplete()
	{
		$this->markTestIncomplete('Not fully implemented yet.');
	}
} 