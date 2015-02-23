<?php


namespace DMS\Filter\Filters;

/**
 * Interface EntityManagerFilter
 *
 * Allows filters to be access Doctrine Entity Manager.
 *
 * @package DMS\Filter\Filters
 */
interface EntityManagerFilter
{
    /**
     * Set the Doctrine Entity Manager
     *
     * @param \Doctrine\ORM\EntityManager $em
     */
    public function setEntityManager(\Doctrine\ORM\EntityManager $em);
}
