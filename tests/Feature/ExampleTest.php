<?php

namespace Tests\Feature;

use Tests\CustomTestCase;

class ExampleTest extends CustomTestCase
{
    public function test_email_validation()
    {
        $this->assertValidEmail('test@example.com');
    }
}
