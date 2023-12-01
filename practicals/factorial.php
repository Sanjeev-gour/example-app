<?php

/**
 * Class FactorialCalculator
 * Calculates the factorial of a given number.
 */
class FactorialCalculator
{
    /**
     * Calculate the factorial of a given number.
     *
     * @param int $number  The number for which to calculate the factorial.
     *
     * @return int  The factorial of the given number.
     */
    public function calculateFactorial($number)
    {
        if ($number < 0) {
            // Factorial is not defined for negative numbers
            return "Undefined (Factorial not defined for negative numbers)";
        }

        if ($number === 0 || $number === 1) {
            // Factorial of 0 and 1 is 1
            return 1;
        }

        $factorial = 1;
        for ($i = 2; $i <= $number; $i++) {
            $factorial *= $i;
        }

        return $factorial;
    }
}

// Example usage:
$factorialCalculator = new FactorialCalculator();
$number = 5; // You can change the number as needed

$result = $factorialCalculator->calculateFactorial($number);

echo "Factorial of $number is: $result\n";
