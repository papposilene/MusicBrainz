<?php

namespace MusicBrainz\Value;

/**
 * A place
 *
 * @link https://musicbrainz.org/doc/Place
 */
class Place
{
    use Property\AddressTrait;
    use Property\AreaTrait;
    use Property\CoordinatesTrait;
    use Property\DisambiguationTrait;
    use Property\LifeSpanTrait;
    use Property\MBIDTrait;
    use Property\NameTrait;
    use Property\PlaceTypeTrait;

    /**
     * Constructs a place.
     *
     * @param array $place Information about the place
     */
    public function __construct(array $place = [])
    {
        $this->address        = new Address(isset($place['address']) ? $place['address'] : '');
        $this->area           = new Area(isset($place['area']) ? $place['area'] : []);
        $this->coordinates    = new Coordinates(isset($place['coordinates']) ? $place['coordinates'] : []);
        $this->disambiguation = new Disambiguation(isset($place['disambiguation']) ? $place['disambiguation'] : '');
        $this->lifeSpan       = new LifeSpan(isset($place['life-span']) ? $place['life-span'] : []);
        $this->MBID           = new MBID(isset($place['id']) ? $place['id'] : '');
        $this->name           = new Name(isset($place['name']) ? $place['name'] : '');
        $this->placeType      = new PlaceType(isset($place['type']) ? $place['type'] : PlaceType::OTHER);
    }

    /**
     * Returns the place as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->getName();
    }
}
