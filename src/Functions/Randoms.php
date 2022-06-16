<?php


namespace Functionality\FunctionalityPhp\Functions;


trait Randoms
{
    /**
     * Generates a random boolean.
     *
     * @return bool
     */
    public static function randomBoolean(): bool
    {
        return (bool)rand(0, 1);
    }

    public static function randomColor(): string
    {
        $CSS_COLOR_NAMES = [
            'AliceBlue', 'AntiqueWhite', 'Aqua', 'Aquamarine', 'Azure',
            'Beige', 'Bisque', 'Black', 'BlanchedAlmond', 'Blue',
            'BlueViolet', 'Brown', 'BurlyWood', 'CadetBlue', 'Chartreuse',
            'Chocolate', 'Coral', 'CornflowerBlue', 'Cornsilk', 'Crimson',
            'Cyan', 'DarkBlue', 'DarkCyan', 'DarkGoldenRod', 'DarkGray',
            'DarkGrey', 'DarkGreen', 'DarkKhaki', 'DarkMagenta', 'DarkOliveGreen',
            'DarkOrange', 'DarkOrchid', 'DarkRed', 'DarkSalmon', 'DarkSeaGreen',
            'DarkSlateBlue', 'DarkSlateGray', 'DarkSlateGrey', 'DarkTurquoise',
            'DarkViolet', 'DeepPink', 'DeepSkyBlue', 'DimGray', 'DimGrey',
            'DodgerBlue', 'FireBrick', 'FloralWhite', 'ForestGreen', 'Fuchsia',
            'Gainsboro', 'GhostWhite', 'Gold', 'GoldenRod', 'Gray',
            'Grey', 'Green', 'GreenYellow', 'HoneyDew', 'HotPink',
            'IndianRed', 'Indigo', 'Ivory', 'Khaki', 'Lavender',
            'LavenderBlush', 'LawnGreen', 'LemonChiffon', 'LightBlue',
            'LightCoral', 'LightCyan', 'LightGoldenRodYellow', 'LightGray',
            'LightGrey', 'LightGreen', 'LightPink', 'LightSalmon',
            'LightSeaGreen', 'LightSkyBlue', 'LightSlateGray', 'LightSlateGrey',
            'LightSteelBlue', 'LightYellow', 'Lime', 'LimeGreen', 'Linen',
            'Magenta', 'Maroon', 'MediumAquaMarine', 'MediumBlue',
            'MediumOrchid', 'MediumPurple', 'MediumSeaGreen', 'MediumSlateBlue',
            'MediumSpringGreen', 'MediumTurquoise', 'MediumVioletRed',
        ];
        return $CSS_COLOR_NAMES[array_rand($CSS_COLOR_NAMES)];
    }

    /**
     * Generates a random color in HEX format.
     *
     * @return string
     */
    public static function randomHexColor(): string
    {
        return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }

    /**
     * Generates a random HSL color.
     *
     * @return string
     */
    public static function randomHsl(): string
    {
        $h = rand(0, 360);
        $s = rand(0, 100);
        $l = rand(0, 100);
        return "hsl($h, $s%, $l%)";
    }

    /**
     * Generates a random integer.
     *
     * @param int $min
     * @param int $max
     * @return int
     */
    public static function randomNumber($min = 0, $max = 100): int
    {
        return rand($min, $max);
    }

    /**
     * Generates a random string.
     *
     * @param int $length
     * @return string
     */
    public static function randomString($length = 8): string
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $count = mb_strlen($chars);

        for ($i = 0, $result = ''; $i < $length; $i++) {
            $index = rand(0, $count - 1);
            $result .= mb_substr($chars, $index, 1);
        }

        return $result;
    }

}