<?php

namespace Robert\Builder;

/**
 * Defined the behavior of a dictionary builder.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
interface BuildableDictionary
{
    /**
     * Build a dictionary from a given resource.
     *
     * @param mixed $resource
     *
     * @return Dictionarisable|Definable
     */
    public function build($resource);
}
