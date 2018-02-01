<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 23:19
 */

namespace WordTransforms\Dictionary;

use WordTransforms\Letter\Schema as Letter;

interface DictionaryInterface
{
    /**
     * @param        $name
     * @param Letter $letter
     */
    public function addLetter($name, Letter $letter): void;

    /**
     * @param $name
     *
     * @return Letter
     */
    public function getLetter($name): Letter;
}
