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