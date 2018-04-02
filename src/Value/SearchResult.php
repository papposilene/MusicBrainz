<?php
namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * A result from the search API
 */
class SearchResult implements Value
{
    use Property\ScoreTrait;
    use Property\ValueTrait;

    /**
     * Constructs a result from the search API.
     *
     * @param array $searchResult Information about the result from the search API
     */
    public function __construct(array $searchResult = [], string $className)
    {
        $this->score = isset($searchResult['score']) ? new Score($searchResult['score']) : new Score;
        $this->value = new $className($searchResult);
    }

    /**
     * Returns the series as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->getValue();
    }
}
