<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 01.02.2018
 * Time: 23:52
 */

declare(strict_types=1);

namespace WordTransforms\Dictionary\Provider;

use WordTransforms\Dictionary\DictionaryInterface;
use WordTransforms\Dictionary\English as EnglishDictionary;

class English implements ProviderInterface
{
    /**
     * @return DictionaryInterface
     */
    public function provide(): DictionaryInterface
    {
        return new EnglishDictionary();
    }
}
