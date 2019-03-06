<?php

namespace MusicBrainz\Collection;

/**
 * Provides a collection with external iterator.
 *
 * @link http://php.net/manual/en/class.iterator.php
 */
trait IteratorTrait
{
    use CollectionTrait;

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
        return array_key_exists($this->key(), $this->elements);
    }
}
