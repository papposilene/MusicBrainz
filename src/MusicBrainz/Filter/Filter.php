<?php

namespace MusicBrainz\Filter;

use Doctrine\Common\Collections\ArrayCollection;
use MusicBrainz\Artist;
use MusicBrainz\MusicBrainz;

/**
 * A filter for searching artists
 */
abstract class Filter extends ArrayCollection
{
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
            $this->offsetSet($key, $value);

            return $this;
        }

        $this->offsetUnset($key);

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

        foreach ($this as $key => $val) {
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
}
