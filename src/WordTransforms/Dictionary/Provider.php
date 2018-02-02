<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 01.02.2018
 * Time: 23:52
 */

namespace WordTransforms\Dictionary;

use WordTransforms\Dictionary\ProviderInterface as DictionaryProvider;
use WordTransforms\Letter\A;
use WordTransforms\Letter\B;
use WordTransforms\Letter\Schema as Letter;

class Provider implements DictionaryProvider
{
    /**
     * @return DictionaryInterface
     */
    public function provide(): DictionaryInterface
    {
        return $this->buildDictionary();
    }

    /**
     * @return DictionaryInterface
     */
    private function buildDictionary() : DictionaryInterface
    {
        $dictionary = new Dictionary();

        foreach ($this->getLetters() as $letter) {
            $dictionary->offsetSet($letter->getKey(), $letter);
        }

        return $dictionary;
    }

    /**
     * @return Letter[]
     */
    private function getLetters() : array
    {
        return [new A(), new B()];
    }

}
