<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 23:19
 */

declare(strict_types=1);

namespace WordTransforms\Dictionary;

use WordTransforms\Letter\Schema as Letter;

interface DictionaryInterface
{
    /**
     * @param mixed  $name
     * @param Letter $letter
     */
    public function addLetter($name, Letter $letter): void;

    /**
     * @param mixed $name
     *
     * @return Letter
     */
    public function getLetter($name): Letter;

    /**
     * @param string $char
     *
     * @return string
     */
    public function transform(string $char): string;
}
