<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 22:44
 */

namespace WordTransforms\Letter;

class G implements Schema
{
    /**
     * @return string
     */
    public function getKey(): string
    {
        return 'g';
    }

    /**
     * @return array
     */
    public function getLowerTransformation(): array
    {
        return ['g'];
    }

    /**
     * @return array
     */
    public function getUpperTransformation(): array
    {
        return ['G'];
    }

}
