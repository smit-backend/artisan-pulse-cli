<?php

declare(strict_types=1);

namespace SmitBackend\ArtisanPulse\Contracts;

/**
 * Interface MetricCollectorInterface
 *
 * @package SmitBackend\ArtisanPulse
 */
interface MetricCollectorInterface
{
    public function execute(array $payload = []): mixed;
}
