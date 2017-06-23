<?php
/**
 * Created by IntelliJ IDEA.
 * User: hugo
 * Date: 08/06/17
 * Time: 14:06
 */

for ($i = 0; $i < 100; $i++) {
    $countryPrefix = "+" . rand(1, 9) . "" . rand(1, 9) . " ";
    $regionPrefix = "(" . rand(1, 9) . "" . rand(1, 9) . ") ";
    $uniqueNumber = "9" . rand(1, 9) . "" . rand(1, 9) . rand(1, 9) . "" . rand(1, 9)
        . rand(1, 9) . "" . rand(1, 9) . rand(1, 9) . "" . rand(1, 9);

    $string = $countryPrefix . $regionPrefix . $uniqueNumber;

    echo "<p>" . $string . "</p>";
}