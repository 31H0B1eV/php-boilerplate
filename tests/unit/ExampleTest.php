<?php
namespace App\Unit;

use PHPUnit\Framework\TestCase;
use App\Example;

class ExampleTest extends TestCase
{
    public function testItWorks()
    {
    	$example = new Example();

        $this->assertTrue($example->success());
    }
}