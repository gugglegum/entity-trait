<?php

declare(strict_types=1);

namespace gugglegum\EntityTrait;

interface ArrayableInterface
{
    public function toArray(?callable $objectToArrayHandler = null): array;

    public function setFromArray(array $data);
}
