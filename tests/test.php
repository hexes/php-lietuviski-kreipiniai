<?php
namespace Hexes\Tests;

use Hexes\PhpLietuviskiKreipiniai;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testToVocative()
    {
        $converter = new PhpLietuviskiKreipiniai();
        $result = $converter->toVocative('Marius');
        $this->assertEquals('Mariau', $result); // Replace with the actual expected output
    }
}