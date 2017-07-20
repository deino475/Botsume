<?php
class BinaryTree
{
	private $top;

	function __construct()
	{
		$this->top = null;
	}

	function add($item)
	{
		
	}
}

class Node
{
	private $bucket;
	private $left;
	private $right;
	private $parent;

	function __construct($bucket)
	{
		$this->bucket = $bucket;
		$this->next = NULL; 
	}

	
}