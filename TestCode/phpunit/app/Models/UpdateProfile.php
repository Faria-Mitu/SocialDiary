<?php

namespace App\Models;

class UpdateProfile
{
	public $F_name;

	public $lst_name;

  

	public function setName($Name)
	{
		$this->F_name = trim($Name);

	}

	public function getName()
	{
		return $this->F_name;
	}


	public function setLastName($lstName)
	{
		$this->lst_name = trim($lstName);

	}

	public function getLastName()
	{
		return $this->lst_name;
	}

	public function getFullname()
	{
		return $this->F_name . ' ' . $this->lst_name;
	}

	


	public function getEmailVariables()
	{
		return [
			'full_name' => $this->getFullname(),
			'email' => $this->getEmail(),
		];
	}

}