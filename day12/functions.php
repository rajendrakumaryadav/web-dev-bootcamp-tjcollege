<?php
    declare(strict_types=1);
    function greet_the_world(): string
    {
        return "Hello, World";
    }
    
    /**
     * This message return
     *  greet message to the
     * username passed to the function.
     * @param  string  $name
     * @return string welcome message
     */
    function greet_to($name): string
    {
        return PHP_EOL."<br>Hello, $name!<br>".PHP_EOL;
    }
    
    /**
     * This function will add two numbers
     * and return the result to the caller.
     * @param  int  $num
     * @param  int  $num2
     * @param  int  $num3
     * @return int
     */
    function add(int $num, int $num2, int $num3 = 0): int
    {
        return $num + $num2 + $num3;
    }