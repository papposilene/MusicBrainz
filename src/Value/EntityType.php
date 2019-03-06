<?php

namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * An entity type
 */
class EntityType implements Value
{
    /**
     * An area
     *
     * @var string
     */
    public const AREA = 'area';

    /**
     * An artist
     *
     * @var string
     */
    public const ARTIST = 'artist';

    /**
     * A collection
     *
     * @var string
     */
    public const COLLECTION = 'collection';

    /**
     * An editor
     *
     * @var string
     */
    public const EDITOR = 'editor';

    /**
     * An event
     *
     * @var string
     */
    public const EVENT = 'event';

    /**
     * An instrument
     *
     * @var string
     */
    public const INSTRUMENT = 'instrument';

    /**
     * A label
     *
     * @var string
     */
    public const LABEL = 'label';

    /**
     * A place
     *
     * @var string
     */
    public const PLACE = 'place';

    /**
     * A recording
     *
     * @var string
     */
    public const RECORDING = 'recording';

    /**
     * A resource
     *
     * @var string
     */
    public const RESOURCE = 'resource';

    /**
     * A release
     *
     * @var string
     */
    public const RELEASE = 'release';

    /**
     * A release group
     *
     * @var string
     */
    public const RELEASE_GROUP = 'release_group';

    /**
     * A series
     *
     * @var string
     */
    public const SERIES = 'series';

    /**
     * A track
     *
     * @var string
     */
    public const TRACK = 'track';

    /**
     * An URL
     *
     * @var string
     */
    public const URL = 'url';

    /**
     * A work
     *
     * @var string
     */
    public const WORK = 'work';

    /**
     * An undefined entity type
     *
     * @var string
     */
    public const UNDEFINED = '';

    /**
     * A list of valid entity types
     *
     * @var array
     */
    private const ENTITY_TYPES = [
        self::AREA,
        self::ARTIST,
        self::COLLECTION,
        self::EDITOR,
        self::EVENT,
        self::INSTRUMENT,
        self::LABEL,
        self::PLACE,
        self::RECORDING,
        self::RESOURCE,
        self::RELEASE,
        self::RELEASE_GROUP,
        self::SERIES,
        self::TRACK,
        self::URL,
        self::WORK
    ];

    /**
     * The entity type code
     *
     * @var string
     */
    private $entityTypeCode;

    /**
     * Constructs an entity type.
     *
     * @param string $entityTypeCode The entity type code
     */
    public function __construct(string $entityTypeCode = self::UNDEFINED)
    {
        $this->entityTypeCode = in_array($entityTypeCode, self::ENTITY_TYPES)
            ? $entityTypeCode
            : self::UNDEFINED;
    }

    /**
     * Returns the entity type code.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->entityTypeCode;
    }
}
