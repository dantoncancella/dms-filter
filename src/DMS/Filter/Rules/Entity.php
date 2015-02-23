<?php

namespace DMS\Filter\Rules;

/**
 * Entity Rule
 *
 * @package DMS
 * @subpackage Filter
 *
 * @Annotation
 */
class Entity extends Rule
{
    /**
     * String name of Entity
     *
     * @var string
     */
    public $class = null;
}
