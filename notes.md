# Things to Remember
Single Quote: ' will not interpret anything (not even escape sequences).
Double QUote: " will interpret everything.

PHP is loosely typed
* Strings can be numbers
* 0 is false

String Length:
`strlen($string);`

Type Casting:
* Integer: `$myinteger = (integer)$mystring`
* Octal: `$octalnum = 06333;`
* Hex: `$hexnum = 0x44;`

Variable Variables:
Similar to Eval, but only for variable names
```
$first = 10;
$second = 'first';
$third = 'second';

print "${second}, ${$second}, ${${$third}} \n";
// Prints: "first, 10, 10"
```

Copy by Reference
Note: Objects are always copied by reference
`$b =& $a;`

Constant
`define("CURRENT_TIME", time());`

For Case Insensitive Constants
`define("CURRENT_TIME", time(), true);`

isset for Constants
`defined("CURRENT_TIME")`

Roundabout Way to Print a Constant (constant())
```
<?php
    define("Current_Time", time(), true);
    $somevar = "CURRENT_TIME";
    print constant($somevar);
?>
```


Preset Constants
[Reference](http://www.php.net/manual/en/reserved.constants.php)

* `__FILE__` File Name
* `__LINE__` Line Number
* `__FUNCTION__` Function Name
* `__CLASS__` Class Name
* `__METHOD__` Method Name
* `M_PI` 3.1415
* `PHP_EOL` New Line Character for OS
* `PHP_OS` Grabs OS
* `DEFAULT_INCLUDE_PATH` Path for Including

XOR  
`^`

Not Equal  
`<>`

Scope Resolution  
`Person::sayhello();`  
Method of `Person`

Execution Operator  
' (Backtick)  
It's eval

Passing by Value and Reference  
`somefunc($foo, &$bar);`  
Passing with the `&` passes the value by reference. Useful. 

## Functions and Prototypes
Prototypes  
`number pow ( number base, number exp)`  
Type Name (Type Name, Type Name [, Type Name [, Type Name]])

Check if Undefined
`!isset($foo)`  
Rather than `empty($foo)`, which only checks if the value is falsy. `unset($foo)` deallocates. 

Eval and Exit
`eval()`  
Just like Javascript!  
`exit()`  
The `exit` construct terminates the script immediately  

Short-Circuit Operations
`$someVar = do_some_func() OR die("do_some_func() returned false!");`
Cannot use `||` instead of `OR` because `||` takes a higher precedence than `=`, because of that, it won't short-circuit correctly. `$someVar` will be set to `1`. This is different from JavaScript.














