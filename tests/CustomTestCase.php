<?php

namespace Tests;

abstract class CustomTestCase extends \PHPUnit\Framework\TestCase
{
    public function assertValidEmail(string $email): void
    {
        $this->assertMatchesRegularExpression(
            '/^[^@]+@[^@]+\.[^@]+$/',
            $email,
            "Failed asserting that $email is valid"
        );
    }
}
