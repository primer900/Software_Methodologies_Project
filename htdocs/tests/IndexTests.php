<?php

/**
 * Created by PhpStorm.
 * User: Jakob
 * Date: 10/29/2015
 * Time: 5:48 PM
 */

include 'C:/xampp/htdocs/Software_Methodologies_Project/htdocs/templates/parse_csv.php';

class IndexTests extends PHPUnit_Framework_TestCase
{
    /**
     */

    public function test_csv_to_array_false() {
        $filename = ' ';
        $result = csv_to_array($filename);
        $this->assertFalse($result);
    }



}
