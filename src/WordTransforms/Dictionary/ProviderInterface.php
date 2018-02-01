<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 22:56
 */

namespace WordTransforms\Dictionary;

interface ProviderInterface
{
    /**
     * @return DictionaryInterface
     */
    public function provide(): DictionaryInterface;
}
