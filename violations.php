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
     * ScheduledTask constructor.
     *
     * @param string        $identifier
     * @param string        $identifierType
     * @param string        $taskType
     * @param string|null   $dataType
     * @param int|null      $timestamp
     * @param string|null   $metadata
*/
   
    public function getDeletionCounter(
        string  $deletionType,
        string  $labelpartner,
        ?string $serviceType = null
    ): ?DeletionCounter;

    public function update(DeletionCounter $deletionCounter): void;
}
