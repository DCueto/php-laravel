<?php
use PlatziPHP\Author;

class AuthorTest extends PHPUnit_Framework_TestCase{
	
	/** @test */
	function it_should_construct(){
		
		$author = new Author('anemail@foo.dev', 'platzi', 'AUTOR_DE_PLATZI');
		
		$this->assertInstanceOf(Author::class, $author);
		
	}
	
	/** @test */
	function it_should_fail_when_no_key_is_given(){
		
		$this->setExpectedException(\InvalidArgumentException::class);
		
		$author = new Author('anemai@foo.dev', '1234', 'DANIEL');
		
		
	}
}