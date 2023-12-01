<?php

/**
 * Class InvertedTriangleGenerator
 * Generates an inverted triangle pattern.
 */
class InvertedTriangleGenerator
{
    /**
     * Generate an inverted triangle pattern.
     *
     * @param int $height  The height of the inverted triangle.
     */
    public function generateInvertedTriangle($height)
    {
        if ($height <= 0) {
            echo "Invalid height. Please provide a positive integer.\n";
            return;
        }

        for ($i = $height; $i >= 1; $i--) {
            $spaces = str_repeat(' ', $height - $i);
            $stars = str_repeat('*', 2 * $i - 1);

            echo $spaces . $stars . "\n";
        }
    }
}

// Example usage:
$invertedTriangleGenerator = new InvertedTriangleGenerator();
$height = 5; // You can change the height as needed

echo "Inverted Triangle Pattern:\n";
$invertedTriangleGenerator->generateInvertedTriangle($height);
