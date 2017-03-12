<?php

namespace MusicBrainz\Filter;

/**
 * A filter for searching artists
 */
abstract class Filter
{
    /**
     * A list of filter values
     *
     * @var FilterValueList
     */
    private $filterValues;

    /**
     * Constructs a filter.
     */
    public function __construct()
    {
        $this->filterValues = new FilterValueList;
    }

    /**
     * Returns a filter value.
     *
     * @param string $key Filter key
     *
     * @return null|mixed
     */
    protected function getFilterValue(string $key)
    {
        return isset($this->filterValues[$key]) ? $this->filterValues[$key] : null;
    }

    /**
     * Sets a filter value.
     *
     * @param string     $key   Filter key
     * @param null|mixed $value Value
     *
     * @return self
     */
    protected function setFilterValue(string $key, $value): self
    {
        if (!empty($value)) {
            $this->filterValues[$key] = $value;

            return $this;
        }

        unset($this->filterValues[$key]);

        return $this;
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function createParameters(array $params = array())
    {
        $params = $params + ['query' => ''];

        if (null === $this->count() || $params['query'] != '') {

            return $params;
        }

        foreach ($this->filterValues as $key => $val) {
            if ($params['query'] != '') {
                $params['query'] .= '+AND+';
            }

            if (!in_array($key, ['arid'])) {
                // Lucene escape characters
                $val = urlencode(
                    preg_replace('/([\+\-\!\(\)\{\}\[\]\^\~\*\?\:\\\\])/', '\\\\$1', $val)
                );
            }
            // If the search string contains a space, wrap it in brackets/quotes
            // This isn't always wanted, but for the searches required in this
            // library, I'm going to do it.
            if (preg_match('/[\+]/', $val)) {
                $val = '(' . $val . ')';
            }

            $params['query'] .= $key . ':' . $val;
        }

        return $params;
    }

    /**
     * Returns the number of filter values.
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->filterValues);
    }
}
