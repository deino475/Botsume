<?php
namespace DataStructures\Stacks;
class Stack
{
	private $top;
	private $size;

	function __construct()
	{
		$this->top = NULL;
		$this->size = 0;
	}

	function add($item)
	{
		$node = new Node($item);
		$node->setNext($this->top);
		$this->top = $node;
		$size++;
	}

	function remove()
	{
		$ret = $this->top;
		$this->top = $ret->getNext();
		$size--;
		return $ret->getBucket();
	}

	function peek()
	{
		return $this->top->getBucket();
	}
}

class Node
{
	private $bucket;
	private $next;

	function __construct($bucket)
	{
		$this->bucket = $bucket;
		$this->next = NULL; 
	}

	function getNext()
	{
		return $this->next;
	}

	function setNext($next)
	{
		$this->next = $next;
	}

	function getBucket()
	{
		return $this->bucket;
	}

	function setBucket($item)
	{
		$this->bucket = $item;
	}
}
?>
