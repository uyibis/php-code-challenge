<?php 
/**
 * Substr is used to extract a portion of a string
 * @param string str - the source string
 * @param int start - the start position, it can be negative starting from the right or end of the string
 * @param int|null lenght - the length of the string to be extracted
 * @return string|false the resulting substring.
 */

 $str = "Hello, World!";

 echo "<h1>$str</h1> \n\n Example 1: Extract a substring starting from position 7\n";
echo substr($str,7);
 echo "\n\nExample 2: Extract a substring starting from position 0 with a length of 5\n";
 echo substr($str,0,5);
 echo "\n\nExample 3: Extract the last 6 characters\n";
 echo substr($str,-6);
 echo "\n\nExample 4: Extract a substring starting from position 7 with a length of 3\n";
 echo substr($str, 7,3);
 echo "\n\nExample 5: Extract a substring starting from position -5 with a length of 2\n";
 echo substr($str,-5,2);

 