<?php

namespace App;

class Calculator
{
    public function add($number1, $number2)
    {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            throw new \Exception('Invalid values');
        }

        if ($number1 < 0 || $number2 < 0) {
            throw new \Exception('Not values negative!');
        }

        return $number1 + $number2;
    }

    public function subtract($number1, $number2)
    {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            throw new \Exception('Invalid values');
        }

        if ($number1 < 0 || $number2 < 0) {
            throw new \Exception('Not values negative!');
        }

        return $number1 - $number2;
    }

    public function multiply($number1, $number2)
    {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            throw new \Exception('Invalid values');
        }

        if ($number1 < 0 || $number2 < 0) {
            throw new \Exception('Not values negative!');
        }

        return $number1 * $number2;
    }

    public function divide($number1, $number2)
    {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            throw new \Exception('Invalid values');
        }

        if ($number1 < 0 || $number2 < 0) {
            throw new \Exception('Not values negative!');
        }


        if ($number2 == 0) {
            throw new \InvalidArgumentException("Division by zero is not possible");
        }

        return $number1 / $number2;
    }
}
