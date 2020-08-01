# PHP-Project
This is a small project developed in PHP, where it is implemented:  Object-oriented programming. Connection to databases. We will use PHP standards. We will implement third-party libraries. We will structure our project in a very professional way. We will use PHP version 7.2.

## What is PHP?
PHP is a high-level general-purpose programming language that was specially designed for the development of web applications.

It is interpreted, cross-platform, open source, which has been very popular in recent years.

What is NOT PHP?

It is not a compiled language, so you will always have to carry your code and your interpreter together.
It is not designed to make desktop applications.
To work with PHP we will install a development environment called XAMPP, it is not an environment designed for production.

## PHP SYNTAX
Whenever we use PHP we will use the following: <? Php?> Everything we put inside this will be what the server will interpret as php code, whatever is outside it will ignore it.

To access it we will do it localhost: 8080 / hello.php because the server opens the index file by default and our new file is called hello.php.

If we want to write php code in our HTML view we will have to change the file extension to .php because our server is configured to interpret only PHP files. Only the parts within <? Php?> They will be interpreted and their source code will not be visible from the browser.

All code statements are separated by a; (semicolon).

## Variable data types and strings
A variable can be a small box in which you can store a value and it can be used to perform an operation.

To declare it we will use the $ symbol and then the name, it can be a _ or a letter.

PHP is not statically typed, meaning we don't have to tell you what kind of data that variable is. Furthermore, it is weakly typed because we can easily change the data type, ie PHP performs an internal data conversion.

When working with PHP, a very important thing is to debug our variables, for this we use the var_dump () function; passing by parameter the variable to review.

In PHP we have two types of strings, those with single quotes and those with double quotes. The difference between these two strings is that the one with single quotes literally receives what you write to it, while the one with double quotes tries to interpret any variable within it.

## Data types in PHP
PHP has many types of data, however, at this moment we are going to focus on the most important and used ones that are boolean, integer, float, string, array and NULL.

### Scalar types:
* boolean:

    Represents only a true or false value. 
http://php.net/manual/es/language.types.boolean.php
Valid values: true (true) false (false)
    ```php
        <?php
            $a = true; 
            $b = false; 
        ?>
    ```

* Integer:

    Represents a positive, negative, or 0 integer. 
http://php.net/manual/en/language.types.integer.php
    ```php
        <?php
            $a = -123;
            $b = 0;
            $c = 7763;
        ?>
    ```

* Float or double: 

    Represents a floating point number, there are precision problems with floating numbers due to the binary nature of computers. 
http://php.net/manual/es/language.types.float.php
    ```php
        <?php
            $a = 12.24; 
            $b = 1.5e3; 
            $c = 7E-10;
        ?>
    ```

* string:

    - Represents a character string.
    - There are 4 ways to represent a chain. The main 2 are using single quotes or double quotes.
        - Using single quotes where the text will be exactly as it is written.
        - Using double quotes allows you to use escape characters and also expand the names of the variables, that is, it substitutes the value of the variables inside the strings.
    - There are 2 additional ways called Heredoc and Nowdoc that are used to create multi-line strings.

    More data type:
https://www.php.net/manual/es/language.types.string.php#language.types.string.details
    ```php
        <?php
            $a = ”Hola”; 
            $b = ‘Mundo’; 
        ?>
    ```
---

### COMPOSITE TYPES
* Array 

    It represents a collection of values, although by default PHP used numerical indexes, the reality is that the structure is represented as a map that collects key-value pairs. The syntax to define an array will be from square brackets, although in previous versions of PHP it was necessary to use the array () function. The curly braces can be integers or strings, and the values can be of any PHP type, including an array type.
    http://php.net/manual/es/language.types.array.php

    ```php
        <?php
            $array = array(
                "curso1" => "php",
                "curso2" => "js",
            );

            // as of PHP 5.4
            $array = [
                "curso1" => "php",
                "curso2" => "js",
            ];

            // numerical indices
            $array = [
                "php",
                "js",
            ];
        ?>
    ```

* object:

    Represents an instance of a class. We will take a closer look at this topic in the Object Oriented Programming class.
    ```php
        <?php
            class Car
            {
                function move()
                {
                    echo "Going forward..."; 
                }
            }

            $myCar = new Car();
            $myCar->move();
        ?>
    ```

