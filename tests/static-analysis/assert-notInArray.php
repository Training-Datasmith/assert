<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notInArray(mixed $value, array $values): mixed
{
    Assert::notInArray($value, $values);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrNotInArray(mixed $value, array $values): mixed
{
    Assert::nullOrNotInArray($value, $values);

    return $value;
}

/**
 * @psalm-pure
 */
function allNotInArray(mixed $value, array $values): mixed
{
    Assert::allNotInArray($value, $values);

    return $value;
}
