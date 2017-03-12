<?php

namespace MusicBrainz\Filter;

use MusicBrainz\Filter\Accessor\AliasNameAccessorTrait;
use MusicBrainz\Filter\Accessor\AreaNameAccessorTrait;
use MusicBrainz\Filter\Accessor\ArtistIdAccessorTrait;
use MusicBrainz\Filter\Accessor\ArtistNameAccessorTrait;
use MusicBrainz\Filter\Accessor\ArtistNameWithoutAccentAccessorTrait;
use MusicBrainz\Filter\Accessor\BeginAccessorTrait;
use MusicBrainz\Filter\Accessor\BeginAreaAccessorTrait;
use MusicBrainz\Filter\Accessor\CommentAccessorTrait;
use MusicBrainz\Filter\Accessor\CountryAccessorTrait;
use MusicBrainz\Filter\Accessor\EndAccessorTrait;
use MusicBrainz\Filter\Accessor\EndAreaAccessorTrait;
use MusicBrainz\Filter\Accessor\EndedAccessorTrait;
use MusicBrainz\Filter\Accessor\GenderAccessorTrait;
use MusicBrainz\Filter\Accessor\IpiCodeAccessorTrait;
use MusicBrainz\Value\ArtistType;

/**
 * A filter for searching artists
 */
class ArtistFilter extends Filter
{
    use AliasNameAccessorTrait;
    use AreaNameAccessorTrait;
    use ArtistIdAccessorTrait;
    use ArtistNameAccessorTrait;
    use ArtistNameWithoutAccentAccessorTrait;
    use BeginAccessorTrait;
    use BeginAreaAccessorTrait;
    use CommentAccessorTrait;
    use CountryAccessorTrait;
    use EndAccessorTrait;
    use EndAreaAccessorTrait;
    use EndedAccessorTrait;
    use GenderAccessorTrait;
    use IpiCodeAccessorTrait;

    /**
     * Returns the sort index.
     *
     * @return null|string
     */
    public function getSortName(): ?string
    {
        return $this->getFilterValue('sortname');
    }

    /**
     * Sets the sort index.
     *
     * @param null|string $sortName The sort index
     *
     * @return self
     */
    public function setSortName(?string $sortName): self
    {
        return $this->setFilterValue('sortname', $sortName);
    }

    /**
     * Returns the tag name.
     *
     * @return null|string
     */
    public function getTagName(): ?string
    {
        return $this->getFilterValue('tag');
    }

    /**
     * Sets a tag applied to the artist.
     *
     * @param null|string $tagName A tag applied to the artist
     *
     * @return self
     */
    public function setTagName(?string $tagName): self
    {
        return $this->setFilterValue('tag', $tagName);
    }

    /**
     * Returns the artist type.
     *
     * @return null|ArtistType
     */
    public function getArtistType(): ?ArtistType
    {
        return $this->getFilterValue('type');
    }

    /**
     * Sets the artist type.
     *
     * @param null|ArtistType $artistType An artist type
     *
     * @return self
     */
    public function setArtistType(?ArtistType $artistType): self
    {
        return $this->setFilterValue('type', $artistType);
    }
}
