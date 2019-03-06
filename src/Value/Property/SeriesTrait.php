<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\Series;

/**
 * Provides a getter for a series.
 */
trait SeriesTrait
{
    /**
     * The series
     *
     * @var Series
     */
    public $series;

    /**
     * Returns the series.
     *
     * @return Series
     */
    public function getSeries(): Series
    {
        return $this->series;
    }

    /**
     * Sets the series by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setSeriesFromArray(array $input): void
    {
        $this->series = is_null($series = ArrayAccess::getString($input, 'series'))
            ? new Series
            : new Series($series);
    }
}
