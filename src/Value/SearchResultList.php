<?php
namespace MusicBrainz\Value;
use MusicBrainz\Value\Property\CountTrait;
use MusicBrainz\Value\Property\CreationTimeTrait;
use MusicBrainz\Value\Property\OffsetTrait;

/**
 * A list of results from the search API
 */
class SearchResultList extends ValueList
{
    use CountTrait;
    use CreationTimeTrait;
    use OffsetTrait;

    /**
     * Constructs a list of results from the search API.
     *
     * @param array $searchResults A list of results from the search API
     */
    public function __construct(array $searchResults = [], string $valueKey, string $className)
    {
        $this->setCountFromArray($searchResults);
        $this->setCreationTimeFromArray($searchResults);
        $this->setOffsetFromArray($searchResults);

        $searchResultValue = (isset($searchResults[$valueKey]))
            ? array_map(
                function ($searchResult) use ($className, $valueKey) {
                    return new SearchResult((array) $searchResult, $className);
                },
                $searchResults[$valueKey]
            )
            : [];

        parent::__construct($searchResultValue);
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
