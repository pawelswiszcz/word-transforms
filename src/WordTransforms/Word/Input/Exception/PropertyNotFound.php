<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 19:55
 */

namespace WordTransforms\Word\Input\Exception;

class PropertyNotFound extends \InvalidArgumentException
{
    /**
     * @param object $object
     * @param string $property
     *
     * @return PropertyNotFound
     */
    public static function withProperty(object $object, string $property)
    {
        $class = get_class($object);

        return new self("Provided {$class} has no property {$property}");
    }
}
