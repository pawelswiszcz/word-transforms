<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 19:55
 */

namespace WordTransforms\Word\Input\Exception;

class PropertyWrongClass extends \InvalidArgumentException
{
    /**
     * @param string $property
     * @param string $classExpected
     * @param string $classGet
     *
     * @return PropertyWrongClass
     */
    public static function withProperty(string $property, string $classExpected, string $classGet)
    {
        return new self("Provided {$property} should be {$classExpected}::class, class get is {$classGet}::class");
    }
}
