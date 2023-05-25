$globalVariable = "I am a global variable";

function functionOne() {
    global $globalVariable;
    $localVariable = "I am a local variable";
    
    echo "Function One: " . $globalVariable . "\n";
    echo "Function One: " . $localVariable . "\n";
}

function functionTwo() {
    global $globalVariable;
    static $staticVariable = 1;
    
    echo "Function Two: " . $globalVariable . "\n";
    echo "Function Two: " . $staticVariable . "\n";
    
    $staticVariable++;
}

functionOne();   // Output: Function One: I am a global variable
                //         Function One: I am a local variable

functionTwo();   // Output: Function Two: I am a global variable
                //         Function Two: 1

functionTwo();   // Output: Function Two: I am a global variable
                //         Function Two: 2
