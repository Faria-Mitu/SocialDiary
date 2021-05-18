<?php
    class PostTest extends \PHPUnit\Framework\TestCase
    {

	//protected function getPostModel(){}

	protected $post;

	

	public function testFullIsReturned()
	{
		$user = new \App\Models\Post;

		$user->setName('Faria');

		$user->setLastName('Khan');

		$this->assertEquals($user->getFullName(), 'Faria Khan');
	}
	public function testFirstAndLastName()
	{
		$user = new \App\Models\Post;

		$user->setName('Faria     ');

		$user->setLastName('      Khan');

		$this->assertEquals($user->getName(), 'Faria');

		$this->assertEquals($user->getLastName(), 'Khan');
	}
	public function testFirstLastName()
	{
		$user = new \App\Models\Post;

		$user->setName('Faria     ');

		$user->setLastName('      Khan');

		$this->assertEquals($user->getName(), 'Faria');

		$this->assertEquals($user->getLastName(), 'Khan');
	}

	
	

	
}