<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 19:50
 */

namespace WordTransforms\Word\Input\Extractor;

interface Extractor
{
    /**
     * @return string
     */
    public function extract(): string;
}
