<?php

/**
 * Class FibonacciGenerator
 * Generates the Fibonacci series up to a specified limit.
 */
class FibonacciGenerator
{
    /**
     * Generate the Fibonacci series up to a specified limit.
     *
     * @param int $limit  The upper limit for the Fibonacci series.
     *
     * @return array  The Fibonacci series.
     */
    public function generateSeries($limit)
    {
        $fibonacciSeries = [0, 1];

        while (($nextTerm = end($fibonacciSeries) + prev($fibonacciSeries)) <= $limit) {
            $fibonacciSeries[] = $nextTerm;
        }

        return $fibonacciSeries;
    }
}

// Example usage:
$fibonacciGenerator = new FibonacciGenerator();
$limit = 50; // You can change the limit as needed

$fibonacciSeries = $fibonacciGenerator->generateSeries($limit);

echo "Fibonacci Series up to $limit:\n";
echo implode(', ', $fibonacciSeries) . "\n";
