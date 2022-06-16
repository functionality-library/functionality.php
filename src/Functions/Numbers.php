<?php


namespace Functionality\FunctionalityPhp\Functions;


trait Numbers
{
    /**float
     * Get average between two numbers.
     *
     * @return float
     */
    public static function getAvg(float $a, float $b): float
    {
        return ($a + $b) / 2;
    }

    /**
     * Check if a number is even.
     *
     * @param int $number
     * @return bool
     */
    public static function isEven(float $number): bool
    {
        return $number % 2 === 0;
    }

    /**
     * Check if a number is odd.
     *
     * @param int $number
     * @return bool
     */
    public static function isOdd(float $number): bool
    {
        return $number % 2 !== 0;
    }

    /**
     * Check if a number is prime.
     *
     * @param int $number
     * @return bool
     */
    public static function isPrime(int $number): bool
    {
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }

    /**
     * Reverse a number (e.g. 12345 -> 54321).
     *
     * @param float $number
     * @return float
     */
    public static function reverseNumber(float $number): float
    {
        return $number > 0 ? +strrev((string) $number) : -str_replace('-', '', strrev((string) $number));
    }
}