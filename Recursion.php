<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 15.11.2018
 * Time: 19:15
 */

//https://codingbat.com/java/Recursion-1

interface Recursion{

    /**
     * @param int $number
     * @return int
     */
    function factorial(int $number) : int;

    /**
     * @param int $bunnies
     * @return int
     */
    function bunnyEars2(int $bunnies);

    /**
     * @param int $n
     * @return int
     */
    function count7(int $n) : int;
}


/*Given a string, compute recursively (no loops) the number of lowercase 'x' chars in the string.
public int countX(String str) {

}*/


/*Given a string, compute recursively (no loops) a new string where all appearances of "pi" have been replaced by "3.14".
public String changePi(String str) {

}*/


/*Given an array of ints, compute recursively the number of times that the value 11 appears in the array.
We'll use the convention of considering only the part of the array that begins at the given index.
 In this way, a recursive call can pass index+1 to move down the array. The initial call will pass in index as 0.
public int array11(int[] nums, int index) {

}*/


/*Given a string, compute recursively a new string where identical chars that are adjacent in the original string
are separated from each other by a "*".
    public String pairStar(String str) {

}*/


/*Count recursively the total number of "abc" and "aba" substrings that appear in the given string.
    public int countAbc(String str) {

}*/


/*Given a string, compute recursively the number of times lowercase "hi" appears in the string, however do not count "hi"
that have an 'x' immedately before them.
    public int countHi2(String str) {

}*/


/*Given a string and a non-empty substring sub, compute recursively the number of times that sub appears in the string,
without the sub strings overlapping.
    public int strCount(String str, String sub) {

}*/


/*We have a number of bunnies and each bunny has two big floppy ears. We want to compute the total number of ears across
all the bunnies recursively (without loops or multiplication).
public int bunnyEars(int bunnies) {

}*/


/*We have triangle made of blocks. The topmost row has 1 block, the next row down has 2 blocks, the next row has 3 blocks,
and so on. Compute recursively (no loops or multiplication) the total number of blocks in such a triangle with the given
number of rows.
    public int triangle(int rows) {

}*/

