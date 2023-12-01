<?php

/**
 * Class HelloWorld
 * Outputs a friendly greeting to the world.
 */
class HelloWorld
{
    /**
     * Display the "Hello, World!" message.
     */
    public function displayGreeting()
    {
        $greeting = $this->getGreeting();
        echo $greeting;
    }

    /**
     * Get the "Hello, World!" message.
     *
     * @return string
     */
    private function getGreeting()
    {
        return "Hello, World!\n";
    }
}

// Example usage:
$helloWorld = new HelloWorld();
$helloWorld->displayGreeting();
