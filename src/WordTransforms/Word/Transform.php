<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 19:14
 */

namespace WordTransforms\Word;

use WordTransforms\Dictionary\Provider\ProviderInterface;

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
     * @param string            $string
     * @param ProviderInterface $dictionaryProvider
     */
    public function __construct(string $string, ProviderInterface $dictionaryProvider)
    {
        $this->string             = $string;
        $this->dictionaryProvider = $dictionaryProvider;
    }

    /**
     * @return string
     */
    final public function transform(): string
    {
        $chars     = str_split($this->string);
        $newString = '';
        foreach ($chars as $char) {
            $newString .= $this->dictionaryProvider->provide()->transform($char);
        }

        return $newString;
    }

}