* Callable:
    
    It is a special data type that represents something that can be "called", for example a function or a method.
    ```php
        <? php
        // Variable that stores a callable
        $ firstOfArray = function (array $ array) {
            if (count ($ array) == 0) {return null; }
            return $ array [0];
        };

        // This is our arrangement
        $ values = [3, 2, 1];

        // We use our callable and the value 3 is printed
        echo $ firstOfArray ($ values);
    ?>

* iterable:

    As of PHP 7.1 iterable it is a pseudo data type that can be traversed.
    ```php
        <?php

            function foo(iterable $iterable) {
                foreach ($iterable as $valor) {
                    // ...
                } 
            }
        ?>
    ```
---

### Special types:
* resource:
    
    It is a special data type that represents an external resource, for example a file external to your application.
    ```php
        <?php
            $res = fopen("c:\\dir\\file.txt", "r");
        ?>
    ```

* NULL:

    It is a special value that is used to represent a valueless variable. 
    http://php.net/manual/es/language.types.null.php
    ```php
        <?php
            $a = null; 
        ?>
    ```

## Arrays

These variables that store more than one data are known as arrays and their syntax is indicated with [] (square brackets).

PHP uses indexes to locate the elements within the variable.

The array structure in PHP is known as a map, which means it has a key value composition. Also, an array can contain more arrays and each one will follow the same structure.

Something you should know is that in PHP you can store different types of data in the same arrangement.

## Conditionals and Cycles
The conditions allow us to make decisions in the code, if the condition is fulfilled then certain instructions will be executed if not, others will be executed. These are denoted by the **if else statement.**

The cycles work hand in hand with the conditions, in this case if the instruction is fulfilled a given instruction will be executed repeatedly.

We have added the jobs manually by accessing the array through their indexes, doing this could bring errors and we could not control it if we had many jobs. Now let's see a better way to do it with cycles.
* The first one we have is do while, which will involve the initialization of variables and conditions.
* The second we will see is for which is a more simplified way of using all the elements that make up the cycles.

## While vs Do While
### Cycles
As we mentioned in our previous class, cycles or loops are of utmost importance when developing software because they allow us to repeat a block of actions and consequently re-use our code better, at this point we have already talked about how the for cycle and the cycle work do-while.

Now we are going to review a couple of additional cycles in PHP which are also important to know. Take into account that most things can be done in different ways, so it is important that you choose the cycle that best suits your problem.

### while vs. do… while
In the previous class we talked about the do while cycle, here we will compare it with another cycle called while, let's recap the operation of do ... while:

When we create a do ... while loop, we tell PHP to execute a certain code block as long as the condition you have inside is still being evaluated as true.

This is the syntax of a do… while loop
```php
do {
   code…
} while (condition)
```

The while loop works the same way, but the main difference is that the evaluation will be done at the start of the loop:
```php
while (condition) {
   code...
}
```

The main difference is that the do while loop ensures that the internal code will run at least 1 time, whereas in the while loop if the condition is false from the start, the loop may never run

http://php.net/manual/es/control-structures.while.php
http://php.net/manual/es/control-structures.do.while.php

### foreach
The foreach cycle gives us a simple solution to iterate over the values ​​of an array, the syntax is as follows:
```php
foreach ($array as $ value) {
    statements that can use $value
}
```

In this syntax we find 4 parts:
* The foreach keyword simply indicates the start of our block
* Inside brackets the name of the array that we are going to be iterating is written, this array must be previously defined, in this example it is $ array
* The word "as" followed by a variable name that we will use to access the element of the array that we are accessing, this variable must not previously exist and can only be used within this block. In the example it is $ value.
* Between braces “{}” all the actions that we want to repeat, at the moment the cycle is executed the variable that we define to iterate (in the example $ value) already exists and can be used in this section, think that the value of This variable will be changing in each iteration.

Assuming that in the previous example $ array = ['one', 'two', 'three'], the cycle will repeat 3 times and in each iteration the variable $ value will contain the element of the corresponding array, that is, in the first iteration $ value will be equal to 'one', in the second $ value it will be equal to 'two' and in the third $ value it will be equal to 'three'.

There is an alternative syntax that allows us not only to know the value, it will also allow us to know the key, this way we will have access to both the key and the value of the array element:
```php
foreach ($array as $key => $value) {
    statements that can use $key and $value
}
```

http://php.net/manual/es/control-structures.foreach.php