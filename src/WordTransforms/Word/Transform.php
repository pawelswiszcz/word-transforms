<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 19:14
 */

namespace WordTransforms\Word;

use WordTransforms\Dictionary\DictionaryInterface;
use WordTransforms\Dictionary\ProviderInterface;

class Transform
{
    /**
     * @var string
     */
    private $string;

    /**
     * @var ProviderInterface
     */
    private $dictionaryProvider;

    /**
     * Transform constructor.
     *
     * @param string              $string
     * @param ProviderInterface $dictionaryProvider
     */
    public function __construct(string $string, ProviderInterface $dictionaryProvider)
    {
        $this->string             = $string;
        $this->dictionaryProvider = $dictionaryProvider;
    }

    final public function transform(): string
    {
        $chars     = str_split($this->string);
        $newString = '';
        foreach ($chars as $char) {
            $letter          = $this->dictionaryProvider->provide()->getLetter($char);
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
