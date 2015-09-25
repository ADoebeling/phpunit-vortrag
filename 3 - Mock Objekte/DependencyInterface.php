<?php
namespace Chapter3;

interface DependencyInterface
{
	public function getUser();
	public function setUser(\stdClass $user);
} 