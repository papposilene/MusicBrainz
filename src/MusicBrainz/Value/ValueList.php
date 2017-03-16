<?php

namespace MusicBrainz\Value;

/**
 * A list of values
 *
 * @link http://php.net/manual/en/class.iterator.php
 */
abstract class ValueList implements \Iterator
{
    /**
     * A list of values
     *
     * @var array
     */
    private $elements;

    /**
     * Constructs a list of values.
     *
     * @param array $array Array of values
     */
    public function __construct(array $array = [])
    {
        $this->elements = $array;
    }

    /**
     * Rewinds the iterator to the first element.
     *
     * @link http://php.net/manual/en/iterator.rewind.php
     *
     * @return mixed
     */
    public function rewind()
    {
        reset($this->elements);
    }

    /**
     * Returns the current element.
     *
     * @link http://php.net/manual/en/iterator.current.php
     *
     * @return mixed
     */
    public function current()
    {
        return current($this->elements);
    }

    /**
     * Returns the key of the current element.
     *
     * @link http://php.net/manual/en/iterator.key.php
     *
     * @return mixed
     */
    public function key()
    {
        return key($this->elements);
    }

    /**
     * Moves forward to next element.
     *
     * @link http://php.net/manual/en/iterator.next.php
     *
     * @return mixed
     */
    public function next()
    {
        return next($this->elements);
    }

    /**
     * Checks if current position is valid.
     *
     * @link http://php.net/manual/en/iterator.valid.php
     *
     * @return bool
     */
    public function valid(): bool
    {
        $type = static::getType();

        return $this->current() instanceof $type;
    }

    /**
     * Returns the class name of the list elements.
     *
     * @return string
     */
    abstract public static function getType(): string;
}
