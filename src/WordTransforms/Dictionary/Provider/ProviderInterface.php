<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 22:56
 */
declare(strict_types=1);

namespace WordTransforms\Dictionary\Provider;

use WordTransforms\Dictionary\DictionaryInterface;

interface ProviderInterface
{
    /**
     * @return DictionaryInterface
     */
    public function provide(): DictionaryInterface;
}
