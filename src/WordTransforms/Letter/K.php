<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 22:44
 */

namespace WordTransforms\Letter;

class K implements Schema
{
    /**
     * @return string
     */
    public function getKey(): string
    {
        return 'k';
    }

    /**
     * @return array
     */
    public function getLowerTransformation(): array
    {
        return ['|{'];
    }

    /**
     * @return array
     */
    public function getUpperTransformation(): array
    {
        return ['|{'];
    }

}
