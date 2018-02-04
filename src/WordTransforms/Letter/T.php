<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 22:44
 */

namespace WordTransforms\Letter;

class T implements Schema
{
    /**
     * @return string
     */
    public function getKey(): string
    {
        return 't';
    }

    /**
     * @return array
     */
    public function getLowerTransformation(): array
    {
        return ['7'];
    }

    /**
     * @return array
     */
    public function getUpperTransformation(): array
    {
        return ['7'];
    }

}
