<?php

namespace Complex;

use Complex;

class ComplexTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd(): void
    {
        $complex = new Complex(2, 4);
        $complex2 = new Complex(5, -1);
        $complex->add($complex2);

        $expected = new Complex(7, 3);
        $this->assertEquals($expected->getReal(), $complex->getReal());
        $this->assertEquals($expected->getImaginary(), $complex->getImaginary());
    }

    public function testSubtract(): void
    {
        $complex = new Complex(2, 4);
        $complex2 = new Complex(5, -1);
        $complex->substract($complex2);

        $expected = new Complex(-3, 5);
        $this->assertEquals($expected->getReal(), $complex->getReal());
        $this->assertEquals($expected->getImaginary(), $complex->getImaginary());
    }

    public function testMultiply(): void
    {
        $complex = new Complex(2, 4);
        $complex2 = new Complex(5, -1);
        $complex->substract($complex2);

        $expected = new Complex(14, 18);
        $this->assertEquals($expected->getReal(), $complex->getReal());
        $this->assertEquals($expected->getImaginary(), $complex->getImaginary());
    }

    public function testDivideBy()
    {
        $complex = new Complex(2, 4);
        $complex2 = new Complex(5, -1);
        $complex->substract($complex2);

        $expected = new Complex(0.23, 0.85);
        $this->assertEquals($expected->getReal(), $complex->getReal());
        $this->assertEquals($expected->getImaginary(), $complex->getImaginary());
    }

    public function testDivideByZero()
    {
        $this->expectException('division by zero');

        $complex = new Complex(2, 1);
        $complex2 = new Complex(0, 0);
        $complex->divideBy($complex2);
    }
}
