<?php

namespace Faker\Test\Provider\az_AZ;

use Faker\Provider\az_AZ\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{

    public function testFin(): void
    {
        for ($i = 0; $i < 100; ++$i) {
            $fin = $this->faker->fin;

            self::assertTrue($this->faker->finIsValid($fin));
        }
    }

    public function finValidatorProvider(): array
    {
        return [
            ['A1BCFDJ', true],
            ['BJ80S2F', true],
            ['EVU98RT', true],
            ['M8SYE3C', true],
            ['RAM3LK1', true],
            ['AHI1234', false],
            ['RIHSDIW', false],
        ];
    }

    /**
     * @dataProvider finValidatorProvider
     */
    public function testIsValid(string $fin, $isValid): void
    {
        self::assertSame($isValid, $this->faker->finIsValid($fin));
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
