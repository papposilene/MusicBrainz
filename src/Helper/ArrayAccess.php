<?php
namespace MusicBrainz\Helper;

use MusicBrainz\MusicBrainz;

/**
 * A helper class for extracting values from an array.
 */
class ArrayAccess
{
    /**
     * Extracts an array from a certain key of a given input array, and returns it. Returns null, if the array key
     * doesn't exist or doesn't contain a value of type array. Logs an error in the latter case.
     *
     * @param array  $array The input array
     * @param string $key   An array key
     *
     * @return null|array
     */
    static public function getArray(array $array, string $key): ?array
    {
        if (!isset($array[$key])) {

            return null;
        }

        if (is_array($array[$key])) {

            return $array[$key];
        }

        MusicBrainz::log()
            ->error('Unexpected API behavior: Expected "' . $key . '" to be of tpye array, but got ' . gettype($array[$key]));

        return null;
    }

    /**
     * Extracts a boolean value from a certain key of a given input array, and returns it. Returns null, if the array
     * key doesn't exist or doesn't contain a value of type string. Logs an error in the latter case.
     *
     * @param array  $array The input array
     * @param string $key   An array key
     *
     * @return null|bool
     */
    static public function getBool(array $array, string $key): ?bool
    {
        if (!isset($array[$key])) {

            return null;
        }

        if (is_bool($array[$key])) {

            return $array[$key];
        }

        MusicBrainz::log()
            ->error('Unexpected API behavior: Expected "' . $key . '" to be of type boolean, but got ' . gettype($array[$key]));

        return null;
    }

    /**
     * Extracts a float from a certain key of a given input array, and returns it. Returns null, if the array key
     * doesn't exist or doesn't contain a value of type float. Logs an error in the latter case.
     *
     * @param array  $array The input array
     * @param string $key   An array key
     *
     * @return null|float
     */
    static public function getFloat(array $array, string $key): ?float
    {
        if (!isset($array[$key])) {

            return null;
        }

        if (is_float($array[$key])) {

            return $array[$key];
        }

        MusicBrainz::log()
            ->error('Unexpected API behavior: Expected "' . $key . '" to be of type float, but got ' . gettype($array[$key]));

        return null;
    }

    /**
     * Extracts an integer from a certain key of a given input array, and returns it. Returns null, if the array key
     * doesn't exist or doesn't contain a value of type integer. Logs an error in the latter case.
     *
     * @param array  $array The input array
     * @param string $key   An array key
     *
     * @return null|string
     */
    static public function getInteger(array $array, string $key): ?string
    {
        if (!isset($array[$key])) {

            return null;
        }

        if (is_int($array[$key])) {

            return $array[$key];
        }

        MusicBrainz::log()
            ->error('Unexpected API behavior: Expected "' . $key . '" to be of type integer, but got ' . gettype($array[$key]));

        return null;
    }

    /**
     * Extracts a string from a certain key of a given input array, and returns it. Returns null, if the array key
     * doesn't exist or doesn't contain a value of type string. Logs an error in the latter case.
     *
     * @param array  $array The input array
     * @param string $key   An array key
     *
     * @return null|string
     */
    static public function getString(array $array, string $key): ?string
    {
        if (!isset($array[$key])) {

            return null;
        }

        if (is_string($array[$key])) {

            return $array[$key];
        }

        MusicBrainz::log()
            ->error('Unexpected API behavior: Expected "' . $key . '" to be of type string, but got ' . gettype($array[$key]));

        return null;
    }
}
