<?php
    echo("Hello, World!");
?>

<?php
    print("Hello, World. Once again!!!");
?>
<?php
    /**
     *
     * This function returns hello message to the world.
     * @param  int  $x
     * @return string
     */
    function hello_world(int $x): string
    {
        // Here I am dumping $x;
        // Calculating the power of x.
        var_dump($x ** $x);
        
        # It is simple single line comment.
        return "\nHello, World!\n";
    }

?>

<?php
    /**
     * in this block I am declaring some variable then echoing it,
     * After dumping the data that is being returned from hello_world.
     * and after dumping $x data.
     */
    $x = 10;
    echo($x."\n");
    var_dump(HELLO_WORLD(10));
    var_dump($x);

?>

<?php
    echo(10 + /* adding the data */
        20);
    echo("\n");
    $message = "Hello, World!";
    echo($message);
    echo("\n");
    
    $MESSAGE = "Hello, TJ";
    echo $MESSAGE;
?>


<?php
    $global = 120;
    function local_scope(): int
    {
        $local = 10;
        echo $local;
        
        return $local;
    }
    
    function global_scope()
    {
        global $global;
        $global = local_scope();
        echo $global;
    }
    
    echo $global;
    local_scope();
    global_scope();
    echo $global;
?>

<?php
    function static_scope(): int
    {
        static $x = 10;
        $x = $x + 1; // $x += 1;
        
        return $x;
        
    }
    
    echo static_scope();
    echo "\n";
    echo static_scope();
    echo "\n";
    echo static_scope();

?>

<?php
    //    print "Hello", "World";
    echo "Hello", "World", "!";
    var_dump(print("Hello"." "."World!".PHP_EOL."HE"));
    $x = "Hello, World! Once Again";
    echo strlen($x), "\n";
    echo $x[0].PHP_EOL;
    echo str_word_count($x).PHP_EOL;
    echo strrev($x).PHP_EOL;
    echo strpos($x, "Once").PHP_EOL;
    echo strpos($x, "Again").PHP_EOL;
    var_dump(strpos($x, "M").PHP_EOL);
    
    echo str_replace("World", "Rajendra", $x).PHP_EOL;
    echo is_string($x).PHP_EOL;
    //    short -128, 127
    //    int (32 system) 2^16 -65,536  2^16-1 =65,535
    echo PHP_INT_MAX.PHP_EOL;
    echo PHP_INT_MIN.PHP_EOL;
    echo PHP_INT_SIZE.PHP_EOL;
    $a = 10.5;
    var_dump($a);
    
    $b = (int) $a;
    var_dump($b);

?>

