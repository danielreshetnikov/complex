<?php

class Complex
{
    public float $real;
    public float $imaginary;

    public function __construct(float $real = 0.0, float $imaginary = 0.0)
    {
        $this->real      = $real;
        $this->imaginary = $imaginary;
    }

    public function isReal(): bool
    {
        return 0.0 === $this->imaginary;
    }

    public function isComplex(): bool
    {
        return !$this->isReal();
    }

    public function isZero(): bool
    {
        return $this->real === 0 && $this->imaginary === 0;
    }

    public function add(Complex $argument): Complex
    {
        $this->real      += $argument->real;
        $this->imaginary += $argument->imaginary;

        return $this;
    }

    public function substract(Complex $argument): Complex
    {
        $this->real      -= $argument->real;
        $this->imaginary -= $argument->imaginary;

        return $this;
    }

    public function multiply(Complex $argument): Complex
    {
        $real      = ($this->real * $argument->real) - ($this->imaginary * $argument->imaginary);
        $imaginary = ($this->real * $argument->imaginary) + ($this->imaginary * $argument->real);

        $this->real      = $real;
        $this->imaginary = $imaginary;

        return $this;
    }

    public function divideBy(Complex $argument): Complex
    {
        if ($argument->isZero()) {
            throw new Exception('division by zero');
        }

        $delta1 = ($this->real * $argument->real) + ($this->imaginary * $argument->imaginary);
        $delta2 = ($this->imaginary * $argument->real) - ($this->real * $argument->imaginary);
        $delta3 = ($argument->real * $argument->real) + ($argument->imaginary * $argument->imaginary);

        $this->real      = $delta1 / $delta3;
        $this->imaginary = $delta2 / $delta3;

        return $this;
    }
}
