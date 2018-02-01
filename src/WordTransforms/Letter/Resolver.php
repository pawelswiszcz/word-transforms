<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 22:55
 */

namespace WordTransforms\Letter;

class Resolver
{
    /**
     * @var string
     */
    private $letter;

    /**
     * Resolver constructor.
     *
     * @param $letter
     */
    public function __construct(string $letter)
    {
        $this->letter = $letter;
    }

}
