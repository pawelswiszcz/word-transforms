<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 22:43
 */

namespace WordTransforms\Letter;

interface Schema
{
    /**
     * @return string
     */
    public function getKey(): string;

    /**
     * @return array
     */
    public function getLowerTransformation(): array;

    /**
     * @return array
     */
    public function getUpperTransformation(): array;
}
