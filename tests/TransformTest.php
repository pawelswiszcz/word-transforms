<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 19:14
 */

use WordTransforms\Word\Transform;
use WordTransforms\Dictionary\Provider\English;

use PHPUnit\Framework\TestCase;

final class TransformTest extends TestCase
{
    /**
     *
     */
    public function testResultIsCorrect(): void
    {
        $transform = new Transform('HawkinG', new English());
        $this->assertEquals($transform->transform(), 'H4w|{!nG');
    }

    /**
     *
     */
    public function testComplicatedResultIsCorrect(): void
    {
        $string    = 'Inteligence is the ability to change.';
        $transform = new Transform($string, new English());

        $result = '!n7e|!gence !5 7he 48!|!7y 70 ch4nge.';
        $this->assertEquals($transform->transform(), $result);
    }
}
