<?php

declare (strict_types=1);
namespace Webmozart\Assert;

use ArrayAccess;
use Countable;
use Throwable;
/**
 * This trait provides nullOr*, all* and allNullOr* variants of assertion base methods.
 * Do not use this trait directly: it will change, and is not designed for reuse.
 */
trait Mixin
{
    /**
     * @psalm-pure
     *
     * @psalm-assert string|null $value
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_string(mixed $value, string $message = ''): mixed
    {
        null === $value || static::string($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<string> $value
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function all_string(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::string($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<string|null> $value
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_string(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::string($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert non-empty-string|null $value
     *
     * @return non-empty-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_string_not_empty(mixed $value, string $message = ''): mixed
    {
        null === $value || static::string_not_empty($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-empty-string> $value
     *
     * @return iterable<non-empty-string>
     *
     * @throws InvalidArgumentException
     */
    public static function all_string_not_empty(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::string_not_empty($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-empty-string|null> $value
     *
     * @return iterable<non-empty-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_string_not_empty(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::string_not_empty($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert int|null $value
     *
     * @return int|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_integer(mixed $value, string $message = ''): mixed
    {
        null === $value || static::integer($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<int> $value
     *
     * @return iterable<int>
     *
     * @throws InvalidArgumentException
     */
    public static function all_integer(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::integer($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<int|null> $value
     *
     * @return iterable<int|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_integer(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::integer($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert numeric|null $value
     *
     * @return numeric|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_integerish(mixed $value, string $message = ''): mixed
    {
        null === $value || static::integerish($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<numeric> $value
     *
     * @return iterable<numeric>
     *
     * @throws InvalidArgumentException
     */
    public static function all_integerish(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::integerish($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<numeric|null> $value
     *
     * @return iterable<numeric|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_integerish(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::integerish($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert positive-int|null $value
     *
     * @return positive-int|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_positive_integer(mixed $value, string $message = ''): mixed
    {
        null === $value || static::positive_integer($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<positive-int> $value
     *
     * @return iterable<positive-int>
     *
     * @throws InvalidArgumentException
     */
    public static function all_positive_integer(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::positive_integer($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<positive-int|null> $value
     *
     * @return iterable<positive-int|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_positive_integer(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::positive_integer($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert non-negative-int|null $value
     *
     * @return non-negative-int|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_not_negative_integer(mixed $value, string $message = ''): mixed
    {
        null === $value || static::not_negative_integer($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-negative-int> $value
     *
     * @return iterable<non-negative-int>
     *
     * @throws InvalidArgumentException
     */
    public static function all_not_negative_integer(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::not_negative_integer($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-negative-int|null> $value
     *
     * @return iterable<non-negative-int|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_not_negative_integer(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::not_negative_integer($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert negative-int|null $value
     *
     * @return negative-int|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_negative_integer(mixed $value, string $message = ''): mixed
    {
        null === $value || static::negative_integer($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<negative-int> $value
     *
     * @return iterable<negative-int>
     *
     * @throws InvalidArgumentException
     */
    public static function all_negative_integer(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::negative_integer($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<negative-int|null> $value
     *
     * @return iterable<negative-int|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_negative_integer(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::negative_integer($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert float|null $value
     *
     * @return float|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_float(mixed $value, string $message = ''): mixed
    {
        null === $value || static::float($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<float> $value
     *
     * @return iterable<float>
     *
     * @throws InvalidArgumentException
     */
    public static function all_float(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::float($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<float|null> $value
     *
     * @return iterable<float|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_float(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::float($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert numeric|null $value
     *
     * @return numeric|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_numeric(mixed $value, string $message = ''): mixed
    {
        null === $value || static::numeric($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<numeric> $value
     *
     * @return iterable<numeric>
     *
     * @throws InvalidArgumentException
     */
    public static function all_numeric(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::numeric($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<numeric|null> $value
     *
     * @return iterable<numeric|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_numeric(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::numeric($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert positive-int|0|null $value
     *
     * @return positive-int|0|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_natural(mixed $value, string $message = ''): mixed
    {
        null === $value || static::natural($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<positive-int|0> $value
     *
     * @return iterable<positive-int|0>
     *
     * @throws InvalidArgumentException
     */
    public static function all_natural(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::natural($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<positive-int|0|null> $value
     *
     * @return iterable<positive-int|0|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_natural(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::natural($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert bool|null $value
     *
     * @return bool|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_boolean(mixed $value, string $message = ''): mixed
    {
        null === $value || static::boolean($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<bool> $value
     *
     * @return iterable<bool>
     *
     * @throws InvalidArgumentException
     */
    public static function all_boolean(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::boolean($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<bool|null> $value
     *
     * @return iterable<bool|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_boolean(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::boolean($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert scalar|null $value
     *
     * @return scalar|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_scalar(mixed $value, string $message = ''): mixed
    {
        null === $value || static::scalar($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<scalar> $value
     *
     * @return iterable<scalar>
     *
     * @throws InvalidArgumentException
     */
    public static function all_scalar(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::scalar($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<scalar|null> $value
     *
     * @return iterable<scalar|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_scalar(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::scalar($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert object|null $value
     *
     * @return object|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_object(mixed $value, string $message = ''): mixed
    {
        null === $value || static::object($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<object> $value
     *
     * @return iterable<object>
     *
     * @throws InvalidArgumentException
     */
    public static function all_object(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::object($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<object|null> $value
     *
     * @return iterable<object|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_object(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::object($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert object|string|null $value
     *
     * @return object|string|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_objectish(mixed $value, string $message = ''): mixed
    {
        null === $value || static::objectish($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<object|string> $value
     *
     * @return iterable<object|string>
     *
     * @throws InvalidArgumentException
     */
    public static function all_objectish(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::objectish($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<object|string|null> $value
     *
     * @return iterable<object|string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_objectish(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::objectish($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert resource|null $value
     *
     * @see https://www.php.net/manual/en/function.get-resource-type.php
     *
     * @return resource|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_resource(mixed $value, ?string $type = null, string $message = ''): mixed
    {
        null === $value || static::resource($value, $type, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<resource> $value
     *
     * @see https://www.php.net/manual/en/function.get-resource-type.php
     *
     * @return iterable<resource>
     *
     * @throws InvalidArgumentException
     */
    public static function all_resource(mixed $value, ?string $type = null, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::resource($entry, $type, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<resource|null> $value
     *
     * @see https://www.php.net/manual/en/function.get-resource-type.php
     *
     * @return iterable<resource|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_resource(mixed $value, ?string $type = null, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::resource($entry, $type, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert callable|null $value
     *
     * @return callable|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_callable(mixed $value, string $message = ''): mixed
    {
        null === $value || static::is_callable($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<callable> $value
     *
     * @return iterable<callable>
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_callable(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::is_callable($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<callable|null> $value
     *
     * @return iterable<callable|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_callable(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::is_callable($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert array|null $value
     *
     * @return array|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_array(mixed $value, string $message = ''): mixed
    {
        null === $value || static::is_array($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array> $value
     *
     * @return iterable<array>
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_array(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::is_array($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array|null> $value
     *
     * @return iterable<array|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_array(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::is_array($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert array|ArrayAccess|null $value
     *
     * @return array|ArrayAccess|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_array_accessible(mixed $value, string $message = ''): mixed
    {
        null === $value || static::is_array_accessible($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array|ArrayAccess> $value
     *
     * @return iterable<array|ArrayAccess>
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_array_accessible(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::is_array_accessible($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array|ArrayAccess|null> $value
     *
     * @return iterable<array|ArrayAccess|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_array_accessible(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::is_array_accessible($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert countable|null $value
     *
     * @return countable|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_countable(mixed $value, string $message = ''): mixed
    {
        null === $value || static::is_countable($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<countable> $value
     *
     * @return iterable<countable>
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_countable(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::is_countable($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<countable|null> $value
     *
     * @return iterable<countable|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_countable(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::is_countable($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable|null $value
     *
     * @return iterable|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_iterable(mixed $value, string $message = ''): mixed
    {
        null === $value || static::is_iterable($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<iterable> $value
     *
     * @return iterable<iterable>
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_iterable(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::is_iterable($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<iterable|null> $value
     *
     * @return iterable<iterable|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_iterable(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::is_iterable($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @template T of object
     * @psalm-assert T|null $value
     *
     * @psalm-param class-string<T> $class
     * @return T|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_instance_of(mixed $value, mixed $class, string $message = ''): mixed
    {
        null === $value || static::is_instance_of($value, $class, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @template T of object
     * @psalm-assert iterable<T> $value
     *
     * @psalm-param class-string<T> $class
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_instance_of(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::is_instance_of($entry, $class, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @template T of object
     * @psalm-assert iterable<T|null> $value
     *
     * @psalm-param class-string<T> $class
     * @return iterable<T|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_instance_of(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::is_instance_of($entry, $class, $message);
        }
        return $value;
    }
    /**
     * @template T of object
     * @psalm-param class-string<T> $class
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_not_instance_of(mixed $value, mixed $class, string $message = ''): mixed
    {
        null === $value || static::not_instance_of($value, $class, $message);
        return $value;
    }
    /**
     * @template T of object
     * @psalm-param class-string<T> $class
     *
     * @throws InvalidArgumentException
     */
    public static function all_not_instance_of(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::not_instance_of($entry, $class, $message);
        }
        return $value;
    }
    /**
     * @template T of object
     * @psalm-assert iterable<object|null> $value
     *
     * @psalm-param class-string<T> $class
     * @return iterable<object|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_not_instance_of(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::not_instance_of($entry, $class, $message);
        }
        return $value;
    }
    /**
     * @template T of object
     * @psalm-assert T|null $value
     *
     * @param T|null $value
     *
     * @return T|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_instance_of_any(mixed $value, mixed $classes, string $message = ''): mixed
    {
        null === $value || static::is_instance_of_any($value, $classes, $message);
        return $value;
    }
    /**
     * @template T of object
     * @psalm-assert iterable<T> $value
     *
     * @param iterable<T> $value
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_instance_of_any(mixed $value, mixed $classes, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::is_instance_of_any($entry, $classes, $message);
        }
        return $value;
    }
    /**
     * @template T of object
     * @psalm-assert iterable<T|null> $value
     *
     * @param iterable<T|null> $value
     *
     * @return iterable<T|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_instance_of_any(mixed $value, mixed $classes, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::is_instance_of_any($entry, $classes, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @template T of object
     * @psalm-assert T|class-string<T>|null $value
     *
     * @return T|class-string<T>|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_a_of(mixed $value, mixed $class, string $message = ''): mixed
    {
        null === $value || static::is_a_of($value, $class, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @template T of object
     * @psalm-assert iterable<T|class-string<T>> $value
     *
     * @return iterable<T|class-string<T>>
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_a_of(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::is_a_of($entry, $class, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @template T of object
     * @psalm-assert iterable<T|class-string<T>|null> $value
     *
     * @return iterable<T|class-string<T>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_a_of(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::is_a_of($entry, $class, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @template T
     *
     * @param T|null $value
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_not_a(mixed $value, mixed $class, string $message = ''): mixed
    {
        null === $value || static::is_not_a($value, $class, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @template T
     *
     * @param iterable<T> $value
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_not_a(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::is_not_a($entry, $class, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @template T
     * @psalm-assert iterable<object|class-string|null> $value
     *
     * @param iterable<T|null> $value
     *
     * @return iterable<object|class-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_not_a(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::is_not_a($entry, $class, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @param object|string|null $value
     * @param string[]           $classes
     *
     * @psalm-param array<class-string> $classes
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_any_of(mixed $value, mixed $classes, string $message = ''): mixed
    {
        null === $value || static::is_any_of($value, $classes, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @param iterable<object|string> $value
     * @param string[]                $classes
     *
     * @psalm-param array<class-string> $classes
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_any_of(mixed $value, mixed $classes, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::is_any_of($entry, $classes, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @param iterable<object|string|null> $value
     * @param string[]                     $classes
     *
     * @psalm-param array<class-string> $classes
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_any_of(mixed $value, mixed $classes, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::is_any_of($entry, $classes, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert empty $value
     *
     * @return empty
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_empty(mixed $value, string $message = ''): mixed
    {
        null === $value || static::is_empty($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<empty> $value
     *
     * @return iterable<empty>
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_empty(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::is_empty($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<empty|null> $value
     *
     * @return iterable<empty|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_empty(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::is_empty($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_not_empty(mixed $value, string $message = ''): mixed
    {
        null === $value || static::not_empty($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_not_empty(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::not_empty($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<!empty|null> $value
     *
     * @return iterable<!empty|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_not_empty(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::not_empty($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<null> $value
     *
     * @return iterable<null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::null($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_not_null(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::not_null($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert true|null $value
     *
     * @return true|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_true(mixed $value, string $message = ''): mixed
    {
        null === $value || static::true($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<true> $value
     *
     * @return iterable<true>
     *
     * @throws InvalidArgumentException
     */
    public static function all_true(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::true($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<true|null> $value
     *
     * @return iterable<true|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_true(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::true($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert false|null $value
     *
     * @return false|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_false(mixed $value, string $message = ''): mixed
    {
        null === $value || static::false($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<false> $value
     *
     * @return iterable<false>
     *
     * @throws InvalidArgumentException
     */
    public static function all_false(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::false($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<false|null> $value
     *
     * @return iterable<false|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_false(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::false($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_not_false(mixed $value, string $message = ''): mixed
    {
        null === $value || static::not_false($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_not_false(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::not_false($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<!false|null> $value
     *
     * @return iterable<!false|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_not_false(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::not_false($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-param string|null $value
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_ip(mixed $value, string $message = ''): mixed
    {
        null === $value || static::ip($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string> $value
     *
     * @throws InvalidArgumentException
     */
    public static function all_ip(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::ip($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string|null> $value
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_ip(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::ip($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-param string|null $value
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_ipv4(mixed $value, string $message = ''): mixed
    {
        null === $value || static::ipv4($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string> $value
     *
     * @throws InvalidArgumentException
     */
    public static function all_ipv4(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::ipv4($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string|null> $value
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_ipv4(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::ipv4($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-param string|null $value
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_ipv6(mixed $value, string $message = ''): mixed
    {
        null === $value || static::ipv6($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string> $value
     *
     * @throws InvalidArgumentException
     */
    public static function all_ipv6(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::ipv6($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string|null> $value
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_ipv6(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::ipv6($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-param string|null $value
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_email(mixed $value, string $message = ''): mixed
    {
        null === $value || static::email($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string> $value
     *
     * @throws InvalidArgumentException
     */
    public static function all_email(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::email($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string|null> $value
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_email(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::email($entry, $message);
        }
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function null_or_unique_values(mixed $values, string $message = ''): mixed
    {
        null === $values || static::unique_values($values, $message);
        return $values;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_unique_values(mixed $values, string $message = ''): mixed
    {
        static::is_iterable($values);
        foreach ($values as $entry) {
            static::unique_values($entry, $message);
        }
        return $values;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_null_or_unique_values(mixed $values, string $message = ''): mixed
    {
        static::is_iterable($values);
        foreach ($values as $entry) {
            null === $entry || static::unique_values($entry, $message);
        }
        return $values;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function null_or_eq(mixed $value, mixed $expect, string $message = ''): mixed
    {
        null === $value || static::eq($value, $expect, $message);
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_eq(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::eq($entry, $expect, $message);
        }
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_null_or_eq(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::eq($entry, $expect, $message);
        }
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function null_or_not_eq(mixed $value, mixed $expect, string $message = ''): mixed
    {
        null === $value || static::not_eq($value, $expect, $message);
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_not_eq(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::not_eq($entry, $expect, $message);
        }
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_null_or_not_eq(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::not_eq($entry, $expect, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_same(mixed $value, mixed $expect, string $message = ''): mixed
    {
        null === $value || static::same($value, $expect, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_same(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::same($entry, $expect, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_same(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::same($entry, $expect, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_not_same(mixed $value, mixed $expect, string $message = ''): mixed
    {
        null === $value || static::not_same($value, $expect, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_not_same(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::not_same($entry, $expect, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_not_same(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::not_same($entry, $expect, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_greater_than(mixed $value, mixed $limit, string $message = ''): mixed
    {
        null === $value || static::greater_than($value, $limit, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_greater_than(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::greater_than($entry, $limit, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_greater_than(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::greater_than($entry, $limit, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_greater_than_eq(mixed $value, mixed $limit, string $message = ''): mixed
    {
        null === $value || static::greater_than_eq($value, $limit, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_greater_than_eq(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::greater_than_eq($entry, $limit, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_greater_than_eq(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::greater_than_eq($entry, $limit, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_less_than(mixed $value, mixed $limit, string $message = ''): mixed
    {
        null === $value || static::less_than($value, $limit, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_less_than(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::less_than($entry, $limit, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_less_than(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::less_than($entry, $limit, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_less_than_eq(mixed $value, mixed $limit, string $message = ''): mixed
    {
        null === $value || static::less_than_eq($value, $limit, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_less_than_eq(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::less_than_eq($entry, $limit, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_less_than_eq(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::less_than_eq($entry, $limit, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_range(mixed $value, mixed $min, mixed $max, string $message = ''): mixed
    {
        null === $value || static::range($value, $min, $max, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_range(mixed $value, mixed $min, mixed $max, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::range($entry, $min, $max, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_range(mixed $value, mixed $min, mixed $max, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::range($entry, $min, $max, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_one_of(mixed $value, mixed $values, string $message = ''): mixed
    {
        null === $value || static::one_of($value, $values, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_one_of(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::one_of($entry, $values, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_one_of(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::one_of($entry, $values, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_in_array(mixed $value, mixed $values, string $message = ''): mixed
    {
        null === $value || static::in_array($value, $values, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_in_array(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::in_array($entry, $values, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_in_array(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::in_array($entry, $values, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_not_one_of(mixed $value, mixed $values, string $message = ''): mixed
    {
        null === $value || static::not_one_of($value, $values, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_not_one_of(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::not_one_of($entry, $values, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_not_one_of(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::not_one_of($entry, $values, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_not_in_array(mixed $value, mixed $values, string $message = ''): mixed
    {
        null === $value || static::not_in_array($value, $values, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_not_in_array(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::not_in_array($entry, $values, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_not_in_array(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::not_in_array($entry, $values, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_contains(mixed $value, mixed $sub_string, string $message = ''): mixed
    {
        null === $value || static::contains($value, $sub_string, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_contains(mixed $value, mixed $sub_string, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::contains($entry, $sub_string, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_contains(mixed $value, mixed $sub_string, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::contains($entry, $sub_string, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_not_contains(mixed $value, mixed $sub_string, string $message = ''): mixed
    {
        null === $value || static::not_contains($value, $sub_string, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_not_contains(mixed $value, mixed $sub_string, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::not_contains($entry, $sub_string, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_not_contains(mixed $value, mixed $sub_string, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::not_contains($entry, $sub_string, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_not_whitespace_only(mixed $value, string $message = ''): mixed
    {
        null === $value || static::not_whitespace_only($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_not_whitespace_only(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::not_whitespace_only($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_not_whitespace_only(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::not_whitespace_only($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_starts_with(mixed $value, mixed $prefix, string $message = ''): mixed
    {
        null === $value || static::starts_with($value, $prefix, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_starts_with(mixed $value, mixed $prefix, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::starts_with($entry, $prefix, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_starts_with(mixed $value, mixed $prefix, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::starts_with($entry, $prefix, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_not_starts_with(mixed $value, mixed $prefix, string $message = ''): mixed
    {
        null === $value || static::not_starts_with($value, $prefix, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_not_starts_with(mixed $value, mixed $prefix, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::not_starts_with($entry, $prefix, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_not_starts_with(mixed $value, mixed $prefix, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::not_starts_with($entry, $prefix, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_starts_with_letter(mixed $value, string $message = ''): mixed
    {
        null === $value || static::starts_with_letter($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_starts_with_letter(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::starts_with_letter($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_starts_with_letter(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::starts_with_letter($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_ends_with(mixed $value, mixed $suffix, string $message = ''): mixed
    {
        null === $value || static::ends_with($value, $suffix, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_ends_with(mixed $value, mixed $suffix, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::ends_with($entry, $suffix, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_ends_with(mixed $value, mixed $suffix, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::ends_with($entry, $suffix, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_not_ends_with(mixed $value, mixed $suffix, string $message = ''): mixed
    {
        null === $value || static::not_ends_with($value, $suffix, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_not_ends_with(mixed $value, mixed $suffix, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::not_ends_with($entry, $suffix, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_not_ends_with(mixed $value, mixed $suffix, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::not_ends_with($entry, $suffix, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_regex(mixed $value, mixed $pattern, string $message = ''): mixed
    {
        null === $value || static::regex($value, $pattern, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_regex(mixed $value, mixed $pattern, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::regex($entry, $pattern, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_regex(mixed $value, mixed $pattern, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::regex($entry, $pattern, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_not_regex(mixed $value, mixed $pattern, string $message = ''): mixed
    {
        null === $value || static::not_regex($value, $pattern, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_not_regex(mixed $value, mixed $pattern, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::not_regex($entry, $pattern, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_not_regex(mixed $value, mixed $pattern, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::not_regex($entry, $pattern, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_unicode_letters(mixed $value, string $message = ''): mixed
    {
        null === $value || static::unicode_letters($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_unicode_letters(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::unicode_letters($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_unicode_letters(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::unicode_letters($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_alpha(mixed $value, string $message = ''): mixed
    {
        null === $value || static::alpha($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_alpha(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::alpha($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_alpha(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::alpha($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_digits(mixed $value, string $message = ''): mixed
    {
        null === $value || static::digits($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_digits(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::digits($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_digits(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::digits($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_alnum(mixed $value, string $message = ''): mixed
    {
        null === $value || static::alnum($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_alnum(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::alnum($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_alnum(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::alnum($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert lowercase-string|null $value
     *
     * @return lowercase-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_lower(mixed $value, string $message = ''): mixed
    {
        null === $value || static::lower($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<lowercase-string> $value
     *
     * @return iterable<lowercase-string>
     *
     * @throws InvalidArgumentException
     */
    public static function all_lower(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::lower($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<lowercase-string|null> $value
     *
     * @return iterable<lowercase-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_lower(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::lower($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_upper(mixed $value, string $message = ''): mixed
    {
        null === $value || static::upper($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_upper(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::upper($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<!lowercase-string|null> $value
     *
     * @return iterable<!lowercase-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_upper(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::upper($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_length(mixed $value, mixed $length, string $message = ''): mixed
    {
        null === $value || static::length($value, $length, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_length(mixed $value, mixed $length, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::length($entry, $length, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_length(mixed $value, mixed $length, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::length($entry, $length, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_min_length(mixed $value, mixed $min, string $message = ''): mixed
    {
        null === $value || static::min_length($value, $min, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_min_length(mixed $value, mixed $min, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::min_length($entry, $min, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_min_length(mixed $value, mixed $min, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::min_length($entry, $min, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_max_length(mixed $value, mixed $max, string $message = ''): mixed
    {
        null === $value || static::max_length($value, $max, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_max_length(mixed $value, mixed $max, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::max_length($entry, $max, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_max_length(mixed $value, mixed $max, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::max_length($entry, $max, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_length_between(mixed $value, mixed $min, mixed $max, string $message = ''): mixed
    {
        null === $value || static::length_between($value, $min, $max, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_length_between(mixed $value, mixed $min, mixed $max, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::length_between($entry, $min, $max, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_length_between(mixed $value, mixed $min, mixed $max, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::length_between($entry, $min, $max, $message);
        }
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function null_or_file_exists(mixed $value, string $message = ''): mixed
    {
        null === $value || static::file_exists($value, $message);
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_file_exists(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::file_exists($entry, $message);
        }
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_null_or_file_exists(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::file_exists($entry, $message);
        }
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function null_or_file(mixed $value, string $message = ''): mixed
    {
        null === $value || static::file($value, $message);
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_file(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::file($entry, $message);
        }
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_null_or_file(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::file($entry, $message);
        }
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function null_or_directory(mixed $value, string $message = ''): mixed
    {
        null === $value || static::directory($value, $message);
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_directory(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::directory($entry, $message);
        }
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_null_or_directory(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::directory($entry, $message);
        }
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function null_or_readable(mixed $value, string $message = ''): mixed
    {
        null === $value || static::readable($value, $message);
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_readable(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::readable($entry, $message);
        }
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_null_or_readable(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::readable($entry, $message);
        }
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function null_or_writable(mixed $value, string $message = ''): mixed
    {
        null === $value || static::writable($value, $message);
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_writable(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::writable($entry, $message);
        }
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_null_or_writable(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::writable($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-assert class-string|null $value
     *
     * @return class-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_class_exists(mixed $value, string $message = ''): mixed
    {
        null === $value || static::class_exists($value, $message);
        return $value;
    }
    /**
     * @psalm-assert iterable<class-string> $value
     *
     * @return iterable<class-string>
     *
     * @throws InvalidArgumentException
     */
    public static function all_class_exists(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::class_exists($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-assert iterable<class-string|null> $value
     *
     * @return iterable<class-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_class_exists(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::class_exists($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @template ExpectedType of object
     * @psalm-assert class-string<ExpectedType>|null $value
     *
     * @param class-string<ExpectedType> $class
     *
     * @return class-string<ExpectedType>|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_subclass_of(mixed $value, mixed $class, string $message = ''): mixed
    {
        null === $value || static::subclass_of($value, $class, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @template ExpectedType of object
     * @psalm-assert iterable<class-string<ExpectedType>> $value
     *
     * @param class-string<ExpectedType> $class
     *
     * @return iterable<class-string<ExpectedType>>
     *
     * @throws InvalidArgumentException
     */
    public static function all_subclass_of(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::subclass_of($entry, $class, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @template ExpectedType of object
     * @psalm-assert iterable<class-string<ExpectedType>|null> $value
     *
     * @param class-string<ExpectedType> $class
     *
     * @return iterable<class-string<ExpectedType>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_subclass_of(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::subclass_of($entry, $class, $message);
        }
        return $value;
    }
    /**
     * @psalm-assert class-string|null $value
     *
     * @return class-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_interface_exists(mixed $value, string $message = ''): mixed
    {
        null === $value || static::interface_exists($value, $message);
        return $value;
    }
    /**
     * @psalm-assert iterable<class-string> $value
     *
     * @return iterable<class-string>
     *
     * @throws InvalidArgumentException
     */
    public static function all_interface_exists(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::interface_exists($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-assert iterable<class-string|null> $value
     *
     * @return iterable<class-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_interface_exists(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::interface_exists($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @template ExpectedType of object
     * @psalm-assert class-string<ExpectedType>|ExpectedType|null $value
     *
     * @param class-string<ExpectedType>|ExpectedType|null $value
     * @param class-string<ExpectedType>                   $interface
     *
     * @return class-string<ExpectedType>|ExpectedType|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_implements_interface(mixed $value, mixed $interface, string $message = ''): mixed
    {
        null === $value || static::implements_interface($value, $interface, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @template ExpectedType of object
     * @psalm-assert iterable<class-string<ExpectedType>|ExpectedType> $value
     *
     * @param iterable<class-string<ExpectedType>|ExpectedType> $value
     * @param class-string<ExpectedType>                        $interface
     *
     * @return iterable<class-string<ExpectedType>|ExpectedType>
     *
     * @throws InvalidArgumentException
     */
    public static function all_implements_interface(mixed $value, mixed $interface, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::implements_interface($entry, $interface, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @template ExpectedType of object
     * @psalm-assert iterable<class-string<ExpectedType>|ExpectedType|null> $value
     *
     * @param iterable<class-string<ExpectedType>|ExpectedType|null> $value
     * @param class-string<ExpectedType>                             $interface
     *
     * @return iterable<class-string<ExpectedType>|ExpectedType|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_implements_interface(mixed $value, mixed $interface, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::implements_interface($entry, $interface, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @param string|object|null $classOrObject
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_property_exists(mixed $class_or_object, mixed $property, string $message = ''): mixed
    {
        null === $class_or_object || static::property_exists($class_or_object, $property, $message);
        return $class_or_object;
    }
    /**
     * @psalm-pure
     *
     * @param iterable<string|object> $classOrObject
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_property_exists(mixed $class_or_object, mixed $property, string $message = ''): mixed
    {
        static::is_iterable($class_or_object);
        foreach ($class_or_object as $entry) {
            static::property_exists($entry, $property, $message);
        }
        return $class_or_object;
    }
    /**
     * @psalm-pure
     *
     * @param iterable<string|object|null> $classOrObject
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_property_exists(mixed $class_or_object, mixed $property, string $message = ''): mixed
    {
        static::is_iterable($class_or_object);
        foreach ($class_or_object as $entry) {
            null === $entry || static::property_exists($entry, $property, $message);
        }
        return $class_or_object;
    }
    /**
     * @psalm-pure
     *
     * @param string|object|null $classOrObject
     *
     * @psalm-param class-string|object|null $classOrObject
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_property_not_exists(mixed $class_or_object, mixed $property, string $message = ''): mixed
    {
        null === $class_or_object || static::property_not_exists($class_or_object, $property, $message);
        return $class_or_object;
    }
    /**
     * @psalm-pure
     *
     * @param iterable<string|object> $classOrObject
     *
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_property_not_exists(mixed $class_or_object, mixed $property, string $message = ''): mixed
    {
        static::is_iterable($class_or_object);
        foreach ($class_or_object as $entry) {
            static::property_not_exists($entry, $property, $message);
        }
        return $class_or_object;
    }
    /**
     * @psalm-pure
     *
     * @param iterable<string|object|null> $classOrObject
     *
     * @psalm-param iterable<class-string|object|null> $classOrObject
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_property_not_exists(mixed $class_or_object, mixed $property, string $message = ''): mixed
    {
        static::is_iterable($class_or_object);
        foreach ($class_or_object as $entry) {
            null === $entry || static::property_not_exists($entry, $property, $message);
        }
        return $class_or_object;
    }
    /**
     * @psalm-pure
     *
     * @param string|object|null $classOrObject
     *
     * @psalm-param class-string|object|null $classOrObject
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_method_exists(mixed $class_or_object, mixed $method, string $message = ''): mixed
    {
        null === $class_or_object || static::method_exists($class_or_object, $method, $message);
        return $class_or_object;
    }
    /**
     * @psalm-pure
     *
     * @param iterable<string|object> $classOrObject
     *
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_method_exists(mixed $class_or_object, mixed $method, string $message = ''): mixed
    {
        static::is_iterable($class_or_object);
        foreach ($class_or_object as $entry) {
            static::method_exists($entry, $method, $message);
        }
        return $class_or_object;
    }
    /**
     * @psalm-pure
     *
     * @param iterable<string|object|null> $classOrObject
     *
     * @psalm-param iterable<class-string|object|null> $classOrObject
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_method_exists(mixed $class_or_object, mixed $method, string $message = ''): mixed
    {
        static::is_iterable($class_or_object);
        foreach ($class_or_object as $entry) {
            null === $entry || static::method_exists($entry, $method, $message);
        }
        return $class_or_object;
    }
    /**
     * @psalm-pure
     *
     * @param string|object|null $classOrObject
     *
     * @psalm-param class-string|object|null $classOrObject
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_method_not_exists(mixed $class_or_object, mixed $method, string $message = ''): mixed
    {
        null === $class_or_object || static::method_not_exists($class_or_object, $method, $message);
        return $class_or_object;
    }
    /**
     * @psalm-pure
     *
     * @param iterable<string|object> $classOrObject
     *
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_method_not_exists(mixed $class_or_object, mixed $method, string $message = ''): mixed
    {
        static::is_iterable($class_or_object);
        foreach ($class_or_object as $entry) {
            static::method_not_exists($entry, $method, $message);
        }
        return $class_or_object;
    }
    /**
     * @psalm-pure
     *
     * @param iterable<string|object|null> $classOrObject
     *
     * @psalm-param iterable<class-string|object|null> $classOrObject
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_method_not_exists(mixed $class_or_object, mixed $method, string $message = ''): mixed
    {
        static::is_iterable($class_or_object);
        foreach ($class_or_object as $entry) {
            null === $entry || static::method_not_exists($entry, $method, $message);
        }
        return $class_or_object;
    }
    /**
     * @psalm-pure
     *
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_key_exists(mixed $array, string|int $key, string $message = ''): mixed
    {
        null === $array || static::key_exists($array, $key, $message);
        return $array;
    }
    /**
     * @psalm-pure
     *
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_key_exists(mixed $array, string|int $key, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            static::key_exists($entry, $key, $message);
        }
        return $array;
    }
    /**
     * @psalm-pure
     *
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_key_exists(mixed $array, string|int $key, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            null === $entry || static::key_exists($entry, $key, $message);
        }
        return $array;
    }
    /**
     * @psalm-pure
     *
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_key_not_exists(mixed $array, string|int $key, string $message = ''): mixed
    {
        null === $array || static::key_not_exists($array, $key, $message);
        return $array;
    }
    /**
     * @psalm-pure
     *
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_key_not_exists(mixed $array, string|int $key, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            static::key_not_exists($entry, $key, $message);
        }
        return $array;
    }
    /**
     * @psalm-pure
     *
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_key_not_exists(mixed $array, string|int $key, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            null === $entry || static::key_not_exists($entry, $key, $message);
        }
        return $array;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert array-key|null $value
     *
     * @return array-key|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_valid_array_key(mixed $value, string $message = ''): mixed
    {
        null === $value || static::valid_array_key($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array-key> $value
     *
     * @return iterable<array-key>
     *
     * @throws InvalidArgumentException
     */
    public static function all_valid_array_key(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::valid_array_key($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array-key|null> $value
     *
     * @return iterable<array-key|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_valid_array_key(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::valid_array_key($entry, $message);
        }
        return $value;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function null_or_count(mixed $array, mixed $number, string $message = ''): mixed
    {
        null === $array || static::count($array, $number, $message);
        return $array;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_count(mixed $array, mixed $number, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            static::count($entry, $number, $message);
        }
        return $array;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_null_or_count(mixed $array, mixed $number, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            null === $entry || static::count($entry, $number, $message);
        }
        return $array;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function null_or_min_count(mixed $array, mixed $min, string $message = ''): mixed
    {
        null === $array || static::min_count($array, $min, $message);
        return $array;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_min_count(mixed $array, mixed $min, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            static::min_count($entry, $min, $message);
        }
        return $array;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_null_or_min_count(mixed $array, mixed $min, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            null === $entry || static::min_count($entry, $min, $message);
        }
        return $array;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function null_or_max_count(mixed $array, mixed $max, string $message = ''): mixed
    {
        null === $array || static::max_count($array, $max, $message);
        return $array;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_max_count(mixed $array, mixed $max, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            static::max_count($entry, $max, $message);
        }
        return $array;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_null_or_max_count(mixed $array, mixed $max, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            null === $entry || static::max_count($entry, $max, $message);
        }
        return $array;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function null_or_count_between(mixed $array, mixed $min, mixed $max, string $message = ''): mixed
    {
        null === $array || static::count_between($array, $min, $max, $message);
        return $array;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_count_between(mixed $array, mixed $min, mixed $max, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            static::count_between($entry, $min, $max, $message);
        }
        return $array;
    }
    /**
     * @throws InvalidArgumentException
     */
    public static function all_null_or_count_between(mixed $array, mixed $min, mixed $max, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            null === $entry || static::count_between($entry, $min, $max, $message);
        }
        return $array;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert list<mixed>|null $array
     *
     * @return list<mixed>|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_list(mixed $array, string $message = ''): mixed
    {
        null === $array || static::is_list($array, $message);
        return $array;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<list<mixed>> $array
     *
     * @return iterable<list<mixed>>
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_list(mixed $array, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            static::is_list($entry, $message);
        }
        return $array;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<list<mixed>|null> $array
     *
     * @return iterable<list<mixed>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_list(mixed $array, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            null === $entry || static::is_list($entry, $message);
        }
        return $array;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert non-empty-list<mixed>|null $array
     *
     * @return non-empty-list<mixed>|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_non_empty_list(mixed $array, string $message = ''): mixed
    {
        null === $array || static::is_non_empty_list($array, $message);
        return $array;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-empty-list<mixed>> $array
     *
     * @return iterable<non-empty-list<mixed>>
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_non_empty_list(mixed $array, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            static::is_non_empty_list($entry, $message);
        }
        return $array;
    }
    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-empty-list<mixed>|null> $array
     *
     * @return iterable<non-empty-list<mixed>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_non_empty_list(mixed $array, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            null === $entry || static::is_non_empty_list($entry, $message);
        }
        return $array;
    }
    /**
     * @psalm-pure
     *
     * @template T
     * @psalm-assert array<string, T>|null $array
     *
     * @param mixed|array<array-key, T>|null $array
     *
     * @return array<string, T>|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_map(mixed $array, string $message = ''): mixed
    {
        null === $array || static::is_map($array, $message);
        return $array;
    }
    /**
     * @psalm-pure
     *
     * @template T
     * @psalm-assert iterable<array<string, T>> $array
     *
     * @param iterable<mixed|array<array-key, T>> $array
     *
     * @return iterable<array<string, T>>
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_map(mixed $array, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            static::is_map($entry, $message);
        }
        return $array;
    }
    /**
     * @psalm-pure
     *
     * @template T
     * @psalm-assert iterable<array<string, T>|null> $array
     *
     * @param iterable<mixed|array<array-key, T>|null> $array
     *
     * @return iterable<array<string, T>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_map(mixed $array, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            null === $entry || static::is_map($entry, $message);
        }
        return $array;
    }
    /**
     * @psalm-assert callable|null $callable
     *
     * @param Closure|callable|null $callable
     *
     * @return callable|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_static(mixed $callable, string $message = ''): mixed
    {
        null === $callable || static::is_static($callable, $message);
        return $callable;
    }
    /**
     * @psalm-assert iterable<callable> $callable
     *
     * @param iterable<Closure|callable> $callable
     *
     * @return iterable<callable>
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_static(mixed $callable, string $message = ''): mixed
    {
        static::is_iterable($callable);
        foreach ($callable as $entry) {
            static::is_static($entry, $message);
        }
        return $callable;
    }
    /**
     * @psalm-assert iterable<callable|null> $callable
     *
     * @param iterable<Closure|callable|null> $callable
     *
     * @return iterable<callable|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_static(mixed $callable, string $message = ''): mixed
    {
        static::is_iterable($callable);
        foreach ($callable as $entry) {
            null === $entry || static::is_static($entry, $message);
        }
        return $callable;
    }
    /**
     * @psalm-assert callable|null $callable
     *
     * @param Closure|callable|null $callable
     *
     * @return callable|null
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_not_static(mixed $callable, string $message = ''): mixed
    {
        null === $callable || static::not_static($callable, $message);
        return $callable;
    }
    /**
     * @psalm-assert iterable<callable> $callable
     *
     * @param iterable<Closure|callable> $callable
     *
     * @return iterable<callable>
     *
     * @throws InvalidArgumentException
     */
    public static function all_not_static(mixed $callable, string $message = ''): mixed
    {
        static::is_iterable($callable);
        foreach ($callable as $entry) {
            static::not_static($entry, $message);
        }
        return $callable;
    }
    /**
     * @psalm-assert iterable<callable|null> $callable
     *
     * @param iterable<Closure|callable|null> $callable
     *
     * @return iterable<callable|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_not_static(mixed $callable, string $message = ''): mixed
    {
        static::is_iterable($callable);
        foreach ($callable as $entry) {
            null === $entry || static::not_static($entry, $message);
        }
        return $callable;
    }
    /**
     * @psalm-pure
     *
     * @template T
     *
     * @param array<string, T>|null $array
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_is_non_empty_map(mixed $array, string $message = ''): mixed
    {
        null === $array || static::is_non_empty_map($array, $message);
        return $array;
    }
    /**
     * @psalm-pure
     *
     * @template T
     *
     * @param iterable<array<string, T>> $array
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_is_non_empty_map(mixed $array, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            static::is_non_empty_map($entry, $message);
        }
        return $array;
    }
    /**
     * @psalm-pure
     *
     * @template T
     * @psalm-assert iterable<array<string, T>|null> $array
     * @psalm-assert iterable<!empty|null> $array
     *
     * @param iterable<array<string, T>|null> $array
     *
     * @return iterable<!empty|null>
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_is_non_empty_map(mixed $array, string $message = ''): mixed
    {
        static::is_iterable($array);
        foreach ($array as $entry) {
            null === $entry || static::is_non_empty_map($entry, $message);
        }
        return $array;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_uuid(mixed $value, string $message = ''): mixed
    {
        null === $value || static::uuid($value, $message);
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_uuid(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            static::uuid($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-pure
     *
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_uuid(mixed $value, string $message = ''): iterable
    {
        static::is_iterable($value);
        foreach ($value as $entry) {
            null === $entry || static::uuid($entry, $message);
        }
        return $value;
    }
    /**
     * @psalm-param class-string<Throwable> $class
     *
     * @throws InvalidArgumentException
     */
    public static function null_or_throws(mixed $expression, string $class = 'Throwable', string $message = ''): mixed
    {
        null === $expression || static::throws($expression, $class, $message);
        return $expression;
    }
    /**
     * @psalm-param class-string<Throwable> $class
     *
     * @throws InvalidArgumentException
     */
    public static function all_throws(mixed $expression, string $class = 'Throwable', string $message = ''): mixed
    {
        static::is_iterable($expression);
        foreach ($expression as $entry) {
            static::throws($entry, $class, $message);
        }
        return $expression;
    }
    /**
     * @psalm-param class-string<Throwable> $class
     *
     * @throws InvalidArgumentException
     */
    public static function all_null_or_throws(mixed $expression, string $class = 'Throwable', string $message = ''): mixed
    {
        static::is_iterable($expression);
        foreach ($expression as $entry) {
            null === $entry || static::throws($entry, $class, $message);
        }
        return $expression;
    }
}