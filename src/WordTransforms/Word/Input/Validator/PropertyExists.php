<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 20:10
 */

namespace WordTransforms\Word\Input\Validator;

class PropertyExists implements Validate
{
    /**
     * @var object
     */
    private $object;
    /**
     * @var string
     */
    private $property;

    /**
     * PropertyExists constructor.
     *
     * @param object $object
     * @param string $property
     */
    public function __construct(object $object, string $property)
    {
        $this->object   = $object;
        $this->property = $property;
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return property_exists($this->object, $this->property);
    }
}
