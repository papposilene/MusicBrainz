<?php

namespace MusicBrainz\Value;

/**
 * Aliases are variant names that are mostly used as search help: if a search matches an entity's alias, the entity will
 * be given as a result - even if the actual name wouldn't be.
 *
 * @see https://musicbrainz.org/doc/Aliases
 */
class Alias
{
    /**
     * Sort index
     *
     * @var string
     */
    private $sortName;

    /**
     * The alternative name
     *
     * @var string
     */
    private $name;

    /**
     * A locale code to indicate, where the alias is used
     *
     * @var string
     */
    private $locale;

    /**
     * The alias type
     *
     * @var string
     */
    private $type;

    /**
     * ?
     *
     * @var
     */
    private $primary;

    /**
     * Begin date
     *
     * @var Date
     *
     * @see LifeSpan
     */
    private $beginDate;

    /**
     * End date
     *
     * @var Date
     *
     * @see LifeSpan
     */
    private $endDate;

    /**
     * Constructs a life span.
     *
     * @param array $alias An array with information about the alias
     */
    public function __construct(array $alias)
    {
        $this->sortName = isset($alias['sort-name']) ? (string) $alias['sort-name'] : '';
        $this->name     = isset($alias['name']) ? (string) $alias['name'] : '';
        $this->locale   = isset($alias['locale']) ? (string) $alias['locale'] : '';
        $this->type     = isset($alias['type']) ? (string) $alias['type'] : '';
        $this->primary  = isset($alias['primary']) ? (string) $alias['primary'] : '';

        $beginDate = isset($alias['begin']) ? (string) $alias['begin'] : '';
        $endedDate = isset($alias['ended']) ? (string) $alias['ended'] : '';

        $this->beginDate = new Date($beginDate);
        $this->endDate   = new Date($endedDate);
    }

    /**
     * Returns the sort index.
     *
     * @return string
     */
    public function getSortName(): string
    {
        return $this->sortName;
    }

    /**
     * Returns the alternative name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Returns the locale code.
     *
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * Returns the alias type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * ?
     *
     * @return mixed
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * Returns the begin date.
     *
     * @return Date
     */
    public function getBeginDate(): Date
    {
        return $this->beginDate;
    }

    /**
     * Returns the end date.
     *
     * @return Date
     */
    public function getEndDate(): Date
    {
        return $this->endDate;
    }

    /**
     * Returns the alternative name.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}
