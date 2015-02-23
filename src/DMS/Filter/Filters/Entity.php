<?php

namespace DMS\Filter\Filters;

use DMS\Filter\Rules\Rule;

/**
 * Entity Filter
 *
 * @package DMS
 * @subpackage Filter
 */
class Entity extends BaseFilter implements EntityManagerFilter
{
    /**
     * @var \Doctrine\ORM\EntityManager $em
     */
    protected $em;

    /**
     * Set the current object so that the filter can access it
     *
     * @param \Doctrine\ORM\EntityManager $em
     */
    public function setEntityManager(\Doctrine\ORM\EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * {@inheritDoc}
     */
    public function apply(Rule $rule, $value)
    {
        return $this->em->getRepository($rule->class)->find($value);
    }
}