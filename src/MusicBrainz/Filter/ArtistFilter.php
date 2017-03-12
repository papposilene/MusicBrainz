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
use MusicBrainz\Value\ArtistType;
use MusicBrainz\Value\Date;
use MusicBrainz\Value\Gender;
use MusicBrainz\Value\IPI;

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

    /**
     * Returns artist death date/band dissolution date.
     *
     * @return null|Date
     */
    public function getEnd(): ?Date
    {
        return $this->getFilterValue('end');
    }

    /**
     * Sets artist death date/band dissolution date.
     *
     * @param null|Date $end Artist death date/band dissolution date
     *
     * @return self
     */
    public function setEnd(?Date $end): self
    {
        return $this->setFilterValue('end', $end);
    }

    /**
     * Returns the name of the ending area.
     *
     * @return null|string
     */
    public function getEndAreaName(): ?string
    {
        return $this->getFilterValue('endarea');
    }

    /**
     * Sets the name of the ending area.
     *
     * @param null|string $endAreaName The name of the ending area
     *
     * @return self
     */
    public function setEndAreaName(?string $endAreaName): self
    {
        return $this->setFilterValue('endarea', $endAreaName);
    }

    /**
     * Returns true for dissolved bands or dead artists.
     *
     * @return null|bool
     */
    public function getEnded(): ?bool
    {
        return $this->getFilterValue('ended');
    }

    /**
     * Sets, whether the is dissolved or the artist is dead.
     *
     * @param null|bool $ended True, if the band is dissolved or the artist is dead.
     *
     * @return self
     */
    public function setEnded(?bool $ended): self
    {
        return $this->setFilterValue('ended', $ended);
    }

    /**
     * Returns the gender.
     *
     * @return null|Gender
     */
    public function getGender(): ?Gender
    {
        return $this->getFilterValue('gender');
    }

    /**
     * Sets the gender.
     *
     * @param null|Gender $gender
     *
     * @return self
     */
    public function setGender(?Gender $gender): self
    {
        return $this->setFilterValue('gender', $gender);
    }

    /**
     * Returns the IPI (interested party information) code for the artist.
     *
     * @return null|IPI
     */
    public function getIpiCode(): ?IPI
    {
        return $this->getFilterValue('ipi');
    }

    /**
     * Sets the IPI (interested party information) code for the artist.
     *
     * @param IPI|null $ipiCode The IPI (interested party information) code for the artist
     *
     * @return self
     */
    public function setIpiCode(?IPI $ipiCode): self
    {
        return $this->setFilterValue('ipi', $ipiCode);
    }

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
