<?php

namespace MusicBrainz\Value;

/**
 * A list of sectors
 */
class SectorsList extends ValueList
{
    /**
     * Constructs a list of sectors.
     *
     * @param array $sectorss An array containing information about the sectorss
     */
    public function __construct(array $sectorss = [])
    {
        parent::__construct(
            array_map(
                function($sectors) {
                    return new Sectors($sectors);
                },
                $sectorss
            )
        );
    }

    /**
     * Returns the class name of the list elements.
     *
     * @return string
     */
    public static function getType(): string
    {
        return Sectors::class;
    }
}
