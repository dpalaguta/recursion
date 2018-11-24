<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 15.11.2018
 * Time: 19:52
 */

include_once ('Recursion.php');
class RecursionTask implements Recursion
{


    /**
     * @
     * @param int $number
     * @return int
     */
    function factorial(int $number = 1) : int
    {


        if ($number < 0) return 0;
        if ($number == 0) return 1;
        return $number * $this->factorial($number-1);
    }

    /**
     * @param int $bunnies
     * @return int number_of_ears_in_line
     */

    /*We have bunnies standing in a line, numbered 1, 2, ... The odd bunnies (1, 3, ..) have the normal 2 ears.
The even bunnies (2, 4, ..) we'll say have 3 ears, because they each have a raised foot.
Recursively return the number of "ears" in the bunny line 1, 2, ... n (without loops or multiplication).
*/
    /**
     * @param int $bunnies
     * @return int $number_of_ears_in_line
     */
    function bunnyEars2(int $bunnies = 1)
    {


        if ($bunnies <= 0) return 0;
        if ($bunnies % 2 == 0) $number_of_ears_in_line = 3; else $number_of_ears_in_line = 2;
        return $number_of_ears_in_line + $this->bunnyEars2($bunnies-1);
    }

    /*Given a non-negative int n, return the count of the occurrences of 7 as a digit,
 so for example 717 yields 2. (no loops). Note that mod (%) by 10 yields the rightmost digit (126 % 10 is 6),
 while divide (/) by 10 removes the rightmost digit (126 / 10 is 12).*/

    /**
     * @param int $n
     * @return int
     */
    function count7(int $n): int
    {

        if ($n <= 0) return 0;
        $my_count = 0;
        if ($n % 10 == 7) $my_count++;


        return $my_count + $this->count7((int) $n/ 10);


    }

}


