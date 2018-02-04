<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 22:44
 */

namespace WordTransforms\Letter;

class E implements Schema
{
    /**
     * @return string
     */
    public function getKey(): string
    {
        return 'e';
    }

    /**
     * @return array
     */
    public function getLowerTransformation(): array
    {
        return ['3'];
    }

    /**
     * @return array
     */
    public function getUpperTransformation(): array
    {
        return ['3'];
    }

}
