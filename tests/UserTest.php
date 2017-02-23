<?php
use PlatziPHP\User;


class UserTest extends PHPUnit_Framework_TestCase{
	
	/** @test */
	function it_should_be_able_to_construct(){
		$user = new User('fake@email.dev', 'platzi');
		
		$this->assertInstanceOf(User::class, $user);
		
	}
	
	/** @test */
	function it_should_have_a_first_name(){
		$user = new User('emai@example.com', '1234');
		
		$user->setName('Daniel', 'Cueto');
		
		$name = $user->getFirstName();
		
		$this->assertEquals('Daniel', $name);
		
	}
	
}