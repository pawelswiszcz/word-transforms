<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 20:09
 */

namespace WordTransforms\Word\Input\Validator;

interface Validate
{
    /**
     * @return bool
     */
    public function isValid(): bool;
}
