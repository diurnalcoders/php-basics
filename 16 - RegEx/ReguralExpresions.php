<?php

/* 
What is a Regular Expression?
A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.
A regular expression can be a single character, or a more complicated pattern.
Regular expressions can be used to perform all types of text search and text replace operations.
*/

/*
Syntax
In PHP, regular expressions are strings composed of delimiters, a pattern and optional modifiers.
In the example above, / is the delimiter, hello is the pattern that is being searched for, and i is a modifier that makes the search case-insensitive.
The delimiter can be any character that is not a letter, number, backslash or space. The most common delimiter is the forward slash (/), 
but when your pattern contains forward slashes it is convenient to choose other delimiters such as # or ~.
*/
$exp = "/hello/i";