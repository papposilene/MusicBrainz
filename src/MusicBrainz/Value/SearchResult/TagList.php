<?php

namespace MusicBrainz\Value\SearchResult;

use MusicBrainz\Value\Tag;
use MusicBrainz\Value\SearchResult;
use MusicBrainz\Value\SearchResultList;

/**
 * A list of results from the search API
 */
class TagList extends SearchResultList
{
    /**
     * Constructs a list of results from the search API.
     *
     * @param array $searchResults A list of results from the search API
     */
    public function __construct(array $searchResults = [])
    {
        parent::__construct($searchResults, 'tags', Tag::class);
    }

    /**
     * Returns the class name of the list elements.
     *
     * @return string
     */
    public static function getType(): string
    {
        return SearchResult::class;
    }
}
