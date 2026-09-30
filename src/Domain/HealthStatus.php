<?php

declare(strict_types=1);

namespace Oton\IntegrationHealth\Domain;

enum HealthStatus: string
{
    case Healthy = 'healthy';
    case Degraded = 'degraded';
    case Unhealthy = 'unhealthy';
    case Unknown = 'unknown';
}
