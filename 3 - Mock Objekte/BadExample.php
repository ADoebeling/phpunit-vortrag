<?php
namespace Chapter3;

class BadExample
{
	public function processForm($userId, array $formData)
	{
		$handler = new DependencyOne();

		$user       = $handler->getById($userId);
		$user->name = $formData['name'];

		$handler->save($user);
	}
} 