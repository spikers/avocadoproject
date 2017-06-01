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

Previous Page  
`$_SERVER['HTTP_REFERER']`  
This shows what page the user came from (whether it be google or whatever).

## Time
`microtime(true);`  
It makes no sense why this grabs the microtime in a sensible format, as opposed to `microtime()` which gives `decimal number`.

strtotime()
`strtotime("22 Dec. 1979 17:30");`  
This works. Amazing! If it can't do the deed, it returns `-1`.

`str_replace()`

Date  
`date("m/d/y, h:i:s");`
`h`: Hour  
`i`: Minute  
`s`: Second  
`m`: Month
`d`: Day
`Y`: Year, 4 digit

Make Time  
`mktime(22, 30, 0, 20, 6, 2005, -1);`  
Don't try to memorize the order of parameters. Just look it up. This is great for date math.

Math
`round(numberToRound, decimalsToRound);`  
This is a nice function. I wish Javascript had it.

Random
`rand(min, max);`  
`mt_rand(min, max;`  
`mt_srand(seedNumber);`  
Okay, this is actually very cool. You can specify a random generator seed, giving a predictable random number.

Trigonometry
`sin(rads);`  
`cos(rads);`  
`tan(rads);`  
Takes radians  
`deg2rad(degs);`  
`rad2deg(rads);`
These convert.

Useful Math Functions
`abs(number);`  
`sqrt(number);`  
`hypot(number1, number2);`  
`base_convert(number, base_from, base_to);`  

Useful Math Constants
`M_PI`

Strings
Substring  
`substr(string, starting_point, length);`  
If the `length` is negative, then it'll take from the end. Example:  
`substr('hello', 0, -1);` will return  
`hell`  
`substr('hello friend', -4, -1);` will return  
`ien`

Replace  
`$string = "boba`
`str_replace("b", "c", $string);` turns into `coca`  
The order of the parameters is nonsensical. The fourth parameter counts the # of times the `b` occurs (2) in this instance. 

ASCII  
`chr(letter);` returns the ASCII #  
`ord(number);` returns the ASCII letter

Measuring Strings  
`strlen(string);` gives you the length.  
`charcount(string);` gives you an assoc. array with # of times each letter used.  
`str_word_count(string);` counts the # of words. This seems excessive.  

Finding Strings
`strpos(needle, haystack, int offset);` Finding needle in haystack.  
`stripos(needle, haystack, int offset);` Case insensitive version.  

`strstr(haystack, needle);` Finding from the first occurence of the needle to the end of the string. Including the needle. The parameter order is nonsensical.  
`stristr(haystack, needle)` Case insensitive variant.

Trimming Whitespace  
`trim(string [, chars_to_remove]);` Cuts out white space. 

Word Wrap  
`wordwrap($text [, width, [, delimiter [, cut_or_not]]])` Force a line break  

PHP can:  
Hash your stuff  
Change Case  
Strip slashes and escape quotes and slashes  
Pretty Print Numbers (Much like the Locale in JS)  
Strip Tags  
Compare 2 Strings  
Pad Strings with User-Defined Characters
`printf`  
Parse Query Strings using `parse_str()`  
Do Regex  
Check whether a function exists using a string  
Handle extension management using `get_extension_funcs();`  
Pause script execution without Async nonsense  
Borrow Unix commands in PHP  
A bunch of the system stuff went over my head  

Return by Reference  
`$val =& square1(10);`  

Default Parameters Support

`func_get_arg()` is like arguments in JS.  

Variables are not globally scoped automatically. Use `GLOBALS[]` array to declare global variables

Variable Functions  
Can be called like this:  
```
<?php
    $func = "sqrt";
    print $func(49);
?>
```

Supports Callback Functions  

Arrays  
`$myarray = ["Apples", "Oranges", "Pears"];`  
Similar to JS.

Associate Arrays  
`$myarray = array("a"=>"Apples", "b"=>"Oranges", "c"=>"Pears");`  
Floating point numbers cannot be keys without being parsed as a string.  

Looping Through Arrays  
`foreach($array as $val);`  
The `$array` is looped. `$val` is the values.  There's no way to get the keys.

```
foreach ($array as $key => $val) {
    print "$key = $val\n";
}
```
I guess.  

```
while (list($var, $val) = each($array)) {
    print "$var is $val\n";
}
```
I'll need to read about this later. I have no idea what this does.  

Array Operations  
`array_diff(arr1, arr2);`
`array_intersect(arr1, arr2);`  
`array_merge(arr1, arr2);`  
`array_unique(arr1);`
`array_filter(arr1, callback);`
`extract(arr1);` Confusingly turns keys into variables.  
`in_array(needle, haystack);`  
`array_pop();`  
`array_push();`  
`array_shift();`  
`array_unshift();`  
`array_flip()` Swaps keys and values  

Sorting  
There's 4 ways to sort, read about it. 

`array_keys();`  
`array_values();`  
`array_shuffle();`  
`array_rand();`  
`range(start, end, step);` JS doesn't have this. This is very useful.  

Array Cursor  
`reset(array);`  
`end(array);`  
`next(array);`  
`prev(array);`  

Swapping keys for values is ridiculous.  
`print "This is from an array: {$myarray['foo']}\n";`  

Converting Arrays for Output  
`serialize();`  
`unserialize();`  
`urlencode();`  
`urldecode();`  


How to Set Up URL Routing (Apache)

* Create .htaccess File.  
      `Options -MultiViews`  
      `RewriteEngine On`  
      `RewriteCond %{REQUEST_FILENAME} !-f`  
      `RewriteRule ^ index.php [QSA,L]` 
*  Grab the URI from $_SERVER['REQUEST_URI']
*  Handle the routes after getting the URI

I set up my index.php to be my routing home. This may or may not be a good idea.


