<?php


namespace Functionality\FunctionalityPhp\Functions;


trait Randoms
{
    public static function randomBool(): bool
    {
        return (bool) rand(0, 1);
    }
}