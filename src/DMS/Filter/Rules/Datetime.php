<?php

namespace DMS\Filter\Rules;

/**
 * Datetime Rule
 *
 * @package DMS
 * @subpackage Filter
 *
 * @Annotation
 */
class Datetime extends Rule
{
    /**
     * String of format Datetime
     *
     * @var string
     */
    public $format = 'Y-m-d H:i:s';
}
