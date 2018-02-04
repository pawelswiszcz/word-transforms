<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 22:44
 */

namespace WordTransforms\Letter;

class R implements Schema
{
    /**
     * @return string
     */
    public function getKey(): string
    {
        return 'r';
    }

    /**
     * @return array
     */
    public function getLowerTransformation(): array
    {
        return ['r'];
    }

    /**
     * @return array
     */
    public function getUpperTransformation(): array
    {
        return ['R'];
    }

}
