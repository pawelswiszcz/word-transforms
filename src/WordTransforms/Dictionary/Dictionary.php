<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 22:58
 */

namespace WordTransforms\Dictionary;

use ArrayObject;
use WordTransforms\Letter\Schema as Letter;
use InvalidArgumentException;

class Dictionary extends ArrayObject implements DictionaryInterface
{
    /**
     * @param mixed  $name
     * @param Letter $value
     */
    public function offsetSet($name, $value)
    {
        if (!$value instanceof Letter) {
            throw new InvalidArgumentException(sprintf('Only objects of %1$s allowed.', Letter::class));
        }
        parent::offsetSet($name, $value);
    }

    /**
     * @param mixed  $name
     * @param Letter $letter
     */
    public function addLetter($name, Letter $letter): void
    {
        $this->offsetSet($name, $letter);
    }

    /**
     * @param $name
     *
     * @return Letter
     */
    public function getLetter($name): Letter
    {
        return $this->offsetGet($name);
    }

}
