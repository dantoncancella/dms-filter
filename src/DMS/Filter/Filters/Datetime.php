<?php

namespace DMS\Filter\Filters;

use DMS\Filter\Rules\Rule;

/**
 * Datetime Filter
 *
 * @package DMS
 * @subpackage Filter
 */
class Datetime extends BaseFilter
{
    /**
     * {@inheritDoc}
     */
    public function apply(Rule $rule, $value)
    {
        return \DateTime::createFromFormat($rule->format, $value);
    }
}
