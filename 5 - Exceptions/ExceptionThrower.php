<?php
namespace Chapter5;

class ExceptionThrower
{
	public function usingProjectException($a)
	{
		if ($a < 0) {
			throw new ProjectException('$a must not be negative.');
		}
	}

	public function usingPhpException($a)
	{
		if ($a < 0) {
			throw new \InvalidArgumentException('$a must not be negative.');
		}
	}

	public function usingGlobalException($a)
	{
		if ($a < 0) {
			throw new \Exception('$a must not be negative.');
		}
	}
} 