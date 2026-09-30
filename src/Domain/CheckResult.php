<?php

declare(strict_types=1);

namespace Oton\IntegrationHealth\Domain;

use DateTimeImmutable;

final readonly class CheckResult
{
    public function __construct(
        public HealthStatus $status,
        public DateTimeImmutable $checkedAt,
        public int $durationMs,
        public ?string $message = null,
        public array $metadata = [],
    ) {
        if ($durationMs < 0) {
            throw new \InvalidArgumentException('Duration cannot be negative.');
        }
    }
}
