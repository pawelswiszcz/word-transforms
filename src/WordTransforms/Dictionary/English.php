<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 04.02.2018
 * Time: 17:32
 */
declare(strict_types=1);

namespace WordTransforms\Dictionary;

use WordTransforms\Letter\{
    A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, R, S, T
};
use WordTransforms\Letter\Schema as Letter;

class English extends Dictionary
{

    /**
     * English constructor.
     */
    public function __construct()
    {
        parent::__construct($this->getLettersInput());
    }

    /**
     * @param string $char
     *
     * @return string
     */
    public function transform(string $char): string
    {
        $letter = $this->getLetter($char);

        if ($letter === false) {
            return $char;
        }

        if ($this->isLower($char)) {
            return $this->randomLetter($letter->getLowerTransformation(), $char);
        } else {
            return $this->randomLetter($letter->getUpperTransformation(), $char);
        }
    }

    /**
     * @return Letter[]
     */
    private function getLettersInput(): array
    {
        $return = [];
        foreach ($this->getLetters() as $letter) {
            $return[$letter->getKey()] = $letter;
        }

        return $return;
    }

    /**
     * @return Letter[]
     */
    private function getLetters(): array
    {
        return [
            new A(), new B(), new C(), new D(), new E(), new F(), new G(), new H(), new I(), new J(), new K(), new  L(),
            new M(), new N(), new O(), new P(), new R(), new S(), new T(),
        ];
    }

    /**
     * @param array  $letters
     * @param string $default
     *
     * @return string
     */
    private function randomLetter(array $letters, string $default = ''): string
    {
        if (empty($letters)) {
            return $default;
        }

        $randKeys = array_rand($letters);

        return $letters[$randKeys];
    }
}
