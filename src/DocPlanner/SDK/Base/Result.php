<?php
/**
 * Author: Łukasz Barulski
 * Date: 24.04.13 13:35
 */
namespace DocPlanner\SDK\Base;

/**
 * Class Result
 * @package DocPlanner\SDK\Base
 */
class Result implements \ArrayAccess, \Iterator
{
	/**
	 * @var array
	 */
	protected $storage = [];

	protected $availableKeys = [];

	protected $currentPosition;

	/**
	 * @param array $input
	 */
	public function __construct(array $input)
	{
		foreach($input as $key => $value)
		{
			if (null === $this->currentPosition)
			{
				$this->currentPosition = $key;
			}

			if(is_array($value))
			{
				$value = new self($value);
			}

			$this->storage[$key] = $value;
		}
		$this->__regenerateKeys();
	}

	/**
	 * @param mixed $offset
	 *
	 * @return bool
	 */
	public function offsetExists($offset)
	{
		return (isset($this->storage[$offset]));
	}

	/**
	 * @param mixed $offset
	 *
	 * @return mixed
	 */
	public function offsetGet($offset)
	{
		return $this->storage[$offset];
	}

	/**
	 * @param mixed $offset
	 * @param mixed $value
	 */
	public function offsetSet($offset, $value)
	{
		$this->storage[$offset] = $value;
		$this->__regenerateKeys();
	}

	/**
	 * @param mixed $offset
	 */
	public function offsetUnset($offset)
	{
		unset($this->storage[$offset]);
		$this->__regenerateKeys();
	}

	/**
	 * @return mixed
	 */
	public function current()
	{
		return $this->storage[$this->currentPosition];
	}

	/**
	 * Move current position to next item
	 */
	public function next()
	{
		$position = array_search($this->currentPosition, $this->availableKeys);
		$this->currentPosition = @$this->availableKeys[$position + 1] ?: null;
	}

	/**
	 * @return mixed
	 */
	public function key()
	{
		return $this->currentPosition;
	}

	/**
	 * @return bool
	 */
	public function valid()
	{
		return $this->offsetExists($this->currentPosition);
	}

	/**
	 * Move current position on first item
	 */
	public function rewind()
	{
		$this->currentPosition = @$this->availableKeys[0] ?: null;
	}

	/**
	 * @return array
	 */
	public function toArray()
	{
		$result = [];
		foreach($this->storage as $key => $value)
		{
			if ($value instanceof self)
			{
				$result[$key] = $value->toArray();
			}
			else
			{
				$result[$key] = $value;
			}
		}

		return $result;
	}

	/**
	 * @return string
	 */
	public function toJson()
	{
		return json_encode($this->toArray());
	}

	/**
	 * @param $name
	 *
	 * @return mixed
	 */
	public function __get($name)
	{
		return $this->storage[$name];
	}

	/**
	 * @param $name
	 * @param $value
	 */
	public function __set($name, $value)
	{
		$this->storage[$name] = $value;
		$this->__regenerateKeys();
	}

	private function __regenerateKeys()
	{
		$this->availableKeys = array_keys($this->storage);
	}
}