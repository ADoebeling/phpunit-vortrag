<?php
namespace Chapter3;

class DependencyOne
{
	public function getById($id)
	{
		return (object)[
			'id'   => $id,
			'name' => 'Tester',
		];
	}

	public function save(\stdClass $user)
	{

	}
} 