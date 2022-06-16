<?php


namespace Functionality\FunctionalityPhp\Functions;


trait Arrays
{
    /**
     * Filter an array by a callback.
     *
     * @param array $array
     * @param callable $callback
     * @return array
     */
    public static function filter(array $array, callable $callback): array
    {
        return array_values(array_filter($array, $callback));
    }

    /**
     * returns the factors of the given number.
     *
     * @param int $number
     * @return array
     */
    public static function getFactors(int $number): array
    {
        $factors = [];
        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i === 0) {
                $factors[] = $i;
            }
        }
        return $factors;
    }

    /**
     * Get maximum value from an array.
     *
     * @param array $array
     * @return float
     */
    public static function maxArray(array $array): float
    {
        return max($array);
    }

    /**
     * Get minimum value from an array.
     *
     * @param array $array
     * @return float
     */
    public static function minArray(array $array): float
    {
        return min($array);
    }

    /**
     * Get random value from an array.
     *
     * @param array $array
     * @return mixed
     */
    public static function randomElementFromArray(array $array): mixed
    {
        return $array[array_rand($array)];
    }

    /**
     * removes all duplicate values from an array.
     *
     * @param array $array
     * @return array
     */
    public static function removeDuplicatesFromArray(array $array): array
    {
        return array_values(array_unique($array));
    }

    /**
     * Sort an array randomly.
     *
     * @param array $array
     * @return array
     */
    public static function shuffle(array $array): array
    {
        shuffle($array);
        return $array;
    }

    /**
     * Get the sum of all values in an array.
     *
     * @param array $array
     * @return float
     */
    public static function sumArray(array $array): float
    {
        return array_sum($array);
    }
}