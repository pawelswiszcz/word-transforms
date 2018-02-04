<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 19:14
 */

use WordTransforms\Word\Transform;

use PHPUnit\Framework\TestCase;

final class TransformTest extends TestCase
{

    public function testResultAsString(): void
    {
        $transform = new Transform('Hawking', new WordTransforms\Dictionary\Provider\English());
        $this->assertEquals($transform->transform(), 'H4w|{!ng');
    }
}
