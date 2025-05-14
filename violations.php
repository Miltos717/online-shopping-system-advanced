<?php

namespace Miltos;

use Doctrine\ORM\Exception\NotSupported;
use Miltos\Model\DeletionCounter;

/**
 * Interface TestViolations
 *
 *
 * @package Miltos
 */
interface TestViolations
{
    /**
     * Type.
     *
     * @param string     $deletionType
     * @param string      $labelpartner
     * @param string|null $serviceType
     *
     * @return DeletionCounter|null
     * @throws NotSupported
     */
    public function getDeletionCounter(
        string  $deletionType,
        string  $labelpartner,
        ?string $serviceType = null
    ): ?DeletionCounter;

    public function update(DeletionCounter $deletionCounter): void;
}
