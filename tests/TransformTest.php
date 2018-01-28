<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 19:14
 */

use WordTransforms\Word\Transform;

class TransformTest extends PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testTransform()
    {
        $transform = new Transform();
        $this->assertTrue(is_string($transform->transform('defaultTest')));
    }
}
