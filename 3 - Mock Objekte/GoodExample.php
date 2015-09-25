<?php
namespace Chapter3;

class GoodExample
{
	/** @var DependencyOne */
	private $handler;
	/** @var DependencyTwo */
	private $dep;

	public function __construct(DependencyOne $handler)
	{
		$this->handler = $handler;
	}

	public function processForm($userId, array $formData)
	{
		$user       = $this->handler->getById($userId);
		$user->name = $formData['name'];

		$this->handler->save($user);
	}

	// -----------------------------------------

	public function setDependency(DependencyInterface $dep)
	{
		$this->dep = $dep;
	}

	public function usingFinalMethod()
	{
		$this->dep->setUser((object)['id' => 12]);
	}
} 