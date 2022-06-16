<?php


namespace Functionality\FunctionalityPhp\Functions;


trait Strings
{
    /**
     * Check if a string is a palindrome.
     *
     * @param string $string
     * @return bool
     */
    public static function isPalindrome(string $string): bool
    {
        return $string === strrev($string);
    }

    /**
     * Capitalize first letter of a string.
     *
     * @param string $string
     * @return string
     */
    public static function capitalize(string $string): string
    {
        return ucwords($string);
    }

    /**
     * Reverse a string.
     *
     * @param string $string
     * @return string
     */
    public static function reverseString(string $string): string
    {
        return strrev($string);
    }
}