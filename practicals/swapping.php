<?php

/**
 * Class VariableSwapper
 * Swaps the values of two variables.
 */
class VariableSwapper
{
    /**
     * Swap the values of two variables.
     *
     * @param mixed &$a  The first variable (passed by reference).
     * @param mixed &$b  The second variable (passed by reference).
     */
    public function swapVariables(&$a, &$b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
}

// Example usage:
$variableSwapper = new VariableSwapper();

$a = 10;
$b = 20;

echo "Before swapping: a = $a, b = $b\n";

$variableSwapper->swapVariables($a, $b);

echo "After swapping: a = $a, b = $b\n";
