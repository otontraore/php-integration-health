<?php

declare(strict_types=1);

namespace Oton\IntegrationHealth\Domain;

interface HealthChecker
{
    public function name(): string;

    public function check(): CheckResult;
}
