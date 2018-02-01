<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 19:55
 */

namespace WordTransforms\Word\Input\Exception;

class ArgumentInvalid extends \InvalidArgumentException
{
    /**
     * @param mixed $arg
     *
     * @return ArgumentInvalid
     */
    public static function withArg(mixed $arg)
    {
        return new self("Provided argument is not valid class");
    }
}
