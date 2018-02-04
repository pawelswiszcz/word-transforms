<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 22:58
 */

declare(strict_types=1);

namespace WordTransforms\Dictionary;

use ArrayObject;
use WordTransforms\Letter\Schema as Letter;
use InvalidArgumentException;
use WordTransforms\Letter\Undefined;

abstract class Dictionary extends ArrayObject implements DictionaryInterface
{
    /**
     * @param string $char
     *
     * @return string
     */
    abstract public function transform(string $char): string;

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
        $this->offsetSet(mb_strtolower($name), $letter);
    }

    /**
     * @param mixed $name
     *
     * @return Letter
     */
    public function getLetter($name): Letter
    {
        $key    = mb_strtolower($name);
        $exists = $this->offsetExists($key);

        if (!$exists) {
            return new Undefined();
        }

        $letter = $this->offsetGet($key);

        return $letter ?: new Undefined();
    }

    /**
     * @param string $char
     *
     * @return bool
     */
    protected function isLower(string $char)
    {
        return mb_strtolower($char) === $char;
    }
}
