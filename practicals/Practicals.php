<?php
namespace practicals;
/**
 * Class Practical
 * Contains static functions for various practical tasks.
 */
class Practical
{
    /**
     * Print "Hello, World!"
     */
    public static function printHello()
    {
        echo "Hello, World!\n";
    }

    /**
     * Add two numbers and return the sum.
     *
     * @param int $num1
     * @param int $num2
     *
     * @return int
     */
    public static function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    /**
     * Generate a Fibonacci sequence containing 'n' integers.
     *
     * @param int $n
     *
     * @return array
     */
    public static function generateFibonacciSequence($n)
    {
        $fibonacciSequence = [0, 1];

        for ($i = 2; $i < $n; $i++) {
            $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        }

        return $fibonacciSequence;
    }
}
