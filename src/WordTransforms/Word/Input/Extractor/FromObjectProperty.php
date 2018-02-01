<?php
/**
 * Created by PhpStorm.
 * User: pawelswiszcz
 * Date: 28.01.2018
 * Time: 19:51
 */

namespace WordTransforms\Word\Input\Extractor;

use WordTransforms\Word\Input\Exception\PropertyNotFound;

use WordTransforms\Word\Input\Exception\PropertyWrongClass;
use WordTransforms\Word\Input\Validator\PropertyExists;
use WordTransforms\Word\Input\Validator\PropertyIsString;

class FromObjectProperty implements Extractor
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
     * FromObjectProperty constructor.
     *
     * @param object $object
     * @param string $property
     */
    public function __construct(object $object, string $property)
    {
        if (!(new PropertyExists($object, $property))->isValid()) {
            throw PropertyNotFound::withProperty($object, $property);
        }

        if (!(new PropertyIsString($object, $property))->isValid()) {
            throw PropertyWrongClass::withProperty($property, 'string', get_class($object->{$property}));
        }

        $this->object   = $object;
        $this->property = $property;
    }

    /**
     * @return string
     */
    public function extract(): string
    {
        return $this->object->{$this->property};
    }
}
