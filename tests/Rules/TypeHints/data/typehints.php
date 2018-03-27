<?php

function test($no_type_hint)
{
}

/**
 * @param string|null $type_hintable
 * @return string
 */
function test2($type_hintable)
{
}

/**
 * @param DateTimeInterface $type_hintable
 * @return DateTimeInterface
 */
function test3($type_hintable)
{
}

/**
 * @param DateTimeInterface[] $type_hintable
 * @return DateTimeInterface[]
 */
function test4($type_hintable)
{
}

/**
 * @param DateTimeInterface[] $type_hintable
 */
function test5(array $type_hintable): void
{
}

function test6(array $better_type_hint): array
{
}

/**
 * @param int $param
 * @return int
 */
function mismatch(?string $param): string
{
}

/**
 * @param mixed[] $any_array
 * @return mixed[]
 */
function test7(array $any_array): array
{
}

/**
 * @param array $any_array
 * @return array
 */
function test8(array $any_array): array
{
}

/**
 * @param DateTimeInterface[] $dates
 */
function test9(DateTimeInterface ...$dates): void
{
}

/**
 * @param $id
 */
function test10($id): void
{
}

/**
 * @param DateTimeInterface[] $type_hintable
 */
function test11(iterable $type_hintable): void
{
}

/**
 * @param TheCodingMachine\PHPStan\Rules\TypeHints\data\StubIterator|DateTimeInterface[] $type_hintable
 */
function test12(TheCodingMachine\PHPStan\Rules\TypeHints\data\StubIterator $type_hintable): void
{
}

/**
 * @param DateTimeImmutable[] $type_hintable
 */
function test13(ClassDoesNotExist $type_hintable): void
{
}
