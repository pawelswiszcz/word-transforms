<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 19:14
 */

namespace WordTransforms\Word;

use WordTransforms\Dictionary\DictionaryInterface;

class Transform
{
    /**
     * @var string
     */
    private $string;

    /**
     * @var DictionaryInterface
     */
    private $dictionary;

    /**
     * Transform constructor.
     *
     * @param string              $string
     * @param DictionaryInterface $dictionary
     */
    public function __construct(string $string, DictionaryInterface $dictionary)
    {
        $this->string     = $string;
        $this->dictionary = $dictionary;
    }

    final public function transform(): string
    {
        $chars     = str_split($this->string);
        $newString = '';
        foreach ($chars as $char) {
            $letter          = $this->dictionary->getLetter($char);
            $transformedChar =
                $this->isLower($char) ? $letter->getLowerTransformation() : $letter->getUpperTransformation();
            $newString       .= $transformedChar;
        }

        return $newString;
    }

    /**
     * @param $char
     *
     * @return bool
     */
    final private function isLower($char)
    {
        return mb_strtolower($char) === $char;
    }
}
